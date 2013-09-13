<?php
App::uses('AppController', 'Controller');
/**
 * Tracks Controller
 *
 * @property Track $Track
 * @property PaginatorComponent $Paginator
 */
class TracksController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this -> Auth -> allow('add', 'edit', 'index', 'view');
    }

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Kaltura');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Track->recursive = 0;
		$this->set('tracks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Track->exists($id)) {
			throw new NotFoundException(__('Invalid track'));
		}
		$options = array('conditions' => array('Track.' . $this->Track->primaryKey => $id));
		$track = $this->Track->find('first', $options);
		
		if($entryId = $track['Track']['entryId']):
			$kClient = $this->Kaltura->getKalturaClient();
			$kUrlEmbed = $this->Kaltura->getUrlEmbed($entryId);
			$thumbs = $this->Kaltura->getThumbs($entryId);
		else:
			$kUrlEmbed = '';
		endif;
		
		$this->set(compact('track', 'kClient', 'kUrlEmbed', 'thumbs'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$track = $this->request->data;
			$track['titulo'] = $track['Track']['title'];
			$this->Track->create();
			if ($this->Track->save($track)) {
				$this->Session->setFlash(__('The track has been saved'));
				// return $this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The track could not be saved. Please, try again.'));
			}
		}
		
		$categories = $this->Track->Category->find('list');
		$tags = $this->Track->Tag->find('list');
		
		$kClient = $this->Kaltura->getKalturaClient();
			
		# Filtro
		$filter = new KalturaMediaEntryFilter();
		$filter->mediaTypeEqual = 1; //only sync videos
		
		# Paginacion
		$pager = new KalturaFilterPager();
		$pager->pageSize = 1000;
		$pager->pageIndex = 1;
		
		# Listar
		$kalturaList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura
		$this->Track->recursive = -1;
		$addedList = $this->Track->find('all', array('fields'=>'entryId')); # videos ya linkeados
		
		$this->set(compact('addedList', 'categories', 'kalturaList', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Track->exists($id)) {
			throw new NotFoundException(__('Invalid track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$track = $this->request->data;
			$track['titulo'] = $track['Track']['title'];
			if ($this->Track->save($track)) {
				$this->Session->setFlash(__('The track has been saved'));
				return $this->redirect(Router::url('/listado'));
			} else {
				$this->Session->setFlash(__('The track could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Track.' . $this->Track->primaryKey => $id));
			$this->request->data = $this->Track->find('first', $options);
		}
		$categories = $this->Track->Category->find('list');
		$tags = $this->Track->Tag->find('list');
		// $this->set(compact('categories', 'tags'));
		
		$kClient = $this->Kaltura->getKalturaClient();
			
		# Filtro
		$filter = new KalturaMediaEntryFilter();
		$filter->mediaTypeEqual = 1; //only sync videos
		
		# Paginacion
		$pager = new KalturaFilterPager();
		$pager->pageSize = 1000;
		$pager->pageIndex = 1;
		
		# Listar
		$kalturaList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura
		$this->Track->recursive = -1;
		$addedList = $this->Track->find('all', array('fields'=>'entryId')); # videos ya linkeados
		
		$this->set(compact('addedList', 'categories', 'kalturaList', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Track->id = $id;
		if (!$this->Track->exists()) {
			throw new NotFoundException(__('Invalid track'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Track->delete()) {
			$this->Session->setFlash(__('Track deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Track was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

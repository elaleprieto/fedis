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
        $this -> Auth -> allow('add', 'delete', 'edit', 'get', 'index', 'search', 'view', 'getReel', 'create');
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
			$kClient = null;
			$kUrlEmbed = null;
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
			$track['Track']['titulo'] = $track['Track']['title'];
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
		
		###########
		# Videos
		###########
		# Filtro
		$filter = new KalturaMediaEntryFilter();
		$filter->mediaTypeEqual = 1; //only sync videos
		# Paginacion
		$pager = new KalturaFilterPager();
		$pager->pageSize = 1000;
		$pager->pageIndex = 1;
		# Listar
		$kalturaList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura
		
		###########
		# Imagenes
		###########
		# Filtro
		$filter = new KalturaMediaEntryFilter();
		$filter->mediaTypeEqual = 2; //only sync imagenes
		# Paginacion
		$pager = new KalturaFilterPager();
		$pager->pageSize = 1000;
		$pager->pageIndex = 1;
		# Listar
		$kalturaImagenList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura

		
		$this->Track->recursive = -1;
		$addedList = $this->Track->find('all', array('fields'=>'entryId')); # videos ya linkeados
		
		$this->set(compact('addedList', 'categories', 'kalturaList', 'kalturaImagenList', 'tags'));
	}

/**
 * add method
 *
 * @return void
 */
	public function create() {
		// if ($this->request->is('post')) {
			// $track = $this->request->data;
			// $track['Track']['titulo'] = $track['Track']['title'];
			// $this->Track->create();
			// if ($this->Track->save($track)) {
				// $this->Session->setFlash(__('The track has been saved'));
				// // return $this->redirect(array('action' => 'add'));
			// } else {
				// $this->Session->setFlash(__('The track could not be saved. Please, try again.'));
			// }
		// }
// 		

		$this->set('flashVars', $this->Kaltura->getUploadFlashVars());

		// $categories = $this->Track->Category->find('list');
		// $tags = $this->Track->Tag->find('list');
// 		
		// $kClient = $this->Kaltura->getKalturaClient();
// 		
		// ###########
		// # Videos
		// ###########
		// # Filtro
		// $filter = new KalturaMediaEntryFilter();
		// $filter->mediaTypeEqual = 1; //only sync videos
		// # Paginacion
		// $pager = new KalturaFilterPager();
		// $pager->pageSize = 1000;
		// $pager->pageIndex = 1;
		// # Listar
		// $kalturaList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura
// 		
		// ###########
		// # Imagenes
		// ###########
		// # Filtro
		// $filter = new KalturaMediaEntryFilter();
		// $filter->mediaTypeEqual = 2; //only sync imagenes
		// # Paginacion
		// $pager = new KalturaFilterPager();
		// $pager->pageSize = 1000;
		// $pager->pageIndex = 1;
		// # Listar
		// $kalturaImagenList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura
// 
// 		
		// $this->Track->recursive = -1;
		// $addedList = $this->Track->find('all', array('fields'=>'entryId')); # videos ya linkeados
// 		
		// $this->set(compact('addedList', 'categories', 'kalturaList', 'kalturaImagenList', 'tags'));
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
			$track['Track']['titulo'] = $track['Track']['title'];
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
			
		###########
		# Videos
		###########
		# Filtro
		$filter = new KalturaMediaEntryFilter();
		$filter->mediaTypeEqual = 1; //only sync videos
		# Paginacion
		$pager = new KalturaFilterPager();
		$pager->pageSize = 1000;
		$pager->pageIndex = 1;
		# Listar
		$kalturaList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura
		
		###########
		# Imagenes
		###########
		# Filtro
		$filter = new KalturaMediaEntryFilter();
		$filter->mediaTypeEqual = 2; //only sync imagenes
		# Paginacion
		$pager = new KalturaFilterPager();
		$pager->pageSize = 1000;
		$pager->pageIndex = 1;
		# Listar
		$kalturaImagenList = $kClient->media->listAction($filter, $pager); # videos en el servidor de Kaltura
		
		
		$this->Track->recursive = -1;
		$addedList = $this->Track->find('all', array('fields'=>'entryId')); # videos ya linkeados
		
		$this->set(compact('addedList', 'categories', 'kalturaList', 'kalturaImagenList', 'tags'));
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

/**
 * get method: usado por Inicio para desplegar videos
 *
 * @param string $cantidad, $categoria
 * @param array excluded: ids de los excluidos
 * @return void
 */
	public function get($cantidad = null, $categoria = null, $excluded = null) {
		if (!$cantidad || !$categoria) {
			throw new NotFoundException(__('Invalid track'));
		}
		$categoria_id = $this->Track->Category->field('id', array('name' => $categoria));
		
		if (!$categoria_id) {
			throw new NotFoundException(__('Invalid track'));
		}
		
		$options['joins'] = array(
		    array('table' => 'categories_tracks',
		        'alias' => 'CategoriesTrack',
		        'type' => 'inner',
		        'conditions' => array(
		            'Track.id = CategoriesTrack.track_id'
		        )
		    ),
		    array('table' => 'categories',
		        'alias' => 'Category',
		        'type' => 'inner',
		        'conditions' => array(
		            'CategoriesTrack.category_id = Category.id'
		        )
		    )
		);
		
		$options['conditions'] = array('Category.id' => $categoria_id
			, 'Track.habilitado' => true
		);
		
		# Se excluyen algunos videos para no repetirlos en el listado
		if($excluded):
			$excluded = explode('-', $excluded);
			foreach($excluded as $key => $val)
				if(empty($val))
					unset($excluded[$key]);
			$options['conditions'] = array_merge($options['conditions']
				, array('NOT' => array('Track.id' => $excluded))
			);
		endif;
		
		$options['limit'] = $cantidad;
		$options['order'] = 'RAND()';
		
		return $this->Track->find('all', $options);
	}
	
/**
 * search method: accedido desde la navbar
 *
 * @param string $cantidad, $categoria
 * @return void
 */
	public function search($query = null) {
		if($query || $query = $this->request->data['query']) {
			$options['joins'] = array(array('table' => 'tags_tracks'
					, 'alias' => 'TagsTrack'
					, 'type' => 'left'
					, 'conditions' => array('Track.id = TagsTrack.track_id')
			    )
			    , array('table' => 'tags'
			    	, 'alias' => 'Tag'
			    	, 'type' => 'left'
			    	, 'conditions' => array('TagsTrack.tag_id = Tag.id')
			    )
				, array('table' => 'categories_tracks'
					, 'alias' => 'CategoriesTrack'
					, 'type' => 'inner'
					, 'conditions' => array('Track.id = CategoriesTrack.track_id')
			    )
			    , array('table' => 'categories'
			    	, 'alias' => 'Category'
			    	, 'type' => 'inner'
			    	, 'conditions' => array('CategoriesTrack.category_id = Category.id')
			    )
			);
			
			$this->request->data['query'] = $query;
			$query = strtolower($query);
			// $query = explode(' ', $query); # Se saca porque quieren buscar frases completas
			
			$orConditions = array();
			
			# Se agregan estas restricciones porque quieren buscar solo en el titulo y en etiquetas
			array_push($orConditions, array('lower(Tag.title) LIKE' => "%$query%"));
			array_push($orConditions, array('lower(Track.title) LIKE' => "%$query%"));
			
			# Se eliminan estas restricciones porque quieren buscar solo en el titulo y en etiquetas
			// foreach ($query as $queryString):
				// array_push($orConditions, array('lower(Tag.title) LIKE' => "%$queryString%"));
				// array_push($orConditions, array('lower(Track.title) LIKE' => "%$queryString%"));
				// array_push($orConditions, array('lower(Category.name) LIKE' => "%$queryString%"));
				// array_push($orConditions, array('lower(Track.presentacion) LIKE' => "%$queryString%"));
			// endforeach;
			
			$options['conditions'] = array('OR' => $orConditions);
			$options['group'] = array('Track.id');
			
			$this->set('tracks', $this->Track->find('all', $options));
			
		}
	}

	public function getReel() {
		// $entryId = '0_8b7yv0du'; # Reel 1
		$entryId = '0_r5ion5nd'; # Reel 2
		return $kUrlEmbed = $this->Kaltura->getUrlEmbed($entryId, null, '11170252');
	}
	
}

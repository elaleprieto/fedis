<?php
echo $this->Html->css('tracks/add');
echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js', 'angular/controllers'));
?>
<div ng-app="App" ng-controller="TracksController">
	<div class="row datos">
		<?php echo $this->Form->create('Track'); ?>
<!-- 
		<div class="col-sm-4">
			<div class="row">
				<input name="data[Track][catalogoId]" maxlength="255" type="text" id="TrackCatalogoId" placeholder="Catalogo ID">
			</div>
		</div> -->
		
		<div class="row">
			<?php
			echo $this->Form->input('catalogoId', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Catalogo ID'));
			echo $this->Form->input('title', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Titulo'));
			echo $this->Form->input('titulo', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Titulo'));
			?>
		</div>
		<div class="row">
			<?php
			echo $this->Form->input('formato', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Formato'));
			echo $this->Form->input('presentacion', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Presentacion'));
			echo $this->Form->input('capitulos', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Capitulos'));
			?>
		</div>
		<div class="row">
			<?php
			echo $this->Form->input('duracion', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Duracion'));
			echo $this->Form->input('elenco', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Elenco'));
			echo $this->Form->input('conduccion', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Conduccion'));
			?>
		</div>
		<div class="row">
			<?php
			echo $this->Form->input('entrevistados', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Entrevistados'));
			echo $this->Form->input('autor', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Autor'));
			echo $this->Form->input('guion', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Guion'));
			?>
		</div>
		<div class="row">
			<?php
			echo $this->Form->input('director', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Director'));
			echo $this->Form->input('productor', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Productor'));
			echo $this->Form->input('produccion_ejecutiva', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Produccion Ejecutiva'));
			?>
		</div>
		<div class="row">
		<?php
		echo $this->Form->input('produccion_general', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Produccion General'));
		echo $this->Form->input('mail', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Mail'));
		echo $this->Form->input('distribuidor', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Distribuidor'));
		?>
		</div>
		<div class="row">
		<?php
		echo $this->Form->input('contacto', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Contacto'));
		echo $this->Form->input('mail_distribuidora', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Mail Distribuidora'));
		echo $this->Form->input('website', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Website'));
		?>
		</div>
		<div class="row">
		<?php
		echo $this->Form->input('telefono', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Telefono'));
		echo $this->Form->input('sinopsis_es', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Sinopsis (Espanol)'));
		echo $this->Form->input('sinopsis_en', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Sinopsis (Ingles)'));
		?>
		</div>
		<div class="row">
		<?php
		echo $this->Form->input('sinopsis_po', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Sinopsis (Portugues)'));
		echo $this->Form->input('Category', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Categorias'));
		echo $this->Form->input('Tag', array('div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Etiquetas'));
		?>
		</div>
		<div class="row">
		<?php
		echo $this->Form->input('entryId', array('ng-model' => 'entryId', 'div' => 'col-sm-4 col-sm-offset-4', 'label' => false, 'placeholder' => 'Video ID'));
		?>
		</div>
		<div class="row">
			<button class="btn col-sm-10 col-sm-offset-1" type="button"><?php echo __('Guardar'); ?></button>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
	<div class="row">
		<h2 class="text-center">Videos cargados</h2>
	</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>Video ID</th>
					<th>Nombre</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody ng-init='medias=<?php echo json_encode($listado->objects); ?>'>
				<tr ng-repeat="media in medias">
					<td ng-bind="media.id"></td>
					<td ng-bind="media.name"></td>
					<td>
					<button ng-click="select(media)">
						Seleccionar
					</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
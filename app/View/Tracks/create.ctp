<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

<?php
echo $this->Html->css('tracks/add');
echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js', 'angular/controllers'));
?>
<div id="inicio" ng-app="App" ng-controller="TracksController">
	<div class="row">
		<div class="col-sm-12">
			<span class="alert alert-{{mensaje.tag}} pull-left" ng-show='mensaje.text' ng-bind="mensaje.text" ng-class=""></span>
			<a href="/listado" class="btn btn-primary pull-right">
				Ver listado
			</a>
		</div>
	</div>
	
	<h2><?php echo __('Cargador'); ?></h2>
	<hr />
	<div class="row datos">
		<div class="col-sm-12">
			<?php echo $this->Form->create('Track', array('id' => 'formulario', 'name' => 'formulario', 'ng-submit'=>'submit($event)')); ?>
	<!-- 
			<div class="col-sm-4">
				<div class="row">
					<input name="data[Track][catalogoId]" maxlength="255" type="text" id="TrackCatalogoId" placeholder="Catalogo ID">
				</div>
			</div> -->
			
			<div class="row">
				<?php
				echo $this->Form->input('catalogoId', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Catalogo ID'));
				echo $this->Form->input('title', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Titulo', 'required'));
				// echo $this->Form->input('titulo', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Titulo'));
				echo $this->Form->input('formato', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Formato'));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('presentacion', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Presentacion'));
				echo $this->Form->input('capitulos', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Capitulos'));
				echo $this->Form->input('duracion', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Duracion'));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('elenco', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Elenco'));
				echo $this->Form->input('conduccion', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Conduccion'));
				echo $this->Form->input('entrevistados', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Entrevistados'));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('autor', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Autor'));
				echo $this->Form->input('guion', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Guion'));
				echo $this->Form->input('director', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Director'));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('productor', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Productor'));
				echo $this->Form->input('produccion_ejecutiva', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Produccion Ejecutiva'));
				echo $this->Form->input('produccion_general', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Produccion General'));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('mail', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Mail'));
				echo $this->Form->input('distribuidor', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Distribuidor'));
				echo $this->Form->input('contacto', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Contacto'));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('mail_distribuidora', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Mail Distribuidora'));
				echo $this->Form->input('website', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Website'));
				echo $this->Form->input('telefono', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Telefono'));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('sinopsis_es', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Sinopsis (Espanol)'));
				echo $this->Form->input('sinopsis_en', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Sinopsis (Ingles)'));
				echo $this->Form->input('sinopsis_po', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Sinopsis (Portugues)'));
				?> 
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('Category', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Categorias', 'size' => '6'));
				echo $this->Form->input('Tag', array('class' => 'col-sm-12', 'div' => 'col-sm-4', 'label' => false, 'placeholder' => 'Etiquetas', 'size' => '6'));
				?>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<?php
								echo $this->Form->input('entryId', array('class' => 'col-sm-12', 'ng-model' => 'entryId', 'div' => 'col-sm-12', 'label' => false, 'placeholder' => 'Video ID'));
								?>
							</div>
						</div>
						<div class="col-sm-6">
							<a href="#videos" class="btn btn-primary pull-right">Videos &darr;</a>
						</div>
						<div>&nbsp;</div>
						<div class="col-sm-6">
							<div class="row">
								<?php
								echo $this->Form->input('portadaId', array('class' => 'col-sm-12', 'ng-model' => 'portadaId', 'div' => 'col-sm-12', 'label' => false, 'placeholder' => 'Portada ID'));
								?>
							</div>
						</div>
						<div class="col-sm-6">
							<a href="#imagenes" class="btn btn-primary pull-right">Imágenes &darr;</a>
						</div>
					</div>
					<div class="row">
						<?php
						echo $this->Form->input('habilitado', array('div' => 'col-sm-12'));
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<button class="btn col-sm-10 col-sm-offset-1" ng-hide="mensaje.text" type="submit">
					<?php echo __('Guardar'); ?>
				</button>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>


<div id="kcw"></div>
<script type="text/javascript">
	var params = {
	        allowScriptAccess: "always",
	        allowNetworking: "all",
	        wmode: "opaque"
	};
	// php to js
	var flashVars = <?php echo json_encode($flashVars); ?>;

	<!-- embed flash object -->
	// swfobject.embedSWF("http://www.kaltura.com/kcw/ui_conf_id/1000740", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	// swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/11170222", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	// swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/11170253", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/11170265", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	// swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/2011401", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
</script>
 
<!--implement callback scripts-->
<script type="text/javascript">
	function onContributionWizardAfterAddEntry(entries) {
        // alert(entries.length + " media file/s was/were succsesfully uploaded");
        for(var i = 0; i < entries.length; i++) {
            // alert("entries["+i+"]:EntryID = " + entries[i].entryId);
            $('#TrackEntryId').val(entries[i].entryId);
            $('#kcw').hide();
        }
	}
</script>
<script type="text/javascript">
	function onContributionWizardClose() {
		$('#kcw').hide();
		// alert("Thank you for using Kaltura ontribution Wizard");
	}
</script>
































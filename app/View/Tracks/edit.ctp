<div class="tracks form">
<?php echo $this->Form->create('Track'); ?>
	<fieldset>
		<legend><?php echo __('Edit Track'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('catalogoId');
		echo $this->Form->input('title');
		echo $this->Form->input('titulo');
		echo $this->Form->input('formato');
		echo $this->Form->input('presentacion');
		echo $this->Form->input('capitulos');
		echo $this->Form->input('duracion');
		echo $this->Form->input('elenco');
		echo $this->Form->input('conduccion');
		echo $this->Form->input('entrevistados');
		echo $this->Form->input('autor');
		echo $this->Form->input('guion');
		echo $this->Form->input('director');
		echo $this->Form->input('productor');
		echo $this->Form->input('produccion_ejecutiva');
		echo $this->Form->input('produccion_general');
		echo $this->Form->input('mail');
		echo $this->Form->input('distribuidor');
		echo $this->Form->input('contacto');
		echo $this->Form->input('mail_distribuidora');
		echo $this->Form->input('website');
		echo $this->Form->input('telefono');
		echo $this->Form->input('sinopsis_es');
		echo $this->Form->input('sinopsis_en');
		echo $this->Form->input('sinopsis_po');
		echo $this->Form->input('entryId');
		echo $this->Form->input('Category');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Track.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Track.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Awards'), array('controller' => 'awards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Award'), array('controller' => 'awards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>

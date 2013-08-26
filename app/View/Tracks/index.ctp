<div class="tracks index">
	<h2><?php echo __('Tracks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('catalogoId'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('formato'); ?></th>
			<th><?php echo $this->Paginator->sort('presentacion'); ?></th>
			<th><?php echo $this->Paginator->sort('capitulos'); ?></th>
			<th><?php echo $this->Paginator->sort('duracion'); ?></th>
			<th><?php echo $this->Paginator->sort('elenco'); ?></th>
			<th><?php echo $this->Paginator->sort('conduccion'); ?></th>
			<th><?php echo $this->Paginator->sort('entrevistados'); ?></th>
			<th><?php echo $this->Paginator->sort('autor'); ?></th>
			<th><?php echo $this->Paginator->sort('guion'); ?></th>
			<th><?php echo $this->Paginator->sort('director'); ?></th>
			<th><?php echo $this->Paginator->sort('productor'); ?></th>
			<th><?php echo $this->Paginator->sort('produccion_ejecutiva'); ?></th>
			<th><?php echo $this->Paginator->sort('produccion_general'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th><?php echo $this->Paginator->sort('distribuidor'); ?></th>
			<th><?php echo $this->Paginator->sort('contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_distribuidora'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('sinopsis_es'); ?></th>
			<th><?php echo $this->Paginator->sort('sinopsis_en'); ?></th>
			<th><?php echo $this->Paginator->sort('sinopsis_po'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('entryId'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tracks as $track): ?>
	<tr>
		<td><?php echo h($track['Track']['id']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['catalogoId']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['title']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['formato']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['presentacion']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['capitulos']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['duracion']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['elenco']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['conduccion']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['entrevistados']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['autor']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['guion']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['director']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['productor']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['produccion_ejecutiva']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['produccion_general']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['mail']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['distribuidor']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['contacto']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['mail_distribuidora']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['website']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['sinopsis_es']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['sinopsis_en']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['sinopsis_po']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['created']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['modified']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['entryId']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $track['Track']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $track['Track']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $track['Track']['id']), null, __('Are you sure you want to delete # %s?', $track['Track']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Track'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Awards'), array('controller' => 'awards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Award'), array('controller' => 'awards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>

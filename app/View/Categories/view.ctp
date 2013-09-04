<div class="row">
	<div class="col-sm-10 col-sm-offset-1 text-center">
		<h1 class="category">
			<span class="label label-default">
				<?php echo $category['Category']['title'] ?>
			</span>
		</h1>
	</div>
</div>

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<?php foreach ($category['Track'] as $track): ?>
			<div class="col-sm-6">
				<div class="col-sm-6">
					<img class="img-responsive" src="http://placehold.it/350x170" />
				</div>
				<div class="col-sm-6">
					<p><?php echo $track['title'] ?></p>
					<p><?php echo $category['Category']['title'].' - '.$track['formato'] ?></p>
					<p><?php echo $track['duracion'] ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<!-- <div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($category['Category']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($category['Category']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($category['Category']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tracks'); ?></h3>
	<?php if (!empty($category['Track'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('CatalogoId'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Formato'); ?></th>
		<th><?php echo __('Presentacion'); ?></th>
		<th><?php echo __('Capitulos'); ?></th>
		<th><?php echo __('Duracion'); ?></th>
		<th><?php echo __('Elenco'); ?></th>
		<th><?php echo __('Conduccion'); ?></th>
		<th><?php echo __('Entrevistados'); ?></th>
		<th><?php echo __('Autor'); ?></th>
		<th><?php echo __('Guion'); ?></th>
		<th><?php echo __('Director'); ?></th>
		<th><?php echo __('Productor'); ?></th>
		<th><?php echo __('Produccion Ejecutiva'); ?></th>
		<th><?php echo __('Produccion General'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Distribuidor'); ?></th>
		<th><?php echo __('Contacto'); ?></th>
		<th><?php echo __('Mail Distribuidora'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Sinopsis Es'); ?></th>
		<th><?php echo __('Sinopsis En'); ?></th>
		<th><?php echo __('Sinopsis Po'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('EntryId'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['Track'] as $track): ?>
		<tr>
			<td><?php echo $track['id']; ?></td>
			<td><?php echo $track['catalogoId']; ?></td>
			<td><?php echo $track['title']; ?></td>
			<td><?php echo $track['titulo']; ?></td>
			<td><?php echo $track['formato']; ?></td>
			<td><?php echo $track['presentacion']; ?></td>
			<td><?php echo $track['capitulos']; ?></td>
			<td><?php echo $track['duracion']; ?></td>
			<td><?php echo $track['elenco']; ?></td>
			<td><?php echo $track['conduccion']; ?></td>
			<td><?php echo $track['entrevistados']; ?></td>
			<td><?php echo $track['autor']; ?></td>
			<td><?php echo $track['guion']; ?></td>
			<td><?php echo $track['director']; ?></td>
			<td><?php echo $track['productor']; ?></td>
			<td><?php echo $track['produccion_ejecutiva']; ?></td>
			<td><?php echo $track['produccion_general']; ?></td>
			<td><?php echo $track['mail']; ?></td>
			<td><?php echo $track['distribuidor']; ?></td>
			<td><?php echo $track['contacto']; ?></td>
			<td><?php echo $track['mail_distribuidora']; ?></td>
			<td><?php echo $track['website']; ?></td>
			<td><?php echo $track['telefono']; ?></td>
			<td><?php echo $track['sinopsis_es']; ?></td>
			<td><?php echo $track['sinopsis_en']; ?></td>
			<td><?php echo $track['sinopsis_po']; ?></td>
			<td><?php echo $track['created']; ?></td>
			<td><?php echo $track['modified']; ?></td>
			<td><?php echo $track['entryId']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tracks', 'action' => 'view', $track['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tracks', 'action' => 'edit', $track['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tracks', 'action' => 'delete', $track['id']), null, __('Are you sure you want to delete # %s?', $track['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div> -->
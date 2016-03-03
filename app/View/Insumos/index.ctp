<div class="insumos index">
	<h2><?php echo __('Insumos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('image_dir'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($insumos as $insumo): ?>
	<tr>
		<td><?php echo h($insumo['Insumo']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($insumo['Insumo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($insumo['Insumo']['precio']); ?>&nbsp;</td>
		<td><?php echo h($insumo['Insumo']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($insumo['Insumo']['image']); ?>&nbsp;</td>
		<td><?php echo h($insumo['Insumo']['image_dir']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $insumo['Insumo']['codigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $insumo['Insumo']['codigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $insumo['Insumo']['codigo']), array('confirm' => __('Are you sure you want to delete # %s?', $insumo['Insumo']['codigo']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Insumo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>

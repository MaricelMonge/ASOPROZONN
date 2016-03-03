<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido1'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido2'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido1']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido2']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['identificacion'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['identificacion'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['identificacion']), array('confirm' => __('Are you sure you want to delete # %s?', $cliente['Cliente']['identificacion']))); ?>
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
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
	</ul>
</div>

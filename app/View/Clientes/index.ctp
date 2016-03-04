<div class="page-header">
<h2><?php echo __('Clientes'); ?></h2>
</div>
<div class="col-md-20">
<table class="table table-striped">
<thead>
<tr>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Primer Apellido'); ?></th>
		<th><?php echo $this->Paginator->sort('Segundo Apellido'); ?></th>
		<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
		<th class="actions"><?php echo __('Actividad'); ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($clientes as $cliente): ?>
<tr>
	<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
	<td><?php echo h($cliente['Cliente']['apellido1']); ?>&nbsp;</td>
	<td><?php echo h($cliente['Cliente']['apellido2']); ?>&nbsp;</td>
	<td><?php echo h($cliente['Cliente']['telefono']); ?>&nbsp;</td>
	<td class="actions">
		<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $cliente['Cliente']['identificacion']),  array('class'=>'btn btn-xs btn-success')); ?>
		<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['identificacion']),  array('class'=>'btn btn-xs btn-success')); ?>
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $cliente['Cliente']['identificacion']), array('class'=>'btn btn-xs btn-danger', 'confirm' => __('Esta seguro de eliminar a # %s?', $cliente['Cliente']['identificacion']))); ?>
	</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<p align=center>
<?php
echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}')
));
?>	</p>
<div class="paging" align=center>
<?php
	echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
?>
</div>
</div>
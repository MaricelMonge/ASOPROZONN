
<div class="page-header">
<h2><?php echo __('Socios'); ?></h2>
</div>

<div class="col-md-12">
   

<table class="table table-striped">
	
<thead>
<tr>
	
	<th>Nombre</th>
	<th>Primer Apellido</th>
	<th>Segundo Apellido</th>
	<th>Teléfono</th>
	<th>Imagen</th>
	<th class="actions"><?php echo __('Actividad'); ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($socios as $socio): ?>
<tr>
	<td><?php echo h($socio['Socio']['nombre']); ?>&nbsp;</td>
	<td><?php echo h($socio['Socio']['apellido1']); ?>&nbsp;</td>
	<td><?php echo h($socio['Socio']['apellido2']); ?>&nbsp;</td>
	<td><?php echo h($socio['Socio']['telefono']); ?>&nbsp;</td>
	<td><?php echo h($socio['Socio']['image']); ?>&nbsp;</td>
	<td class="actions">
		<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $socio['Socio']['numeroexp']), array('class'=>'btn btn-xs btn-success')); ?>
		<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $socio['Socio']['numeroexp']), array('class'=>'btn btn-xs btn-success')); ?>
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Esta seguro de eliminar a # %s?', $socio['Socio']['numeroexp']),'class'=>'btn btn-xs btn-success')); ?>
	</td>
</tr>

<?php endforeach; ?>
</tbody>
</table>
</div>
<p>
<?php
echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}')
));
?>	</p>
<div class="paging">
<?php
	echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
?>
</div>

<div class="actions">
<h3><?php echo __('Actions'); ?></h3>
<ul>
	<li><?php echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
</ul>
</div>

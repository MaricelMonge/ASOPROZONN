<div class="proveedores index">
	<h2><?php echo __('Proveedores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<td>Nombre</td>
			<td>Primer Apellido</td>
			<td>Segundo Apellido</td>
			<td>Telefono</td>
			<td>Actividad</td>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proveedores as $proveedore): ?>
	<tr>
		<td><?php echo h($proveedore['Proveedore']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['apellido1']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['apellido2']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['telefono']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $proveedore['Proveedore']['identificacion'])); ?></td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} of {:pages}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('action' => 'add')); ?></li>
	</ul>
</div>

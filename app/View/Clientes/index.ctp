<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<td>Nombre</td>
			<td>Primer Apellido</td>
			<td>Segundo Apellido</td>
			<td>Telefonos</td>
			<td>Actividad</td>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido1']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido2']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefono']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(('Detalles'), array('action' => 'view', $cliente['Cliente']['identificacion'])); ?></td>
		</td>
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
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('action' => 'add')); ?></li>
	</ul>
</div>

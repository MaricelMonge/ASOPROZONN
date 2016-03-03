<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Imagen</td>
			<td>Actividad</td>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
		<td> ₡ <?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('../files/producto/image/' . $producto['Insumo']['image_dir'].'/'.'thumb_'.$producto['Producto']['image']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(('Detalles'), array('controller'=>'productos', 'action' => 'view', $producto['Producto']['codigo'])); ?></td>
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
		<li><?php echo $this->Html->link(__('Nuevo Producto'), array('action' => 'add')); ?></li>
	</ul>
</div>

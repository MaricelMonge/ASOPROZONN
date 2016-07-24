<?php echo $this->Html->script(array('addtocart.js'), array ('inline'=>false));?>

<div id="contenedor-productos">
<div class="page-header">
<h2><?php echo __('Productos'); ?></h2>
</div>
<div class="col-md-12">
		
<table class="table table-striped">
<thead>
<tr>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Precio'); ?></th>
		<th><?php echo $this->Paginator->sort('Imagen'); ?></th>
		<th class="actions"><?php echo __('Actividad'); ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($productos as $producto): ?>
<tr>
	<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
	<td> ₡ <?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
	<td><?php echo $this->Html->image('../files/producto/image/' . $producto['Producto']['image_dir'].'/'.'thumb_'.$producto['Producto']['image']);?></td>

	<td class="actions">
		<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $producto['Producto']['codigo']),  array('class'=>'btn btn-xs btn-primary')); ?>
		<?php echo $this->Form->button('Comprar', array('class' => 'btn btn-xs btn-success addtocart', 'id' => $producto['Producto']['codigo']) );?>
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $producto['Producto']['codigo']), array('confirm' => __('Esta seguro de eliminar a # %s?', $producto['Producto']['codigo']), 'class'=>'btn btn-xs btn-danger')); ?>
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
	echo $this->Paginator->prev('< ' .__('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
	echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
?>

</div>
</div>
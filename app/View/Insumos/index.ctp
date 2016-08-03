<div class="page-header">
	<font color="green">
		<h2><?php echo __('Insumos'); ?></h2>
	</font>
</div>
<div class="col-md-20">
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
<?php foreach ($insumos as $insumo): ?>
<tr>
	<td><?php echo h($insumo['Insumo']['nombre']); ?>&nbsp;</td>
	<td> ₡ <?php echo h($insumo['Insumo']['precio']); ?>&nbsp;</td>
	<td><?php 
			if (!empty($insumo['Insumo']['image_dir'])){
				echo $this->Html->image('../files/insumo/image/' . $insumo['Insumo']['image_dir'].'/'.$insumo['Insumo']['image'], array('style'=>'height: 100px; width: 80%;'));
			}else{
				echo $this->Html->image('../files/insumo/insumos.jpg', array('style'=>'height: 100px; width: 80%;'));
				}?>
	</td>
	<td class="actions">
		<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $insumo['Insumo']['codigo']), array('class'=>'btn btn-xs btn-primary')); ?>
		<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $insumo['Insumo']['codigo']), array('class'=>'btn btn-xs btn-success')); ?>
		<?php echo $this->Html->link(__('Editar imagen'), array('action' => 'edit_image', $insumo['Insumo']['codigo']), array('class'=>'btn btn-xs btn-warning')); ?>
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $insumo['Insumo']['codigo']), array('confirm' => __('Esta seguro de eliminar a # %s?', $insumo['Insumo']['codigo']), 'class'=>'btn btn-xs btn-danger')); ?>
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
	echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
?>
</div>
</div>

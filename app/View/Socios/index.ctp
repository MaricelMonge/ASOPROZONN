<div class="page-header">
<h2><?php echo __('Socios'); ?></h2>
</div>
<div class="col-md-20">
<table class="table table-striped">
	
<thead>
<tr>
	
	<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
	<th><?php echo $this->Paginator->sort('Primer Apellido'); ?></th>
	<th><?php echo $this->Paginator->sort('Segundo Apellido'); ?></th>
	<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
	<th><?php echo $this->Paginator->sort('Imagen'); ?></th>
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
		<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $socio['Socio']['numeroexp']), array('class'=>'btn btn-xs btn-success')); ?>
		<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $socio['Socio']['numeroexp']), array('class'=>'btn btn-xs btn-success')); ?>
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Esta seguro de eliminar a # %s?', $socio['Socio']['numeroexp']),'class'=>'btn btn-xs btn-danger')); ?>
	</td>
</tr>

<?php endforeach; ?>
</tbody>
</table>
</div>

<p align=center>
<?php
echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}')
));
?>	</p>
<div align=center class="paging">
<?php
	echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
?>
</div>


<?php
$this->Paginator->options(array('update'=>'#contenedor-socios',
'before'=>$this ->Js->get('#procesando')->effect('fadeIn', array('buffer'=>false)),
'complete'=>$this->Js->get('#procesando')->effect('fadeOut', array('buffer'=>false))
));

?>

<div id="contenedor-socios">
<div class="page-header">
<h2><?php echo __('Socios'); ?></h2>
</div>
<div class="col-md-20">
	<div class="progress oculto" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>
	
	
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
	<td><?php echo $this->Html->image('../files/socio/image/' . $socio['Socio']['image_dir'].'/'.'thumb_'.$socio['Socio']['image']);?></td>
	
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

<?php echo $this->Js->writeBuffer();?>


</div>
</div>


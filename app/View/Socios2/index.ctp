<?php
$this->Paginator->options(array('update'=>'#contenedor-socios',
'before'=>$this ->Js->get('#procesando')->effect('fadeIn', array('buffer'=>false)),
'complete'=>$this->Js->get('#procesando')->effect('fadeOut', array('buffer'=>false))
));

?>

<div id="contenedor-users">
	<div class="page-header">
		<font color="green">
			<h2><?php echo __('Socios'); ?></h2>
		</font>
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
					<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
					<th><?php echo $this->Paginator->sort('Imagen'); ?></th>
					<th class="actions"><?php echo __('Actividad'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($socios as $socio): ?>
					<tr>
						<td><?php echo h($socio['Socio']['nombre1']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['telefono']); ?>&nbsp;</td>
						<td><?php 
								if (!empty($socio['Socio']['image_dir'])){
									echo $this->Html->image('../files/socio/image/' . $socio['Socio']['image_dir'].'/'.$socio['Socio']['image'], array('style'=>'height: 100px; width: 80%;'));
								}else{
									echo $this->Html->image('icono.jpg', array('style'=>'height: 100px; width: 80%;'));
									}?>
						</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $socio['Socio']['numeroexp']), array('class'=>'btn btn-xs btn-primary')); ?>
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $socio['Socio']['numeroexp']), array('class'=>'btn btn-xs btn-success')); ?>
							<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Esta seguro de eliminar a # %s?', $socio['Socio']['numeroexp']),'class'=>'btn btn-xs btn-danger')); ?>
						</td>
					</tr>

				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<p align=center>
		<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}')));?>
	</p>
	<div align=center class="paging">
		<?php
			echo $this->Paginator->prev('< '.__('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
		?>
	
		<?php echo $this->Js->writeBuffer();?>

	</div>
</div>


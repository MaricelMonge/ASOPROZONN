<?php $this->Paginator->options(array('update'=>'#contenedor-socios', 'before'=>$this ->Js->get('#procesando')->effect('fadeIn', array('buffer'=>false)), 'complete'=>$this->Js->get('#procesando')->effect('fadeOut', array('buffer'=>false)))); ?>

<div id="contenedor-socios">
	<div class="page-header">
		<font color="green">
			<h2><?php echo __('Pagos'); ?></h2>
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
					<th><?php echo $this->Paginator->sort('Socio'); ?></th>
					<th><?php echo $this->Paginator->sort('Certificación'); ?></th>
					<th><?php echo $this->Paginator->sort('Cuota mensual'); ?></th>
					<th><?php echo $this->Paginator->sort('Interés acumulado'); ?></th>
					<th><?php echo $this->Paginator->sort('Otros pagos'); ?></th>
					<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
		<tbody>
			<?php foreach ($pagos as $pago): ?>
				<tr>
					<td><?php echo $pago['Socio']['nombre']; ?>&nbsp;</td>
					<td><?php echo h($pago['Pago']['certificacion']); ?>&nbsp;</td>
					<td><?php echo h($pago['Pago']['cuotaMensual']); ?>&nbsp;</td>
					<td><?php echo h($pago['Pago']['interesAcumulado']); ?>&nbsp;</td>
					<td><?php echo h($pago['Pago']['otrosPagos']); ?>&nbsp;</td>
					<td><?php echo $this->Time->format('d-m-Y', h($pago['Pago']['created'])); ?></td>
					<td class="actions">
						<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $pago['Pago']['id']), array('confirm' => __('Esta seguro de eliminar a # %s?',  $pago['Pago']['id']),'class'=>'btn btn-xs btn-danger')); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>	
	<p align=center>
		<?php echo $this->Paginator->counter(array( 'format' => __('Página {:page} de {:pages}')));
		?>	
	</p>
	<div align=center class="paging">
	<?php
		echo $this->Paginator->prev('< '.__('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
	?>
	
	<?php echo $this->Js->writeBuffer();?>

	</div>
</div>
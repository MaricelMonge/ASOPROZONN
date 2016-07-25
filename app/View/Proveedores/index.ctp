<div class="page-header">
	<font color="green">
		<h2><?php echo __('Proveedores'); ?></h2>
	</font>
</div>
<div class="col-md-20">
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre de empresa'); ?></th>
				<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
				<th class="actions"><?php echo __('Actividad'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($proveedores as $proveedore): ?>
				<tr>
					<td><?php echo h($proveedore['Proveedore']['nombre1']); ?>&nbsp;</td>
					<td><?php echo h($proveedore['Proveedore']['nombre_empresa']); ?>&nbsp;</td></td>
					<td><?php echo h($proveedore['Proveedore']['telefono']); ?>&nbsp;</td>
					<td class="Actividad">
						<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $proveedore['Proveedore']['identificacion']), array('class'=>'btn btn-xs btn-primary')); ?>
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proveedore['Proveedore']['identificacion']), array('class'=>'btn btn-xs btn-success')); ?>
						<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proveedore['Proveedore']['identificacion']), array('confirm' => __('Esta seguro de eliminar a # %s?', $proveedore['Proveedore']['identificacion']), 'class'=>'btn btn-xs btn-danger')); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p align=center>
		<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}')));?>	
	</p>
	<div class="paging" align="center">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
	?>
	</div>
</div>


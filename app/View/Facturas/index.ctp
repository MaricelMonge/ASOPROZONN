<div class="page-header">
<h2><?php echo __('Facturas'); ?></h2>
</div>
<div class="col-md-20">
<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('N. Factura'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('Monto'); ?></th>
			<th class="actions"><?php echo __('Actividad'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($facturas as $factura): ?>
	<tr>
		<td><?php echo h($factura['Factura']['idventa']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['fecha']); ?>&nbsp;</td>
		<td> ₡ <?php echo h($factura['Factura']['monto_total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $factura['Factura']['idventa']), array('class'=>'btn btn-xs btn-success')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $factura['Factura']['idventa']), array('class'=>'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $factura['Factura']['idventa']), array('class'=>'btn btn-xs btn-danger','confirm' => __('Esta seguro de eliminar a # %s?', $factura['Factura']['idventa']))); ?>
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
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
	?>
	</div>
</div>
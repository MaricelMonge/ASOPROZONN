<div class="facturas form">
<?php echo $this->Form->create('Factura'); ?>
	<fieldset>
		<legend><?php echo __('Edit Factura'); ?></legend>
	<?php
		echo $this->Form->input('idventa');
		echo $this->Form->input('monto_total');
		echo $this->Form->input('fecha');
		echo $this->Form->input('Producto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Factura.idventa')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Factura.idventa')))); ?></li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
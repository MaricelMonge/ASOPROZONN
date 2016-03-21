<div class="ventas form">
<?php echo $this->Form->create('Venta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Venta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo_id');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('reserva');
		echo $this->Form->input('pago');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Venta.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Venta.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>

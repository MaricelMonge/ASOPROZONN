<div class="ventas view">
<h2><?php echo __('Venta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Producto']['codigo'], array('controller' => 'productos', 'action' => 'view', $venta['Producto']['codigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reserva'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['reserva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pago'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['pago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Venta'), array('action' => 'edit', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Venta'), array('action' => 'delete', $venta['Venta']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $venta['Venta']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>

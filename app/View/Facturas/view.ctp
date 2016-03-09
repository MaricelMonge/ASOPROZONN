<div class="facturas view">
<h2><?php echo __('Factura'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($factura['Producto']['codigo'], array('controller' => 'productos', 'action' => 'view', $factura['Producto']['codigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Factura'), array('action' => 'edit', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Factura'), array('action' => 'delete', $factura['Factura']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $factura['Factura']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="facturas view">
<h2><?php echo __('Factura'); ?></h2>
	<dl>
		<dt><?php echo __('Idventa'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['idventa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Total'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['monto_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Factura'), array('action' => 'edit', $factura['Factura']['idventa'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Factura'), array('action' => 'delete', $factura['Factura']['idventa']), array('confirm' => __('Are you sure you want to delete # %s?', $factura['Factura']['idventa']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($factura['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Image Dir'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($factura['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['codigo']; ?></td>
			<td><?php echo $producto['nombre']; ?></td>
			<td><?php echo $producto['precio']; ?></td>
			<td><?php echo $producto['descripcion']; ?></td>
			<td><?php echo $producto['image']; ?></td>
			<td><?php echo $producto['image_dir']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['codigo'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['codigo'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['codigo']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['codigo']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

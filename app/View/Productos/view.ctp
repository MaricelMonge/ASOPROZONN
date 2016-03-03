<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Dir'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['image_dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['codigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['codigo']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['codigo']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($producto['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido1'); ?></th>
		<th><?php echo __('Apellido2'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['identificacion']; ?></td>
			<td><?php echo $cliente['nombre']; ?></td>
			<td><?php echo $cliente['apellido1']; ?></td>
			<td><?php echo $cliente['apellido2']; ?></td>
			<td><?php echo $cliente['telefono']; ?></td>
			<td><?php echo $cliente['email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['identificacion'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['identificacion'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['identificacion']), array('confirm' => __('Are you sure you want to delete # %s?', $cliente['identificacion']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Facturas'); ?></h3>
	<?php if (!empty($producto['Factura'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Idventa'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Factura'] as $factura): ?>
		<tr>
			<td><?php echo $factura['idventa']; ?></td>
			<td><?php echo $factura['monto_total']; ?></td>
			<td><?php echo $factura['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'facturas', 'action' => 'view', $factura['idventa'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'facturas', 'action' => 'edit', $factura['idventa'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'facturas', 'action' => 'delete', $factura['idventa']), array('confirm' => __('Are you sure you want to delete # %s?', $factura['idventa']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Socios'); ?></h3>
	<?php if (!empty($producto['Socio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Numeroexp'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido1'); ?></th>
		<th><?php echo __('Apellido2'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Genero'); ?></th>
		<th><?php echo __('Fecha Ingreso'); ?></th>
		<th><?php echo __('Lugar Residencia'); ?></th>
		<th><?php echo __('Trabajadores Finca'); ?></th>
		<th><?php echo __('Area Terreno'); ?></th>
		<th><?php echo __('Area Certificada'); ?></th>
		<th><?php echo __('Actividad Extra'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Image Dir'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Socio'] as $socio): ?>
		<tr>
			<td><?php echo $socio['numeroexp']; ?></td>
			<td><?php echo $socio['identificacion']; ?></td>
			<td><?php echo $socio['nombre']; ?></td>
			<td><?php echo $socio['apellido1']; ?></td>
			<td><?php echo $socio['apellido2']; ?></td>
			<td><?php echo $socio['telefono']; ?></td>
			<td><?php echo $socio['email']; ?></td>
			<td><?php echo $socio['genero']; ?></td>
			<td><?php echo $socio['fecha_ingreso']; ?></td>
			<td><?php echo $socio['lugar_residencia']; ?></td>
			<td><?php echo $socio['trabajadores_finca']; ?></td>
			<td><?php echo $socio['area_terreno']; ?></td>
			<td><?php echo $socio['area_certificada']; ?></td>
			<td><?php echo $socio['actividad_extra']; ?></td>
			<td><?php echo $socio['image']; ?></td>
			<td><?php echo $socio['image_dir']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'socios', 'action' => 'view', $socio['numeroexp'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'socios', 'action' => 'edit', $socio['numeroexp'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'socios', 'action' => 'delete', $socio['numeroexp']), array('confirm' => __('Are you sure you want to delete # %s?', $socio['numeroexp']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

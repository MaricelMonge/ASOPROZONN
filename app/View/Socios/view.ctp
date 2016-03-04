<div class="socios view">
<div class="page-header">
		<h2><?php echo __('Socio'); ?></h2>
	</div>
	<dl>
		<dt><?php echo __('Numeroexp'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['numeroexp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido1'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['apellido1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido2'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['apellido2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar Residencia'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['lugar_residencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trabajadores Finca'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['trabajadores_finca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Terreno'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['area_terreno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Certificada'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['area_certificada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad Extra'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['actividad_extra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Dir'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['image_dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Socio'), array('action' => 'edit', $socio['Socio']['numeroexp'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Socio'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Are you sure you want to delete # %s?', $socio['Socio']['numeroexp']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($socio['Producto'])): ?>
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
	<?php foreach ($socio['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['codigo']; ?></td>
			<td><?php echo $producto['nombre']; ?></td>
			<td><?php echo $producto['precio']; ?></td>
			<td><?php echo $producto['descripcion']; ?></td>
			<td><?php echo $producto['image']; ?></td>
			<td><?php echo $producto['image_dir']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['id']))); ?>
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
<div class="related">
	<h3><?php echo __('Related Proveedores'); ?></h3>
	<?php if (!empty($socio['Proveedore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido1'); ?></th>
		<th><?php echo __('Apellido2'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Nombre Empresa'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($socio['Proveedore'] as $proveedore): ?>
		<tr>
			<td><?php echo $proveedore['identificacion']; ?></td>
			<td><?php echo $proveedore['nombre']; ?></td>
			<td><?php echo $proveedore['apellido1']; ?></td>
			<td><?php echo $proveedore['apellido2']; ?></td>
			<td><?php echo $proveedore['telefono']; ?></td>
			<td><?php echo $proveedore['email']; ?></td>
			<td><?php echo $proveedore['nombre_empresa']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proveedores', 'action' => 'view', $proveedore['identificacion'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proveedores', 'action' => 'edit', $proveedore['identificacion'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proveedores', 'action' => 'delete', $proveedore['identificacion']), array('confirm' => __('Are you sure you want to delete # %s?', $proveedore['identificacion']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

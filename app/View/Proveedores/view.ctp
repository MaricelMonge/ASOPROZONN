<div class="proveedores view">
<h2><?php echo __('Proveedore'); ?></h2>
	<dl>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido1'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['apellido1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido2'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['apellido2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Empresa'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['nombre_empresa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedore'), array('action' => 'edit', $proveedore['Proveedore']['identificacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedore'), array('action' => 'delete', $proveedore['Proveedore']['identificacion']), array('confirm' => __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['identificacion']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Insumos'), array('controller' => 'insumos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Insumos'); ?></h3>
	<?php if (!empty($proveedore['Insumo'])): ?>
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
	<?php foreach ($proveedore['Insumo'] as $insumo): ?>
		<tr>
			<td><?php echo $insumo['codigo']; ?></td>
			<td><?php echo $insumo['nombre']; ?></td>
			<td><?php echo $insumo['precio']; ?></td>
			<td><?php echo $insumo['descripcion']; ?></td>
			<td><?php echo $insumo['image']; ?></td>
			<td><?php echo $insumo['image_dir']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'insumos', 'action' => 'view', $insumo['codigo'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'insumos', 'action' => 'edit', $insumo['codigo'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'insumos', 'action' => 'delete', $insumo['codigo']), array('confirm' => __('Are you sure you want to delete # %s?', $insumo['codigo']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Socios'); ?></h3>
	<?php if (!empty($proveedore['Socio'])): ?>
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
	<?php foreach ($proveedore['Socio'] as $socio): ?>
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

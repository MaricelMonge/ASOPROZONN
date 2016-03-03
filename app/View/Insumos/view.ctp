<div class="insumos view">
<h2><?php echo __('Insumo'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Dir'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['image_dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Insumo'), array('action' => 'edit', $insumo['Insumo']['codigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Insumo'), array('action' => 'delete', $insumo['Insumo']['codigo']), array('confirm' => __('Are you sure you want to delete # %s?', $insumo['Insumo']['codigo']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Insumos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insumo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Proveedores'); ?></h3>
	<?php if (!empty($insumo['Proveedore'])): ?>
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
	<?php foreach ($insumo['Proveedore'] as $proveedore): ?>
		<tr>
			<td><?php echo $proveedore['identificacion']; ?></td>
			<td><?php echo $proveedore['nombre']; ?></td>
			<td><?php echo $proveedore['apellido1']; ?></td>
			<td><?php echo $proveedore['apellido2']; ?></td>
			<td><?php echo $proveedore['telefono']; ?></td>
			<td><?php echo $proveedore['email']; ?></td>
			<td><?php echo $proveedore['nombre_empresa']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proveedores', 'action' => 'view', $proveedore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proveedores', 'action' => 'edit', $proveedore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proveedores', 'action' => 'delete', $proveedore['id']), array('confirm' => __('Are you sure you want to delete # %s?', $proveedore['id']))); ?>
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

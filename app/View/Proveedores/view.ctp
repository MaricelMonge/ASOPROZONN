<div class="proveedores view">
<h2><?php echo __('Proveedor'); ?></h2>
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
		<dt><?php echo __('Primer Apellido'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['apellido1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundo Apellido'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['apellido2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefonos'); ?></dt>
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
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proveedor'), array('action' => 'edit', $proveedore['Proveedore']['identificacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Proveedor'), array('action' => 'delete', $proveedore['Proveedore']['identificacion']), array('confirm' => __('Esta seguro de eliminar # %s?', $proveedore['Proveedore']['identificacion']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('action' => 'add')); ?> </li>
	</ul>
</div>

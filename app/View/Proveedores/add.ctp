<div class="proveedores form">
<?php echo $this->Form->create('Proveedore'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Proveedor'); ?></legend>
		<div title="Insertar el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
		<div title="Insertar el primer apellido"><?php echo $this->Form->input('apellido1', array('label' => 'Primer Apellido: '));?></div>
		<div title="Insertar el segundo apellido"><?php echo $this->Form->input('apellido2', array('label' => 'Segundo Apellido: '));?></div>
		<div title="Insertar el numero de telefono"><?php echo $this->Form->input('telefono', array('label' => 'Telefonos: '));?></div>
		<div title="Insertar el correo electronico"><?php echo $this->Form->input('email', array('label' => 'Correo Electronico: '));?></div>
		<div title="Insertar el nombre de la empresa"><?php echo $this->Form->input('nombre_empresa', array('label' => 'Nombre de la empresa: '));?></div>
	</fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Proveedores'), array('action' => 'index')); ?></li>
	</ul>
</div>

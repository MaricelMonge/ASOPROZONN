<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
		<div title="Inserte el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
		<div title="Inserte el primer apellido"><?php echo $this->Form->input('apellido1', array('label' => 'Primer Apellido: '));?></div>
		<div title="Inserte el segundo apellido"><?php echo $this->Form->input('apellido2', array('label' => 'Segundo Apellido: '));?></div>
		<div title="Inserte los números de contacto"><?php echo $this->Form->input('telefono', array('label' => 'Teléfonos: '));?></div>
		<div title="Inserte el correo electrónico"><?php echo $this->Form->input('email', array('label' => 'Correo Electrónico: '));?></div>
	</fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>

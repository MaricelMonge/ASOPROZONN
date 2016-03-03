<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cliente'); ?></legend>
		<div><?php echo $this->Form->input('identificacion', array('label' => 'Identificación: '));?></div>
		<div title="Cambie el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
		<div title="Cambie el primer apellido"><?php echo $this->Form->input('apellido1', array('label' => 'Primer Apellido: '));?></div>
		<div title="Cambie el segundo apellido"><?php echo $this->Form->input('apellido2', array('label' => 'Segundo Apellido: '));?></div>
		<div title="Cambie los números de contacto"><?php echo $this->Form->input('telefono', array('label' => 'Teléfonos: '));?></div>
		<div title="Cambie el correo electrónico"><?php echo $this->Form->input('email', array('label' => 'Correo Electrónico: '));?></div>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar Cliente'), array('action' => 'delete', $this->Form->value('Cliente.identificacion')), array('confirm' => __('Esta seguro de eliminar a # %s?', $this->Form->value('Cliente.identificacion')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>

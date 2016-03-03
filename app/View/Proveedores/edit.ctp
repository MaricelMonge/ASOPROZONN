<div class="proveedores form">
<?php echo $this->Form->create('Proveedore'); ?>
	<fieldset>
		<legend><?php echo __('Editar Proveedor'); ?></legend>
		<div title="Cambie el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
		<div title="Cambie el primer apellido"><?php echo $this->Form->input('apellido1', array('label' => 'Primer Apellido: '));?></div>
		<div title="Cambie el segundo apellido"><?php echo $this->Form->input('apellido2', array('label' => 'Segundo Apellido: '));?></div>
		<div title="Cambie el numero de telefono"><?php echo $this->Form->input('telefono', array('label' => 'Telefonos: '));?></div>
		<div title="Cambie el correo electronico"><?php echo $this->Form->input('email', array('label' => 'Correo Electronico: '));?></div>
		<div title="Cambie el nombre de la empresa"><?php echo $this->Form->input('nombre_empresa', array('label' => 'Nombre de la empresa: '));?></div>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar Proveedor'), array('action' => 'delete', $this->Form->value('Proveedore.identificacion')), array('confirm' => __('Esta seguro de eliminar # %s?', $this->Form->value('Proveedore.identificacion')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Proveedores'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="socios form">
<?php echo $this->Form->create('Socio'); ?>
	<fieldset>
		<legend><?php echo __('Add Socio'); ?></legend>
	<?php
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido1');
		echo $this->Form->input('apellido2');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('genero');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('lugar_residencia');
		echo $this->Form->input('trabajadores_finca');
		echo $this->Form->input('area_terreno');
		echo $this->Form->input('area_certificada');
		echo $this->Form->input('actividad_extra');
		echo $this->Form->input('image');
		echo $this->Form->input('image_dir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?></li>
	</ul>
</div>

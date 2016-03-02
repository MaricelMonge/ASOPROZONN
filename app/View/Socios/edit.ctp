<div class="socios form">
<?php echo $this->Form->create('Socio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Socio'); ?></legend>
	<?php
		echo $this->Form->input('numeroexp');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Socio.numeroexp')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Socio.numeroexp')))); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?></li>
	</ul>
</div>

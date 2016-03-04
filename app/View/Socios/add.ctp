<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Socio'); ?>
	<fieldset>
	<div class="page-header">
		<h2><?php echo __('Nuevo Socio'); ?></h2>
	</div>
	<?php 
	echo $this->Form->input('identificacion', array('class'=>'form-control','label'=>'Identificación:'));
	echo $this->Form->input('nombre', array('class'=>'form-control','label'=>'Nombre:'));
	echo $this->Form->input('apellido1', array('class'=>'form-control','label'=>'Primer Apellido:'));
	echo $this->Form->input('apellido2', array('class'=>'form-control','label'=>'Segundo Apellido:'));
	echo $this->Form->input('telefono', array('class'=>'form-control','label'=>'Teléfonos:')); 
	echo $this->Form->input('email', array('class'=>'form-control','label'=>'Correo Electrónico:')); ?>
	<div>&nbsp</div>
	<?php echo $this->Form->input('genero', array('options'=>array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'),'label'=>'Género:'));?>
	<div>&nbsp</div>
	<?php 
	echo $this->Form->input('lugar_residencia', array('class'=>'form-control','label'=>'Lugar de Residencia:'));
	echo $this->Form->input('trabajadores_finca', array('class'=>'form-control','label'=>'Trabajadores de finca:'));
	echo $this->Form->input('area_terreno', array('class'=>'form-control','label'=>'Área del terreno:'));
	echo $this->Form->input('area_certificada', array('class'=>'form-control','label'=>'Área Certificada:'));
	echo $this->Form->input('actividad_extra', array('class'=>'form-control','label'=>'Actividad extra:'));
	?>
	<br>
	<?php echo $this->Form->input('fecha_ingreso', array('type'=>'date','label'=>'Fecha de Ingreso: '));?>
	
	<div><?php echo $this->Form->input('image', array('type'=>'file','label'=>'Foto: ', 'id'=>'foto', 'class'=>'file', 'data-show-upload'=>'false','data-show-caption'=>'true'));?> </div>
	<div>&nbsp</div>
	<div><?php echo $this->Form->input('image_dir',array('type'=>'hidden'));?></div>
	<div>&nbsp</div>
	
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Crear Socio', 'class'=>'btn btn-success')); ?>
</div>
</div>
</div>


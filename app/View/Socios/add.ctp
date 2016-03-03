<div class="socios form">
<?php echo $this->Form->create('Socio'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Socio'); ?></legend>
		<div title="Inserte el numero de identificacion"><?php echo $this->Form->input('identificacion', array('label' => 'Identificación: '));?></div>
		<div title="Inserte el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
		<div title="Inserte el primer apellido"><?php echo $this->Form->input('apellido1', array('label' => 'Primer Apellido: '));?></div>
		<div title="Inserte el segundo apellido"><?php echo $this->Form->input('apellido2', array('label' => 'Segundo Apellido: '));?></div>
		<div title="Inserte los números de contacto"><?php echo $this->Form->input('telefono', array('label' => 'Teléfonos: '));?></div>
		<div title="Inserte el correo electrónico"><?php echo $this->Form->input('email', array('label' => 'Correo Electrónico: '));?></div>
		<div title="Seleccion el género"><?php echo $this->Form->input('genero', array('options'=>array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'),'id'=>'options','label' => 'Género: '));?></div>
		<div title="Inserte la fecha de ingreso"><?php echo $this->Form->input('fecha_ingreso', array('type'=>'date','label' => 'Fecha de Ingreso: '));?></div>
		<div title="Inserte el lugar de residencia"><?php echo $this->Form->input('lugar_residencia', array('label' => 'Lugar de Residencia: '));?></div>
		<div title="Inserte la cantidad de trabajadores de la finca"><?php echo $this->Form->input('trabajadores_finca', array('label' => 'Cantidad de trabajadores de la finca: '));?></div>
		<div title="Inserte el area total del terreno"><?php echo $this->Form->input('area_terreno', array('label' => 'Area del Terreno: '));?></div>
		<div title="Inserte el area total certificada"><?php echo $this->Form->input('area_certificada', array('label' => 'Area Certificada: '));?></div>
		<div title="Inserte si realiza alguna actividad extra"><?php echo $this->Form->input('actividad_extra', array('label' => 'Actividad Extra: '));?></div>
		<div title="Inserte una imagen"><?php echo $this->Form->input('image',  array('type'=>'file','label'=>'Imagen: ', 'default'=>'libro.jpe'));?></div>
		<div title="Direction image"><?php echo $this->Form->input('image_dir', array('type'=>'hidden'));?></div>
		<div><?php echo $this->Form->end(__('Crear')); ?></div>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Socios'), array('action' => 'index')); ?></li>
	</ul>
</div>

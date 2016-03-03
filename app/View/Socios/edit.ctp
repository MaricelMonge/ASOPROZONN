<div class="socios form">
<?php echo $this->Form->create('Socio'); ?>
	<fieldset>
		<legend><?php echo __('Editar Socio'); ?></legend>
		<div><?php echo $this->Form->input('numeroexp', array('label' => 'N. Expediente: '));?></div>
		<div title="Cambie el numero de identificacion"><?php echo $this->Form->input('identificacion', array('label' => 'Identificación: '));?></div>
		<div title="Cambie el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
		<div title="Cambie el primer apellido"><?php echo $this->Form->input('apellido1', array('label' => 'Primer Apellido: '));?></div>
		<div title="Cambie el segundo apellido"><?php echo $this->Form->input('apellido2', array('label' => 'Segundo Apellido: '));?></div>
		<div title="Cambie los números de contacto"><?php echo $this->Form->input('telefono', array('label' => 'Teléfonos: '));?></div>
		<div title="Cambie el correo electrónico"><?php echo $this->Form->input('email', array('label' => 'Correo Electrónico: '));?></div>
		<div title="Seleccion el género"><?php echo $this->Form->input('genero', array('options'=>array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'),'id'=>'options','label' => 'Género: '));?></div>
		<div title="Cambie la fecha de ingreso"><?php echo $this->Form->input('fecha_ingreso', array('type'=>'date','label' => 'Fecha de Ingreso: '));?></div>
		<div title="Cambie el lugar de residencia"><?php echo $this->Form->input('lugar_residencia', array('label' => 'Lugar de Residencia: '));?></div>
		<div title="Cambie la cantidad de trabajadores de la finca"><?php echo $this->Form->input('trabajadores_finca', array('label' => 'Cantidad de trabajadores de la finca: '));?></div>
		<div title="Cambie el area total del terreno"><?php echo $this->Form->input('area_terreno', array('label' => 'Area del Terreno: '));?></div>
		<div title="Cambie el area total certificada"><?php echo $this->Form->input('area_certificada', array('label' => 'Area Certificada: '));?></div>
		<div title="Cambie si realiza alguna actividad extra"><?php echo $this->Form->input('actividad_extra', array('label' => 'Actividad Extra: '));?></div>
		<div title="Cambie una imagen"><?php echo $this->Form->input('image',  array('type'=>'file','label'=>'Imagen: ', 'default'=>'libro.jpe'));?></div>
		<div title="Direction image"><?php echo $this->Form->input('image_dir', array('type'=>'hidden'));?></div>
		
	</fieldset>
		<div><?php echo $this->Form->end(__('Editar')); ?></div>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar Socio'), array('action' => 'delete', $this->Form->value('Socio.numeroexp')), array('confirm' => __('Esta seguro de eliminar # %s?', $this->Form->value('Socio.numeroexp')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Socios'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<font color="green">
				<?php echo $this->Form->create('User', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			</font>
			<fieldset>
				<div class="page-header">
					<h2><?php echo __('Nuevo Socio'); ?></h2>
				</div>
				<?php
					echo $this->Form->input('username', array('class'=>'form-control','label'=>'Identificación:'));
					echo $this->Form->input('nombre', array('class'=>'form-control','label'=>'Nombre:'));
					echo $this->Form->input('apellido1', array('class'=>'form-control','label'=>'Primer Apellido:'));
					echo $this->Form->input('apellido2', array('class'=>'form-control','label'=>'Segundo Apellido:'));
					echo $this->Form->input('telefono', array('class'=>'form-control','label'=>'Teléfonos:'));
					echo $this->Form->input('email', array('class'=>'form-control','label'=>'Correo Electrónico:'));?>
					<div>&nbsp</div>
						<?php echo $this->Form->input('genero', array('options'=>array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'),'label'=>'Género:'));?>
					<div>&nbsp</div>
						<?php echo $this->Form->input('fecha_ingreso', array('type'=>'date','label'=>'Fecha de Ingreso: '));?>
					<div>&nbsp</div>
				<?php	
					echo $this->Form->input('lugar_residencia', array('class'=>'form-control','label'=>'Lugar de Residencia:'));
					echo $this->Form->input('trabajadores_finca', array('class'=>'form-control','label'=>'Trabajadores de finca:'));
					echo $this->Form->input('area_terreno', array('class'=>'form-control','label'=>'Área del terreno:'));
					echo $this->Form->input('area_certificada', array('class'=>'form-control','label'=>'Área Certificada:'));
					echo $this->Form->input('actividad_extra', array('class'=>'form-control','label'=>'Actividad extra:'));
					echo $this->Form->input('image', array('type'=>'file','label'=>'Foto: ', 'id'=>'foto', 'class'=>'file', 'data-show-upload'=>'false','data-show-caption'=>'true'));
					echo $this->Form->input('image_dir', array('type'=>'hidden'));
					echo $this->Form->input('Producto', array('class'=>'form-control', 'label'=>'Productos: '));
				?>
			<br>
			</fieldset>
		<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success')); ?>
		</div>
	</div>
</div>

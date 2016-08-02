<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('User', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			<fieldset>
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Editar Socio'); ?></h2>
					</font>
				</div>
				<?php
					echo $this->Form->input('id');
					// echo $this->Form->input('username');
					// echo $this->Form->input('password');
					// echo $this->Form->input('role');
					echo $this->Form->input('nombre', array('class'=>'form-control','label'=>'Nombre:'));
					echo $this->Form->input('apellido1', array('class'=>'form-control','label'=>'Primer Apellido:'));
					echo $this->Form->input('apellido2', array('class'=>'form-control','label'=>'Segundo Apellido:'));
					echo $this->Form->input('telefono', array('class'=>'form-control','label'=>'Teléfonos:'));
					echo $this->Form->input('email', array('class'=>'form-control','label'=>'Correo Electrónico:'));?>
					<div>&nbsp</div>
						<?php echo $this->Form->input('genero', array('options'=>array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'),'label'=>'Género:'));?>
					<div>&nbsp</div>
					<?php 
					echo $this->Form->input('lugar_residencia', array('class'=>'form-control','label'=>'Lugar de Residencia:'));
					echo $this->Form->input('trabajadores_finca', array('class'=>'form-control','label'=>'Trabajadores de finca:'));
					echo $this->Form->input('area_terreno', array('class'=>'form-control','label'=>'Área del terreno:'));
					echo $this->Form->input('area_certificada', array('class'=>'form-control','label'=>'Área Certificada:'));
					echo $this->Form->input('actividad_extra', array('class'=>'form-control','label'=>'Actividad extra:'));
					// echo $this->Form->input('image');
					// echo $this->Form->input('image_dir');
					echo $this->Form->input('Producto',array('class'=>'form-control', 'label'=>'Productos: '));
				?>
			</fieldset>
			<br>
			<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success')); ?>
		</div>

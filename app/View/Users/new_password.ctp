<?php $nom=$_SESSION['Auth']['User']['nombre1'];?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('User', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			<fieldset>
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Editar contraseña'); ?></h2>
						<br>
						<h3>Socio: <?php echo $nom;?></h3>
					</font>
				</div>
				<div title = "En este campo debe de digitar su contraseña actual"><?php echo $this->Form->input('actual_password', array('class'=>'form-control','label'=>'Contraseña actual:','placeholder' => 'Contraseña actual','type' => 'password'));?></div>
				<div title = "Digite aquí su nueva contraseña"><?php echo $this->Form->input('new_password', array('class'=>'form-control','label'=>'Nueva contraseña:','placeholder' => 'Nueva contraseña','type' => 'password'));?></div>
				<div title = "Por favor, repita su nueva contraseña en este campo"><?php echo $this->Form->input('repeat_password', array('class'=>'form-control','label'=>'Repita su contraseña:','placeholder' => 'Repita su contraseña', 'type' => 'password'));?></div>
			</fieldset>
			<br>
			<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success')); ?>
		</div>
	</div>	
</div>	

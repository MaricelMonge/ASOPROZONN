<?php $nom=$this->request->data['User']['nombre1'];?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('User', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			<fieldset>
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Editar rol'); ?></h2>
						<br>
						<h3>Socio: <?php echo $nom;?></h3>
					</font>
				</div>
				<?php
					echo $this->Form->input('id');?>
					<div>&nbsp</div>
						<?php echo $this->Form->input('role', array('options'=>array('Administrador'=>'Administrador', 'Socio'=>'Socio'),'label'=>'Rol de usuario:'));?>
					<div>&nbsp</div>
			</fieldset>
			<br>
			<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success')); ?>
		</div>

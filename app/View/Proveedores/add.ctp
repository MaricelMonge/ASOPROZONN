<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Proveedore', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			<fieldset>
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Nuevo Proveedor'); ?></h2>
					</font>
				</div>
				<?php 
				echo $this->Form->input('nombre', array('class'=>'form-control','label'=>'Nombre:'));
				echo $this->Form->input('apellido1', array('class'=>'form-control','label'=>'Primer Apellido:'));
				echo $this->Form->input('apellido2', array('class'=>'form-control','label'=>'Segundo Apellido:'));
				echo $this->Form->input('telefono', array('class'=>'form-control','label'=>'Teléfonos:')); 
				echo $this->Form->input('email', array('class'=>'form-control','label'=>'Correo Electrónico:'));
				echo $this->Form->input('nombre_empresa', array('class'=>'form-control','label'=>'Nombre de la empresa:'));
				echo $this->Form->input('Insumo',array('class'=>'form-control', 'label'=>'Insumos: '));
				?>
				<br>
			</fieldset>
		<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success')); ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Producto', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			<fieldset>
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Editar Producto'); ?></h2>
					</font>
				</div>
				<?php
					echo $this->Form->input('codigo');
					echo $this->Form->input('nombre', array('class'=>'form-control','label'=>'Nombre:'));
					echo $this->Form->input('precio', array('class'=>'form-control','label'=>'Precio: ₡ '));
					echo $this->Form->input('descripcion', array('class'=>'form-control','label'=>'Descripción:'));
				?>
			</fieldset>
			<br>
			<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success')); ?>

		</div>
	</div>	
</div>
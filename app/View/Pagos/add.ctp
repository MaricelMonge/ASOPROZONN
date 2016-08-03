<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Pago', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			<fieldset>
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Nuevo Pago'); ?></h2>
					</font>
				</div>
				<?php
					echo $this->Form->input('user_id', array('class'=>'form-control','label'=>'Socio:'));
					echo $this->Form->input('certificacion', array('class'=>'form-control','label'=>'Certificación:'));
					echo $this->Form->input('cuotaMensual', array('class'=>'form-control','label'=>'Cuota mensual:'));
					echo $this->Form->input('interesAcumulado', array('class'=>'form-control','label'=>'Interés Acumulado:'));
					echo $this->Form->input('otrosPagos', array('class'=>'form-control','label'=>'Otros Pagos:'));
					
				?>
			</fieldset>
			</br>
			<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success')); ?>
		</div>
	</div>
</div>
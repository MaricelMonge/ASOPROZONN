<div class="pagos form">
<?php echo $this->Form->create('Pago'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pago'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('socio_id');
		echo $this->Form->input('certificacion');
		echo $this->Form->input('cuotaMensual');
		echo $this->Form->input('interesAcumulado');
		echo $this->Form->input('otrosPagos');
		echo $this->Form->input('cuota');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pago.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Pago.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>

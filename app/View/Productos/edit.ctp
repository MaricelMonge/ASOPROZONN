<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Producto'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('precio');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('image');
		echo $this->Form->input('image_dir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.codigo')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Producto.codigo')))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
	</ul>
</div>

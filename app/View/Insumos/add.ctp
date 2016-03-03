<div class="insumos form">
<?php echo $this->Form->create('Insumo'); ?>
	<fieldset>
		<legend><?php echo __('Add Insumo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('precio');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('image');
		echo $this->Form->input('image_dir');
		echo $this->Form->input('Proveedore');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Insumos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>

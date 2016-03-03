<div class="insumos form">
<?php echo $this->Form->create('Insumo'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Insumo'); ?></legend>
			<div title="Inserte el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
			<div title="Inserte el precio del producto"><?php echo $this->Form->input('precio', array('label' => 'Precio: '));?></div>
			<div title="Inserte la descripcion"><?php echo $this->Form->input('descripcion', array('label' => 'Descripción: '));?></div>
			<div title="Inserte una imagen"><?php echo $this->Form->input('image',  array('type'=>'file','label'=>'Imagen: '));?></div>
			<div title="Direction image"><?php echo $this->Form->input('image_dir', array('type'=>'hidden'));?></div>

	</fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Insumos'), array('action' => 'index')); ?></li>
	</ul>
</div>

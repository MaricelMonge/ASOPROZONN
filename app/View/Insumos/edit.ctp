<div class="insumos form">
<?php echo $this->Form->create('Insumo'); ?>
	<fieldset>
		<legend><?php echo __('Editar Insumo'); ?></legend>
		<div><?php echo $this->Form->input('codigo', array('label' => 'Codigo: '));?></div>
		<div title="Cambie el nombre"><?php echo $this->Form->input('nombre', array('label' => 'Nombre: '));?></div>
		<div title="Cambie el precio"><?php echo $this->Form->input('precio', array('label' => 'Precio: '));?></div>
		<div title="Cambie la descripción"><?php echo $this->Form->input('descripcion', array('label' => 'Descripción: '));?></div>
		<div title="Cambie una imagen"><?php echo $this->Form->input('image',  array('type'=>'file','label'=>'Imagen: '));?></div>
		<div title="Direction image"><?php echo $this->Form->input('image_dir', array('type'=>'hidden'));?></div>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar Insumo'), array('action' => 'delete', $this->Form->value('Insumo.codigo')), array('confirm' => __('Esta seguro de eliminar # %s?', $this->Form->value('Insumo.codigo')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Insumos'), array('action' => 'index')); ?></li>
	</ul>
</div>
<div class="insumos view">
<h2><?php echo __('Insumo'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Insumo'), array('action' => 'edit', $insumo['Insumo']['codigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Insumo'), array('action' => 'delete', $insumo['Insumo']['codigo']), array('confirm' => __('Esta seguro de elimimar # %s?', $insumo['Insumo']['codigo']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Insumos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Insumo'), array('action' => 'add')); ?> </li>
	</ul>
</div>

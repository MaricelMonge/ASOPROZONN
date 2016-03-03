<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido1'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellido1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido2'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellido2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['identificacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['identificacion']), array('confirm' => __('Are you sure you want to delete # %s?', $cliente['Cliente']['identificacion']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="pagos view">
<h2><?php echo __('Pago'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pago['Socio']['numeroexp'], array('controller' => 'socios', 'action' => 'view', $pago['Socio']['numeroexp'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certificacion'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['certificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CuotaMensual'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['cuotaMensual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('InteresAcumulado'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['interesAcumulado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtrosPagos'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['otrosPagos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuota'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['cuota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pago'), array('action' => 'edit', $pago['Pago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pago'), array('action' => 'delete', $pago['Pago']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pago['Pago']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>

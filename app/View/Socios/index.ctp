<div class="socios index">
	<h2><?php echo __('Socios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('numeroexp'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido1'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido2'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso'); ?></th>
			<th><?php echo $this->Paginator->sort('lugar_residencia'); ?></th>
			<th><?php echo $this->Paginator->sort('trabajadores_finca'); ?></th>
			<th><?php echo $this->Paginator->sort('area_terreno'); ?></th>
			<th><?php echo $this->Paginator->sort('area_certificada'); ?></th>
			<th><?php echo $this->Paginator->sort('actividad_extra'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('image_dir'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($socios as $socio): ?>
	<tr>
		<td><?php echo h($socio['Socio']['numeroexp']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['apellido1']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['apellido2']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['email']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['genero']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['fecha_ingreso']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['lugar_residencia']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['trabajadores_finca']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['area_terreno']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['area_certificada']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['actividad_extra']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['image']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['image_dir']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $socio['Socio']['numeroexp'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $socio['Socio']['numeroexp'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Are you sure you want to delete # %s?', $socio['Socio']['numeroexp']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>

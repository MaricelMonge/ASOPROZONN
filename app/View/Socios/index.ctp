<div class="socios index">
	<h2><?php echo __('Socios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<td>Nombre</td>
			<td>Primer Apellido</td>
			<td>Segundo Apellido</td>
			<td>Teléfono</td>
			<td>Fotografia</td>
			<td>Actividad</td>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($socios as $socio): ?>
	<tr>
		<td><?php echo h($socio['Socio']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['apellido1']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['apellido2']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['telefono']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('../files/socio/image/' . $socio['Socio']['image_dir'].'/'.'thumb_'.$socio['Socio']['image']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(('Detalles'), array('controller'=>'socios', 'action' => 'view', $socio['Socio']['numeroexp'])); ?></td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} of {:pages}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Socio'), array('action' => 'add')); ?></li>
	</ul>
</div>

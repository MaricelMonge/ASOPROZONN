<div class="insumos index">
	<h2><?php echo __('Insumos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Imagen</td>
			<td>Actividad</td>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($insumos as $insumo): ?>
	<tr>
		<td><?php echo h($insumo['Insumo']['nombre']); ?>&nbsp;</td>
		<td> ₡ <?php echo h($insumo['Insumo']['precio']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('../files/insumo/image/' . $insumo['Insumo']['image_dir'].'/'.'thumb_'.$insumo['Insumo']['image']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(('Detalles'), array('controller'=>'insumos', 'action' => 'view', $insumo['Insumo']['codigo'])); ?></td>
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
		<li><?php echo $this->Html->link(__('Nuevo Insumo'), array('action' => 'add')); ?></li>
	</ul>
</div>

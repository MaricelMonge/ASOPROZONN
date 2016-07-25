<div class="page-header">
	<font color="green">
		<h2>Insumo: <?php echo $insumo['Insumo']['nombre']; ?></h2>
	</font>
</div>

<div class="row">
	<div class="col col-sm-7">
		<?php 
			if (!empty($insumo['Insumo']['image_dir'])){
				echo $this->Html->image('../files/insumo/image/' . $insumo['Insumo']['image_dir'].'/'.$insumo['Insumo']['image'], array('style'=>'height: 250px; width: 65%;'));
			}else{
				echo $this->Html->image('../files/insumo/insumos.jpg', array('style'=>'height: 250px; width: 65%;'));
				}?>
		<br/>
		<br/>
		<div class="related">
			<?php if (!empty($insumo['Proveedore'])): ?>
			<font color="green">
				<h3><?php echo __('Proveedores'); ?></h3>
			</font>
			<table class="table table-striped">
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<th><?php echo __('Teléfono'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($insumo['Proveedore'] as $proveedore): ?>
				<tr>
					<td><?php echo $proveedore['nombre1']; ?></td>
					<td><?php echo $proveedore['telefono']; ?></td>
					<td class="actions">
					<?php echo $this->Html->link(__('Detalles'), array('controller' => 'proveedores', 'action' => 'view', $proveedore['identificacion']), array('class'=>'btn btn-xs btn-primary')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php endif; ?>
		</div>
	</div>

<div class="col col-sm-5">
	Código: <?php echo h($insumo['Insumo']['codigo']); ?>
	<br/>
	<br/>
	Precio: ₡ <?php echo $insumo['Insumo']['precio']; ?>
	<br />
	<br/>
	Descripción: <?php echo $insumo['Insumo']['descripcion']; ?>
	<br />
	<br/>

	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	    <?php echo __('Acciones'); ?> <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Editar Insumo'), array('action' => 'edit', $insumo['Insumo']['codigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Insumo'), array('action' => 'delete', $insumo['Insumo']['codigo']), array('confirm' => __('Are you sure you want to delete # %s?', $insumo['Insumo']['codigo']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Insumos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Insumo'), array('action' => 'add')); ?> </li>
	</ul>
	</div>
</div>
</div>
</div>

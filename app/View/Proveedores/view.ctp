<div class="page-header">
	<h2>Proveedor: <?php echo $proveedore['Proveedore']['nombre'].' '.$proveedore['Proveedore']['apellido1']; ?></h2>
</div>

<div class="col col-sm-7">
	Identificación: <?php echo $proveedore['Proveedore']['identificacion']; ?>
	<br />
	<br/>
	Nombre: <?php echo $proveedore['Proveedore']['nombre']; ?>
	<br />
	<br/>
	Primer Apellido: <?php echo h($proveedore['Proveedore']['apellido1']); ?>
	<br/>
	<br/>
	Segundo Apellido: <?php echo $proveedore['Proveedore']['apellido2']; ?>
	<br />
	<br/>
	Teléfono: <?php echo $proveedore['Proveedore']['telefono']; ?>
	<br />
	<br/>
	Correo Electrónico: <?php echo h($proveedore['Proveedore']['email']); ?>
	<br/>
	<br/>
	Nombre de la empresa: <?php echo $proveedore['Proveedore']['nombre_empresa']; ?>
	<br />
	<br/>

	<div class="row">
		<div class="related">
			<h3><?php echo __('Insumos'); ?></h3>
				<?php if (!empty($proveedore['Insumo'])): ?>
			<table class="table table-striped">
				<tr>
					<th><?php echo __('Código'); ?></th>
					<th><?php echo __('Nombre'); ?></th>
					<th><?php echo __('Precio'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($proveedore['Insumo'] as $insumo): ?>
				<tr>
					<td><?php echo $insumo['codigo']; ?></td>
					<td><?php echo $insumo['nombre']; ?></td>
					<td><?php echo $insumo['precio']; ?></td>
					<td class="actions">
					<?php echo $this->Html->link(__('Detalles'), array('controller' => 'insumos', 'action' => 'view', $insumo['codigo']), array('class'=>'btn btn-xs btn-primary')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php endif; ?>
		</div>
	
	</div>
	</div>

<div class="col col-sm-5">
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	    <?php echo __('Acciones'); ?> <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	  		<li><?php echo $this->Html->link(__('Editar Proveedor'), array('action' => 'edit', $proveedore['Proveedore']['identificacion'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Proveedor'), array('action' => 'delete', $proveedore['Proveedore']['identificacion']), array('confirm' => __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['identificacion']))); ?> </li>
			<li><?php echo $this->Html->link(__('Lista de Proveedores'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('action' => 'add')); ?> </li>
	<li class="divider"></li>
		<li><?php echo $this->Html->link(__('Lista de Insumos'), array('controller' => 'insumos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
	</ul>
	</div>
		</div>

</div>	
</div>




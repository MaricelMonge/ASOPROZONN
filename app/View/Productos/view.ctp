<?php echo $this->Html->script(array('addtocart.js'), array ('inline'=>false));?>
<div class="page-header">
	
	<h2>Producto: <?php echo $producto['Producto']['nombre']; ?></h2>

</div>

<div class="row">

<div class="col col-sm-7">
		<?php echo $this->Html->image('../files/producto/image/' .$producto['Producto']['image_dir'] . '/' . 'vga_' .$producto['Producto']['image'], array('class' => 'img-thumbnail img-responsive')); ?>
		<br/>
		<br/>
		<div class="related">
			<h3><?php echo __('Socios'); ?></h3>
				<?php if (!empty($producto['Socio'])): ?>
			<table class="table table-striped">
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<th><?php echo __('Apellido'); ?></th>
					<th><?php echo __('Teléfono'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($producto['Socio'] as $socio): ?>
				<tr>
					<td><?php echo $socio['nombre']; ?></td>
					<td><?php echo $socio['apellido1']; ?></td>
					<td><?php echo $socio['telefono']; ?></td>
					<td class="actions">
					<?php echo $this->Html->link(__('Detalles'), array('controller' => 'socios', 'action' => 'view', $socio['numeroexp']), array('class'=>'btn btn-xs btn-primary')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php endif; ?>
		</div>
	</div>
	

<div class="col col-sm-5">
	
	Código: <?php echo h($producto['Producto']['codigo']); ?>
	<br/>
	<br/>
	Precio: ₡ <?php echo $producto['Producto']['precio']; ?>
	<br />
	<br/>
	Descripción: <?php echo $producto['Producto']['descripcion']; ?>
	<br />
	<br/>
	<?php echo $this->Form->button('Agregar a pedido', array('class' => 'btn btn-success addtocart', 'id' => $producto['Producto']['codigo']) );?>
	
	<br />
	<br/>
	
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	    <?php echo __('Acciones'); ?> <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Editar Producto'), array('action' => 'edit', $producto['Producto']['codigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Producto'), array('action' => 'delete', $producto['Producto']['codigo']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['codigo']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Productos'), array('action' => 'index')); ?> </li>
	<li class="divider"></li>
		<li><?php echo $this->Html->link(__('Lista de Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
	</ul>
	</div>
</div>

<?php echo $this->Html->script(array('addtocart.js'), array ('inline'=>false));?>
<div class="page-header">
	<font color="green">
		<h2>Producto: <?php echo $producto['Producto']['nombre']; ?></h2>
	</font>
</div>

<div class="row">
	<div class="col col-sm-6">
		<p  align="center">
			<?php 
				if (!empty($producto['Producto']['image_dir'])){
					echo $this->Html->image('../files/producto/image/' .$producto['Producto']['image_dir'] . '/'.$producto['Producto']['image'], array('style'=>'height: 250px; width: 65%;'));
				}else{
					echo $this->Html->image('../files/producto/product.jpg', array('style'=>'height: 250px; width: 65%;'));
				}?>
		</p>
		<br/>
		<br/>
		<div class="related">
			<?php if (!empty($producto['Socio'])): ?>
				<font color="green">
					<h3><?php echo __('Socios'); ?></h3>
				</font>
				<table class="table table-striped">
					<tr>
						<th><?php echo __('Nombre'); ?></th>
						<th><?php echo __('Teléfono'); ?></th>
						<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
					<?php foreach ($producto['Socio'] as $socio): ?>
					<tr>
						<td><?php echo $socio['nombre1']; ?></td>
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
	<div class="col col-sm-6">
		Código: <?php echo h($producto['Producto']['codigo']); ?>
		<br/>
		<br/>
		Precio: ₡ <?php echo $producto['Producto']['precio']; ?>
		<br />
		<br/>
		Descripción: <?php echo $producto['Producto']['descripcion']; ?>
		<br />
		<br/>
		<?php if($current_user['role']=='Administrador'){?>
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
				</ul>
			</div>
		<?php }?>
	</div>
</div>
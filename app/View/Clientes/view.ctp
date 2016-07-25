<div class="page-header">
	<font color="green">
		<h2>Cliente: <?php echo $cliente['Cliente']['nombre1']; ?></h2>
	</font>	
</div>

<div class="col col-sm-7">
	Nombre: <?php echo $cliente['Cliente']['nombre1']; ?>
	<br />
	<br/>
	Teléfono: <?php echo $cliente['Cliente']['telefono']; ?>
	<br />
	<br/>
	Correo Electrónico: <?php echo h($cliente['Cliente']['email']); ?>
	<br/>
	<br/>
	<?php if (!empty($ventas)): ?>
		<font color="green">
			<h3><?php echo __('Facturas'); ?></h3>
		</font>
		<table class="table table-striped">
			<tr>
				<th><?php echo __('Número de factura'); ?></th>
				<th><?php echo __('Total'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			<?php for($i=0; $i<count($ventas); $i++){?>

			<tr>
				<td><?php echo $ventas[$i]['id']; ?></td>
				<td><?php echo $ventas[$i]['total']; ?></td>
				<td class="actions">
					<?php 
					    echo $this->Html->link('Detalles', array('controller' => 'orden_items', 'action' => 'view', $ventas[$i]['id']), array('class' => 'btn btn-xs btn-primary'));
					?>
				</td>
			</tr>
		<?php }?>
	</table>
	<?php endif; ?>

	</div>

<div class="col col-sm-5">
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	    <?php echo __('Acciones'); ?> <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	  	<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['identificacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Cliente'), array('action' => 'delete', $cliente['Cliente']['identificacion']), array('confirm' => __('Esta seguro de eliminar # %s?', $cliente['Cliente']['identificacion']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('action' => 'add')); ?> </li>
	</ul>
	</div>
		</div>

</div>	
</div>







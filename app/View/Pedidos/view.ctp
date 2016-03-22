<?php echo $this->Html->script(array('cart.js', 'jquery.animate-colors'), array('inline' => false)); ?>
<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'pedidos', 'action' => 'recalcular'))); ?>
<div class="page-header">
	
	<h2>Pedidos</h2>

</div>

<div class="row">
	<div class="col col-sm-1">Foto</div>
	<div class="col col-sm-7">Producto</div>
	<div class="col col-sm-1">Precio</div>
	<div class="col col-sm-1">Cantidad</div>
	<div class="col col-sm-1">Subtotal</div>
	<div class="col col-sm-1">Actividad</div>
</div>

<?php $tabindex = 1; ?>

<?php foreach($pedidos as $pedido): ?>

	<div class="row" id="row-<?php echo $pedido['Pedido']['id']; ?>">
	    
		<div class="col col-sm-1">
			<figure>
				<?php echo $this->Html->image('../files/producto/image/' . $pedido['Producto']['image_dir']. '/' . 'thumb_' . $pedido['Producto']['image'], array('class' => 'img-pedidos')); ?>
				
			</figure>
		</div>

		<div class="col col-sm-7">
			<strong>
				<?php echo $this->Html->link($pedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $pedido['Pedido']['producto_id'])); ?>
			</strong>
		</div>

		<div class="col col-sm-1" id="price-<?php echo $pedido['Pedido']['id']; ?>">
			₡<?php echo $pedido['Producto']['precio']; ?>
		</div>

		<div class="col col-sm-1">
			<?php echo $this->Form->input($pedido['Pedido']['id'], array('div' => false, 'class' => 'numeric form-control input-small', 'label' => false, 'size' => 2, 'maxlenght' => 2, 'tabindex' => $tabindex++, 'data-id' => $pedido['Pedido']['id'], 'value' => $pedido['Pedido']['cantidad'])); ?>
		</div>

		<div class="col col-sm-1" style="background-color: none;" id="subtotal_<?php echo $pedido['Pedido']['id']; ?>">
			₡<?php echo $pedido['Pedido']['subtotal']; ?>
		</div>

		<div class="col col-sm-1">
		
			<?php echo $this->Form->button('Eliminar', array('class' => 'btn btn-xs btn-danger remove', 'id' => $pedido['Pedido']['id']) );?>
			
		</div>
	</div>
	<br />

<?php endforeach; ?>

	<hr>

<div class="row">
	<div class="col col-sm-12">
		<div class="pull-right tr">

		<?php echo $this->Html->link('Quitar pedidos', array('controller' => 'pedidos', 'action' => 'quitar'), array('class' => 'btn btn-danger', 'confirm' => 'Está seguro de quitar todos los pedidos?')); ?>
		
		&nbsp;&nbsp;

		<?php echo $this->Form->button('Recalcular', array('class' => 'btn btn-success', 'escape' => false, 'name' => 'recalcular', 'value' => 'recalcular')); ?>

		<br><br><br><br>
		<span class="total">Total Orden:</span>
		<span id="total" class="total">
			₡<?php echo $total_pedidos; ?>
		</span>

		<br><br>
		
		<?php echo $this->Form->button('Procesar Orden', array('class' => 'btn btn-primary', 'escape' =>false, 'name' => 'procesar', 'value' => 'procesar')); ?>

		<?php echo $this->Form->end(); ?>

		</div>
	</div>
</div>
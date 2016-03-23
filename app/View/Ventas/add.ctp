<div class="container">
	<div class="row">
		<div class="col-md-6">
            <?php echo $this->Form->create('Venta', array('role'=> 'form')); ?>
			<fieldset>
				<h2>Facturación</h2>
                <?php
                    echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre:'));
                ?>
			
			<h3>Productos: </h3>
			<table class="table table-striped">
			<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
			</tr>
			</thead>
			<tbody>
            <?php foreach($orden_item as $item): ?>
			<tr>
				<td><?php echo $item['Producto']['nombre']; ?></td>
				<td>₡ <?php echo $item['Producto']['precio']; ?></td>
				<td><?php echo $item['Pedido']['cantidad']; ?></td>
			    <td>₡ <?php echo $item['Pedido']['subtotal']; ?></td>
			</tr>
            <?php endforeach; ?>
			</tbody>
			</table>
			<p>
				<span class="total">Total Venta:</span>
				<span id="total" class="total">
					₡ <?php echo $mostrar_total_pedidos; ?>
				</span>
				<br />
				<br />
				<span class="total">Reserva Asociación:</span>
				<span id="total" class="total">
					₡ <?php echo $mostrar_total_pedidos*0.15; ?>
				</span>
				<br />
				<br />
				<span class="total">Pago al productor:</span>
				<span id="total" class="total">
					₡ <?php echo $mostrar_total_pedidos*0.85; ?>
				</span>
				<br />
				<br />
                <?php echo $this->Form->input('total',array('type' => 'hidden', 'value' => $mostrar_total_pedidos)); ?>
                <?php echo $this->Form->input('pago',array('type' => 'hidden', 'value' => $mostrar_total_pedidos*0.85)); ?>
                <?php echo $this->Form->input('reserva',array('type' => 'hidden', 'value' => $mostrar_total_pedidos*0.15)); ?>
                </fieldset>
                <?php echo $this->Form->end(array('label' => 'Facturar', 'class' => 'btn btn-success')); ?>
				
			</p>
		</div>
	</div>
</div>

<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-ordens',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>

<?php if(empty($ventas)): ?>

<h2>No existen facturas disponibles</h2>

<?php else: ?>

<div id="contenedor-ordens">

<div class="page-header">

	<h2><?php echo __('Facturas'); ?></h2>

</div>

	<div class="col-md-12">

	<div class="progress oculto" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>


		<table class="table table-striped">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('Número Factura'); ?></th>
				<th><?php echo $this->Paginator->sort('Cliente'); ?></th>
				<th><?php echo $this->Paginator->sort('Total'); ?> </th>
				<th><?php echo $this->Paginator->sort('Reserva'); ?> </th>
				<th><?php echo $this->Paginator->sort('Pago al productor'); ?> </th>
				<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>

        <?php foreach($ventas as $orden): ?>
		
		<tr>
			<td><?php echo h($orden['Venta']['id']); ?></td>
			<td><?php echo h($orden['Cliente']['nombre']); ?></td>
			<td>₡<?php echo h($orden['Venta']['total']); ?></td>
			<td>₡<?php echo h($orden['Venta']['reserva']); ?></td>
			<td>₡<?php echo h($orden['Venta']['pago']); ?></td>
			<td><?php echo $this->Time->format('d-m-Y', h($orden['Venta']['created'])); ?></td>
			<td class="actions">
				<?php 
				    echo $this->Html->link('Detalles', array('controller' => 'orden_items', 'action' => 'view', $orden['Venta']['id']), array('class' => 'btn btn-xs btn-primary'));
				?>
			</td>
		</tr>
        <?php endforeach; ?>
		
		</tbody>
		</table>
	</div>
	
		<p align=center>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}')
		));
		?>	</p>
<div align=center class="paging">
<?php
	echo $this->Paginator->prev('< '.__('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
	echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
?>
	
	<?php echo $this->Js->writeBuffer(); ?>
</div> <!-- contenedor-ordens -->

<?php endif; ?>
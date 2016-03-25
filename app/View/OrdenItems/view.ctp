<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-ordens',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>

<div id="contenedor-ordens">

<div class="page-header">
	<h2>Detalles de factura</h2>

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
				<th><?php echo $this->Paginator->sort('Producto'); ?></th>
				<th><?php echo $this->Paginator->sort('Cantidad'); ?></th>
				<th><?php echo $this->Paginator->sort('Subtotal'); ?> </th>
		</tr>
		</thead>
		<tbody>
        <?php foreach($ordenitems as $ordenitem): ?>
		<tr>
			<td><?php echo h($ordenitem['Producto']['nombre']); ?></td>
			<td><?php echo h($ordenitem['OrdenItem']['cantidad']); ?></td>
			<td>₡<?php echo h($ordenitem['OrdenItem']['subtotal']); ?></td>
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
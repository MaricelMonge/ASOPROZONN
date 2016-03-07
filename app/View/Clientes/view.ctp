<div class="page-header">
	<h2>Cliente: <?php echo $cliente['Cliente']['nombre'].' '.$cliente['Cliente']['apellido1']; ?></h2>
</div>

<div class="col col-sm-7">
	Identificación: <?php echo $cliente['Cliente']['identificacion']; ?>
	<br />
	<br/>
	Nombre: <?php echo $cliente['Cliente']['nombre']; ?>
	<br />
	<br/>
	Primer Apellido: <?php echo h($cliente['Cliente']['apellido1']); ?>
	<br/>
	<br/>
	Segundo Apellido: <?php echo $cliente['Cliente']['apellido2']; ?>
	<br />
	<br/>
	Teléfono: <?php echo $cliente['Cliente']['telefono']; ?>
	<br />
	<br/>
	Correo Electrónico: <?php echo h($cliente['Cliente']['email']); ?>
	<br/>
	<br/>

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







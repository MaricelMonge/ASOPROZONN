<div class="page-header">
<h2>Socio: <?php echo $socio['Socio']['nombre'].' '.$socio['Socio']['apellido1']; ?></h2>

</div>

<div class="row">

<div class="col col-sm-7">
		<?php echo $this->Html->image('../files/socio/image/' .$socio['Socio']['image_dir'] . '/' . 'vga_' .$socio['Socio']['image'], array('class' => 'img-thumbnail img-responsive')); ?>
		<br/>
		<br/>
		
		<div class="related">
			<h3><?php echo __('Productos'); ?></h3>
				<?php if (!empty($socio['Producto'])): ?>
			<table class="table table-bordered">
				<tr>
					<th><?php echo __('Código'); ?></th>
					<th><?php echo __('Nombre'); ?></th>
					<th><?php echo __('Precio'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($socio['Producto'] as $producto): ?>
				<tr>
					<td><?php echo $producto['codigo']; ?></td>
					<td><?php echo $producto['nombre']; ?></td>
					<td>₡<?php echo $producto['precio']; ?></td>
					<td class="actions">
					<?php echo $this->Html->link(__('Detalles'), array('controller' => 'productos', 'action' => 'view', $producto['codigo']), array('class'=>'btn btn-xs btn-warning')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<?php endif; ?>
		</div>
	</div>

<div class="col col-sm-5">
	N. Expediente: <?php echo h($socio['Socio']['numeroexp']); ?>
	<br/>
	<br/>
	Identificación: <?php echo $socio['Socio']['identificacion']; ?>
	<br />
	<br/>
	Nombre: <?php echo $socio['Socio']['nombre']; ?>
	<br />
	<br/>
	Primer Apellido: <?php echo h($socio['Socio']['apellido1']); ?>
	<br/>
	<br/>
	Segundo Apellido: <?php echo $socio['Socio']['apellido2']; ?>
	<br />
	<br/>
	Teléfono: <?php echo $socio['Socio']['telefono']; ?>
	<br />
	<br/>
	Correo Electrónico: <?php echo h($socio['Socio']['email']); ?>
	<br/>
	<br/>
	Género: <?php echo $socio['Socio']['genero']; ?>
	<br />
	<br/>
	Fecha Ingreso: <?php echo $socio['Socio']['fecha_ingreso']; ?>
	<br />
	<br/>
	Lugar Residencia: <?php echo h($socio['Socio']['lugar_residencia']); ?>
	<br/>
	<br/>
	Trabajadores de Finca: <?php echo $socio['Socio']['trabajadores_finca']; ?>
	<br />
	<br/>
	Área del Terreno: <?php echo h($socio['Socio']['area_terreno']); ?>
	<br/>
	<br/>
	Área Certificada: <?php echo $socio['Socio']['area_certificada']; ?>
	<br />
	<br/>
	Actividad Extra: <?php echo $socio['Socio']['actividad_extra']; ?>
	<br />
	<br/>

	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	    <?php echo __('Acciones'); ?> <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	<li><?php echo $this->Html->link(__('Editar Socio'), array('action' => 'edit', $socio['Socio']['numeroexp'])); ?> </li>
	<li><?php echo $this->Form->postLink(__('Eliminar Socio'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Esta seguro de eliminar # %s?', $socio['Socio']['numeroexp']))); ?> </li>
	<li><?php echo $this->Html->link(__('Lista de Socios'), array('action' => 'index')); ?> </li>
	<li class="divider"></li>
	<li><?php echo $this->Html->link(__('Lista de Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
	</div>

</div>

</div>

</div>



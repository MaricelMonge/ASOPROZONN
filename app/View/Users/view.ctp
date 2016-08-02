<div class="page-header">
	<font color="green">
		<h2>Socio: <?php echo $user['User']['nombre1']; ?></h2>
	</font>
</div>

<div class="row">
<div class="col col-sm-6">
	<p  align="center">
		<?php 
			if (!empty($user['User']['image_dir'])){
				echo $this->Html->image('../files/user/image/' .$user['User']['image_dir'] . '/'.$user['User']['image'], array('style'=>'height: 250px; width: 65%;'));
			}else{
				echo $this->Html->image('icono.jpg', array('style'=>'height: 250px; width: 65%;'));
			}?>
	</p>
		<br/>
		<br/>
		<div class="related">
			<?php if (!empty($user['Producto'])): ?>
			<font color="green">
				<h3><?php echo __('Productos'); ?></h3>
			</font>
			<table class="table table-striped">
				<tr>
					<th><?php echo __('Código'); ?></th>
					<th><?php echo __('Nombre'); ?></th>
					<th><?php echo __('Precio'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($user['Producto'] as $producto): ?>
				<tr>
					<td><?php echo $producto['codigo']; ?></td>
					<td><?php echo $producto['nombre']; ?></td>
					<td>₡<?php echo $producto['precio']; ?></td>
					<td class="actions">
					<?php echo $this->Html->link(__('Detalles'), array('controller' => 'productos', 'action' => 'view', $producto['codigo']), array('class'=>'btn btn-xs btn-primary')); ?>
					</td>
				</tr>
				<?php endforeach; ?>	
			</table>
			<?php endif; ?>	
		</div>
		</br>
			<?php if (!empty($pagos)): ?>
				<font color="green">
					<h3><?php echo __('Pagos'); ?></h3>
				</font>
				<table class="table table-striped">
					<tr>
						<th><?php echo __('Número de pago'); ?></th>
						<th><?php echo __('Certificación'); ?></th>
						<th><?php echo __('Cuota mensual'); ?></th>
						<th><?php echo __('Interés acumulado'); ?></th>
						<th><?php echo __('Otros pagos'); ?></th>
						<th><?php echo __('Fecha'); ?></th>
					</tr>
					<?php for($i=0; $i<count($pagos); $i++){?>
		
					<tr>
						<td><?php echo $pagos[$i]['id']; ?></td>
						<td><?php echo $pagos[$i]['certificacion']; ?></td>
						<td><?php echo $pagos[$i]['cuotaMensual']; ?></td>
						<td><?php echo $pagos[$i]['interesAcumulado']; ?></td>
						<td><?php echo $pagos[$i]['otrosPagos']; ?></td>
						<td><?php echo $pagos[$i]['created']; ?></td>
					</tr>
				<?php }?>
				</table>
			<?php endif; ?>
		</div>	
		
		<div class="col col-sm-6">
			N. Expediente: <?php echo h($user['User']['id']); ?>
			<br/>
			<br/>
			Nombre: <?php echo $user['User']['nombre1']; ?>
			<br />
			<br/>
			Teléfono: <?php echo $user['User']['telefono']; ?>
			<br />
			<br/>
			Correo Electrónico: <?php echo h($user['User']['email']); ?>
			<br/>
			<br/>
			Género: <?php echo $user['User']['genero']; ?>
			<br />
			<br/>
			Fecha Ingreso: <?php echo $user['User']['fecha_ingreso']; ?>
			<br />
			<br/>
			Lugar Residencia: <?php echo h($user['User']['lugar_residencia']); ?>
			<br/>
			<br/>
			Trabajadores de Finca: <?php echo $user['User']['trabajadores_finca']; ?>
			<br />
			<br/>
			Área del Terreno: <?php echo h($user['User']['area_terreno']); ?>
			<br/>
			<br/>
			Área Certificada: <?php echo $user['User']['area_certificada']; ?>
			<br />
			<br/>
			Actividad Extra: <?php echo $user['User']['actividad_extra']; ?>
			<br />
			<br/>
		</div>
	</div>

</div>
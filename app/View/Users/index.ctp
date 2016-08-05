<div id="contenedor-users">
	<div class="page-header">
		<font color="green">
			<h2><?php echo __('Socios'); ?></h2>
		</font>
	</div>
	<div class="col-md-20">
		<div class="progress oculto" id="procesando">
			 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
				<span class="sr-only">100% Complete</span>
		  	</div>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
					<th><?php echo $this->Paginator->sort('Imagen'); ?></th>
					<th class="actions"><?php echo __('Actividad'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['nombre1']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['telefono']); ?>&nbsp;</td>
						<td><?php 
								if (!empty($user['User']['image_dir'])){
									echo $this->Html->image('../files/user/image/' . $user['User']['image_dir'].'/'.$user['User']['image'], array('style'=>'height: 100px; width: 80%;'));
								}else{
									echo $this->Html->image('icono.jpg', array('style'=>'height: 100px; width: 80%;'));
									}?>
						</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $user['User']['id']), array('class'=>'btn btn-xs btn-primary')); ?>
							<!--<?php //echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']), array('class'=>'btn btn-xs btn-success')); ?>-->
							<?php if($current_user['role']=='Administrador'){?>
								<?php echo $this->Html->link(__('Editar Rol'), array('action' => 'edit_role', $user['User']['id']), array('class'=>'btn btn-xs btn-success')); ?>
								<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Esta seguro de eliminar a # %s?', $user['User']['id']),'class'=>'btn btn-xs btn-danger')); ?>
							<?php }?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<p align=center>
		<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}')));?>	
	</p>
	<div class="paging" align=center>
		<?php
			echo $this->Paginator->prev('< ' .__('Anterior'), array(), null, array('class' => 'btn btn-xs btn-info'));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
		?>
	</div>
</div>
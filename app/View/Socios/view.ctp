<div class="socios view">
<h2><?php echo __('Socio'); ?></h2>
	<dl>
		<dt><?php echo __('Numeroexp'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['numeroexp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido1'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['apellido1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido2'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['apellido2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar Residencia'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['lugar_residencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trabajadores Finca'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['trabajadores_finca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Terreno'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['area_terreno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Certificada'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['area_certificada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad Extra'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['actividad_extra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Dir'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['image_dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Socio'), array('action' => 'edit', $socio['Socio']['numeroexp'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Socio'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Are you sure you want to delete # %s?', $socio['Socio']['numeroexp']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?> </li>
	</ul>
</div>

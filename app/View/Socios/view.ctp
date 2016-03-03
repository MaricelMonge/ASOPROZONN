<div class="socios view">
<h2><?php echo __('Información del Socio'); ?></h2>
	<dl>
		<dt><?php echo __('N. Expediente'); ?> &nbsp;</dt>
		<dd><?php echo h($socio['Socio']['numeroexp']); ?></dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd><?php echo h($socio['Socio']['identificacion']); ?>&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd><?php echo h($socio['Socio']['nombre']); ?>&nbsp;</dd>
		<dt><?php echo __('Primer Apellido'); ?></dt>
		<dd><?php echo h($socio['Socio']['apellido1']); ?>&nbsp;</dd>
		<dt><?php echo __('Segundo Apellido'); ?></dt>
		<dd><?php echo h($socio['Socio']['apellido2']); ?>&nbsp;</dd>
		<dt><?php echo __('Telefonos'); ?></dt>
		<dd><?php echo h($socio['Socio']['telefono']); ?>&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd><?php echo h($socio['Socio']['email']); ?>&nbsp;</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd><?php echo h($socio['Socio']['genero']); ?>&nbsp;</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd><?php echo h($socio['Socio']['fecha_ingreso']); ?>&nbsp;</dd>
		<dt><?php echo __('Lugar Residencia'); ?></dt>
		<dd><?php echo h($socio['Socio']['lugar_residencia']); ?>&nbsp;</dd>
		<dt><?php echo __('Trabajadores Finca'); ?></dt>
		<dd><?php echo h($socio['Socio']['trabajadores_finca']); ?>&nbsp;</dd>
		<dt><?php echo __('Area Terreno'); ?></dt>
		<dd><?php echo h($socio['Socio']['area_terreno']); ?>&nbsp;</dd>
		<dt><?php echo __('Area Certificada'); ?></dt>
		<dd><?php echo h($socio['Socio']['area_certificada']); ?>&nbsp;</dd>
		<dt><?php echo __('Actividad Extra'); ?></dt>
		<dd><?php echo h($socio['Socio']['actividad_extra']); ?>&nbsp;</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actividad'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Socio'), array('action' => 'edit', $socio['Socio']['numeroexp'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Socio'), array('action' => 'delete', $socio['Socio']['numeroexp']), array('confirm' => __('Esta seguro de eliminar # %s?', $socio['Socio']['numeroexp']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Socios'), array('action' => 'index')); ?> </li>
	</ul>
</div>

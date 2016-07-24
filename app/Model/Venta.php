<?php
class Venta extends AppModel{
    
			
	public $hasMany = array(
			'OrdenItem'=>array(
				'className'=>'OrdenItem',
				'foreignKey'=>'venta_id',
				'dependent'=>false,
				
				)
			);
			
		public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);		
    
}
?>
<?php
class Venta extends AppModel{
    
			
	public $hasMany = array(
			'OrdenItem'=>array(
				'className'=>'OrdenItem',
				'foreignKey'=>'venta_id',
				'dependent'=>false,
				
				)
			);		
    
}
?>
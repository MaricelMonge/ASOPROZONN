<?php
class OrdenItem extends AppModel{
    
    public $belongsTo = array(
			'Venta'=>array(
				'className'=>'Venta',
				'foreignKey'=>'venta_id',
				'dependent'=>false,
				
				),
			'Producto'=>array(
				'className'=>'Producto',
				'foreignKey'=>'producto_id',
				'dependent'=>false,
				)	
			);
    
}
?>
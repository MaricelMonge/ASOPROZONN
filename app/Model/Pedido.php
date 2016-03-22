<?php
class Pedido extends AppModel{
    
    public $belongsTo = array(
        'Producto' => array(
            'className'=>'Producto',
            'foreignKey'=>'producto_id'
            
            )
        
        );
    
    
}



?>
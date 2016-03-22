<?php 
class PedidosController extends AppController{
    public $components = array('Session','RequesHandler');
    public $helpers =array('Html','Form', 'Time');
    


public function add(){
    
    	if ($this->request->is('ajax'))
		{
			$id = $this->request->data['id'];
			$cantidad =$this-> request->data ['cantidad'];
			$producto = $this ->Pedido->Producto->find('all', array('fields' => array('Producto.precio'), 'conditions'=>array('Producto.codigo' => $id)));
			$precio = $producto[0]['Producto']['precio'];
			$subtotal=$cantidad*$precio;
		
			$pedido=array('producto_id'=> $id, 'cantidad' => $cantidad, 'subtotal' => $subtotal);
			
			
				$this->Pedido->save($pedido);
		
			
		}
			
		$this->autoRender=false;
    
}

public function view(){
    
    
}

    
    
}?>

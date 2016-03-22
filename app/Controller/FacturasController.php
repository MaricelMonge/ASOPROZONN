<?php
App::uses('AppController', 'Controller');
	

/**
 * Facturas Controller
 *
 * @property Factura $Factura
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class FacturasController extends AppController {

    public $components = array('Session', 'RequestHandler');
	public $helpers = array('Html', 'Form', 'Time');


	public function add() {
		if ($this->request->is('ajax'))
		{
			$id = $this->request->data['id'];
			$cantidad =$this-> request->data ['cantidad'];
			$producto = $this ->Factura->Producto->find('all', array('fields' => array('Producto.precio'), 'conditions'=>array('Producto.codigo' => $id)));
			$precio = $producto[0]['Producto']['precio'];
			$subtotal=$cantidad*$precio;
		
			$factura=array('codigo_id'=> $id, 'cantidad' => $cantidad, 'subtotal' => $subtotal);
			
			$existe_factura = $this->Factura->find('all', array('fields' => array('Factura.codigo_id'), 'conditions' => array('Factura.codigo_id'=>$id)));
			
			
			if(count($existe_factura)==0){
				$this->Factura->save($factura);
			}
			
		}
			
		$this->autoRender=false;
	
	}


public function view(){
	 $res_pedidos = $this->Factura->find('all');
        
        if(count($res_pedidos) == 0)
        {
            $this->Session->setFlash('Aún no se realizaron pedidos', 'default', array('class' => 'alert alert-warning'));
            return $this->redirect(array('controller' => 'productos', 'action' => 'index'));
        }
        
        
        $this->set('facturas', $this->Factura->find('all', array('order' => 'Factura.id ASC')));
        
        $total_pedidos = $this->Factura->find('all', array('fields' => array('SUM(Factura.subtotal) as subtotal')));
        $mostrar_total_pedidos = $total_pedidos[0][0]['subtotal'];
        
        $this->set('total_pedidos', $mostrar_total_pedidos);

	
	
}

	
	
	
	
}
?>

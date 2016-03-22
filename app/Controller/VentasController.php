<?php
class VentasController extends AppController {
    
    public $components = array('Session','RequestHandler');
	public $helpers=array('Html', 'Form', 'Time', 'Js');
	
	 public $paginate = array(
            'limit' => 3,
            'order' => array(
                'Venta.id' => 'desc'
            )
        );
	
	
	public function index(){
	    $this->Venta->recursive = 0;
        
        $this->paginate['Venta']['limit'] = 3;
        $this->paginate['Venta']['order'] = array('Venta.id' => 'desc');
        $this->set('ventas', $this->paginate());
	    
	}
	
    public function add(){
        $this->loadModel('Pedido','RequestHandler');
        
         $orden_item = $this->Pedido->find('all', array('order' => 'Pedido.id ASC'));
        
        //debug($orden_item);
        
        if(count($orden_item) > 0)
        {
            $total_pedidos = $this->Pedido->find('all', array('fields' => array('SUM(Pedido.subtotal) as subtotal')));
            $mostrar_total_pedidos = $total_pedidos[0][0]['subtotal'];
            
            $this->set(compact('orden_item', 'mostrar_total_pedidos'));
        }
        else
        {
            $this->Session->setFlash('Ninguna venta ha sido procesada', 'default', array('class' => 'alert alert-danger'));
            return $this->redirect(array('controller' => 'productos', 'action' => 'index'));
        }
        
    
         if($this->request->is('post'))
        {
            $this->Venta->create();
            if($this->Venta->save($this->request->data))
            {
                $id_venta = $this->Venta->id;
                
                for($i = 0; $i < count($orden_item); $i++)
                {
                    $producto_id = $orden_item[$i]['Pedido']['producto_id'];
                    $cantidad = $orden_item[$i]['Pedido']['cantidad'];
                    $subtotal = $orden_item[$i]['Pedido']['subtotal'];
                    
                    $orden_items = array('producto_id' => $producto_id, 'venta_id' => $id_venta, 'cantidad' => $cantidad, 'subtotal' => $subtotal);
                    $this->Venta->OrdenItem->saveAll($orden_items);
                }
                
                //Eliminando el contenido de la tabla pedidos
                $this->Pedido->deleteAll(1, false);
                
                $this->Session->setFlash('El pedido fue procesado con éxito', 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('controller' => 'productos', 'action' => 'index'));
            }
            else
            {
                $this->Session->setFlash('El pedido no pudo ser procesado.'. 'default', array('class' => 'alert alert-danger'));
            } 
        }
        
    }
    
}

?>
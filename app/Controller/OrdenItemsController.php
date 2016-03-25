<?php
class OrdenItemsController extends AppController {
    
    public $components = array('Session', 'RequestHandler');
    public $helpers = array('Html', 'Form', 'Time', 'Js');
    
    public $paginate = array(
            'limit' => 7,
            'order' => array(
                'OrdenItem.id' => 'asc'
            )
        );
    public function view($id = null)
    {
        $this->OrdenItem->recursive = 2;
        
        if(!$this->OrdenItem->exists($id))
        {
            throw new NotFoundException('Factura invalida');
        }
        
        $this->paginate['OrdenItem']['limit'] = 7;
        $this->paginate['OrdenItem']['conditions'] = array('OrdenItem.venta_id' => $id);
        $this->paginate['OrdenItem']['order'] = array('OrdenItem.id' => 'asc');
        $this->set('ordenitems', $this->paginate());
    }
    
}
?>
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
        
        
    public function isAuthorized($user){
		if($user['role'] == 'Administrador'){
			if(in_array($this->action, array('view'))){
				return true;
			}
			else{
				if($this->Auth->user('id')){
					$this->Session->setFlash('No puede acceder a la página solicitada', 'default', array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		if($user['role'] == 'Socio'){
			if(in_array($this->action, array())){
				return true;
			}
			else{
				if($this->Auth->user('id')){
					$this->Session->setFlash('No puede acceder a la página solicitada', 'default', array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		return parent::isAuthorized($user);
	}    
        
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
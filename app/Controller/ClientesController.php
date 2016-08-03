<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ClientesController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components = array('RequestHandler','Session');
	public function isAuthorized($user){
		if($user['role'] == 'Administrador'){
			if(in_array($this->action, array('add', 'index', 'view', 'edit', 'delete'))){
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
		

 	  public $paginate = array(
        'limit' => 7,
        'order' => array(
            'Cliente.identificacion' => 'asc'
        )
    );
 
	public function index() {
		$this->Cliente->recursive = 0;
		$this->paginate['Cliente']['limit']=7;
		$this->paginate['Cliente']['order']=array('Cliente.identificacion'=>'asc');
		$this->set('clientes', $this->paginate());
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->loadModel('Venta');
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$ventas=[];
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$venta = $this->Venta->find('all', array('conditions' => array('Venta.cliente_id' => $id)));
		for($i=0; $i<count($venta); $i++){
			array_push($ventas, $venta[$i]['Venta']);
		}
		$this->set('cliente', $this->Cliente->find('first', $options));
		$this->set('ventas',$ventas);
		// return debug(count($ventas));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash('El cliente se guardo correctamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El cliente no se guardo. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash('El cliente se guardó correctamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El cliente no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash('El cliente se eliminó correctamente.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El cliente no se eliminó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

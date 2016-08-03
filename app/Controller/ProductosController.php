<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'RequestHandler');
	public $helpers=array('Html', 'Form', 'Time', 'Js');
	
	public function isAuthorized($user){
		if($user['role'] == 'Administrador'){
			if(in_array($this->action, array('add', 'index', 'view', 'edit', 'delete', 'edit_image'))){
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
			if(in_array($this->action, array('view', 'index'))){
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
        	'limit' => 5,
        	'order' => array(
            'Producto.codigo' => 'desc'
        )
    );
 
 /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Producto->recursive = 0;
		$this->paginate['Producto']['limit']=5;
		$this->paginate['Producto']['order']=array('Producto.codigo'=>'desc');
		$this->set('productos', $this->paginate());
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash('El producto se guardó correctamente.', 'default', array('class' => 'alert alert-success'));	
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El producto no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Producto->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash('El producto se guardó correctamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El producto no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$users = $this->Producto->User->find('list');
		$this->set(compact('users'));
	}
	
	public function edit_image($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash('El producto se guardó correctamente.', 'default', array('class' => 'alert alert-success'));	
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El producto no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
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
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash('El producto se eliminó correctamente.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El producto no se eliminó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

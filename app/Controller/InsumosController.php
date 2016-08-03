<?php
App::uses('AppController', 'Controller');
/**
 * Insumos Controller
 *
 * @property Insumo $Insumo
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class InsumosController extends AppController {

/**
 * Components
 *
 * @var array
 */
		public $components = array('RequestHandler','Session');
		public $helpers=array('Html', 'Form', 'Time', 'Js');

/**
 * index method
 *
 * @return void
 */

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
            'Insumo.codigo' => 'asc'
        )
    );
 
	public function index() {
		$this->Insumo->recursive = 0;
		$this->paginate['Insumo']['limit']=5;
		$this->paginate['Insumo']['order']=array('Insumo.codigo'=>'asc');
		$this->set('insumos', $this->paginate());
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid insumo'));
		}
		$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
		$this->set('insumo', $this->Insumo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Insumo->create();
			if ($this->Insumo->save($this->request->data)) {
				$this->Session->setFlash('El insumo se guardó correctamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El insumo no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$proveedores = $this->Insumo->Proveedore->find('list');
		$this->set(compact('proveedores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid insumo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Insumo->save($this->request->data)) {
				$this->Session->setFlash('El insumo se guardó correctamente.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El insumo no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
			$this->request->data = $this->Insumo->find('first', $options);
		}
		$proveedores = $this->Insumo->Proveedore->find('list');
		$this->set(compact('proveedores'));
	}
	
	public function edit_image($id = null) {
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid insumo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Insumo->save($this->request->data)) {
				$this->Session->setFlash('El insumo se guardó correctamente.', 'default', array('class' => 'alert alert-success'));	
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El insumo no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
			$this->request->data = $this->Insumo->find('first', $options);
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
		$this->Insumo->id = $id;
		if (!$this->Insumo->exists()) {
			throw new NotFoundException(__('Invalid insumo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Insumo->delete()) {
			$this->Session->setFlash('El insumo se eliminó correctamente.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El insumo no se eliminó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

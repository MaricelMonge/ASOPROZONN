<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	public $helpers=array('Html', 'Form', 'Time', 'Js');
	
	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('add');
	}
	
	public function isAuthorized($user)
	{
		if($user['role'] == 'Administrador')
		{
			if(in_array($this->action, array('add', 'index', 'view', 'edit')))
			{
				return true;
			}
			else
			{
				if($this->Auth->user('id'))
				{
					$this->Session->setFlash('No puede acceder', 'default', array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		if($user['role'] == 'Socio')
		{
			if(in_array($this->action, array('view', 'edit', 'index')))
			{
				return true;
			}
			else
			{
				if($this->Auth->user('id'))
				{
					$this->Session->setFlash('No puede acceder', 'default', array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		
		return parent::isAuthorized($user);
	}
	
	public function login()
	{
		if($this->request->is('post'))
		{
			if($this->Auth->login())
			{
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash('Usuario y/o contraseña son incorrectos!', 'default', array('class' => 'alert alert-danger'));
		}
	}
	
	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
 
  	 public $paginate = array(
        'limit' => 5,
        'order' => array(
            'User.id' => 'desc'
        )
    );
 
	public function index() {
		$this->User->recursive = 0;
		$this->paginate['User']['limit']=5;
		$this->paginate['User']['order']=array('User.id'=>'desc');
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function view($id = null) {
		$this->loadModel('Pago');
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid socio'));
		}
		$pagos=[];
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$pago = $this->Pago->find('all', array('conditions' => array('Pago.user_id' => $id)));
		for($i=0; $i<count($pago); $i++){
			array_push($pagos, $pago[$i]['Pago']);
		}
		// $user=$this->User->find('first', $options);
		$this->set('user', $this->User->find('first', $options));
		$this->set('pagos',$pagos);
		// return debug($user);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Producto');
		if ($this->request->is('post')) {
			$this->User->create();
				$this->request->data['User']['role'] = 'Socio';
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El socio se guardó correctamente.', 'default', array('class' => 'alert alert-success'));	
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El socio no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$productos = $this->User->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El socio se guardó correctamente.', 'default', array('class' => 'alert alert-success'));	
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El socio no se guardó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$productos = $this->User->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash('El socio se eliminó correctamente.', 'default', array('class' => 'alert alert-success'));	
		} else {
			$this->Session->setFlash('El socio no se eliminó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

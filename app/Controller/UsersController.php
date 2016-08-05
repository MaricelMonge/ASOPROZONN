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
	public $components = array('Flash', 'Session');
	public $helpers=array('Html', 'Form', 'Time', 'Js');

	public function isAuthorized($user){
		if($user['role'] == 'Administrador'){
			if(in_array($this->action, array('add', 'index', 'view', 'edit', 'edit_role', 'delete', 'edit_image', 'new_password'))){
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
			if(in_array($this->action, array('view', 'edit', 'index', 'edit_image', 'new_password'))){
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
	
	public function login()
	{
		if($this->request->is('post'))
		{
			if($this->Auth->login())
			{
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash('Usuario y/o contraseña son incorrectos.', 'default', array('class' => 'alert alert-danger'));
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
				$this->request->data['User']['password'] = 'asoprozonn';
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
	
	public function edit_role($id = null) {
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
	}
	
		public function edit_image($id = null) {
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
	}
	
	public function new_password()
 	{ 
 		// return debug($this->request->data);
 		$this->User->recursive=-1;
        $passwordHasher = new BlowfishPasswordHasher();
        if ($this->request->is(array('post', 'put'))) {
        //Hashea la nueva contraseña.
	   	$pass1 = $passwordHasher->hash(
	            $this->request->data['User']['new_password']);
	    //Crea una contraseña hasheada con respecto al key utilizado en la nueva contraseña ($pass1).
	    $pass2 = Security::hash($this->request->data['User']['repeat_password'],'blowfish',$pass1);
 		//Compara que las contraseña ingresada por el usuario sea igual a la almacenada por la base de datos.
 		$pass=$this->User->find('first', array('conditions' => array('User.username' => $_SESSION['Auth']['User']['username'])));
 		
 		//Contraseña ya hasheada para comparar por la existente en la base de datos.
 		$pass40=Security::hash($this->request->data['User']['actual_password'],'blowfish',$pass['User']['password']);
 		//Compara la cotraseña ingresada con la que se encuentra almacenada en la base de datos.
 		if($pass40 == $pass['User']['password'])
 		{
 			//Compara que las contraseñas ingresadas por el usuario sean iguales.
 			if($pass1 == $pass2)
 			{

 				$this->User->id = $pass['User']['id'];
 				if($this->User->savefield('password',$this->request->data['User']['repeat_password']))
 				{
 					//En caso de que lograra modificar la contraseña, se devuelve a su perfil.
                    $this->Flash->success(__('La contraseña ha sido actualizada.'));
					return $this->redirect(array('action' => 'index'));
 				}
 				 else 
 				 {
 				 	//En caso de que no lograra moficar su contraseña, se le notifica.
					$this->Flash->error(__('Imposible actualizar la contraseña. Contacte al administrador del sitio.'));
					return $this->redirect(array('action' => 'index'));
 				 }
 			}
 			else
 			{
 				//Si las contraseñas ingresadas no son iguales notifica al usuario
 				$this->Flash->error(__('Las contraseñas ingresadas no son iguales.'));
				return $this->redirect(array('action' => 'index'));
 			}
 		}
 		else
 		{ 
 				//Si la contraseña no corresponde a la contraseña gusrdada notifica al usuario con un mensaje de error
 				$this->Flash->error(__('La contraseña ingresada no es igual a la almacenada en el sistema.'));
 				return $this->redirect(array('action' => 'index'));
 		}
 		
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

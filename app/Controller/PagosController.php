<?php
App::uses('AppController', 'Controller');
/**
 * Pagos Controller
 *
 * @property Pago $Pago
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PagosController extends AppController {

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
	public $paginate = array(
    	'limit' => 8,
    	'order' => array(
        'Socio.numeroexp' => 'desc'
    	)
    );
 
	public function index() {
		$this->Pago->recursive = 0;
		$this->paginate['Pago']['limit']=8;
		$this->paginate['Pago']['order']=array('Pago.id'=>'desc');
		$this->set('pagos', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pago->create();
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash('El pago se realizó correctamente.', 'default', array('class' => 'alert alert-success'));
				// $this->Flash->success(__('El pago se realizó correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El pago no se realizó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Pago->User->find('list');
		$this->set(compact('users'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pago->id = $id;
		if (!$this->Pago->exists()) {
			throw new NotFoundException(__('Invalid pago'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pago->delete()) {
			$this->Session->setFlash('El pago se eliminó correctamente.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El pago no se eliminó. Por favor vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Socios Controller
 *
 * @property Socio $Socio
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SociosController extends AppController {

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
        'limit' => 3,
        'order' => array(
            'Socio.numeroexp' => 'asc'
        )
    );
 
	public function index() {
		$this->Socio->recursive = 0;
		$this->paginate['Socio']['limit']=3;
		$this->paginate['Socio']['order']=array('Socio.numeroexp'=>'asc');
		$this->set('socios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Socio->exists($id)) {
			throw new NotFoundException(__('Invalid socio'));
		}
		$options = array('conditions' => array('Socio.' . $this->Socio->primaryKey => $id));
		$this->set('socio', $this->Socio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Producto','RequestHandler');
		if ($this->request->is('post')) {
			$this->Socio->create();
			if ($this->Socio->save($this->request->data)) {
				$this->Flash->success(__('The socio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The socio could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Socio->Producto->find('list');
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
		if (!$this->Socio->exists($id)) {
			throw new NotFoundException(__('Invalid socio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Socio->save($this->request->data)) {
				$this->Flash->success(__('The socio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The socio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Socio.' . $this->Socio->primaryKey => $id));
			$this->request->data = $this->Socio->find('first', $options);
		}
		$productos = $this->Socio->Producto->find('list');
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
		$this->Socio->id = $id;
		if (!$this->Socio->exists()) {
			throw new NotFoundException(__('Invalid socio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Socio->delete()) {
			$this->Flash->success(__('The socio has been deleted.'));
		} else {
			$this->Flash->error(__('The socio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

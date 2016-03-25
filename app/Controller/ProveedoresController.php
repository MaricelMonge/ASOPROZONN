<?php
App::uses('AppController', 'Controller');
/**
 * Proveedores Controller
 *
 * @property Proveedore $Proveedore
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProveedoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
 	public $components = array('RequestHandler','Session');
	public $helpers=array('Html', 'Form', 'Time', 'Js');
 
 	  public $paginate = array(
        'limit' => 7,
        'order' => array(
            'Proveedore.identificacion' => 'asc'
        )
    );
 
	public function index() {
		$this->Proveedore->recursive = 0;
		$this->paginate['Proveedore']['limit']=7;
		$this->paginate['Proveedore']['order']=array('Proveedore.identificacion'=>'asc');
		$this->set('proveedores', $this->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proveedore->exists($id)) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		$options = array('conditions' => array('Proveedore.' . $this->Proveedore->primaryKey => $id));
		$this->set('proveedore', $this->Proveedore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proveedore->create();
			if ($this->Proveedore->save($this->request->data)) {
				$this->Flash->success(__('The proveedore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The proveedore could not be saved. Please, try again.'));
			}
		}
		$insumos = $this->Proveedore->Insumo->find('list');
		$this->set(compact('insumos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proveedore->exists($id)) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proveedore->save($this->request->data)) {
				$this->Flash->success(__('The proveedore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The proveedore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proveedore.' . $this->Proveedore->primaryKey => $id));
			$this->request->data = $this->Proveedore->find('first', $options);
		}
		$insumos = $this->Proveedore->Insumo->find('list');
		$this->set(compact('insumos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proveedore->id = $id;
		if (!$this->Proveedore->exists()) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proveedore->delete()) {
			$this->Flash->success(__('The proveedore has been deleted.'));
		} else {
			$this->Flash->error(__('The proveedore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Orderdetails Controller
 *
 * @property Orderdetail $Orderdetail
 * @property PaginatorComponent $Paginator
 */
class OrderdetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Orderdetail->recursive = 0;
		$this->set('orderdetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Orderdetail->exists($id)) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		$options = array('conditions' => array('Orderdetail.' . $this->Orderdetail->primaryKey => $id));
		$this->set('orderdetail', $this->Orderdetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Orderdetail->create();
			if ($this->Orderdetail->save($this->request->data)) {
				$this->Flash->success(__('The orderdetail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The orderdetail could not be saved. Please, try again.'));
			}
		}
		$orders = $this->Orderdetail->Order->find('list');
		$products = $this->Orderdetail->Product->find('list');
		$this->set(compact('orders', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Orderdetail->exists($id)) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Orderdetail->save($this->request->data)) {
				$this->Flash->success(__('The orderdetail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The orderdetail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Orderdetail.' . $this->Orderdetail->primaryKey => $id));
			$this->request->data = $this->Orderdetail->find('first', $options);
		}
		$orders = $this->Orderdetail->Order->find('list');
		$products = $this->Orderdetail->Product->find('list');
		$this->set(compact('orders', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Orderdetail->id = $id;
		if (!$this->Orderdetail->exists()) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Orderdetail->delete()) {
			$this->Flash->success(__('The orderdetail has been deleted.'));
		} else {
			$this->Flash->error(__('The orderdetail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

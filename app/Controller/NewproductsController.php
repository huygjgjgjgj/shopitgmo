<?php
App::uses('AppController', 'Controller');
/**
 * Newproducts Controller
 *
 * @property Newproduct $Newproduct
 * @property PaginatorComponent $Paginator
 */
class NewproductsController extends AppController {

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
		$this->Newproduct->recursive = 0;
		$this->set('newproducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Newproduct->exists($id)) {
			throw new NotFoundException(__('Invalid newproduct'));
		}
		$options = array('conditions' => array('Newproduct.' . $this->Newproduct->primaryKey => $id));
		$this->set('newproduct', $this->Newproduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Newproduct->create();
			if ($this->Newproduct->save($this->request->data)) {
				$this->Flash->success(__('The newproduct has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The newproduct could not be saved. Please, try again.'));
			}
		}
		$products = $this->Newproduct->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Newproduct->exists($id)) {
			throw new NotFoundException(__('Invalid newproduct'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newproduct->save($this->request->data)) {
				$this->Flash->success(__('The newproduct has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The newproduct could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newproduct.' . $this->Newproduct->primaryKey => $id));
			$this->request->data = $this->Newproduct->find('first', $options);
		}
		$products = $this->Newproduct->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Newproduct->id = $id;
		if (!$this->Newproduct->exists()) {
			throw new NotFoundException(__('Invalid newproduct'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Newproduct->delete()) {
			$this->Flash->success(__('The newproduct has been deleted.'));
		} else {
			$this->Flash->error(__('The newproduct could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

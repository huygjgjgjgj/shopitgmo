<?php
App::uses('AppController', 'Controller');
/**
 * Specialproducts Controller
 *
 * @property Specialproduct $Specialproduct
 * @property PaginatorComponent $Paginator
 */
class SpecialproductsController extends AppController {

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
		$this->Specialproduct->recursive = 0;
		$this->set('specialproducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Specialproduct->exists($id)) {
			throw new NotFoundException(__('Invalid specialproduct'));
		}
		$options = array('conditions' => array('Specialproduct.' . $this->Specialproduct->primaryKey => $id));
		$this->set('specialproduct', $this->Specialproduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Specialproduct->create();
			if ($this->Specialproduct->save($this->request->data)) {
				$this->Flash->success(__('The specialproduct has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The specialproduct could not be saved. Please, try again.'));
			}
		}
		$products = $this->Specialproduct->Product->find('list');
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
		if (!$this->Specialproduct->exists($id)) {
			throw new NotFoundException(__('Invalid specialproduct'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Specialproduct->save($this->request->data)) {
				$this->Flash->success(__('The specialproduct has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The specialproduct could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Specialproduct.' . $this->Specialproduct->primaryKey => $id));
			$this->request->data = $this->Specialproduct->find('first', $options);
		}
		$products = $this->Specialproduct->Product->find('list');
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
		$this->Specialproduct->id = $id;
		if (!$this->Specialproduct->exists()) {
			throw new NotFoundException(__('Invalid specialproduct'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Specialproduct->delete()) {
			$this->Flash->success(__('The specialproduct has been deleted.'));
		} else {
			$this->Flash->error(__('The specialproduct could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Contentcategories Controller
 *
 * @property Contentcategory $Contentcategory
 * @property PaginatorComponent $Paginator
 */
class ContentcategoriesController extends AppController {

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
		$this->Contentcategory->recursive = 0;
		$this->set('contentcategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contentcategory->exists($id)) {
			throw new NotFoundException(__('Invalid contentcategory'));
		}
		$options = array('conditions' => array('Contentcategory.' . $this->Contentcategory->primaryKey => $id));
		$this->set('contentcategory', $this->Contentcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contentcategory->create();
			if ($this->Contentcategory->save($this->request->data)) {
				$this->Flash->success(__('The contentcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contentcategory could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contentcategory->exists($id)) {
			throw new NotFoundException(__('Invalid contentcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contentcategory->save($this->request->data)) {
				$this->Flash->success(__('The contentcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contentcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contentcategory.' . $this->Contentcategory->primaryKey => $id));
			$this->request->data = $this->Contentcategory->find('first', $options);
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
		$this->Contentcategory->id = $id;
		if (!$this->Contentcategory->exists()) {
			throw new NotFoundException(__('Invalid contentcategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contentcategory->delete()) {
			$this->Flash->success(__('The contentcategory has been deleted.'));
		} else {
			$this->Flash->error(__('The contentcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

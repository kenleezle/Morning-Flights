<?php
App::uses('AppController', 'Controller');
/**
 * Mfcounters Controller
 *
 * @property Mfcounter $Mfcounter
 * @property PaginatorComponent $Paginator
 */
class MfcountersController extends AppController {

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
		$this->Mfcounter->recursive = 0;
		$this->set('mfcounters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mfcounter->exists($id)) {
			throw new NotFoundException(__('Invalid mfcounter'));
		}
		$options = array('conditions' => array('Mfcounter.' . $this->Mfcounter->primaryKey => $id));
		$this->set('mfcounter', $this->Mfcounter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mfcounter->create();
			if ($this->Mfcounter->save($this->request->data)) {
				$this->Session->setFlash(__('The mfcounter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfcounter could not be saved. Please, try again.'));
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
		if (!$this->Mfcounter->exists($id)) {
			throw new NotFoundException(__('Invalid mfcounter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mfcounter->save($this->request->data)) {
				$this->Session->setFlash(__('The mfcounter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfcounter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mfcounter.' . $this->Mfcounter->primaryKey => $id));
			$this->request->data = $this->Mfcounter->find('first', $options);
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
		$this->Mfcounter->id = $id;
		if (!$this->Mfcounter->exists()) {
			throw new NotFoundException(__('Invalid mfcounter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mfcounter->delete()) {
			$this->Session->setFlash(__('The mfcounter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mfcounter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

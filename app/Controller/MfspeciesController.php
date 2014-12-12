<?php
App::uses('AppController', 'Controller');
/**
 * Mfspecies Controller
 *
 * @property Mfspecy $Mfspecy
 * @property PaginatorComponent $Paginator
 */
class MfspeciesController extends AppController {

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
		$this->Mfspecy->recursive = 0;
		$this->set('mfspecies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mfspecy->exists($id)) {
			throw new NotFoundException(__('Invalid mfspecy'));
		}
		$options = array('conditions' => array('Mfspecy.' . $this->Mfspecy->primaryKey => $id));
		$this->set('mfspecy', $this->Mfspecy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mfspecy->create();
			if ($this->Mfspecy->save($this->request->data)) {
				$this->Session->setFlash(__('The mfspecy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfspecy could not be saved. Please, try again.'));
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
		if (!$this->Mfspecy->exists($id)) {
			throw new NotFoundException(__('Invalid mfspecy'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mfspecy->save($this->request->data)) {
				$this->Session->setFlash(__('The mfspecy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfspecy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mfspecy.' . $this->Mfspecy->primaryKey => $id));
			$this->request->data = $this->Mfspecy->find('first', $options);
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
		$this->Mfspecy->id = $id;
		if (!$this->Mfspecy->exists()) {
			throw new NotFoundException(__('Invalid mfspecy'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mfspecy->delete()) {
			$this->Session->setFlash(__('The mfspecy has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mfspecy could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Mfweatherstations Controller
 *
 * @property Mfweatherstation $Mfweatherstation
 * @property PaginatorComponent $Paginator
 */
class MfweatherstationsController extends AppController {

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
		$this->Mfweatherstation->recursive = 0;
		$this->set('mfweatherstations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mfweatherstation->exists($id)) {
			throw new NotFoundException(__('Invalid mfweatherstation'));
		}
		$options = array('conditions' => array('Mfweatherstation.' . $this->Mfweatherstation->primaryKey => $id));
		$this->set('mfweatherstation', $this->Mfweatherstation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mfweatherstation->create();
			if ($this->Mfweatherstation->save($this->request->data)) {
				$this->Session->setFlash(__('The mfweatherstation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfweatherstation could not be saved. Please, try again.'));
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
		if (!$this->Mfweatherstation->exists($id)) {
			throw new NotFoundException(__('Invalid mfweatherstation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mfweatherstation->save($this->request->data)) {
				$this->Session->setFlash(__('The mfweatherstation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mfweatherstation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mfweatherstation.' . $this->Mfweatherstation->primaryKey => $id));
			$this->request->data = $this->Mfweatherstation->find('first', $options);
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
		$this->Mfweatherstation->id = $id;
		if (!$this->Mfweatherstation->exists()) {
			throw new NotFoundException(__('Invalid mfweatherstation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mfweatherstation->delete()) {
			$this->Session->setFlash(__('The mfweatherstation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mfweatherstation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

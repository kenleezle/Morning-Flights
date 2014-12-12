<?php
App::uses('AppController', 'Controller');
/**
 * Ncdcweathers Controller
 *
 * @property Ncdcweather $Ncdcweather
 * @property PaginatorComponent $Paginator
 */
class NcdcweathersController extends AppController {

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
		$this->Ncdcweather->recursive = 0;
		$this->set('ncdcweathers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ncdcweather->exists($id)) {
			throw new NotFoundException(__('Invalid ncdcweather'));
		}
		$options = array('conditions' => array('Ncdcweather.' . $this->Ncdcweather->primaryKey => $id));
		$this->set('ncdcweather', $this->Ncdcweather->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ncdcweather->create();
			if ($this->Ncdcweather->save($this->request->data)) {
				$this->Session->setFlash(__('The ncdcweather has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ncdcweather could not be saved. Please, try again.'));
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
		if (!$this->Ncdcweather->exists($id)) {
			throw new NotFoundException(__('Invalid ncdcweather'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ncdcweather->save($this->request->data)) {
				$this->Session->setFlash(__('The ncdcweather has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ncdcweather could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ncdcweather.' . $this->Ncdcweather->primaryKey => $id));
			$this->request->data = $this->Ncdcweather->find('first', $options);
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
		$this->Ncdcweather->id = $id;
		if (!$this->Ncdcweather->exists()) {
			throw new NotFoundException(__('Invalid ncdcweather'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ncdcweather->delete()) {
			$this->Session->setFlash(__('The ncdcweather has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ncdcweather could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

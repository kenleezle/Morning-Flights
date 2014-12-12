<?php
App::uses('AppController', 'Controller');
/**
 * Wcmweathers Controller
 *
 * @property Wcmweather $Wcmweather
 * @property PaginatorComponent $Paginator
 */
class WcmweathersController extends AppController {

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
		$this->Wcmweather->recursive = 0;
		$this->set('wcmweathers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Wcmweather->exists($id)) {
			throw new NotFoundException(__('Invalid wcmweather'));
		}
		$options = array('conditions' => array('Wcmweather.' . $this->Wcmweather->primaryKey => $id));
		$this->set('wcmweather', $this->Wcmweather->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wcmweather->create();
			if ($this->Wcmweather->save($this->request->data)) {
				$this->Session->setFlash(__('The wcmweather has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wcmweather could not be saved. Please, try again.'));
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
		if (!$this->Wcmweather->exists($id)) {
			throw new NotFoundException(__('Invalid wcmweather'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Wcmweather->save($this->request->data)) {
				$this->Session->setFlash(__('The wcmweather has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wcmweather could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Wcmweather.' . $this->Wcmweather->primaryKey => $id));
			$this->request->data = $this->Wcmweather->find('first', $options);
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
		$this->Wcmweather->id = $id;
		if (!$this->Wcmweather->exists()) {
			throw new NotFoundException(__('Invalid wcmweather'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Wcmweather->delete()) {
			$this->Session->setFlash(__('The wcmweather has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wcmweather could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

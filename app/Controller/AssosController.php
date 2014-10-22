<?php
App::uses('AppController', 'Controller');
/**
 * Assos Controller
 *
 * @property Asso $Asso
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AssosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Asso->recursive = 0;
		$this->set('assos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Asso->exists($id)) {
			throw new NotFoundException(__('Invalid asso'));
		}
		$options = array('conditions' => array('Asso.' . $this->Asso->primaryKey => $id));
		$this->set('asso', $this->Asso->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Asso->create();
			if ($this->Asso->save($this->request->data)) {
				$this->Session->setFlash(__('The asso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asso could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Asso->exists($id)) {
			throw new NotFoundException(__('Invalid asso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Asso->save($this->request->data)) {
				$this->Session->setFlash(__('The asso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Asso.' . $this->Asso->primaryKey => $id));
			$this->request->data = $this->Asso->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Asso->id = $id;
		if (!$this->Asso->exists()) {
			throw new NotFoundException(__('Invalid asso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Asso->delete()) {
			$this->Session->setFlash(__('The asso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The asso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Manifs Controller
 *
 * @property Manif $Manif
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ManifsController extends AppController {

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
		$this->Manif->recursive = 0;
		$this->set('manifs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Manif->exists($id)) {
			throw new NotFoundException(__('Invalid manif'));
		}
		$options = array('conditions' => array('Manif.' . $this->Manif->primaryKey => $id));
		$this->set('manif', $this->Manif->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Manif->create();
			if ($this->Manif->save($this->request->data)) {
				$this->Session->setFlash(__('The manif has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manif could not be saved. Please, try again.'));
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
		if (!$this->Manif->exists($id)) {
			throw new NotFoundException(__('Invalid manif'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Manif->save($this->request->data)) {
				$this->Session->setFlash(__('The manif has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manif could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Manif.' . $this->Manif->primaryKey => $id));
			$this->request->data = $this->Manif->find('first', $options);
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
		$this->Manif->id = $id;
		if (!$this->Manif->exists()) {
			throw new NotFoundException(__('Invalid manif'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Manif->delete()) {
			$this->Session->setFlash(__('The manif has been deleted.'));
		} else {
			$this->Session->setFlash(__('The manif could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

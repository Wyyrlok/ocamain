<?php
App::uses('AppController', 'Controller');
/**
 * Themes Controller
 *
 * @property Theme $Theme
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ThemesController extends AppController {

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
		$this->Theme->recursive = 0;
		$this->set('themes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Theme->exists($id)) {
			throw new NotFoundException(__('Invalid theme'));
		}
		$options = array('conditions' => array('Theme.' . $this->Theme->primaryKey => $id));
		$this->set('theme', $this->Theme->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Theme->create();
			if ($this->Theme->save($this->request->data)) {
				$this->Session->setFlash(__('The theme has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The theme could not be saved. Please, try again.'));
			}
		}
		$events = $this->Theme->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Theme->exists($id)) {
			throw new NotFoundException(__('Invalid theme'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Theme->save($this->request->data)) {
				$this->Session->setFlash(__('The theme has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The theme could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Theme.' . $this->Theme->primaryKey => $id));
			$this->request->data = $this->Theme->find('first', $options);
		}
		$events = $this->Theme->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Theme->id = $id;
		if (!$this->Theme->exists()) {
			throw new NotFoundException(__('Invalid theme'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Theme->delete()) {
			$this->Session->setFlash(__('The theme has been deleted.'));
		} else {
			$this->Session->setFlash(__('The theme could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

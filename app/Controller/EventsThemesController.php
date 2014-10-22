<?php
App::uses('AppController', 'Controller');
/**
 * EventsThemes Controller
 *
 * @property EventsTheme $EventsTheme
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EventsThemesController extends AppController {

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
		$this->EventsTheme->recursive = 0;
		$this->set('eventsThemes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EventsTheme->exists($id)) {
			throw new NotFoundException(__('Invalid events theme'));
		}
		$options = array('conditions' => array('EventsTheme.' . $this->EventsTheme->primaryKey => $id));
		$this->set('eventsTheme', $this->EventsTheme->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EventsTheme->create();
			if ($this->EventsTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The events theme has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events theme could not be saved. Please, try again.'));
			}
		}
		$events = $this->EventsTheme->Event->find('list');
		$themes = $this->EventsTheme->Theme->find('list');
		$this->set(compact('events', 'themes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->EventsTheme->exists($id)) {
			throw new NotFoundException(__('Invalid events theme'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventsTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The events theme has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events theme could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventsTheme.' . $this->EventsTheme->primaryKey => $id));
			$this->request->data = $this->EventsTheme->find('first', $options);
		}
		$events = $this->EventsTheme->Event->find('list');
		$themes = $this->EventsTheme->Theme->find('list');
		$this->set(compact('events', 'themes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->EventsTheme->id = $id;
		if (!$this->EventsTheme->exists()) {
			throw new NotFoundException(__('Invalid events theme'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventsTheme->delete()) {
			$this->Session->setFlash(__('The events theme has been deleted.'));
		} else {
			$this->Session->setFlash(__('The events theme could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

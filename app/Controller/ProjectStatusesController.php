<?php
App::uses('AppController', 'Controller');
/**
 * ProjectStatuses Controller
 *
 * @property ProjectStatus $ProjectStatus
 */
class ProjectStatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectStatus->recursive = 0;
		$this->set('projectStatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjectStatus->exists($id)) {
			throw new NotFoundException(__('Invalid project status'));
		}
		$options = array('conditions' => array('ProjectStatus.' . $this->ProjectStatus->primaryKey => $id));
		$this->set('projectStatus', $this->ProjectStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectStatus->create();
			if ($this->ProjectStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The project status has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project status could not be saved. Please, try again.'), 'flash/error');
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
		if (!$this->ProjectStatus->exists($id)) {
			throw new NotFoundException(__('Invalid project status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The project status has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project status could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('ProjectStatus.' . $this->ProjectStatus->primaryKey => $id));
			$this->request->data = $this->ProjectStatus->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjectStatus->id = $id;
		if (!$this->ProjectStatus->exists()) {
			throw new NotFoundException(__('Invalid project status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectStatus->delete()) {
			$this->Session->setFlash(__('Project status deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project status was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}

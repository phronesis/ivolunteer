<?php
App::uses('AppController', 'Controller');
/**
 * ProjectLocations Controller
 *
 * @property ProjectLocation $ProjectLocation
 */
class ProjectLocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectLocation->recursive = 0;
		$this->set('projectLocations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjectLocation->exists($id)) {
			throw new NotFoundException(__('Invalid project location'));
		}
		$options = array('conditions' => array('ProjectLocation.' . $this->ProjectLocation->primaryKey => $id));
		$this->set('projectLocation', $this->ProjectLocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectLocation->create();
			if ($this->ProjectLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The project location has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project location could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$projects = $this->ProjectLocation->Project->find('list');
		$cities = $this->ProjectLocation->City->find('list');
		$this->set(compact('projects', 'cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjectLocation->exists($id)) {
			throw new NotFoundException(__('Invalid project location'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The project location has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project location could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('ProjectLocation.' . $this->ProjectLocation->primaryKey => $id));
			$this->request->data = $this->ProjectLocation->find('first', $options);
		}
		$projects = $this->ProjectLocation->Project->find('list');
		$cities = $this->ProjectLocation->City->find('list');
		$this->set(compact('projects', 'cities'));
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
		$this->ProjectLocation->id = $id;
		if (!$this->ProjectLocation->exists()) {
			throw new NotFoundException(__('Invalid project location'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectLocation->delete()) {
			$this->Session->setFlash(__('Project location deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project location was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}

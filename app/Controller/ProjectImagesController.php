<?php
App::uses('AppController', 'Controller');
/**
 * ProjectImages Controller
 *
 * @property ProjectImage $ProjectImage
 */
class ProjectImagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectImage->recursive = 0;
		$this->set('projectImages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjectImage->exists($id)) {
			throw new NotFoundException(__('Invalid project image'));
		}
		$options = array('conditions' => array('ProjectImage.' . $this->ProjectImage->primaryKey => $id));
		$this->set('projectImage', $this->ProjectImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectImage->create();
			if ($this->ProjectImage->save($this->request->data)) {
				$this->Session->setFlash(__('The project image has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project image could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$projects = $this->ProjectImage->Project->find('list');
		$users = $this->ProjectImage->User->find('list');
		$this->set(compact('projects', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjectImage->exists($id)) {
			throw new NotFoundException(__('Invalid project image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectImage->save($this->request->data)) {
				$this->Session->setFlash(__('The project image has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project image could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('ProjectImage.' . $this->ProjectImage->primaryKey => $id));
			$this->request->data = $this->ProjectImage->find('first', $options);
		}
		$projects = $this->ProjectImage->Project->find('list');
		$users = $this->ProjectImage->User->find('list');
		$this->set(compact('projects', 'users'));
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
		$this->ProjectImage->id = $id;
		if (!$this->ProjectImage->exists()) {
			throw new NotFoundException(__('Invalid project image'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectImage->delete()) {
			$this->Session->setFlash(__('Project image deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project image was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}

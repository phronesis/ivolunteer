<?php
App::uses('AppController', 'Controller');
/**
 * ProjectComments Controller
 *
 * @property ProjectComment $ProjectComment
 */
class ProjectCommentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectComment->recursive = 0;
		$this->set('projectComments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjectComment->exists($id)) {
			throw new NotFoundException(__('Invalid project comment'));
		}
		$options = array('conditions' => array('ProjectComment.' . $this->ProjectComment->primaryKey => $id));
		$this->set('projectComment', $this->ProjectComment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectComment->create();
			if ($this->ProjectComment->save($this->request->data)) {
				$this->Session->setFlash(__('The project comment has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project comment could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$projects = $this->ProjectComment->Project->find('list');
		$users = $this->ProjectComment->User->find('list');
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
		if (!$this->ProjectComment->exists($id)) {
			throw new NotFoundException(__('Invalid project comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectComment->save($this->request->data)) {
				$this->Session->setFlash(__('The project comment has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project comment could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('ProjectComment.' . $this->ProjectComment->primaryKey => $id));
			$this->request->data = $this->ProjectComment->find('first', $options);
		}
		$projects = $this->ProjectComment->Project->find('list');
		$users = $this->ProjectComment->User->find('list');
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
		$this->ProjectComment->id = $id;
		if (!$this->ProjectComment->exists()) {
			throw new NotFoundException(__('Invalid project comment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectComment->delete()) {
			$this->Session->setFlash(__('Project comment deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project comment was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}

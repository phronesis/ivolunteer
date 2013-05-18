<?php
App::uses('AppController', 'Controller');
/**
 * Skills Controller
 *
 * @property Skill $Skill
 */
class SkillsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Skill->recursive = 0;
		$this->set('skills', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Skill->exists($id)) {
			throw new NotFoundException(__('Invalid skill'));
		}
		$options = array('conditions' => array('Skill.' . $this->Skill->primaryKey => $id));
		$this->set('skill', $this->Skill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Skill->create();
			if ($this->Skill->save($this->request->data)) {
				$this->Session->setFlash(__('The skill has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.'), 'flash/error');
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
		if (!$this->Skill->exists($id)) {
			throw new NotFoundException(__('Invalid skill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Skill->save($this->request->data)) {
				$this->Session->setFlash(__('The skill has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Skill.' . $this->Skill->primaryKey => $id));
			$this->request->data = $this->Skill->find('first', $options);
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
		$this->Skill->id = $id;
		if (!$this->Skill->exists()) {
			throw new NotFoundException(__('Invalid skill'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Skill->delete()) {
			$this->Session->setFlash(__('Skill deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Skill was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}

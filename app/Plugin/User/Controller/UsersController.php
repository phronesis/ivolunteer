<?php

App::uses('UserAppController', 'User.Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends UserAppController {

    public function beforeFilter() {
        $this->Auth->allow(array('add', 'login', 'logout', 'forgotPassword'));
        parent::beforeFilter();
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Congratulations, you have successfully created your account'), 'flash/success');
                $this->_loginRegisteredUser();
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('There was a problem creating your account. Please, try again.'), 'flash/error');
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
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
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
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

    public function login() {
        if ($this->request->is('post')) {
            
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Username or password incorrect'), 'flash/error');
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function dashBoard() {
        $this->set('title_for_layout', 'Dashboard');
    }

    protected function _loginRegisteredUser() {
        $id = $this->User->id;
        $this->request->data['User'] = array_merge($this->request->data['User'], array('id' => $id));
        $this->Auth->login($this->request->data['User']);
    }

}

<?php

class UsersController extends AppController {
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('add'); // Letting users register themselves
	}
	
	// Login Authentication 
	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect(array('controller' => 'APIConcepts', 'action'=>'inspirations')); // If authenticated, redirect to Inspirations page
	        } else {
	            $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
	    }
	}
	
	// Logout
	public function logout() {
	    $this->redirect($this->Auth->logout()); // Unset user, and redirect to login using auto-magic
	}

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

	
    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

	// Add new user to database
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create(); // auto-magic create function
            if ($this->User->save($this->request->data)) { //save data to database
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('controller' => 'APIConcepts', 'action'=>'inspirations')); // If successful, redirect to Inspirations page
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

	// Edit Data, accepts user Id, passed in through settings link in nav menu
    public function edit($id = null) {
	    $this->User->id = $id;
	    if (!$this->User->exists()) {
	        throw new NotFoundException(__('Invalid user'));
	    }
	    if ($this->request->is('post') || $this->request->is('put')) {
	        if ($this->User->save($this->request->data)) {
	            $this->Session->setFlash(__('The user has been saved'));
	            $this->redirect(array('controller' => 'APIConcepts', 'action' => 'inspirations'));
	        } else {
	            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	        }
	    } else {
	        $this->request->data = $this->User->read(null, $id);
	    }
	}
	
    // Delete Data
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('controller' => 'APIConcepts', 'action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
        
}

?>
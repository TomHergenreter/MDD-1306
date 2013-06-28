<?php

App::uses('Sanitize', 'Utility');

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
		$this->Session->destroy();
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
        
        	$currentUsers = $this->User->find('all', array('fields' => array('User.username')));	
        	
        	foreach($currentUsers as $username ): 
        		if($this->request->data['User']['username'] == $username['User']['username']){
	        		$this->Session->setFlash(__('That Username is Already Taken'));
	        		return false;
        		}	
        	endforeach;
        	
        	if(!in_array('', $this->request->data['User']) || !in_array(null, $this->request->data['User'])){
	            $this->User->create(); // auto-magic create function
	            if ($this->User->save($this->request->data)) { //save data to database
	                $this->Session->setFlash(__('Welcome to beInspired! Login to begin'));
	                $this->redirect(array('controller' => 'APIConcepts', 'action'=>'inspirations')); // If successful, redirect to Inspirations page
	            } else {
	                $this->Session->setFlash(__('The User Could Not be Saved. Please, Try Again.'));
	            }
            }else{
	            $this->Session->setFlash(__('Please Complete All Fields'));
            }
        }
    }

	// Edit Data, accepts user Id, passed in through settings link in nav menu
    public function edit($id = null) {
    
    	// Check if user is authorized
    	if ($id != $this->Auth->user('id')){
    		$this->Session->setFlash(__('You are not authorized'));
    		$this->redirect(array('controller' => 'APIConcepts', 'action'=>'inspirations'));
    		return false;
    	}
    	
	    $this->User->id = $id;
	    $this->set('id', $this->User->id);
	    if (!$this->User->exists()) {
	        throw new NotFoundException(__('Invalid user'));
	    }
	    if ($this->request->is('post') || $this->request->is('put')) {
	        if ($this->User->save($this->request->data)) {
	            $this->Session->setFlash(__('Your information has been updated!'));
	        } else {
	            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	        }
	    } else {
	        $this->request->data = $this->User->read(null, $id);
	    }
	}
	
    // Delete Data
    public function delete($id = null) {
        
        $this->User->id = $id;
        $this->request->data = $this->Auth->user();
        
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('Your Account Has Been Deleted'));
            $this->redirect($this->Auth->logout());
        }
        $this->Session->setFlash(__('Your Account Was Not Deleted'));
        $this->redirect(array('action' => 'index'));
    }
    
    public function profile(){
    	$this->request->data = $this->Auth->user();	
    	$this->set('users', $this->User->profiles());
    	    
    }
        
}

?>
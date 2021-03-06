<?php

App::uses('Sanitize', 'Utility');
App::uses('HttpSocket', 'Network/Http');

class APIConceptsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index() {
     
    }
    
    public function signUp() {
	  
    }
    
    public function safeTerms() {
	    
    }
    
    /*Controls Read and Update functions for API data*/
    public function inspirations() {
    	
    	$this->request->data = $this->Auth->user();
    	$this->set('id', $this->request->data('id'));
		$pageNum = $this->Session->read('pageNum');
		
		if (!isset($pageNum)){
			$this->Session->write('pageNum', 1 );	
		}
		
		/*Next button functionality*/
    	if (isset($_POST['next'])){
    		$pageNum = $this->Session->read('pageNum');
	    	$pageNum ++;
	    	$this->Session->write('pageNum', $pageNum );
    	}
    	
    	/*Previous button functionality*/
    	if (isset($_POST['prev'])){
    		$pageNum = $this->Session->read('pageNum');
	    	$pageNum --;
	    	$this->Session->write('pageNum', $pageNum );
    	}
    	
    	/*Free text search query */
    	if (!empty($_POST['query']) && isset($_POST['query'])){
    		$this->Session->write('searchQuery', $_POST['query']);
    		$this->Session->write('pageNum', 1 );
    		$query = $this->Session->read('searchQuery');
			$this->set('projects', $this->APIConcept->behance(array($pageNum, $query, '6359707')));
		}
		
		/*Default functionality*/ 
		else{
			$query = $this->Session->read('searchQuery');
			$pageNum = $this->Session->read('pageNum');
			$this->set('projects', $this->APIConcept->behance(array($pageNum, $query, '6359707')));	
		}
		
		
		
    }
    
    /*Projects page controller*/
    public function project($id) {
    	
    	$this->request->data = $this->Auth->user();
	    $this->set('id', $this->request->data('id'));
	    $this->set('projects', $this->APIConcept->behanceProject(array($id)));
	    
    }
    
    /*Add to Favorites controller*/ 
    public function addFavorites($id){
    
	    $this->request->data = $this->Auth->user();
	    $userId = $this->request->data('id');
	    $data = $this->APIConcept->addFavorites(array($userId, $id));
	    $message = $data[0];
	    $projectId = $data[1];
	    $this->Session->setFlash(__($message));
	    $this->redirect('project/' . $projectId);  
    }
    
    /*Remove from favorites controller*/
    public function removeFavorites($id){
    
		$this->request->data = $this->Auth->user();
	    $userId = $this->request->data('id');
	    $data = $this->APIConcept->deleteFavorites(array($userId, $id));
	    $message = $data[0];
	    $projectId = $data[1];
	    $this->Session->setFlash(__($message));
	    $this->redirect('project/' . $projectId); 
    }
    
    /*Favorites page controller*/
    public function favorites($userId){
		$this->request->data = $this->Auth->user();
		$this->set('id', $this->request->data('id'));  
	    $this->set('projects', $this->APIConcept->readFavorites($userId));   
    }
    
    /*Flag content controller*/
    public function flag($id){
    	
    	$data = $this->APIConcept->flag($id);
    	
    	$message = $data[0];
	    $projectId = $data[1];
	    $this->Session->setFlash(__($message));
	    $this->redirect('project/' . $projectId); 
    }
    
    /*Terms page controller*/
    public function terms() {
		$this->request->data = $this->Auth->user();  
    }
    
    /*FAQ page Controller*/
    public function faq(){
		$this->request->data = $this->Auth->user();    
    }
    
}
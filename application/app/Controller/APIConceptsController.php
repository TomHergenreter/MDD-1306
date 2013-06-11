<?php

App::uses('Sanitize', 'Utility');

class APIConceptsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index() {
        $this->set('projects', $this->APIConcept->find('all'));
    }
}
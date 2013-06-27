<?php

class APIConcept extends AppModel {
    public $useDbConfig = 'default';
    
    /* Collect behance API information for home page, and allow search by meta data */
    public function behance($queryData = array()){
    	
    	$this->Http = new HttpSocket();
        $json = $this->Http->get('http://www.behance.net/v2/projects', array('api_key' => 'Iul7uIuM6rlZIG209ev7iYBQp4lCW7Wq', 'page' => $queryData[0], 'q' => $queryData[1]));
        $res = json_decode($json, true);
        return $res;
    }
    
    /* Collect behance API information for specific project */
    public function behanceProject($queryData = array()){
    	
    	$this->Http = new HttpSocket();
        $json = $this->Http->get('http://www.behance.net/v2/projects/' . $queryData[0], array('api_key' => 'Iul7uIuM6rlZIG209ev7iYBQp4lCW7Wq'));
        $res = json_decode($json, true);
        return $res;
        
    }
    
    /* Add favorites to database */
    public function addFavorites($queryData = array()){
		
		/* Read favorites data from MYSQL database */
		$favorites = $this->query("SELECT project_id FROM a_p_i_concepts WHERE user_id =" . $queryData[0] );
		
		$favoriteIds = array();
		
		/* Populate $favoriteIds array with project ids already in database for cross referencing */ 
		foreach ($favorites as $favoriteArray):
			foreach ($favoriteArray as $favoriteId):
				$favoriteIds[] = $favoriteId['project_id']; 
			endforeach;
		endforeach;
		
		/* Cross reference favorites. If not duplicate add to table, and redirect to project */				
		if(in_array($queryData[1],$favoriteIds)){
			return array('You Already Love This Project!', $queryData[1]);
		}else{
			$this->query("INSERT INTO a_p_i_concepts (user_id, project_id) VALUES(" . $queryData[0] ."," . $queryData[1] . ")");
			return array('Added To Favorites', $queryData[1]);
		}  
    }
    
    public function readFavorites($queryData = array()){
		
		$favorites = $this->query("SELECT project_id FROM a_p_i_concepts WHERE user_id =" . $queryData[0] );
		
		$favoriteIds = array();
		
		/* Populate $favoriteIds array with project ids already in database for cross referencing */ 
		foreach ($favorites as $favoriteArray):
			foreach ($favoriteArray as $favoriteId):
				$favoriteIds[] = $favoriteId['project_id']; 
			endforeach;
		endforeach;
		
		$data = array();
	    
	    foreach ($favoriteIds as $favorite):
	   		$data[] = $this->behanceProject(array($favorite));
	   	endforeach;
	   	
	   	return $data;	
	   	
	   	var_dump($data);   
	    
    }
    
    /* Delete Favorites from database */
    public function deleteFavorites($queryData = array()){
    
    	/* Read favorites data from MYSQL database */
    	$favorites = $this->query("SELECT project_id FROM a_p_i_concepts WHERE user_id =" . $queryData[0] );
		
		$favoriteIds = array();
		
		/* Populate $favoriteIds array with project ids already in database for cross referencing */ 
		foreach ($favorites as $favoriteArray):
			foreach ($favoriteArray as $favoriteId):
				$favoriteIds[] = $favoriteId['project_id']; 
			endforeach;
		endforeach;
		
		/* Cross reference favorites. If item is in table remove it. If not set flash message to make user aware, and redirect to project */
		if(in_array($queryData[1],$favoriteIds)){
			$this->query("DELETE FROM a_p_i_concepts WHERE user_id = " . $queryData[0] . " AND project_id =" . $queryData[1]);
			return array('Removed From Favorites', $queryData[1]);
		}else{
			return array('This Project Has Not Been Added To Favorites', $queryData[1]);
		}
    }
    
    public function profiles(){
	    
    }
    
    // Report abuse
    public function flag($id){
	    $data = array('This Project has been flagged for review', $id);
	    return $data;
    }
    
    
}
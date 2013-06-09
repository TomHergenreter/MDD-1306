
<h2>API Proof of Concept</h2>

<?php

foreach ($projects['APIConcept']['projects'] as $project): 
		
		//var_dump($project);	
		echo "<img src='" .$project['covers']['404'] . "'";
		echo '<br>';
		
endforeach;


<!-- Nav -->
	<nav class="breadcrumbs">
			<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
			<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites')); ?>
			<?php echo $this->Html->Link("Account Settings", array( 'controller' => 'Users', 'action' => 'edit/' . $this->request->data('id'))); ?>
		</nav>
	<!-- End Nav -->	
	
	
		<div class="project_wrapper">

<?php

/*echo $projects['project']['id'] . "break";

echo $projects['project']['stats']['views'] . "break";

echo $projects['project']['stats']['appreciations'] . "break";*/

echo "<div class='large-12 columns'><div class='row'>" . $this->Session->flash() . "</div></div>";

foreach ($projects['project']['modules'] as $module):

	if($module['type'] == 'image'){
		echo "<img src='" . $module['src'] . "' class='projectDetail'>";
	}
	
endforeach;

?>

		</div>
		
	
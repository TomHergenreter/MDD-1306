	<!-- Header -->	
	<div class="wrapper">
	<div class="header-wrapper">
		<?php echo $this->Html->image("beInspiredLogo.png", array("class" => "logo", "alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'inspirations'))); ?>
		<form action="/APIConcepts/inspirations" method="post" accept-charset="utf-8">
			<input type="text" name='query' class="searchInput">
		</form>
		<!-- Nav -->
		<nav class="breadcrumbs">
			<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
			<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites/' . $this->request->data('id'))); ?>
			<?php echo $this->Html->Link("Profiles", array( 'controller' => 'Users', 'action' => 'profile')); ?>
			<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
		</nav>
		<!-- End Nav -->
	</div>
	</div>
	<!-- End Header -->	
	
	
		<div class="project_wrapper">
		
			<!-- Flash Message -->
			<div class="row">
				<div class="large-12 columns">
					<div class="large-8 large-centered columns">
			        		<p><?php echo $this->Session->flash(); ?></p>
					</div>
				</div>	
		    </div>
		    <!-- End Flash Message-->
		
			<div class='details'>
				<div class='row'>
					<?php
					
					echo "<div class='large-12 columns'><div class='row'><div class='large-2 columns'>" . "<a href='" . $projects['project']['owners'][0]['url'] . "'><img class='avatar' src='" . $projects['project']['owners'][0]['images']['115'] . "'></a>" . "</div><div class='large-10 columns'><div class='row no-overflow'><h2>" . $projects['project']['name'] . "</h2></div><div class='row no-overflow'>" . $this->Html->image("icons/heartIcon.png", array("class" => "icon", "alt" => "favs",'url' => array('controller' => 'APIConcepts', 'action' => 'addFavorites/' . $projects['project']['id']))) . $this->Html->image("icons/trashIcon.png", array("class" => "icon", "alt" => "favs",'url' => array('controller' => 'APIConcepts', 'action' => 'removeFavorites/' . $projects['project']['id']))) . $this->Html->image("icons/linkIcon.png", array("class" => "icon", "alt" => "favs",'url' => $projects['project']['url'])) . "</div><div class='row no-overflow'>" . $this->Html->Link("Report Abuse", array('controller' => 'APIConcepts', 'action' => 'flag/' . $projects['project']['id']), array('class' => 'flag')) . "</div></div></div>";
					
					?>
				</div>
			</div>
		</div>			

<?php

 

foreach ($projects['project']['modules'] as $module):

	if($module['type'] == 'image'){
		echo "<img src='" . $module['src'] . "' class='projectDetail'>";
	}
	
endforeach;

?>

		</div>
		
		<!-- Footer -->
	<div class="bottom-wrapper">
		<div class="footer-wrapper">
			<nav class="breadcrumbs">
				<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
				<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites')); ?>
				<?php echo $this->Html->Link("Account Settings", array( 'controller' => 'Users', 'action' => 'edit/' . $this->request->data('id'))); ?>
				<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
				<?php echo $this->Html->Link("Terms", array( 'controller' => 'APIConcepts', 'action' => 'terms')); ?>
			 	<?php echo $this->Html->Link("FAQ", array( 'controller' => 'APIConcepts', 'action' => 'faq')); ?>
			 	<a>&copybeINSPIRED</a>
			</nav>
		</div>
	</div>
	<!-- End Footer -->
		
	

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
			<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites/' . $id)); ?>
			<?php echo $this->Html->Link("Profiles", array( 'controller' => 'Users', 'action' => 'profile')); ?>
			<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
		</nav>
		<!-- End Nav -->
	</div>
	</div>
	<!-- End Header -->
		
	<!-- Image Grid -->
	<div class="grid-wrapper">
		<ul class="preview">
			<?php
				foreach ($projects['projects'] as $project): 
					
					if(isset($project['covers']['404'])){	
						echo
									
						"<li>" .
						$this->Html->image($project['covers']['404'], array("alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'project/' . $project['id']))) . " 
							<div class='caption'>
								<p><a href='" . $project['owners'][0]['url'] . "'><img src='" . $project['owners'][0]['images']['50'] . "'</a>" . $project['owners'][0]['first_name'] . " " . $project['owners'][0]['last_name'] . "</p>
							</div>
						</li>";
					}else{
						echo
						 "<li>" . $this->Html->image( 'noLoadImage.jpg' , array('alt' => 'Sorry, image unable to load')) . "</li>";
					}	
				endforeach; 
			?>
		</ul>
	</div>	
			
		<div class="button-wrapper">			
			<!-- Next Button -->
			<form action="/APIConcepts/inspirations" method="post" accept-charset="utf-8">
				<input type="submit" name='next' class="small button next" value="Next">
			</form>
			<!-- Previous Button -->
			<form action="/APIConcepts/inspirations" method="post" accept-charset="utf-8">
				<input type="submit" name='prev' class="small button prev" value="Previous">
			</form>
		</div>
	<!-- End Image Grid -->
	
	<!-- Footer -->
	<div class="bottom-wrapper">
		<div class="footer-wrapper">
			<nav class="breadcrumbs">
				<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
				<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites/' . $this->request->data('id'))); ?>
				<?php echo $this->Html->Link("Account Settings", array( 'controller' => 'Users', 'action' => 'edit/' . $this->request->data('id'))); ?>
				<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
				<?php echo $this->Html->Link("Terms", array( 'controller' => 'APIConcepts', 'action' => 'terms')); ?>
			 	<?php echo $this->Html->Link("FAQ", array( 'controller' => 'APIConcepts', 'action' => 'faq')); ?>
			 	<a>&copybeINSPIRED</a>
			</nav>
		</div>
	</div>
	<!-- End Footer -->		
	
	

	
	
	<!-- Nav -->
	<nav class="breadcrumbs">
			<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
			<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites')); ?>
			<?php echo $this->Html->Link("Account Settings", array( 'controller' => 'Users', 'action' => 'edit/' . $this->request->data('id'))); ?>
		</nav>
	<!-- End Nav -->	
	
	<!-- Header -->	
	<div class="header-wrapper">
		<?php echo $this->Html->image("beInspiredLogo.png", array("class" => "logo", "alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'inspirations'))); ?>
		<form action="/APIConcepts/inspirations" method="post" accept-charset="utf-8">
			<input type="text" name='query' class="searchInput">
		</form>
	</div>
	<!-- End Header -->

	<!-- Image Grid -->
	<div class="grid-wrapper">
		<ul class="preview">
			<?php
				foreach ($projects as $projectArray): 
					foreach ($projectArray as $project):
						if(is_int($project)){
							return false;
						}else{		
							if(isset($project['covers']['404'])){	
								echo
											
								"<li>" .
								$this->Html->image($project['covers']['404'], array("alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'project/' . $project['id']))) . " 
									<div class='caption'>
										<p><a href='" . $project['owners'][0]['url'] . "'><img src='" . $project['owners'][0]['images']['50'] . "'</a>" . $project['owners'][0]['first_name'] . " " . $project['owners'][0]['last_name'] . $this->Html->image("icons/heartIcon.png", array("class" => "icon", "alt" => "favs",'url' => array('controller' => 'APIConcepts', 'action' => 'addFavorites/' . $project['id']))) . $this->Html->Link("del", array( 'controller' => 'APIConcepts', 'action' => 'removeFavorites/' . $project['id'])); "</p>
									</div>
								</li>";
							}else{
								echo
								 "<li>" . $this->Html->image( 'noLoadImage.jpg' , array('alt' => 'Sorry, image unable to load')) . "</li>";
							}	
						};
					endforeach;	
				endforeach; 
			?>
		</ul>
					
			<!-- Previous Button -->
			<form action="/APIConcepts/inspirations" method="post" accept-charset="utf-8">
				<input type="submit" name='prev' class="small button prev" value="Previous">
			</form>
		
			<!-- Next Button -->
			<form action="/APIConcepts/inspirations" method="post" accept-charset="utf-8">
				<input type="submit" name='next' class="small button next" value="Next">
			</form>
			
	</div>
	
	<div class="row">
		<div class="large-12 columns">
			<ul class="inline-list">
			 	<li><?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?></li>
			 	<li><?php echo $this->Html->Link("Delete Account", array( 'controller' => 'Users', 'action' => 'delete/' . $id)); ?></li>
			 	<li><?php echo $this->Html->Link("Reset Password", array( 'controller' => 'Users', 'action' => 'edit/' . $id )); ?></li>
			</ul>
		</div>
	</div>		


		

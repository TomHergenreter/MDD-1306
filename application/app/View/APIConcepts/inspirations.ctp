	
	<!-- Menu -->
	<nav class="top-bar">
		<ul class="title-area">
			<!-- Title Area -->
			<li class="name">
			<h1><a href="#">INSPIRED</a></h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
		</ul>
		<section class="top-bar-section">
		<!-- Left Nav Section -->
		<ul class="left">
			<li class="divider"></li>
			<li><?php echo $this->Html->image("icons/homeIcon.png", array("alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'inspirations'))); ?></li>
			<li class="divider"></li>
			<li><?php echo $this->Html->image("icons/heartIcon.png", array("alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'index'))); ?></li>
			<li class="divider"></li>
			<li><?php echo $this->Html->image("icons/cogIcon.png", array("alt" => "Home",'url' => array('controller' => 'Users', 'action' => 'edit/' . $this->request->data('id')))); ?></li>
			<li class="divider"></li>
		</ul>
		</section>
		<!-- Right NavSection -->
		<ul class="right">
			<li class="has-form">
			<form>
				<div class="row collapse">
					<div class="small-11 columns">
						<input type="text" class="searchInput">
					</div>
				</div>
			</form>
			</li>
		</ul>
	</nav>

	<!-- Image Grid -->
	<div class="grid-wrapper">
		<ul class="preview">
			<?php
				foreach ($projects['APIConcept']['projects'] as $project): 
						
					echo
										
					"<li>
						<img src='" . $project['covers']['404'] . "'>
						<div class='caption'>
							<p><a href=''><img src='" . $project['owners'][0]['images']['50'] . "'</a>" . $project['owners'][0]['first_name'] . " " . $project['owners'][0]['last_name'] . "</p>
						</div>
					</li>";
						
				endforeach; 
			?>
		</ul>
	</div>
	
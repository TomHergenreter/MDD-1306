	
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
			<li><?php echo $this->Html->image("icons/homeIcon.png", array("alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'index'))); ?></li>
			<li class="divider"></li>
			<li><?php echo $this->Html->image("icons/heartIcon.png", array("alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'index'))); ?></li>
			<li class="divider"></li>
			<li><?php echo $this->Html->image("icons/cogIcon.png", array("alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'index'))); ?></li>
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
	<div class="preview-wrapper">
		<div class="preview">
			<h4>Image Name <span>Byline</span></h4>
			<img src="http://www.placecage.com/g/350/250">
			<div class="row">
				<div class="large-12 columns">
					<div class="row">
						<div class="large-4 large-offset-2 columns">
							<?php echo $this->Html->image("icons/eyeIcon.png", array("alt" => "Home", "class" => "inlineImg")); ?>
							<p>Views</p>
						</div>
						<div class="large-6 columns">
							<p>Appreciations</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="preview">
			<img src="http://www.placecage.com/g/350/250">
		</div>
		<div class="preview">
			<img src="http://www.placecage.com/g/350/250">
		</div>
		<div class="preview">
			<img src="http://www.placecage.com/g/350/250">
		</div>
		<div class="preview">
			<img src="http://www.placecage.com/g/350/250">
		</div>
		<div class="preview">
			<img src="http://www.placecage.com/g/350/250">
		</div>
	</div>
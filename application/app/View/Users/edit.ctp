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
	
	<div class="row">
		<div class="large-12 columns">
			<div class="large-6 large-centered columns alert">
        		<p><?php echo $this->Session->flash(); ?></p>
			</div>
		</div>
    </div>
	
	<!-- Update Form -->
	<div class="row">
		<div class="large-12 columns">
			<div class="large-6 large-centered columns signIn">
				<?php echo $this->Form->create('User'); ?>
					<h3>Update Information</h3>
					<fieldset>
						<div class="row">
							<div class="large-12 columns">
								<?php echo $this->Form->input('User.username', array('div' => false, 'label' => false, 'class' => 'user')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.firstname', array('div' => false, 'label' => false, 'class' => '', )); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.lastname', array('div' => false, 'label' => false, 'class' => '', 'placeholder' => 'lastname')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.email', array('div' => false, 'label' => false, 'class' => '', 'placeholder' => 'email')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-8 columns">
								<input type="submit" class="medium button" value="Update">
							</div>
						</div>
						<!-- Options -->
						<div class="row">
							<div class="large-12 columns">
								<ul class="inline-list">
								 	<li><?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?></li>
								 	<li><?php echo $this->Html->Link("Delete Account", array( 'controller' => 'Users', 'action' => 'delete/' . $id)); ?></li>
								</ul>
							</div>
						</div>		
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	
	
	
						
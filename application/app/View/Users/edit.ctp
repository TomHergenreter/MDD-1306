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
	
	<!-- Flash Message -->
	<div class="row">
		<div class="large-12 columns">
			<div class="large-6 large-centered columns">
	        		<p><?php echo $this->Session->flash(); ?></p>
			</div>
		</div>	
    </div>
    <!-- End Flash Message -->
	
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
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.picture', array('div' => false, 'label' => false, 'class' => '', 'placeholder' => 'Avatar URL')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.bio', array('div' => false, 'type' => 'textarea', 'label' => false, 'class' => '', 'placeholder' => 'bio')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.birthdate', array('div' => false, 'type' => 'text', 'label' => false, 'class' => '', 'placeholder' => 'YYYY-MM-DD')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.location', array('div' => false, 'label' => false, 'class' => '', 'placeholder' => 'location')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-8 columns">
								<input type="submit" class="medium button" value="Update">
							</div>
						</div>
						<!-- Options -->
						<div class="row">
							<div class="large-8 columns">
								 	<?php echo $this->Html->Link("Delete", array( 'controller' => 'Users', 'action' => 'delete/' . $id), array('class' => 'medium button alert')); ?>
							</div>
						</div>		
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!-- End Update Form -->
	
	<!-- Footer -->
	<div class="bottom-wrapper">
		<div class="footer-wrapper">
			<nav class="breadcrumbs">
				<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
				<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites/' . $id)); ?>
				<?php echo $this->Html->Link("Account Settings", array( 'controller' => 'Users', 'action' => 'edit/' . $this->request->data('id'))); ?>
				<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
				<?php echo $this->Html->Link("Terms", array( 'controller' => 'APIConcepts', 'action' => 'terms')); ?>
			 	<?php echo $this->Html->Link("FAQ", array( 'controller' => 'APIConcepts', 'action' => 'faq')); ?>
			 	<a>&copybeINSPIRED</a>
			</nav>
		</div>
	</div>
	<!-- End Footer -->	
	
	
	
	
	
						
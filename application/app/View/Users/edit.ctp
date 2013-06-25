	<!-- Nav -->
	<nav class="breadcrumbs">
			<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
			<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites')); ?>
			<?php echo $this->Html->Link("Account Settings", array( 'controller' => 'Users', 'action' => 'edit/' . $this->request->data('id'))); ?>
			<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
		</nav>
	<!-- End Nav -->	
	
	<!-- Header -->	
	<div class="header-wrapper">
		<?php echo $this->Html->image("beInspiredLogo.png", array("class" => "logo center", "alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'inspirations'))); ?>
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
								 	<li><?php echo $this->Html->Link("Reset Password", array( 'controller' => 'Users', 'action' => 'edit/' . $id )); ?></li>
								</ul>
							</div>
						</div>		
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	
	
	
	
	
						
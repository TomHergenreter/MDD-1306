
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
			<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites')); ?>
			<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
		</nav>
		<!-- End Nav -->
	</div>
	</div>
	<!-- End Header -->

<div class="large-12 columns">
	<div class="row">
		<div class="terms">
		
			<h2>FAQ</h2>
			<h3>What is beINSPIRED?</h3>
			<p>beINSPIRED is a source for inspiration. Powered by the behance.net API, we provide a stream of inspiring artwork from many different genres and mediums, without a bunch of details getting in the way. beINSPIRED allows you to search through projects hosted by behance.net, and add your favorites to your own personal gallery.</p>
			
			<h3>Is beINSPIRED free to use?</h3>
			<p>beINSPIRED is 100% free to use, and your favorites gallery can contain as many different projects as you like.</p>
			
			<h3>How can I contact beINSPIRED?</h3>
			<p>If you need assistance or just want to say hello, you can reach us at info@beinspired.com.</p>
			
		</div>
	</div>
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

			
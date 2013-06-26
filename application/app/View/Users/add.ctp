	<!-- Header -->	
	<div class="wrapper">
	<div class="header-wrapper">
		<?php echo $this->Html->image("beInspiredLogo.png", array("class" => "logo", "alt" => "Home",'url' => array('controller' => 'APIConcepts', 'action' => 'inspirations'))); ?>
	</div>
	</div>
	<!-- End Header -->

	
	<!--Sign Up Form -->
	<div class="row">
		<div class="large-12 columns">
			<div class="large-6 large-centered columns signIn">
				<form action="/Users/add" id="UserAddForm" method="post" accept-charset="utf-8">
					<h3>Sign Up</h3>
					<fieldset>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][username]" id="UserUsername" type="text" class="user" placeholder="Username">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][password]" id="UserPassword" type="password" class="pass" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][firstname]" id="UserFirstname" type="text" placeholder="First Name">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][lastname]" id="UserLastname" type="text" placeholder="Last Name">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][email]" type="email" placeholder="Email Address">
							</div>
						</div>
						<div class="row">
							<div class="large-8 columns">
								<input type="submit" class="medium button" text="beINSPIRED">
							</div>
							<div class="large-4 columns">
								
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<p>by clicking beINSPIRED, you agree to the <a>Terms of Service</a></p>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>


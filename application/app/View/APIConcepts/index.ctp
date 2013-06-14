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
			<li><a href="#"><img src="img/icons/homeIcon.png"></a></li>
			<li class="divider"></li>
			<li><a href="#"><img src="img/icons/heartIcon.png"></a></li>
			<li class="divider"></li>
			<li><a href="#"><img src="img/icons/cogIcon.png"></a></li>
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
	

	<!--Sign In Form -->
	<div class="row">
		<div class="large-12 columns">
			<div class="large-6 large-centered columns signIn">
				<form>
					<h3>Login</h3>
					<fieldset>
						<div class="row">
							<div class="large-12 columns">
								<input type="text" class="user" placeholder="Username">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input type="password" class="pass" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input type="submit" class="medium button" text="Sign In">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<p>Not a member? <?php echo $this->Html->link(" Sign Up!", array('controller' => 'APIConcepts', 'action' => 'signUp')); ?></p>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	
	

 <!--<?php

foreach ($projects['APIConcept']['projects'] as $project): 
		
		//var_dump($project);	
		echo "<img src='" .$project['covers']['404'] . "'";
		echo '<br>';
		
endforeach; ?>-->


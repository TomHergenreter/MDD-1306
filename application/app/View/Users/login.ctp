	<!-- Menu -->
	<nav class="top-bar">
		<ul class="title-area">
			<!-- Title Area -->
			<li class="name">
			<h1><a href="#">INSPIRED</a></h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
		</ul>
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
				<form action="/users/login" id="UserLoginForm" method="post" accept-charset="utf-8">
					<h3>Login</h3>
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
								<input type="submit" class="medium button" text="Sign In">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<p>Not a member? <?php echo $this->Html->link(" Sign Up!", array('controller' => 'Users', 'action' => 'add')); ?></p>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
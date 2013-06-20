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
	
	<div class="row">
		<div class="large-12 columns">
			<div class="large-6 large-centered columns alert">
        		<p><?php echo $this->Session->flash(); ?></p>
			</div>
		</div>
    </div>

	
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



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
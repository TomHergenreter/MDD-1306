
<?php 
<?php echo $this->Form->create('User'); ?>
?> 
 

<!--Sign Up Form -->
	<div class="row">
		<div class="large-12 columns">
			<div class="large-6 large-centered columns signIn">
				<form action="/Users/edit" id="UserEditForm" method="post" accept-charset="utf-8">
					<h3>Sign Up</h3>
					<fieldset>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][username]" id="UserUsername" type="text" class="user" placeholder="<?php echo $username ?>">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][password]" id="UserPassword" type="password" class="pass" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][firstname]" id="UserFirstname" type="text" placeholder="<?php echo $firstname ?>">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][lastname]" id="UserLastname" type="text" placeholder="<?php echo $lastname ?>">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input name="data[User][email]" type="email" placeholder="<?php echo $email ?>">
							</div>
						</div>
						<div class="row">
							<div class="large-8 columns">
								<input type="submit" class="medium button" value="Update">
							</div>
							<div class="large-4 columns">
								
							</div>
						</div>
						<div class="row">
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>

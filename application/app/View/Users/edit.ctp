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
								<?php echo $this->Form->input('User.password', array('div' => false, 'label' => false, 'class' => 'pass')); ?>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">		
								<?php echo $this->Form->input('User.firstname', array('div' => false, 'label' => false, 'class' => '', 'placeholder' => 'firstname')); ?>
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
					</fieldset>
				</form>
			</div>
		</div>
	</div>	
						
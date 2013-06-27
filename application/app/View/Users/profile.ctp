
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
			<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites/' . $this->request->data('id'))); ?>
			<?php echo $this->Html->Link("Profiles", array( 'controller' => 'Users', 'action' => 'profile')); ?>
			<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
		</nav>
		<!-- End Nav -->
	</div>
	</div>
	<!-- End Header -->

	<!-- Profile Grid -->
	<div class="grid-wrapper">
		<ul class="preview profile">

<?php
	
	foreach($users as $user):
		
		if($user['users']['picture'] == null || $user['users']['picture'] == ""){
			$avatar = "/img/noLoadImage.jpg";	
		}else{
			$avatar = Sanitize::clean($user['users']['picture'], array('encode' => 'true')); 
		}
		
		$id = Sanitize::clean($user['users']['id'], array('encode' => 'true'));//array index 0
		$name = Sanitize::clean($user['users']['firstname'] . " " . $user['users']['lastname'], array('encode' => 'true'));//array index 1
		$bio = Sanitize::clean($user['users']['bio'], array('encode' => 'true'));//array index 2
		$dob = Sanitize::clean($user['users']['birthdate'], array('encode' => 'true'));//array index 3
		$location = Sanitize::clean($user['users']['location'], array('encode' => 'true'));//array index 4
		
		$data =[$id, $name, $bio, $dob, $location];
		
		for ($i = 0; $i < sizeof($data); $i++){
			if ( $data[$i] == null || $data[$i] == ""){
				$data[$i] = "N/A";
			}
		}
		
		echo "<li profile-item><div class='large-4 columns'><div class='row'><img src='" . $avatar . "' alt='avatar'></div></div><div class='large-8 columns'><div class='row'><h3>" . $data[1] . "</h3></div><div class='row'><p><span>" . $data[4] . " - " . $data[3] . "</p></span></div><div class='row'><p>" . $data[2] . "</p></div><div class='row'>" . $this->Html->Link($data[1] . "'s Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites/' . $data[0])) . "</div></div></li>";
					

		
	endforeach;


?>

		</ul>
	</div>
	<!-- End Profile Grid -->


<!-- Footer -->
	<div class="bottom-wrapper">
		<div class="footer-wrapper">
			<nav class="breadcrumbs">
				<?php echo $this->Html->Link("Home", array( 'controller' => 'APIConcepts', 'action' => 'inspirations')); ?>
				<?php echo $this->Html->Link("Favorites", array( 'controller' => 'APIConcepts', 'action' => 'favorites/' . $this->request->data('id'))); ?>
				<?php echo $this->Html->Link("Account Settings", array( 'controller' => 'Users', 'action' => 'edit/' . $this->request->data('id'))); ?>
				<?php echo $this->Html->Link("Logout", array( 'controller' => 'Users', 'action' => 'logout')); ?>
				<?php echo $this->Html->Link("Terms", array( 'controller' => 'APIConcepts', 'action' => 'terms')); ?>
			 	<?php echo $this->Html->Link("FAQ", array( 'controller' => 'APIConcepts', 'action' => 'faq')); ?>
			 	<a>&copybeINSPIRED</a>
			</nav>
		</div>
	</div>
	<!-- End Footer -->
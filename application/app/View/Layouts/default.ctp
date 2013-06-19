<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "MDD-1306" ?>:
		<?php echo $title_for_layout; ?>
	</title>
	
	<?php
    	echo $this->Html->meta(array("name"=>"viewport", "content"=>"width=device-width"));
		echo $this->Html->meta(array("name"=>"description", "content"=>"MDD-1306 Mobile Deployment Project"));
		echo $this->Html->meta(array("name"=>"author", "content"=>"TheHappyDeveloper.com - @happyDeveloper"));
		
		echo $this->Html->css('foundation');
		echo $this->Html->css('app');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
		
	<div id="content">

		<?php
		
			/*$string = file_get_contents("http://www.behance.net/v2/projects/?hex_color=444444&api_key=Iul7uIuM6rlZIG209ev7iYBQp4lCW7Wq");
			$data=json_decode($string,true);
			for($i=0; $i<count($data['projects']); $i++) {
				echo "User Id is:  " . $data['projects'][$i]["id"] . "<br><img src='" . $data['projects'][$i]["covers"]["404"] ."'><br>" ;
			}
			
			$projectid = $json_a['project']['id'];
			$projectname = $json_a['project']['name'];
			 
			$projecturl = $json_a['project']['url'];
			 
			$projectimage = $json_a['project']['covers']['404'];
			 
			$projectviews = $json_a['project']['stats']['views'];;
			$projectappre = $json_a['project']['stats']['appreciations'];
			 
			$projectdesc = $json_a['project']['description'];
			
			echo "<h2>$projectname</h2><img src='$projectimage'>";*/
		?>
		
		
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
	</div>
	
	<?php 
		echo $this->Html->script('vendor/jquery.js');
		echo $this->Html->script('foundation.min.js');
		echo $this->Html->script('reveal.js');
	?>
</body>
</html>

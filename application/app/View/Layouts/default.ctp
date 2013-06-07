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

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
		
	<div id="content">

			<!--<?php echo $this->Session->flash(); ?>-->

			<!--<?php echo $this->fetch('content'); ?>-->
		
	</div>
	
	<?php echo $this->Html->script('foundation.min'); ?>
</body>
</html>

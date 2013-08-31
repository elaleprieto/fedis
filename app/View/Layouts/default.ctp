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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Federal Distribuciones');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
<body>
	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>

	<?php echo $this->element('sql_dump'); ?>
	
	<?php
	echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js','bootstrap.min'));
	echo $this->fetch('script');
	?>
</body>
</html>
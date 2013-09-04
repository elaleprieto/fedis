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
			echo $this->Html->css(array('vendor/bootstrap.min', 'layouts/default'));
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
		<!-- MENU 1 :: buscador-->
		<div class="navbar-out">
			<nav class="navbar navbar-top" role="navigation">
			    <ul class="nav navbar-nav  col-sm-12 text-center">
	
			        <!-- Redes Sociales -->
			        <li class="col-sm-5 col-sm-offset-1">
			        	<form class="navbar-form text-left" role="search">
							<i class="icon-facebook-sign icon-2x"></i>
				        	<i class="icon-twitter-sign icon-2x"></i>
			    		</form>
			        </li>
			        
			        <!-- Buscar -->
			        <li class="col-sm-5">
			        	<form class="navbar-form pull-right" role="search">
		            		<input type="text" class="form-control" placeholder="buscar...">
			    		</form>
			        </li>
			    </ul>
				
				<!-- MENU 2 :: Categorías -->
				<div>
				    <div class="col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3">
				        <div class="row categories-menu">
				            <!-- <ul class="nav nav-pills nav-justified">
				                <li>
				                    <a href="/ficcion">ficción</a>
				                </li>
				                <li>
				                    <a href="/documental">documental</a>
				                </li>
				                <li>
				                    <a href="/animacion">animación</a>
				                </li>
				                <li>
				                    <a href="/cortos">cortometrajes</a>
				                </li>
				                <li>
				                    <a href="#">quienes somos</a>
				                </li>
				                <li>
				                    <a href="#">contacto</a>
				                </li>
				            </ul> -->
				                <div class="col-sm-2 text-center">
				                    <a href="/ficcion">ficción</a>
				                </div>
				                <div class="col-sm-2 text-center">
				                    <a href="/documental">documental</a>
				                </div>
				                <div class="col-sm-2 text-center">
				                    <a href="/animacion">animación</a>
				                </div>
				                <div class="col-sm-2 text-center">
				                    <a href="/cortos">cortos</a>
				                </div>
				                <div class="col-sm-3 text-center">
				                    <a href="#">quienes somos</a>
				                </div>
				                <div class="col-sm-1 text-center">
				                    <a href="#">contacto</a>
								</div>
				        </div>
				    </div>
				</div>
			</nav>
		</div>
		
		<div class="container">
			<?php echo $this->fetch('content'); ?>
		
			<!-- footer -->
			<footer class="row">
				<!-- Logos de auspiciantes -->
				<div class="row auspiciantes">
					<div class="col-sm-2 col-sm-offset-3 text-center">
						<img class="img-responsive" src="http://placehold.it/350x70" />
						INCAA
					</div>
					<div class="col-sm-2 text-center">
						<?php 
						echo  $this->Html->image('logos/Ausp-TDA-120.png'
							, array('alt' => 'tda', 'border' => '0'));
						?>
					</div>
					<div class="col-sm-2 text-center">
						<?php 
						echo  $this->Html->image('logos/argentinaPaisDeHonor.png'
							, array('alt' => 'Argentina, país de honor', 'border' => '0', 'class'=>'img-responsive'));
						?>
					</div>
				</div>
				
				<!-- Logo de federal distribuciones -->
				<div class="row">
					<div class="col-sm-1 col-sm-offset-4">
						<?php 
						echo  $this->Html->image('logo_federal.png'
							, array('alt' => 'Federal Distribuciones', 'border' => '0', 'class'=>'img-responsive'));
						?>
					</div>
					<div class="col-sm-3">
						<p>
							Av. 9 de Julio 2356 - Of. 456
							<br />
							Tel 011 - 45666968 / 45664687
							<br />
							federaldistribuciones@gmail.com
						</p>
					</div>
				</div>
			</footer>
		</div>
		
		<!-- Logo superior (3d) -->
		<div class="col-sm-1 col-sm-offset-1 logo-superior">
			<a href="/"><img src="/img/logo_federal.png" border="0" class="img-responsive" /></a>
				<?php 
					// echo $this->Html->image('logo_federal.png'
						// , array('alt' => 'Federal Distribuciones', 'border' => '0', 'class'=>'img-responsive')
					// );
				?>
		</div>


		<?php echo $this->element('sql_dump'); ?>
		
		<?php
		echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js','bootstrap.min'));
		echo $this->fetch('script');
		?>
	</body>
</html>
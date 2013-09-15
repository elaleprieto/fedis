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
			        <li class="col-sm-12 text-center">
			        	<form class="navbar-form text-center" role="search">
							<i class="icon-facebook-sign icon-2x"></i>
				        	<i class="icon-twitter-sign icon-2x"></i>
			    		</form>
			        </li>
			    </ul>
				
				<!-- MENU 2 :: Categorías -->
				<div>
				    <div class="col-sm-12">
				        <div class="categories-menu text-center">
			                <span>
			                    <a href="/">inicio</a>
			                </span>
			                <span>
			                    <a href="/ficcion">[ ficción ]</a>
			                </span>
			                <span>
			                    <a href="/documental">[ documental ]</a>
			                </span>
			                <span>
			                    <a href="/animacion">[ animación ]</a>
			                </span>
			                <span>
			                    <a href="/cortos">[ cortos ]</a>
			                </span>
			                <span>
			                    <a href="/quienes">quienes somos</a>
			                </span>
			                <span>
			                    <a href="/contacto">contacto</a>
			                </span>
			                <span>
			                    <a href="http://200.110.135.125/~federal/site" target="_blank">Inscripción</a>
			                </span>
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
					<div class="col-sm-1 col-sm-offset-4 text-center">
						<?php 
						echo  $this->Html->image('logos/incaa.png'
							, array('alt' => 'INCAA', 'border' => '0', 'class' => 'img-responsive'));
						?>
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
				
				<!-- MENU 3 :: Categorías footer -->
				<!-- <div>
				    <div class="col-sm-12 col-lg-12">
				        <div class="row categories-menu">
				                <div class="col-sm-1 text-center">
				                    <a href="/">inicio</a>
				                </div>
				                <div class="col-sm-1 text-center">
				                    <a href="/ficcion">[ ficción ]</a>
				                </div>
				                <div class="col-sm-2 text-center">
				                    <a href="/documental">[ documental ]</a>
				                </div>
				                <div class="col-sm-2 text-center">
				                    <a href="/animacion">[ animación ]</a>
				                </div>
				                <div class="col-sm-2 text-center">
				                    <a href="/cortos">[ cortos ]</a>
				                </div>
				                <div class="col-sm-2 text-center">
				                    <a href="#">quienes somos</a>
				                </div>
				                <div class="col-sm-1 text-center">
				                    <a href="#">contacto</a>
								</div>
				                <div class="col-sm-1 text-center">
				                    <a href="http://200.110.135.125/~federal/site" target="_blank">Inscripción</a>
								</div>
				        </div>
				    </div>
				</div> -->
				<div>
				    <div class="col-sm-12">
				        <div class="row categories-menu text-center">
			                <span>
			                    <a href="/">inicio</a>
			                </span>
			                <span>
			                    <a href="/ficcion">[ ficción ]</a>
			                </span>
			                <span>
			                    <a href="/documental">[ documental ]</a>
			                </span>
			                <span>
			                    <a href="/animacion">[ animación ]</a>
			                </span>
			                <span>
			                    <a href="/cortos">[ cortos ]</a>
			                </span>
			                <span>
			                    <a href="#">quienes somos</a>
			                </span>
			                <span>
			                    <a href="#">contacto</a>
			                </span>
			                <span>
			                    <a href="http://200.110.135.125/~federal/site" target="_blank">Inscripción</a>
			                </span>
				        </div>
				    </div>
				</div>
				
				<!-- Logo de federal distribuciones -->
				<div class="row">
					<div class="col-sm-1 col-sm-offset-4">
						<?php 
						echo  $this->Html->image('logos/logo_federal.png'
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
		<!-- <div class="col-sm-1 col-sm-offset-1 logo-superior">
			<a href="/"><img src="/img/logo_federal.png" border="0" class="img-responsive" /></a> -->
				<?php 
					// echo $this->Html->image('logo_federal.png'
						// , array('alt' => 'Federal Distribuciones', 'border' => '0', 'class'=>'img-responsive')
					// );
				?>
		<!-- </div> -->


		<?php echo $this->element('sql_dump'); ?>
		
		<?php
		echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js','bootstrap.min'));
		echo $this->fetch('script');		
		?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-27799433-9', 'distribucionfederal.com.ar');
		  ga('send', 'pageview');

		</script>
	</body>
</html>

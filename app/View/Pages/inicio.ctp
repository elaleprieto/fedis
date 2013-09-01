<?php
echo $this->Html->css('inicio', null, array('inline' => false))
?>

<!-- MENU 1 :: buscador-->
<nav class="navbar navbar-inverse" role="navigation">
    <ul class="nav navbar-nav  col-sm-12 text-center">
        <li class="col-sm-6">
           <p>Contenidos con identidad propia <br>y de interes global</p>
        </li>
        <li class="col-sm-6">
        	<form class="navbar-form" role="search">
        		<label>buscar: </label>
        		<div class="form-group">
            		<input type="text" class="form-control">
        		</div>
    		</form>
        </li>
    </ul>
</nav>

<!-- MENU 2 :: Sociales -->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <i class="icon-facebook-sign icon-2x pull-right"></i>
        <i class="icon-twitter-sign icon-2x pull-right"></i>
    </div>
</div>

<!-- MENU 3 :: Categorías -->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <ul class="nav nav-pills nav-justified">
                <li>
                    <a href="#">ficción</a>
                </li>
                <li>
                    <a href="#">documental</a>
                </li>
                <li>
                    <a href="#">animación</a>
                </li>
                <li>
                    <a href="#">largometrajes</a>
                </li>
                <li>
                    <a href="#">quienes somos</a>
                </li>
                <li>
                    <a href="#">contacto</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Carousel Video -->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div id="carousel" class="carousel slide text-center">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="col-sm-6 img-responsive" src="/img/thumbs/principal.jpg" />
                    <div class="carousel-caption">
                        Video 1
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/720x400" />
                    <div class="carousel-caption">
                        Video 2
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/720x400" />
                    <div class="carousel-caption">
                        Video 3
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" data-slide="prev"> <span class="icon-prev"></span> </a>
            <a class="right carousel-control" href="#carousel" data-slide="next"> <span class="icon-next"></span> </a>
        </div>
    </div>
</div>
<br>

<!-- Videos selección aleatoria -->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <div class="col-sm-3">
                <div class="row text-center">
                    [ ficción ]
                </div>
				<div class="row text-center">
					<div class="col-sm-12">
						<a href="/tracks/view/2">
							<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/ficcion1.jpg" />
						</a>
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/ficcion2.jpg" />
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/ficcion3.jpg" />
					</div>
				</div>
            </div>
            <div class="col-sm-3">
                <div class="row text-center">
                    [ documental ]
                </div>
                <div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/documental1.jpg" />
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/documental2.jpg" />
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/documental3.jpg" />
					</div>
				</div>
            </div>
            <div class="col-sm-3">
                <div class="row text-center">
                    [ animación ]
                </div>
                <div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/animacion1.jpg" />
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/animacion2.jpg" />
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/animacion3.jpg" />
					</div>
				</div>
            </div>
            <div class="col-sm-3">
                <div class="row text-center">
                    [ largometraje ]
                </div>
                <div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/largometraje1.jpg" />
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/largometraje2.jpg" />
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-12">
						<img class="col-sm-12 img-responsive img-rounded" src="/img/thumbs/largometraje3.jpg" />
					</div>
				</div>
            </div>
        </div>
    </div>
</div><!-- /videos selección aleatoria -->
<br />

<!-- Logos -->
<div class="row">
	<div class="col-sm-2 col-sm-offset-3 text-center">
		<img class="img-responsive img-circle" src="http://placehold.it/350x150" />
		Presidencia
	</div>
	<div class="col-sm-2 text-center">
		<img class="img-responsive img-circle" src="http://placehold.it/350x150" />
		INCAA
	</div>
	<div class="col-sm-2 text-center">
		<img class="img-responsive img-circle" src="http://placehold.it/350x150" />
		tda
	</div>
</div>

<!-- footer -->
<footer class="row">
	<div class="col-sm-1 col-sm-offset-4">
		<?php 
		echo  $this->Html->image('logo_federal.png', array('alt' => 'Federal Distribuciones', 'border' => '0', 'class'=>'img-responsive'));
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
</footer>

<!-- Logo superior -->
<div class="col-sm-2 col-sm-offset-5 logo-superior">
	<?php 
		echo  $this->Html->image('logo_federal.png', array('alt' => 'Federal Distribuciones', 'border' => '0', 'class'=>'img-responsive'));
	?>
</div>
		
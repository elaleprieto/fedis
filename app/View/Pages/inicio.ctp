<?php
echo $this->Html->css('inicio', null, array('inline' => false))
?>

<!-- Carousel Video -->
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
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
                    <img class="img-responsive" src="/img/thumbs/principal.jpg" />
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

		
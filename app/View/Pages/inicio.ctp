<?php
echo $this->Html->css(array('inicio', 'http://fonts.googleapis.com/css?family=Dosis'), null, array('inline' => false));
$cantidad = 3;
// $ficcion = $this->requestAction('tracks/get/'.$cantidad);
$ficcion = $this->requestAction(Router::url(array('controller'=>'tracks', 'action'=>'get', $cantidad, 'ficcion')));
?>

<!-- Carousel Video -->
<div class="row">
	<div class="col-sm-3 col-sm-offset-1">
		<div class="col-sm-12">
			<a href="/"> <img class="img-responsive logo-superior" src="/img/logos/logo_federal.png" /> </a>
		</div>
		<div class="col-sm-12">
			<p>
				Más de 500 horas de contenidos audiovisuales de Argentina.
				<br />
				Series y unitarios para tv.
				<br />
				Cortometrajes y largometrajes.
				<br />
				Todos realizados con calidad broadcasting internacional.
			</p>
		</div>
	</div>
	<div class="col-sm-7">
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
					<img class="img-responsive" src="/img/thumbs/c0.jpg" />
					<div class="carousel-caption">
						"Con un grupo de productores y realizadores argentinos estaremos presentes en MIPCOM 2013, la feria más esperada del año en el mercado global de contenidos para la industria del entretenimiento en todas las plataformas."
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="/img/thumbs/c1.png" />
				</div>
				<div class="item">
					<img class="img-responsive" src="/img/thumbs/c2.png" />
				</div>
			</div>

			<!-- Controls -->
			<!-- <a class="left carousel-control" href="#carousel" data-slide="prev"> <span class="icon-prev"></span> </a>
			<a class="right carousel-control" href="#carousel" data-slide="next"> <span class="icon-next"></span> </a> -->
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
					<h5><a href="/ficcion"> [ ficción ] </a></h5>
				</div>
				<?php foreach ($ficcion as $track): ?>
					<a href="/tracks/view/<?php echo $track['Track']['id']?>">
						<div class="row text-center ">
							<div class="col-sm-11 col-sm-offset-1 videoRow">
								<div class="row text-center videoThumb">
									<div class="col-sm-12">
										<?php
										if($track['Track']['portadaId']):
											// http://"YOURSERVER"/p/1/sp/100/thumbnail/entry_id/"ENTRYID"/width/"WIDTH"/height/"HEIGHT"
											echo $this->Html->image('http://librekaltura.com.ar/p/1/sp/100/thumbnail/entry_id/' . $track['Track']['portadaId']
												, array('class' => 'portada')
											);
										else:
											echo $this->Html->image('thumbs/noThumb.png'
												, array('class' => 'portada')
											);
										endif;
										?>
									</div>
								</div>
								<div class="row text-center">
									<div class="col-sm-12 videoText" >
										<span><?php echo $track['Track']['title'] ?></span>
									</div>
								</div>
							</div>
						</div>
					</a>
					<br />
				<?php endforeach;	?>
				
				
				
				<!-- <div class="row text-center ">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/ficcion2.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>PEDRO</span>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row text-center ">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/ficcion3.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>SALVATIERRA</span>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="col-sm-3">
				<div class="row text-center">
					<h5><a href="/documental"> [ documental ] </a></h5>
				</div>
				<div class="row text-center ">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/documental1.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>LA NOCTURNA</span>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row text-center ">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/documental2.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>VIVIENDO EN CASA</span>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row text-center ">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/documental3.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>VUELVE CON ÉL</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="row text-center">
					<h5><a href="/animacion"> [ animación ] </a></h5>
				</div>
				<div class="row text-center">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/animacion1.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>SOLTEROS</span>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/animacion2.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>EN FUGA</span>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row text-center ">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/animacion3.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>NATURALEZA VIVA</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="row text-center">
					<h5><a href="/cortos"> [ cortometraje ] </a></h5>
				</div>
				<div class="row text-center">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/largometraje1.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>ADICTOS</span>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/largometraje2.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>EMITERIO</span>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row text-center">
					<div class="col-sm-11 col-sm-offset-1 videoRow">
						<div class="row text-center videoThumb">
							<div class="col-sm-12">
								<a href="/tracks/view/2"> <img class="portada" src="/img/thumbs/largometraje3.jpg" /> </a>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-sm-12 videoText" >
								<span>PAISANOS</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /videos selección aleatoria -->
<br />


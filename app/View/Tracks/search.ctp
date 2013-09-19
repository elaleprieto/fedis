<div class="row">
	<div class="col-sm-3 col-sm-offset-1">
		<div class="col-sm-12">
			<a href="/">
				<img class="img-responsive logo-superior" src="/img/logos/federal.png" />
			</a>
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
	<div class="col-sm-8">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h4 class="category">
					Búsqueda: <?php echo $this->request->data['query']; ?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 videos">
				<?php 
				$i = 0;
				foreach ($tracks as $track): ?>
					<?php if($i % 2 == 0) echo '<div class="row">' ?>
						<div class="col-sm-6">
							<div class="row">
									<div class="col-sm-6">
										<a href="/tracks/view/<?php echo $track['Track']['id']; ?>">
											<?php
											$url = 'http://librekaltura.com.ar/p/1/sp/100/thumbnail/entry_id/' . $track['Track']['entryId'] . '/width/135/height/86';
											echo $this->Html->image($url, array('class' => 'col-sm-12 img-responsive'));
											?>
										</a>
									</div>
									<div class="col-sm-6">
										<a href="/tracks/view/<?php echo $track['Track']['id']; ?>">
											<h5><?php echo $track['Track']['title']; ?></h5>
										</a>
										<p>
											<?php echo $track['Track']['duracion'] . ' - ' . $track['Track']['formato']; ?>
											<br />
											<?php
												foreach ($track['Category'] as $category) :
													echo $category['title'];
												endforeach;
											?>
											<br />
											Tags: 
											<?php 
											foreach ($track['Tag'] as $tag):
											?>
											<a href="/buscar/<?php echo $tag['title']; ?>">
												<?php echo $tag['title'] . ' '; ?>
											</a>
											<?php
											endforeach;
											?>
										</p>
									</div>
								</a>
							</div>
						</div>
					<?php if($i % 2 == 1) echo '</div>' ?>
				<?php
						$i++;
						endforeach;
				?>
			</div>
		</div>
	</div>
</div>

<?php //debug($tracks); ?>
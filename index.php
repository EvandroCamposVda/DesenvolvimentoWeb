<?php
include_once "src/partials/_head.php";
include_once "src/partials/_header.php";
include_once "src/partials/_navegation.php";
?>
<div class="container">
	<div class="col-sm-12 col-md-12">
		<section id="slide1">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				</ol>	

				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block img-fluid" src="img/slides/slide1.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="img/slides/slide2.png" alt="Second slide">
					</div>
				</div>

				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>

		<section class="col-md-12" id="miniSlide">
			<ul>
				<li>
					<h3>Catracas</h3>
					<img src="img/catraca.png" height="190" width="200">
				</li>
				<li>
					<h3>Relogio Ponto</h3>
					<div id="relogioPonto" class="carousel slide" data-ride="carousel">	

						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="img/relogioHenry.png" alt="First slide" height="200" width="200">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="src/topdata/img/ponto.png" alt="Second slide" height="200" width="200">
							</div>
						</div>

						<a class="carousel-control-prev" href="#relogioPonto" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						
						<a class="carousel-control-next" href="#relogioPonto" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</li>
				<li>
					<h3>Camera</h3>
					<div id="camera" class="carousel slide" data-ride="carousel">	

						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="img/camera01.jpg" alt="First slide" height="200" width="200">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="img/camera02.jpg" alt="Second slide" height="200" width="200">
							</div>
						</div>

						<a class="carousel-control-prev" href="#camera" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>

						<a class="carousel-control-next" href="#camera" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						</div>
				</li>
				<li>
					<h3>Alarmes</h3>
					<img src="src/viaweb/img/centralvw8zip/img1.png" height="180" width="180">
				</li>
			</ul>
		</section>
	</div>	
</div>
<?php
	include_once "src/partials/_footer.php"
?>
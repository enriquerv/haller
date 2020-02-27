<?php  
	$active = "HOME";
	include('../php/init.php');
	include('../widgets/head_uni.php');
	include('../widgets/header_uni.php');
?>



	<section class="intro_video" style="margin-top: 50px;">
		<video id="intVideo" muted>
			<source src="<?php echo $direction; ?>/assets/videos/intro2.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div id="img_last">
			<img src="<?php echo $direction; ?>/assets/images/new/img_inicio_2.png" width="100%">
		</div>
	</section>

	<section class="mt-5 mb-5" style="margin: 100px !important;">
		<div class="row">
			<div class="col-md-4 mt-5 text-center" style="cursor: pointer;">
				<a href="licenciaturas.php">
					<img src="<?php echo $direction; ?>/assets/images/uni/icono_licenciatura.png" style="width: 100%;">
				</a>
			</div>
			<div class="col-md-4 mt-5 text-center" style="cursor: pointer;">
				<a href="diplomados.php">
					<img src="<?php echo $direction; ?>/assets/images/uni/icono_diplomado.png" style="width: 100%;">
				</a>
			</div>
			<div class="col-md-4 mt-5 text-center" style="cursor: pointer;">
				<a href="idiomas.php">
					<img src="<?php echo $direction; ?>/assets/images/uni/icono_idioma.png" style="width: 100%;">
				</a>
			</div>
			<div class="col-md-4 mt-5 text-center" style="cursor: pointer;">
				<a href="sobrecargo.php">
					<img src="<?php echo $direction; ?>/assets/images/uni/icono_sobrecargo.png" style="width: 100%;">
				</a>
			</div>
			<div class="col-md-4 mt-5 text-center" style="cursor: pointer;">
				<a href="virtual.php">
					<img src="<?php echo $direction; ?>/assets/images/uni/icono_virtual.png" style="width: 100%;">
				</a>
			</div>
		</div>
	</section>

	<!-- <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center; margin: 80px 0 120px;">
	  <span style="font-size: 40px; background-color: #F3F5F6; padding: 0 10px;">
	   Centro Universitario Haller
	  </span>
	</div>
 	-->
	<!-- <section class="inst_video">
		<video id="instVideo" controls>
			<source src="<?php echo $direction; ?>/assets/videos/instituto.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</section> -->

	<!-- <section class="container-fluid mt-5 mb-5" style="margin-top: 150px !important;">
		<img src="<?php echo $direction; ?>/assets/images/titulos/titulo_licenciaturas.jpg" style="width: 100%;">
	</section>

	<section class="container-fluid mb-5" style="margin-top: 100px;">
		<div class="container mt-5" style="font-weight: bold;">		
			<div class="row mt-5" style='padding-bottom: 100px;'>
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/gastro.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="gastronomia.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>			
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/derecho.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="derecho.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>
			</div>	

			<div class="row mt-5 " style='padding-bottom: 100px;'>
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/turismo.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="turismo.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>			
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/comercio.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="comercio.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>
			</div>

			<div class="row mt-5" style='padding-bottom: 100px;'>
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/ciencias.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="ciencias.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>			
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/merca.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="mercadotecnia.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>
			</div>

			<div class="row mt-5" style='padding-bottom: 100px;'>
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/admon.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="administracion.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>			
				<div class="col-md-6 mt-4 mb-5 div-servicios">
					<img src="<?php echo $direction; ?>/assets/images/diplomados.jpg" class="img-servicios">
					<p class="mt-3">
						<a href="diplomados.php"><button class="btn btn-primary btn-carreras">Conoce más</button></a>
					</p>
				</div>
			</div>

		</div>
	</section> -->

	<div style="clear: both;"></div>




<?php  
	include('../widgets/footer_uni.php');

?>
<?php  
	$active = "NOSOTROS";
	include('../php/init.php');
	include('../widgets/head.php');
	include('../widgets/header.php');
?>

<section>
	<img src="<?php echo $direction; ?>/assets/images/titulos/titulo_nosotros.png" style="width: 100%;">
</section>

<div class="who">
	<p style="font-weight: bold">¿QUIÉNES SOMOS?</p>
	Somos una institución educativa, con  más de 30 años de experiencia. Nuestro legado es
	formar alumnos (as) críticos, reflexivos, creativos, amantes de la paz y los derechos
	humanos, socialmente comprometidos con su entorno social y con su país. Para lograr
	este propósito fomentamos valores morales y éticos, tales como: solidaridad, compromiso,
	respeto, responsabilidad, entre otros.
</div>


<section>
	<div class="container" style="margin-top: 75px;">
		<div class="row">
			<div class="col-md-4 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_mision.png" class="mb-3" width="100%">				
					<a href="mision.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>
			<div class="col-md-4 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_vision.png" class="mb-3" width="100%">
					<a href="vision.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>
			<div class="col-md-4 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_filosofia.png" class="mb-3" width="100%">
					<a href="filosofia.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>
			<div class="col-md-4 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_historia.png" class="mb-3" width="100%">
					<a href="historia.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>
			<div class="col-md-4 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_biografia.png" class="mb-3" width="100%">
					<a href="biografia.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>
			<div class="col-md-4 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_valores.png" class="mb-3" width="100%">
					<a href="valores.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>
		</div>
	</div>
</section>




<?php  
	include('../widgets/footer.php');
?>
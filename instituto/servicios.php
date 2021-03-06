<?php  
	$active = "SERVICIOS";
	include('../php/init.php');
	include('../widgets/head.php');
	include('../widgets/header.php');
?>

<section>
	<img src="<?php echo $direction; ?>/assets/images/titulos/titulo_servicios.png" style="width: 100%;">
</section>

<section>
	<div class="container mt-5" style="font-weight: bold;">
		<div class="row">
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<img src="<?php echo $direction; ?>/assets/images/idiomas.jpg" class="img-servicios">
			</div>			
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<p class="p-text text-justify">
					El lenguaje es la base de nuestra comunicación y por lo tanto, la parte medular de las
					relaciones humanas. A través del lenguaje somos capaces de expresar nuestros
					pensamientos y emociones. La actual integración internacional ha generado una creciente
					dependencia entre los distintos países del mundo que ha dado como resultado la
					unificación de diversas culturas, sociedades y mercados. Todo esto ha generado una serie
					de transformaciones sociales, políticas y económicas que han hecho inminente la necesidad
					de dominar otras lenguas.<br>
					<p class="w-100 text-center mt-5">
						<a href="idiomas.php"><button class="btn btn-primary mt-4">Ver más</button></a>
					</p>
					
				</p>
			</div>
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<p class="container mt-5 text-justify">
					El Instituto Rafael Haller preocupado por el desarrollo integral de sus alumnos y de su comunidad en general, los impulsa a participar en las diferentes actividades deportivas, artísticas y tecnológicas, realizadas por el Centro Artístico, Deportivo y Tecnológico, (CADT).<br>
					<p class="w-100 text-center mt-5">
						<a href="cadt.php"><button class="btn btn-primary mt-4">Ver más</button></a>
					</p>
				</p>
			</div>
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<img src="<?php echo $direction; ?>/assets/images/cadt.jpg" class="img-servicios">
			</div>
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<img src="<?php echo $direction; ?>/assets/images/plataforma.jpg" class="img-servicios">
			</div>
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<p class="container mt-5 text-justify">
					Entorno virtual intuitivo y amigable en el que hay muchas funcionalidades para optimizar
					tiempo y ahorrar dinero. La plataforma de Instinto Haller cuenta, estructuralmente, con
					distintos módulos que permiten responder a las necesidades de gestión  administrativa,
					académica,  de comunicación y del proceso de enseñanza aprendizaje.<br>
					<p class="w-100 text-center mt-5">
						<a href="plataforma.php"><button class="btn btn-primary mt-4">Ver más</button></a>
					</p>
				</p>
			</div>
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<p class="container mt-5 text-left">
					Contamos con estancia infantil en los niveles:<br>
					<ul class="text-left">
						<li>Maternal</li>
						<li>Preescolar</li>
						<li>1st English</li>
						<li>Primaria</li>
					</ul>
				</p>
			</div>
			<div class="col-md-6 mt-5 mb-5 div-servicios">
				<img src="<?php echo $direction; ?>/assets/images/estancia.jpg" class="img-servicios">
			</div>
		</div>
	</div>
</section>




<?php  
	include('../widgets/footer.php');
?>
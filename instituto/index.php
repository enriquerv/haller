<?php  
	$active = "HOME";
	include('../php/init.php');
	include('../widgets/head.php');
	include('../widgets/header.php');
?>



	<section class="intro_video" style="margin-top: 15px;">
		<video id="intVideo" muted>
			<source src="<?php echo $direction; ?>/assets/videos/intro.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div id="img_last">
			<img src="<?php echo $direction; ?>/assets/images/fin_video_instituto.png" width="100%">
		</div>
	</section>
	
	<section class="oferta_edu container-fluid" id="ofed" style="margin-top: 100px;">
		<div class="row titlemid">
			<div class="col-md-4"><hr></div>
			<div class="col-md-4 text-center">OFERTA EDUCATIVA</div>
			<div class="col-md-4"><hr></div>
		</div>
	</section>

	<section class="oferta_edu container-fluid" id="ofed" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-2 edu_option maternal" data-image='ac_maternal' data-image-r="ac_maternal" data-text="message_mat">
				<div class="text">Maternal</div>
				<div class="d-none message" id="message_mat">
					En instituto Rafael Haller nos ocupamos de que los más pequeños del hogar
					cuenten con la mejor educación para la primera parte de su crecimiento, por tal
					motivo la incorporación en el grado de maternal es fundamental para el desarrollo
					psicomotriz y de lenguaje así como para los procesos de socialización.
					<a href="maternal.php">
						<p style="margin-top: 20px; width: 100%; text-align: center;">
							<button class="btn-oe">Ver más</button>
						</p>	
					</a>
					
				</div>
			</div>
			<div class="col-md-2 edu_option preescolar" data-image='ac_preescolar' data-image-r="ac_preescolar" data-text="message_pre">
				<div class="text">Preescolar</div>
				<div class="d-none message" id="message_pre">
					Somos una institución educativa que promueve el desarrollo integral de los niños a través de
					habilidades cognitivas mediante el proceso sensorial de maduración apoyado de las tic’s
					(tecnología información y comunicación) y las tac´s (tecnologías aplicadas a la educación), que
					serán la base para edificar y facilitar su potencial de aprendizaje que se sustenta  en competencias
					educativas  para las siguientes etapas de su vida.
					<a href="preescolar.php">
						<p style="margin-top: 20px; width: 100%; text-align: center;">
							<button class="btn-oe">Ver más</button>
						</p>	
					</a>
					
				</div>
			</div>
			<div class="col-md-2 edu_option ingles" data-image='ac_ingles' data-image-r="ac_ingles" data-text="message_ing">
				<div class="text">1st English</div>
				<div class="d-none message" id="message_ing">
					El Instituto Rafael Haller brinda un año de inglés como parte de nuestro sistema bilingüe. Los niños
					aprenden las estructuras básicas como segundo idioma, al mismo tiempo reforzan su habilidad en
					lectura y escritura, de esa manera, cuando entran a la primaria adquieren madurez y habilidad
					cognitiva para comprender su entorno en inglés.
					<a href="ingles.php">
						<p style="margin-top: 20px; width: 100%; text-align: center;">
							<button class="btn-oe">Ver más</button>
						</p>	
					</a>
					
				</div>
			</div>
			<div class="col-md-2 edu_option primaria" data-image='ac_primaria' data-image-r="ac_primaria" data-text="message_pri">
				<div class="text">Primaria</div>
				<div class="d-none message" id="message_pri">
					En este nivel se propone contribuir a la formación integral de los niños, enmarcada dentro
					de una labor conjunta interactiva, cooperativa y coordinada por parte de los distintos
					actores que concurren en el hecho educativo.
					<a href="primaria.php">
						<p style="margin-top: 20px; width: 100%; text-align: center;">
							<button class="btn-oe">Ver más</button>
						</p>	
					</a>
					
				</div>
			</div>
			<div class="col-md-2 edu_option secundaria" data-image='ac_secu' data-image-r="ac_secu" data-text="message_sec">
				<div class="text">Secundaria</div>
				<div class="d-none message" id="message_sec">
					El plan de estudios de este nivel se centra en los conocimientos, en las competencias y en la
					comprensión para desarrollar un conjunto de habilidades.
					<a href="secundaria.php">
						<p style="margin-top: 20px; width: 100%; text-align: center;">
							<button class="btn-oe">Ver más</button>
						</p>	
					</a>
					
				</div>
			</div>
			<div class="col-md-2 edu_option preparatoria" data-image='ac_prepa' data-image-r="ac_prepa" data-text="message_prp"> 
				<div class="text">Preparatoria</div>
				<div class="d-none message" id="message_prp">
					La preparatoria en Instituto Haller propicia la excelencia académica del alumnado, a través
					de los planes y programas de estudio de la dirección General de Bachillerato,
					distinguiéndose en el medio educativo por su compromiso social y formativo de alta calidad
					moral. Trabajamos día con día, preparando jóvenes capaces de enfrentar los retos que exige
					un mundo globalizado.
					<a href="preparatoria.php">
						<p style="margin-top: 20px; width: 100%; text-align: center;">
							<button class="btn-oe">Ver más</button>
						</p>	
					</a>
					
				</div>
			</div>
		</div>
	</section>

	<section class="oferta_edu container-fluid" id="ofed" style="margin-top: 100px;">
		<div class="row titlemid">
			<div class="col-md-4"><hr></div>
			<div class="col-md-4 text-center">VIDEO INSTITUCIONAL</div>
			<div class="col-md-4"><hr></div>
		</div>
	</section>
	

	<section id='imgVideo' style="background: #333333; margin-top: 150px;">
		<img src="<?php echo $direction; ?>/assets/images/play.png" style="position: relative; top: 30%; left: 50%; transform: translate(-50%); cursor: pointer;">
	</section>

	<section class="inst_video" id='contVideo' style="margin-top: 150px;">
		<video id="instVideo" controls>
			<source src="<?php echo $direction; ?>/assets/videos/instituto.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</section>

	<section class="container-fluid " style="margin-top: 150px; margin-bottom: 150px; ">
		<div class="row">
			<div class="col-md-4">
					
					<div class="cont-mvh">
						<img src="<?php echo $direction; ?>/assets/images/c1.jpg" width="100%">						
					</div>
				</div>
				<div class="col-md-4">					
					<div class="cont-mvh">
						<img src="<?php echo $direction; ?>/assets/images/c2.jpg" width="100%">
					</div>
				</div>
				<div class="col-md-4">					
					<div class="cont-mvh">
						<img src="<?php echo $direction; ?>/assets/images/c3.jpg" width="100%">
					</div>
				</div>
			</div>
		<input type="hidden" value="0" id="height-mvh">		
	</section>

	<style>
		.titlemid hr{
			border : 2px solid #023f66;
		}
		.titlemid{
			font-size: 30px; 
			color: #023f66;
		}
	</style>


<?php  
	include('../widgets/footer.php');

?>

<script>
	$( document ).ready(function() {
	    H = $("#contVideo").height();
	   	$("#imgVideo").css('height', H+'px');
	   	$("#contVideo").hide();
	});

	$("#imgVideo").click(function(){
		$("#contVideo").show();
		$(this).hide();
		$("#instVideo").get(0).play();
	});


</script>
<?php  
	$active = "HOME";
	include('php/init.php');
?>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Haller | Incio</title>
		<meta name="description" content="APYM">

		<link rel="shortcut icon" type="image/png" href=""/>
		<link rel="stylesheet" href="<?php echo $direction; ?>/assets/resources/bootstrap.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $direction; ?>/css/custom.css">
	</head>
	<body style="margin: 0;" class="body_inicio">	
		
		<!-- <div class="barra_inicio">
			<img src="assets/images/barra-inicio.png" width="100%" height="100%">	
			<img src="assets/images/titulo-inicio.png" class="titulo_inicio">
		</div> --><!-- 
		<div style="width: 100%; background: #243f7b; height: 60px;"></div>
		<div style="width: 100%; background: #ffffff; height: 20px;"></div>
		<div style="width: 100%; background: #cd2034; height: 30px;"></div> -->

		<div class="div_escudos">
			
			<div class="cont_escudos" id="flip1" style="margin-top: -150px; margin-left: -100px;">
				<div class="front" id="flipFront1">
					<img src="assets/images/logo1_1p.png" id="escudo1">
				</div>
				<div class="back" id="flipBack1">
					<p class="p_tit2">Instituto Rafael Haller</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-i"></i>Maternal</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-i"></i>Preescolar</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-i"></i>Primero de Inglés</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-i"></i>Primaria</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-i"></i>Secundaria</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-i"></i>Preparatoria</p>

					<p class="p_tit" style="margin: 20px !important;">
					 	<a href="<?php echo $direction; ?>/instituto">
							<button class="btn btn-primary" id="goToHaller2">Acceder</button>
						</a>
					</p>
			        
			    </div> 
			</div>

			<div class="cont_escudos" id="flip2" style="margin-top: 150px; margin-left: 100px;">
				<div class="front" id="flipFront2">
					<img src="assets/images/logo2_1p.png">
				</div>	
				<div class="back" id="flipBack2">
					<p class="p_tit2">Centro Universitario Haller</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-u"></i>Licenciaturas</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-u"></i>Diplomados</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-u"></i>Idiomas</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-u"></i>Sobrecargo</p>
					<p class="p_tit text-left"><i class="fa fa-circle circle-u"></i>Plataforma Educativa</p>

					<p class="p_tit" style="margin: 20px !important;">
					 	<a href="<?php echo $direction; ?>/universidad">
							<button class="btn btn-primary" id="goToHaller2">Acceder</button>
						</a>
					</p>
			    </div>	
			</div>
				
		</div>

	
		<style>
			@font-face {
			  font-family: 'luminari';
			  src: url('css/fonts/Luminari-Regular.ttf');
			}

			.barra_inicio{
				max-height: 50%;
			    width: 100%;
			}
			.titulo_inicio{
				position: absolute;
			    top: 10px;
			    width: 100%;
			    height: 40%;
			}
			.body_inicio{				
				margin: 0;
				background-size:cover;
				background-image: url('assets/images/bg-inicio2.png');
			    background-repeat: no-repeat;
			    background-attachment: fixed;
			    background-position: center; 
			}
			.div_escudos{
				    height: 350px;
			    width: 50%;
			    /* margin-top: 185px; */
			    /* border: 2px solid; */
			    position: fixed;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			}

			.cont_escudos{
				float: left;
    			width: 50%;
    			text-align: center;
			}
			.div_escudos div img{
    			width: 75%;
			}

			.back{
				border: 2px solid;
			    padding: 7% 25px;
			    background: #00245a;
			}
			.p_tit{
			    font-family: Myriad;
		        font-size: 20px;
		        color: #fff;
		        padding: 0 !important;
		        margin: 0 !important;
			}
			.p_tit2{
			    font-family: Myriad;
		        font-size: 30px;
		        color: #fff;
			}
			.p_subtit{
				font-family: Myriad;
			    font-size: 20px;
			    color: #000000;
			}
			.p_text{
				font-family: Myriad;
			    font-size: 25px;
			    color: #a0001c;
			}

			.fa-circle{
				font-size: 14px;
			    color: red;
			    margin: 0px 16px 0 0;
			    display: none;
			}

			

		</style>

		<script src="<?php echo $direction; ?>/assets/resources/jquery-3.3.1.slim.min.js" ></script>
		<script src="<?php echo $direction; ?>/assets/resources/bootstrap.min.js"></script>
		<script src="<?php echo $direction; ?>/assets/resources/popper.min.js" ></script>
		<script src="<?php echo $direction; ?>/assets/resources/jquery.flip.min.js"></script>

		<script>
			$(function(){
			    $("#flip1").flip();
			    $("#flip2").flip();
			});

			$("#flipFront1").mouseenter(function(){
				$("#flip1").click();
				$(".circle-i").css('display', 'inline');
			});
			$("#flipBack1").mouseleave(function(){
				$("#flip1").click();
				$(".circle-i").css('display', 'none');
			});

			$("#flipFront2").mouseenter(function(){
				$("#flip2").click();
				$(".circle-u").css('display', 'inline');
			});
			$("#flipBack2").mouseleave(function(){
				$("#flip2").click();
				$(".circle-u").css('display', 'none');
			});
		</script>
	</body>

</html>

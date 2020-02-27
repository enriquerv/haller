<?php  
	$active = "Plataforma";
	include('../php/init.php');
	include('../widgets/head.php');
	include('../widgets/header.php');
?>

<section>
	<img src="<?php echo $direction; ?>/assets/images/titulos/titulo_plataforma.png" style="width: 100%;">
</section>

<section>
	<div class="container mt-5" style="font-weight: bold;">
		<p>
			Entorno virtual intuitivo y amigable en el que hay muchas funcionalidades para optimizar
			tiempo y ahorrar dinero. La plataforma de Instinto Haller cuenta, estructuralmente, con
			distintos módulos que permiten responder a las necesidades de gestión  administrativa,
			académica,  de comunicación y del proceso de enseñanza aprendizaje.
			Proporciona espacios de trabajo compartidos para facilitar el intercambio de contenidos e
			información, cuenta con herramientas de comunicación (chats, correos, foros de debate,
			videoconferencias, blogs, etc.)
			El uso de la plataforma educativa ofrece una serie de ventajas en el apoyo de la enseñanza
			presencial que mejoran los resultados alcanzando el éxito académico.
		</p>

		<div class="row mt-5 mb-5">
			<div class="col-md-3 text-center">
				<p><img src="<?php echo $direction; ?>/assets/images/chamilo/plata01.png" width="75%"></p>
				<?php include('PREESCOLAR.html') ?>	
			</div>
			<div class="col-md-3 text-center">
				<p><img src="<?php echo $direction; ?>/assets/images/chamilo/plata02.png" width="75%"></p>
				<?php include('PRIMARIA.html') ?>		
			</div>
			<div class="col-md-3 text-center">
				<p><img src="<?php echo $direction; ?>/assets/images/chamilo/plata03.png" width="75%"></p>
				<?php include('SECUNDARIA.html') ?>		
			</div>
			<div class="col-md-3 text-center">
				<p><img src="<?php echo $direction; ?>/assets/images/chamilo/plata04.png" width="75%"></p>
				<?php include('PREPATEPO.html') ?>		
			</div>
		</div>
		
</section>




<?php  
	include('../widgets/footer.php');
?>

<?php  
	$active = "NOSOTROS";
	include('../php/init.php');
	include('../widgets/head_uni.php');
	include('../widgets/header_uni.php');
?>

<section>
	<img src="<?php echo $direction; ?>/assets/images/titulos/titulo_nosotros.png" style="width: 100%;">
</section>

<section>
	<div class="container" style="margin-top: 75px;">
		<div class="row">
			<div class="col-md-6 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_mision.png" class="mb-3" width="60%">				
					<a href="mision.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>
			<div class="col-md-6 mt-3 mb-3">
				<div class="div-nosotros">
					<img src="<?php echo $direction; ?>/assets/images/titulos/nos_vision.png" class="mb-3" width="60%">
					<a href="vision.php"><button class="btn btn-primary">VER MÁS</button></a>
				</div>
			</div>			
		</div>
	</div>
</section>




<?php  
	include('../widgets/footer_uni.php');
?>
<?php  
	$active = "GALERÍA";
	include('../php/init.php');
	include('../widgets/head.php');
	include('../widgets/header.php');

	$images = [
		'maternal' => [
			['name' => 'maternal1', 'desc' => 'Maternal 1'],
			['name' => 'maternal2', 'desc' => 'Maternal 2'],
			['name' => 'maternal3', 'desc' => 'Maternal 3'],
			['name' => 'maternal4', 'desc' => 'Maternal 4'],
			['name' => 'maternal5', 'desc' => 'Maternal 5'],
		],
		'preescolar' => [
			['name' => 'preescolar1', 'desc' => 'Preescolar 1'],
			['name' => 'preescolar2', 'desc' => 'Preescolar 2'],
			['name' => 'preescolar3', 'desc' => 'Preescolar 3'],
			['name' => 'preescolar4', 'desc' => 'Preescolar 4'],
			['name' => 'preescolar5', 'desc' => 'Preescolar 5'],
		],
		'ingles' => [
			['name' => 'ingles1', 'desc' => 'Ingles 1'],
			['name' => 'ingles2', 'desc' => 'Ingles 2'],
			['name' => 'ingles3', 'desc' => 'Ingles 3'],
			['name' => 'ingles4', 'desc' => 'Ingles 4'],
			['name' => 'ingles5', 'desc' => 'Ingles 5'],
		],
		'primaria' => [
			['name' => 'primaria1', 'desc' => 'Primaria 1'],
			['name' => 'primaria2', 'desc' => 'Primaria 2'],
			['name' => 'primaria3', 'desc' => 'Primaria 3'],
			['name' => 'primaria4', 'desc' => 'Primaria 4'],
			['name' => 'primaria5', 'desc' => 'Primaria 5'],
		],
		'secundaria' => [
			['name' => 'secundaria1', 'desc' => 'Secundaria 1'],
			['name' => 'secundaria2', 'desc' => 'Secundaria 2'],
			['name' => 'secundaria3', 'desc' => 'Secundaria 3'],
			['name' => 'secundaria4', 'desc' => 'Secundaria 4'],
			['name' => 'secundaria5', 'desc' => 'Secundaria 5'],
		],
		'prepa' => [
			['name' => 'prepa1', 'desc' => 'Prepa 1'],
			['name' => 'prepa2', 'desc' => 'Prepa 2'],
			['name' => 'prepa3', 'desc' => 'Prepa 3'],
			['name' => 'prepa4', 'desc' => 'Prepa 4'],
			['name' => 'prepa5', 'desc' => 'Prepa 5'],
		]
	];
	
?>

<section>
	<img src="<?php echo $direction; ?>/assets/images/titulos/titulo_instalaciones.png" style="width: 100%;">
</section>

<section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12 mb-5 row">
				<p class="col-1 offset-1 setImages" data-title='maternal'>
					<i class="fas fa-circle circMaternal"></i>
					<br>
					Maternal
				</p>
				
				<p class="col-1 offset-1 setImages" data-title='preescolar'>
					<i class="fas fa-circle circPreescolar"></i>
					<br>
					Preescolar
				</p>
				
				<p class="col-1 offset-1 setImages" data-title='ingles'>
					<i class="fas fa-circle circIngles"></i>
					<br>
					Inglés
				</p>
				
				<p class="col-1 offset-1 setImages" data-title='primaria'>
					<i class="fas fa-circle circPrimaria"></i>
					<br>
					Primaria
				</p>
				
				<p class="col-1 offset-1 setImages" data-title='secundaria'>
					<i class="fas fa-circle circSecundaria"></i>
					<br>
					Secundaria
				</p>
				
				<p class="col-1 offset-1 setImages" data-title='prepa'>
					<i class="fas fa-circle circPrepa"></i>
					<br>
					Preparatoria
				</p>				
			</div>

			<?php
				/*foreach ($images as $key => $image) {
					foreach ($image as $level) {
						echo '
								<div class="col-md-4 galery" data-image="'.$key.'">
									<div class="div-galeria">
										<img src="https://place-hold.it/200x200&text='.$level['name'].'.jpg">
										<br>
										<span>'.$level['desc'].'</span>
									</div>
								</div>
							 ';
					}
				}*/
			?>
			<div class="container text-center">
				<div class="alert alert-warning">Estamos trabajando en la galería de nuestras instalaciones, espéralo proximamente</div>
			</div>
			

		</div>
	</div>
</section>>


<script>
	$(".setImages").click(function(){
		name = $(this).attr('data-title');
		$(".galery").each(function(){
			name2 = $(this).attr('data-image');
			if(name != name2)
				$(this).hide();
			else
				$(this).show();
		});


	});
</script>



<?php  
	include('../widgets/footer.php');
?>
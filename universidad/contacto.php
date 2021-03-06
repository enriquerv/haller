<?php  
	$active = "CONTACTO";
	include('../php/init.php');
	include('../widgets/head_uni.php');
	include('../widgets/header_uni.php');
?>

<section>
	<img src="<?php echo $direction; ?>/assets/images/titulos/titulo_contacto.png" style="width: 100%;">
</section>

<section>
	<div class="container text-justify mt-5 mb-5">		
		<div class="container mt-5 mb-5">
			<iframe class="map" src="https://maps.google.com.mx/maps?q=instituto+haller&ll=19.677828,-99.220276&spn=0.279308,0.308647&sll=19.320036399999996,-99.15212780000002&sspn=1.195607100001713,1.7598905899350736&t=m&hq=instituto+haller&z=12&iwloc=A&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
		<div class="row">
			<div class="col-md-6">
				<b style="font-size: 20px;">INFORMACIÓN CONTACTO</b> <br><br>
				Somos una institución educativa, con 30 años de experiencia. Nuestro legado es formar alumnos (as) críticos, reflexivos, creativos, amantes de la paz, los derechos humanos y socialmente comprometidos con su entorno social y con su país.<br><br>

				<b>CAMPUS TEPOTZOTLÁN</b><br>
				AV.BENITO JUÁREZ N.4 BARRIO SAN MARTÍN TEPOTZOTLÁN.<br>
				TEL: 58-76-66-82 <br><br>			 

				<b>CAMPUS IZCALLI</b><br>
				ANDADOR ILRANDA IT. 58, 59 Y 60<br>
				Col. Centro Urbano Cuautitlán Izcalli<br>
				TEL: 58-73-52-92
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-12">
						<div class="alert alert-danger" style="opacity: 0; transition: 0.5s" id='error-f'>
							Favor de llenar todos los campos
						</div>
					</div>
					<div class="col-4">
						<input type="text" class="form-control" placeholder="Nombre" id='name'>
					</div>
					<div class="col-4">
						<input type="text" class="form-control" placeholder="Email" id='email'>
					</div>
					<div class="col-4">
						<input type="text" class="form-control" placeholder="Teléfono" id='phone'>
					</div>
					<div class="col-12 mt-3">
						<textarea class="form-control" placeholder="Mensaje" rows="10" id='tarea'></textarea>
					</div>
					<div class="col-12 mt-3 text-center">
						<button class="btn btn-primary" id="btn-modal" style="padding: 5px 50px; font-size: 18px;">
							Enviar
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensaje enviado correctamente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	Gracias por contactarnos<br>
        Nos comunicarémos lo más pronto posible.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<style>
	.map{
    	width: 90%
    }
</style>

<script>
	
	$("#btn-modal").click(function(){
		nombre = $("#name").val();
		email = $("#email").val();
		phone = $("#phone").val();
		tarea = $("#tarea").val();
		if(name =! '' && email != '' && phone != '' && tarea != ''){
			$("#exampleModal").modal('show');
			$("#error-f").css('opacity', 0);
			$("#name").val('');
			$("#email").val('');
			$("#phone").val('');
			$("#tarea").val('');
			$.ajax({
				url: "../php/functions.php",
				data:{
					name: nombre,
					email: email,
					phone: phone,
					tarea: tarea,
					type: 'universidad',
					send_mail: true
				},
				success: function(result){
					
				}
			});
		}
		else
			$("#error-f").css('opacity', 1);
	})
</script>

<?php  
	include('../widgets/footer_uni.php');
?>


		<footer class="footer container-fluid footer-instituto">
			<div class="row">
				<div class="col-4">
		  			<p class="text-center sec-footer">  				
		  				<b> Campus Tepotzotlán</b> 
		  				<br><br>
						Tel. 58-76-66-82
						<br>
						haller.vinculacion@gmail.com
		  			</p>
				</div>
				<div class="col-4">
					<p class="sec-footer2 text-center">
						<img src="<?php echo $direction; ?>/assets/images/escudo2-inicio.png" width="100px">
						<div class="row">
							<div class="col-3 text-center"> 
								<a href="https://www.facebook.com/CentroUniversitarioHallerOficial/" target="_blank">
									<img src="<?php echo $direction; ?>/assets/images/uni_f.png" width="50px"> 
								</a>
							</div>
							<div class="col-3 text-center"> 
								<a href="https://twitter.com/CentroHaller" target="_blank">
									<img src="<?php echo $direction; ?>/assets/images/uni_t.png" width="50px"> 
								</a>
							</div>
							<div class="col-3 text-center"> 
								<a href="https://www.instagram.com/cuniversitario_haller/" target="_blank">
									<img src="<?php echo $direction; ?>/assets/images/uni_i.png" width="50px"> 
								</a>
							</div>				
							<div class="col-3 text-center"> 
								<a href="https://www.youtube.com/channel/UCVLgB9MAgABG3qUnKh2aWCg" target="_blank">
									<img src="<?php echo $direction; ?>/assets/images/uni_y.png" width="50px"> 
								</a>
							</div>
							<div class="col-12 text-center mt-4">
								<b style="font-size: 30px; letter-spacing: 3px;">Cimentando Valores</b>
								<a href="aviso_privacidad.php" class="no_a"><p style="font-size: 18px;">Aviso de Privacidad</p></a>								
								
							</div>
						</div>
					</p>
				</div>
				<div class="col-4">
					<p class="text-center sec-footer">  				
		  				<b> Campus C. Izcalli</b> 
		  				<br><br>
						Tel. 58-73-52-92
						<br>
						haller.vinculacion@gmail.com
		  			</p>					
				</div>
				<div class="col-md-12 text-center fin-footer pt-5">
					<div>
						CENTRO UNIVERSITARIO HALLER <?php echo date("Y"); ?>
					</div>
				</div>
			</div>
		  
		</footer>


		<?php if($active != "HOME") echo "<style> .footer{ position: initial; margin-top: 40px; } </style>"; ?>

		
		<script src="<?php echo $direction; ?>/assets/resources/bootstrap.min.js"></script>
		<script src="<?php echo $direction; ?>/assets/resources/popper.min.js" ></script>
		<script src="<?php echo $direction; ?>/js/uni_custom.js"></script>
	</body>
</html>
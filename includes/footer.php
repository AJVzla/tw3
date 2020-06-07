	
	</main>

	<footer id="contacto">
		<div class="titulo">
			<div class="galeria">
				<img src="images/home/tijeras22.png" alt="" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
				<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Contactate</h3>
				<img src="images/home/hojillas22.png" alt="" class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">

			</div>
			<p>¿Te gustaría reservar un turno con nosotros? ¿Tenés consultas para hacernos? <strong>Completá este formulario</strong> y te responderemos a la brevedad.</p>
		</div>
		<div class="cont-1170">

			
				<div class="form-cont">
					<div class="form-cont" style="width: 100%">
				
						<form method="post" action="<?=BASE_URL?>#enviado">
							<div class="mod">
								<div class="content-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
									<label for="nombre" class="sr-only">Nombre</label>
									<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : ''?>">
								</div>
								<div class="content-form wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
									<label for="nombre" class="sr-only">Nombre</label>
									<input type="text" name="nombre" id="nombre" placeholder="Apellido" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : ''?>">
								</div>
								

									
							</div>
							<div class="content-form mensaje wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
								<textarea name="mensaje" placeholder="Comentario"><?= isset($_POST['mensaje']) ? $_POST['mensaje'] : '' ?></textarea>
							</div>
							<input type="hidden"  name="recaptcha_response" id="recaptchaContacto">
							<button type="submit" name="enviar_contacto" class=" wow fadeIn" data-wow-duration="1s" data-wow-delay="0s"><strong>ENVIAR</strong></button>
						</form>
				
				</div>

					
					

				</div>
			
		</div>
	</footer>

	<div class="copy" id="enviado">
		<div class="cont-1170" style="display: flex; justify-content: space-between;">
			<p> 
				<a href=""><i class="fab fa-facebook-square"></i></a>
				<a href=""><i class="fab fa-twitter"></i></a>
				<a href=""><i class="fab fa-linkedin-in"></i></a>			 
				<a href=""><i class="fab fa-google-plus-g"></i></a>			 		 
			</p>
			<p style="display: flex; font-size: 14px"> ©2015-2016 VECCHIA | Todos los derechos reservados
			</p>
			<p style="display: flex"> 
			<a href="#" style="font-size: 13px; opacity: 0.9; display: flex; align-items: center" target="_blank"><u>Aviso legal</u></a><a href="#" style="font-size: 13px; opacity: 0.9; display: flex; align-items: center" target="_blank"><u>Politica de privacidad</u></a><a href="#" style="font-size: 13px; opacity: 0.9; display: flex; align-items: center" target="_blank"><u>Mapa Web</u> </a></p>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script>

	<?php
		Plugins::cargar();
		$main_js = $minified->merge(BASE_PATH.'js/main.min.js', 'js', array(BASE_PATH.'js/main.js'));
		echo '<script src="'.str_replace(BASE_PATH, '', $main_js).'?v='.filemtime($main_js) .'"></script>'. PHP_EOL;
   ?>
</body>
</html>
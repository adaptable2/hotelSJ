			<!-- Formulario -->
			<section class="formulario container-fluid" id="contacto">
				<div class="row">
					<div class="offset-md-0 col-md-6 offset-lg-2 col-lg-4 pb-3">
						<h2>
							UBICACIÓN
						</h2>
						<?php
	                    // Argumentos para una busqueda de post type
						$args = array(
								'post_type' => 'footer-form', // Nombre del post type
								'order' => 'ASC'
							);
						$correos = new WP_Query($args);
						if ($correos->posts):
	                      // Foreach para recorrer el resultado de la busqueda
							foreach ($correos->posts as $correo):
								$correo_form = $correo->code_form;
								?>
								<?php
							endforeach;
						endif; 
						?>
						<div class="form">
							<?php echo $correo_form;?>
						</div>
					</div>
					<div class="col-md-6 p-0">
						<div class='v-and-m-responsive'>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1261458909084!2d-75.58733220365534!3d6.247103115631619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429a7b84750b7%3A0x431e906a65d39a67!2sCl.%2042%20%2368a-32%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1572628810810!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
			</section>
			<!-- Formulario -->
			<!-- footer -->
			<div class="container-fluid">
				<div class="row py-5">
					<div class="col-md-12 font-arabic font-upper text-center py-3 title-footer">
						<h2>Comunidad digital</h2>
					</div>
					<div class="col-md-12">
						<div class="footer-carousel">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ambiente.svg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/cotelco.svg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/codeorg.svg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/turi.svg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/bureau.svg">
						</div>
					</div>				
				</div>
			</div>
			<a href="https://api.whatsapp.com/send?phone=573147931996" class="wp"></a>
			<footer class="footer py-5" role="contentinfo">
				<div class="container">
					<div class="row color-white">
						<div class="col-md-1 p-md-0 col-lg-2 d-flex align-items-center justify-content-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="logo" class="img-fluid">
						</div>
						<div class="col-md-5 col-lg-4 datos">
							<p class="ubi">Calle 42 # 68a - 32 <span class="d-block">Medellín - Colombia</span></p>
							<p class="tel">+57 (4) 4444008</p>
							<p class="email">Hotelportondesanjaquin@ifo.com.co</p>
							<p class="chat">M.Me/hotelportondesanjoaquin</p>
						</div>
						<div class="col-md-2 menu-footer p-md-0">
							<?php html5blank_nav(); ?>
						</div>
						<div class="col-md-4">
							<h4>PODEMOS MANTENERTE INFORMADO</h4>
							<p class="color-dorado">Lorem ipsum dolor sit amet, consectetuer adipis </p>
							<?php 
	                    // Argumentos para una busqueda de post type
							$args = array(
								'post_type' => 'footer-form', // Nombre del post type
								'order' => 'ASC'
							);
							$correos = new WP_Query($args);
							if ($correos->posts):
	                      // Foreach para recorrer el resultado de la busqueda
								foreach ($correos->posts as $correo):
									$correo_desc = $correo->code;
									?>
									<?php
								endforeach;
								endif; 
								?>
							<div class="form-footer">
								<?php echo $correo_desc;?>
							</div>
							<ul class="redes">
								<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="" class="img-fluid"></a></li>
								<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt="" class="img-fluid"></a></li>
								<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/ig.png" alt="" class="img-fluid"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 color-white d-flex justify-content-between pt-3 mt-3 copy flex-column flex-lg-row">
						<p> 
							<a href="WWW.HOTELELPORTONDESANJUAQUIN.COM">WWW.HOTELELPORTONDESANJUAQUIN.COM</a>
						</p>
						<p>
							HOTELELPORTONDESANJUAQUIN©  |  TODOS LOS DERECHOS RESERVADOS  |  2019
						</p>
					</div>
				</div>
			</footer>
			<!-- /footer -->

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" async>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
			<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap" rel="stylesheet" async>
			<?php wp_footer(); ?>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js" defer></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" defer></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.js" defer></script>
			<script>
	        conditionizr.config({
	        	assets: '<?php echo get_template_directory_uri(); ?>',
	        	tests: {}
	        });
	    	</script>
</body>
</html>

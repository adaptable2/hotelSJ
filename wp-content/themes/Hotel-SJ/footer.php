			<!-- Formulario -->
			<section class="formulario container-fluid" id="contacto">
				<div class="row">
					<div class="offset-md-0 col-md-6 offset-lg-2 col-lg-4 pb-3">
						<h2>
							UBICACIÓN
						</h2>
						<div class="form">
							<div role="main" id="contacto-sitio-web-569d5c4ed4956655d181"></div>
							<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
							<script type="text/javascript">
							 new RDStationForms('contacto-sitio-web-569d5c4ed4956655d181-html', 'UA-146093982-1').createForm();
							</script>
						</div>
					</div>
					<div class="col-md-6 p-0">
						<div class='v-and-m-responsive'>
							<div id="map" class="map-js"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- Formulario -->
			<!-- footer -->
			<div class="container-fluid">
				<div class="row pt-5">
					<div class="col-md-12 font-arabic font-upper text-center py-3 title-footer">
						<h2>Comunidad digital</h2>
					</div>
				</div>
			</div>
				<div class="container">
				<div class="row pb-5">
					<div class="col-md-12">
						<div class="footer-carousel">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/ambiente.svg" class="lazy">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/cotelco.svg" class="lazy">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/codeorg.svg" class="lazy">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/turi.svg" class="lazy">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/bureau.svg" class="lazy">
						</div>
					</div>				
				</div>
			</div>
			<a href="https://api.whatsapp.com/send?phone=573147931996" class="wp"></a>
			<footer class="footer py-5" role="contentinfo">
				<div class="container">
					<div class="row color-white">
						<div class="col-md-1 p-md-0 col-lg-2 d-flex align-items-center justify-content-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="logo" class="img-fluid lazy">
						</div>
						<div class="col-md-5 col-lg-4 datos">
							<p class="ubi">Calle 42 # 68a - 32 <span class="d-block">Medellín - Colombia</span></p>
							<p class="tel">+57 (4) 4444008</p>
							<p class="email">reservas@hotelportonsj.com.co</p>
							<p class="chat">M.Me/hotelportondesanjoaquin</p>
						</div>
						<div class="col-md-2 menu-footer p-md-0">
							<?php html5blank_nav(); ?>
						</div>
						<div class="col-md-4">
							<h4>PODEMOS MANTENERTE INFORMADO</h4>
							<p class="color-dorado">Entérate de nuestras ofertas y eventos.</p>
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
								<li>
									<a href="https://www.facebook.com/elportonsj/">
										<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="facebook" class="img-fluid lazy">
									</a>
								</li>
								<!--<li>
									<a href="">
										<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt="" class="img-fluid">
									</a>
								</li>-->
								<li>
									<a href="https://www.instagram.com/elportonsj/">
										<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/ig.png" alt="instagram" class="img-fluid lazy">
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-12 color-white d-flex justify-content-between pt-3 mt-3 copy flex-column flex-lg-row">
						<div class="rnt">RNT 12993</div>
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
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" async/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" async/>
			<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap" rel="preload" async/>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" async/>
	 		<?php wp_footer(); ?>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" defer></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2tg95tRLV0b3omGIVAB3gD7WXVyjCNSU" defer></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
			<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js" defer></script>
			<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js" defer></script>
			<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
			<script>
	        conditionizr.config({
	        	assets: '<?php echo get_template_directory_uri(); ?>',
	        	tests: {}
	        });
	    	</script>
</body>
</html>

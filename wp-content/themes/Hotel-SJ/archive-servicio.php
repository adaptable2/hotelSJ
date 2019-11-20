<?php get_header(); ?>
<div class="servicios pb-5">
	<?php
	    	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'Servicios'
			);
	$banners = new WP_Query($args);
	if ($banners->posts):
	      // Foreach para recorrer el resultado de la busqueda
		foreach ($banners->posts as $banner):
 	 	 	$banner_name = $banner->post_title;
			$banner = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
	?>
	<section class="banner-interna container-fluid d-flex justify-content-center align-items-center font-arabic font-upper" style="background: url(<?php echo $banner; ?>) no-repeat center center / cover;">
		<h1><?php echo $banner_name;?></h1>
	</section>
	<?php
	endforeach;
	endif; 
	?>
	<section class="container-fluid">
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/plancha.png" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lavadora-ser.png" class="img-fluid">
						<div class="font-upper">
							<h2>SERVICIO DE LAVANDERÍA</h2>
						</div>
						<p>Manos expertas que siempre están disponibles para dejar tus prendas de manera óptima mientras sales a conquistar tus sueños.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/turco.png" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/canasta.png" alt="">
						<div class="font-upper">
							<h2>SAUNA Y TURCO</h2>
						</div>
						<p>Vive momentos relajantes en nuestra zona húmeda, un espacio cargado de confort y tranquilidad para recargar energías.</p>
						<div class="d-block btn-c pt-5">
							<!-- <a href="" class="btn bg-dorado d-inline-block">más información</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/gym.png" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gym-w.png" alt="">
						<div class="font-upper">
							<h2>GIMNASIO</h2>
						</div>
						<p>Tu rutina no tiene por qué cambiar. Sigue</p>
						<div class="d-block btn-c pt-5">
							<!-- <a href="" class="btn bg-dorado d-inline-block">más información</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sala-i.png" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/wifi-a.png" alt="">
						<div class="font-upper">
							<h2>CENTRO EJECUTIVO</h2>
						</div>
						<p>Sala adecuada para la utilización de servicios de cómputo, dotada con computadores para los huéspedes.</p>
						<div class="d-block btn-c pt-5">
							<!-- <a href="" class="btn bg-dorado d-inline-block">más información</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/minibar.png" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/iconnevera.png" alt="">
						<div class="font-upper">
							<h2>MINIBAR</h2>
						</div>
						<p>Al interior de las habitaciones, los huéspedes pueden acceder a snacks y bebidas con y sin alcohol.</p>
						<div class="d-block btn-c pt-5">
							<!-- <a href="" class="btn bg-dorado d-inline-block">más información</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/i-wifi.png" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/wifi-a.png" alt="">
						<div class="font-upper">
							<h2>INTERNET</h2>
						</div>
						<p>El servicio de Wifi puede ser utilizado desde cualquier dispositivo móvil y cuenta con una velocidad alta que puede ser disfrutada desde los diferentes espacios al interior del Hotel.</p>
						<div class="d-block btn-c pt-5">
							<!-- <a href="" class="btn bg-dorado d-inline-block">más información</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>

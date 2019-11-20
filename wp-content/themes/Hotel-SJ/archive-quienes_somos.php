<?php get_header(); ?>
<div class="quienes-somos pb-5">
<?php
	    	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'Quienes somos'
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
	<section class="elegirnos bg-beige">
		<div class="container">
			<div class="row justify-content-between">
				<div class="title-quienes bg-cafe col-md-4 d-flex align-items-center justify-content-center font-arabic py-5">
					<h2>Porque elegirnos</h2>
				</div>
				<div class="col-md-6 py-5">
					<p>En el Hotel Portón de San Joaquín contamos con 90 habitaciones, distribuidas en dos espectaculares torres: Antioquia y Ejecutiva, 2 salones para eventos, una sala de juntas, sauna, turco y gimnasio.</p>
					<p>Te ofrecemos el servicio de lavandería y todas nuestras habitaciones están dotadas con aire acondicionado, televisor, minibar y Wifi de alta velocidad.</p>
					<p>Además, contamos con dos acogedores espacios: bar y restaurante, donde podrás disfrutar de deliciosos platos gourmet e internacionales y bebidas exóticas y muy a tu estilo, como cocteles, cervezas y muchas más.</p>
					<p>¿Qué esperas? Nuestras instalaciones son amplias, elegantes, de diseño sobrio, decoración sutil y buen gusto. Somos el hotel que piensa en ti. </p>
					<ul>
						<li>
							<p><strong>TORRE EXPRESS</strong></p>
							38 habitaciones. Un espacio acogedor e inspirado en la cultura paisa; a través de sus paredes le rinde homenaje a los territorios más emblemáticos del departamento antioqueño. Es ideal para alojamientos de períodos cortos. Es de fácil acceso y cerca al lobby. 
						</li>
						<li>
							<p><strong>TORRE EJECUTIVA</strong></p>
							52 habitaciones. Un lugar acogedor y de iluminación natural. Cuenta con cómodos espacios comunes. Ideal para alojamientos corporativos y estancias más largas. Su diseño es moderno y de buen gusto. 
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="amenities bg-azul color-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-6 d-flex justify-content-center img-amenites">
					<img src="<?php echo get_template_directory_uri(); ?>/img/hotel.png" alt="" class="img-fluid">          
				</div>
				<div class="col-lg-12 col-xl-4 justify-content-center d-flex">
					<div class="row text-center py-5">
						<div class="col-md-12 font-arabic color-dorado">
							<h2>DESCUBRE AMENITIES</h2>
						</div>
						<div class="item col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/wifi.png" alt="">
							<p>Conexión gratuita y de alta velocidad con cobertura en todas las áreas del Hotel.</p>
						</div>
						<div class="item col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/casa.png" alt="">
							<p>90 habitaciones cómodas y bien dotadas.</p>
						</div>
						<div class="item col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/chef-1.png" alt="">
							<p>Dos espacios agradables y acogedores, con bebidas especiales y platos tipo gourmet e internacionales.</p>
						</div>
						<div class="item col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ubicacion.png" alt="">
							<p>Cerca al centro de la ciudad, restaurantes, universidades, zona rosa, universidades y entidades bancarias.</p>
						</div>
						<div class="item col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lavadora.png" alt="">
							<p>Un equipo calificado deja tus prendas de forma óptima.</p>
						</div>
						<div class="item col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/calendario.png" alt="">
							<p>Dotados con ayudas audiovisuales, proyector y silletería.</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="qs-tripadvisor bg-beige py-5 font-arabic">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center ">
					<div class="personas item-trip-ameni text-center">
						<div class="icon-img-fluid">
							<img src="<?php echo get_template_directory_uri(); ?>/img/maleta.png" alt="">
						</div>
						<h2 class="font-arabic">50.000</h2>
					</div>
					<p>PERSONAS REGISTRADAS EN NUESTRO HOTEL</p>
				</div>
				<div class="col-md-6 text-center">
					<div class="personas item-trip-ameni text-center">
						<div class="icon-img-fluid">
							<img src="<?php echo get_template_directory_uri(); ?>/img/trip.png" alt="">
						</div>
						<h2 class="font-arabic">50.000</h2>
					</div>
					<p>PERSONAS REGISTRADAS EN NUESTRO HOTEL</p>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>

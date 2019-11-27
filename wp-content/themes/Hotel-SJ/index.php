<?php get_header(); ?>
<div class="d-none">
	<!-- banner -->
	<section class="banner">
		<div class="carousel-banner">
			<?php
			    	// Argumentos para una busqueda de post type
			$args = array(
						'post_type' => 'banner_home', // Nombre del post type
						'order' => 'ASC'
					);
			$banners = new WP_Query($args);
			if ($banners->posts):
			      // Foreach para recorrer el resultado de la busqueda
				foreach ($banners->posts as $banner):
					$banner = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
					?>
					<div class="c-home item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/banner@1x.png) no-repeat center center / cover;">
					</div>
					<?php
				endforeach;
			endif; 
			?>
		</div>
	</section>
	<!-- banner -->
	<!-- formulario -->
	<section class="form">
		<div class="container form-banner">
			<div class="row justify-content-center justify-content-md-start">
				<div class="col-12 d-none"> 
					<div class="separa bg-azul ">
						<form action="" class="row align-items-end">
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- formulario -->
	<!-- tripAdvisor -->
	<section class="py-5 color-gray">
		<div class="container">
			<div class="row align-items-stretch">
				<div class="col-12 text-center pb-5">
					<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/TripAdvisor.png" class="lazy">
				</div>
				<div class="col-md-4 item-trip">
					<div class="star"></div>
					<h2>EXCELENTE</h2>
					<p class="font-arabic">
						“El hotel es muy bonito y cómodo. La atención es excelente; sobre todo, Camilo es muy diligente. La comida es muy buena y a excelente precio. Tienen mapas y opciones de tour por Medellín. Lo recomiendo; es en realidad óptimo”.
					</p>
					<h5>Ana Gabriel G.</h5>
				</div>
				<div class="col-md-4 item-trip">
					<div class="star"></div>
					<h2>ME ENCANTÓ</h2>
					<p class="font-arabic">“Excelente hotel, excelente vista. Me encantó mucho; el personal muy servicial y muy amable. Mil gracias. Las habitaciones son muy cómodas, está ubicado en un buen sector y el desayuno muy agradable”.</p>
					<h5>Johana</h5>
				</div>
				<div class="col-md-4 item-trip">
					<div class="star"></div>
					<h2>EXCELENTE</h2>
					<p class="font-arabic">“Un hotel con habitaciones amplias, nuevas y comodísimas. La atención del personal es excelente; siempre amables y listos para ayudar en todo lo que pueden. Llegué muy temprano al chek in, y rápidamente me solucionaron todo para que pudiera acceder a mi habitación. Lo mismo en el restaurante y bar. La limpieza impecable”.</p>
					<h5>Sebas Barros</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- tripAdvisor -->
	<!-- nosotros -->
	<section class="nosotros font-arabic nosotros-one container-fluid py-5 bg-azul color-white">
		<div class="row">
			<div class="offset-lg-6 col-lg-4 text-center pt-3 pb-5 py-lg-0">
				<h2 class="color-dorado">ACERCA DE NOSOTROS</h2>
				<div class="carousel font-roboto">
					<?php
		    	// Argumentos para una busqueda de post type
					$args = array(
					'post_type' => 'carrusel_nosotros', // Nombre del post type
					'order' => 'ASC'
				);
					$carousel_n = new WP_Query($args);
					if ($carousel_n->posts):
		      // Foreach para recorrer el resultado de la busqueda
						foreach ($carousel_n->posts as $carousel):
							$carousel_desc = $carousel->post_content;
							?>
							<div>
								<p class="color-gray"><?php echo $carousel_desc;?></p>
							</div>
							<?php
						endforeach;
					endif; 
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="offset-lg-1 col-lg-4 img-one d-flex justify-content-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/nosotros1.png" class="lazy img-fluid">
			</div>
			<div class="col-lg-6 d-flex align-items-center">
				<div class="row text-center color-gray">
					<?php
				    	// Argumentos para una busqueda de post type
					$args = array(
							'post_type' => 'items_nosotros', // Nombre del post type
							'order' => 'ASC',
							'posicion' => 'negro'
						);
					$items_n = new WP_Query($args);
					if ($items_n->posts):
				      // Foreach para recorrer el resultado de la busqueda
						foreach ($items_n->posts as $item):
							$item_desc = $item->post_content;
							$item_img = wp_get_attachment_url( get_post_thumbnail_id($item->ID, 'full') );
							?>				
							<div class="col-md-4 item-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo $item_img; ?>" class=" lazy">
								<p><?php echo $item_desc;?></p>
							</div>
							<?php
						endforeach;
					endif; 
					?>				
				</div>
			</div>
		</div>
	</section>
	<section class="nosotros font-arabic nosotros-two container-fluid">
		<div class="row">
			<div class="offset-md-1 col-lg-6 text-center d-flex align-items-center order-1 order-lg-0">
				<div class="row color-gray">
					<?php
					    	// Argumentos para una busqueda de post type
					$args = array(
								'post_type' => 'items_nosotros', // Nombre del post type
								'order' => 'ASC',
								'posicion' => 'blanco'
							);
					$items_n = new WP_Query($args);
					if ($items_n->posts):
					      // Foreach para recorrer el resultado de la busqueda
						foreach ($items_n->posts as $item):
							$item_desc = $item->post_content;
							$item_img = wp_get_attachment_url( get_post_thumbnail_id($item->ID, 'full') );
							?>				
							<div class="col-md-4 item-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo $item_img; ?>" class=" lazy">
								<p><?php echo $item_desc;?></p>
							</div>
							<?php
						endforeach;
					endif; 
					?>	
				</div>
			</div>
			<div class="col-lg-5 pr-lg-0 img-two order-0 order-lg-1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/nosotros2.png" class="img-fluid lazy">
			</div>
		</div>
	</section>
	<!-- nosotros -->
	<!-- servicios -->
	<section class="servicios container-fluid pb-5" id="servicios">
		<div class="row">
			<div class="title-separate col-12 col-lg-6 text-center">
				<h2>Servicios</h2>
			</div>
		</div>
		<div class="row">
			<?php
		    	// Argumentos para una busqueda de post type
			$args = array(
					'post_type' => 'servicio_index', // Nombre del post type
					'order' => 'ASC'
				);
			$servicios = new WP_Query($args);
			if ($servicios->posts):
		      // Foreach para recorrer el resultado de la busqueda
				foreach ($servicios->posts as $servicio):
					$servicio_img = wp_get_attachment_url( get_post_thumbnail_id($servicio->ID, 'full') );
					$servicio_name = $servicio->post_title;
					$servicio_url = $servicio->url;
					?>
					
					<div class="col-6 col-md p-0 galeria-item d-flex">
						<a href="<?php echo $servicio_url; ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo $servicio_img; ?>" alt="" class="w-100 lazy">
						</a>
						<div class="titulo">
							<a href="<?php echo $servicio_url; ?>">
								<p><?php echo $servicio_name;?></p>
							</a>
						</div>			
					</div>
					<?php
				endforeach;
			endif; 
			?>
		</div>
	</section>
	<!-- servicios -->
	<!-- galeria -->
	<section class="galeria container-fluid pb-5">
		<div class="row justify-content-end">
			<div class="title-separate col-12 col-md-6 text-center">
				<h2>Galeria</h2>
			</div>
		</div>
		<div class="row">
			<?php
		    	// Argumentos para una busqueda de post type
			$args = array(
					'post_type' => 'galeria', // Nombre del post type
					'order' => 'ASC'
				);
			$galerias = new WP_Query($args);
			if ($galerias->posts):
		      // Foreach para recorrer el resultado de la busqueda
				foreach ($galerias->posts as $galeria):
					$galeria_img = wp_get_attachment_url( get_post_thumbnail_id($galeria->ID, 'full') );
					$galeria_name = $galeria->post_title;

					?>
					<div class="col-6 col-md p-0 galeria-item d-flex">
						<a href="http://actividadcreativa.co/hotelSJ/galeria" class="d-block w-100">
							<img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo $galeria_img; ?>" alt="" class="w-100 lazy">
						</a>
						<div class="titulo">
							<a href="http://actividadcreativa.co/hotelSJ/galeria"><p><?php echo $galeria_name;?></p></a>
						</div>
					</div>
					<?php
				endforeach;
			endif; 
			?>
		</div>
	</section>
	<!-- /galeria -->
</div>
<div class="d-none">
	<?php
	    	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'Alojamiento'
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
	<section class="blog bg-azul py-5 mb-5">
		<div class="container">
			<div class="row pb-5">
				<div class="offset-md-4 pl-5 col-md-6 color-white title-blog">
					<h2 class="font-arabic">
						titulo
					</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis laudantium quam illum perspiciatis. Mollitia blanditiis ex perspiciatis officiis eaque repudiandae officia provident. Illo recusandae expedita, distinctio explicabo, quia id velit!</p>
				</div>
			</div>
			<div class="row">
				<div class="content-post py-5 col-12 d-flex justify-content-center align-items-center">
					<div class="col-md-6 color-gray d-flex align-items-center">
						<div class="row bg-white py-5 px-md-3 text-blog text-blog font-roboto">
							<div class="col-md-9">
								<h2 class="font-arabic title">Post</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi doloremque, ducimus quod asperiores distinctio illo obcaecati fuga ad rem numquam suscipit itaque corrupti, expedita dolore adipisci blanditiis odio, accusamus similique.</p>
							</div>
							<div class="col-md-3 d-flex align-items-center px-0">
								<a href="" class="btn-blog">Más información</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 p-0">
						<img src="https://picsum.photos/id/237/600/400" alt="" class="w-100">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-post py-5 col-12 d-flex justify-content-center align-items-center">
					<div class="col-md-6 color-gray d-flex align-items-center">
						<div class="row bg-white py-5 px-md-3 text-blog text-blog font-roboto">
							<div class="col-md-9">
								<h2 class="font-arabic title">Post</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi doloremque, ducimus quod asperiores distinctio illo obcaecati fuga ad rem numquam suscipit itaque corrupti, expedita dolore adipisci blanditiis odio, accusamus similique.</p>
							</div>
							<div class="col-md-3 d-flex align-items-center px-0">
								<a href="" class="btn-blog">Más información</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 p-0">
						<img src="https://picsum.photos/id/237/600/400" alt="" class="w-100">
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="">
<?php
	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'Alojamiento'
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
	<section class="py-5 container interna-blog">
		<div class="row font-roboto color-gray">
			<div class="col-12">
				<h1>lorem</h1>
				<h2>lorem</h2>
				<h3>lorem</h3>
				<h4>lorem</h4>
				<img src="https://picsum.photos/id/247/2200/300" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quis maxime cupiditate quibusdam voluptate a debitis quia. Nihil quidem, sunt alias deserunt voluptates est. Eos impedit ab delectus quibusdam labore!</p>
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quaerat ipsa blanditiis, tenetur ad, alias! Excepturi mollitia odio autem distinctio enim quos obcaecati iusto accusantium facilis earum, minus dicta voluptate!</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quaerat ipsa blanditiis, tenetur ad, alias! Excepturi mollitia odio autem distinctio enim quos obcaecati iusto accusantium facilis earum, minus dicta voluptate!</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quaerat ipsa blanditiis, tenetur ad, alias! Excepturi mollitia odio autem distinctio enim quos obcaecati iusto accusantium facilis earum, minus dicta voluptate!</li>
				</ul>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
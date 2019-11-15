<?php get_header(); ?>
<div class="habitaciones pb-5">

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
	<section class="container ">
		<ul class="nav nav-tabs tabs-habitacion">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#torre1">Torre Antioquia</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#torre2">Torre ejecutiva</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane container active" id="torre1">
				<?php
				    	// Argumentos para una busqueda de post type
				$args = array(
							'post_type' => 'habitacion', // Nombre del post type
							'order' => 'ASC',
						);
				$habitaciones = new WP_Query($args);
				if ($habitaciones->posts):
				      // Foreach para recorrer el resultado de la busqueda
					foreach ($habitaciones->posts as $habitacion):
			 	 	 	$habitacion_name = $habitacion->post_title;
						$habitacion_desc = $habitacion->post_content;
				?>
				<div class="row habitacion py-3 color-gray">
					<div class="col-md-7 s-img p-0">
						<div class="carousel-habi">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion1.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion2.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion3.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion4.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div class="col-md-5 s-text font-arabic d-flex justify-content-center flex-column">
						<div class="font-upper">
							<h2><?php echo $habitacion_name;?></h2>
						</div>
						<div class="text font-roboto">
							<p>
								<?php echo $habitacion_desc;?>								
							</p>
						</div>
								<?php echo get_post_thumbnail_id($proyecto->ID, 'full');?>

<!-- 						<div class="date-h">
							<h2>32 m<sup>2</sup></h2>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
						</div> -->
						<div class="torre font">
							<p>Torre Antioquia</p>
						</div>
					</div>
				</div>
				<?php
				endforeach;
				endif; 
				?>
				<!--<div class="row habitacion py-3 color-gray">
					<div class="col-md-7 s-img p-0">
						<div class="carousel-habi">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion2.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion1.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion3.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion4.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div class="col-md-5 s-text font-arabic d-flex justify-content-center flex-column">
						<div class="font-upper">
							<h2>jr suite</h2>
						</div>
						<div class="text font-roboto">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
						</div>
						<div class="date-h">
							<h2>32 m<sup>2</sup></h2>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="torre">
							<p>Torre Antioquia</p>
						</div>				
					</div>
				</div>-->
			</div>
			<div class="tab-pane container" id="torre2">
				<div class="row habitacion py-3 color-gray">
					<div class="col-md-7 s-img p-0">
						<div class="carousel-habi">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion4.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion1.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion2.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion3.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div class="col-md-5 s-text font-arabic d-flex justify-content-center flex-column">
						<div class="font-upper">
							<h2>jr suite</h2>
						</div>
						<div class="text font-roboto">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
						</div>
						<div class="date-h">
							<h2>32 m<sup>2</sup></h2>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="torre font">
							<p>Torre Ejecutiva</p>
						</div>
					</div>
				</div>
				<div class="row habitacion py-3 color-gray">
					<div class="col-md-7 s-img p-0">
						<div class="carousel-habi">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion3.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion1.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion2.jpg" class="w-100">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/habitacion4.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div class="col-md-5 s-text font-arabic d-flex justify-content-center flex-column">
						<div class="font-upper">
							<h2>jr suite</h2>
						</div>
						<div class="text font-roboto">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
						</div>
						<div class="date-h">
							<h2>32 m<sup>2</sup></h2>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="torre">
							<p>Torre Ejecutiva</p>
						</div>				
					</div>
				</div>	
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>

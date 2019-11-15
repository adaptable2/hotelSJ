<?php get_header(); ?>
<div class="servicios pb-5">
<?php
	    	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'Salones'
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
				<img src="<?php echo get_template_directory_uri(); ?>/img/imperial.jpg" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<div class="font-upper">
							<h2>IMPERIAL</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
						<div class="d-block btn-c pt-5">
							<a href="" class="btn bg-dorado d-inline-block">más información</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/escarlata.jpg" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<div class="font-upper">
							<h2>ESCARLATA</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
						<div class="d-block btn-c pt-5">
							<a href="" class="btn bg-dorado d-inline-block">más información</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/vip.jpg" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<div class="font-upper">
							<h2>VIP</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
						<div class="d-block btn-c pt-5">
							<a href="" class="btn bg-dorado d-inline-block">más información</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
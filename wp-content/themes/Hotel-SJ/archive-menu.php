<?php get_header(); ?>
<div class="galeria pb-5">
	<?php
	    	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'Menu'
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
	<div class="container">
		<div class="filter">
			<ul>
				<li class="active"><a href="">RESTAURANTE</a></li>
			</ul>
		</div>
		<section class="grid-galery">
			<div class="row">
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/1.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/2.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/3.jpg" class="img-fluid">
				</div>
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/4.jpg" class="img-fluid">
				</div>
				<div class="col-md-3 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/5.jpg" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/6.jpg" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/7.jpg" class="img-fluid">
				</div>
				<div class="col-md-6 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/8.jpg" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/9.jpg" class="img-fluid">
				</div>
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/10.jpg" class="img-fluid">
				</div>
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu/11.jpg" class="img-fluid">
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>
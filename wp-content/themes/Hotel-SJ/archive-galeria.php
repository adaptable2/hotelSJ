<?php get_header(); ?>
<div class="galeria pb-5">
	<?php
	    	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'Galeria'
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
				<li class="active"><a href="">TODO</a></li>
				<li><a href="">SALA DE REUNION</a></li>
				<li><a href="">HABITACIONES</a></li>
				<li><a href="">ZONAS COMUNES</a></li>
			</ul>
		</div>
		<div class="masonry">
		   <div class="item"><img src="https://picsum.photos/id/227/430/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/247/500/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/237/800/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/537/1200/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/437/300/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/337/500/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/247/600/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/237/200/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/247/700/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/235/300/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/247/900/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/236/1200/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/234/300/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/217/620/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/337/600/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/537/800/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/267/900/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/137/1200/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/237/200/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/257/1200/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/236/570/500" class="w-100"></div>
		   <div class="item"><img src="https://picsum.photos/id/277/900/500" class="w-100"></div>
		</div>
		<div class="grid d-none">
		  <div class="grid-item">
		  	<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/1.jpg" class="w-100">
		  </div>
		  <div class="grid-item grid-item--width2">
		  	<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/2.jpg" class="w-100">
		  </div>
		  <div class="grid-item">
		  	<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/1.jpg" class="w-100">
		  </div>
		  <div class="grid-item">
		  	<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/3.jpg" class="w-100">
		  </div>
		  <div class="grid-item grid-item--width2">
		  	<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/2.jpg" class="w-100">
		  </div>
		</div>
		<section class="grid-galery d-none">
			<div class="row">
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/1.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/2.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/3.jpg" class="img-fluid">
				</div>
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/4.jpg" class="img-fluid">
				</div>
				<div class="col-md-3 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/5.jpg" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/6.jpg" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/7.jpg" class="img-fluid">
				</div>
				<div class="col-md-6 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/8.jpg" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/9.jpg" class="img-fluid">
				</div>
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/10.jpg" class="img-fluid">
				</div>
				<div class="col-md-4 item-galery">
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/11.jpg" class="img-fluid">
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>

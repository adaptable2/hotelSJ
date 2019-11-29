<?php get_header(); ?>
<div class="">
	<?php
	    	// Argumentos para una busqueda de post type
	$args = array(
				'post_type' => 'banner_interna', // Nombre del post type
				'order' => 'ASC',
				'banners_interna' => 'blog'
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
						<?php
							$pageBlog = get_post(335);
							$pageMeta = get_post_meta(335);
							echo $pageMeta['Titulo'][0];
						?>
						
					</h2>
					<p>
						<?php echo $pageBlog->post_content; ?>
					</p>
				</div>
			</div>
			<?php
				$args = array(
  				'post_type'   => 'post',
  				'exclude' => '1'
				);
				$posts = get_posts( $args );
				foreach ($posts as $postBlog):
					$imgBlog = wp_get_attachment_url( get_post_thumbnail_id($postBlog->ID, 'full') );
			?>
				<div class="row">
					<div class="content-post py-5 col-12 d-flex justify-content-center align-items-center">
						<div class="col-md-6 color-gray d-flex align-items-center">
							<div class="row bg-white py-5 px-md-3 text-blog text-blog font-roboto">
								<div class="col-md-9">
									<h2 class="font-arabic title"><?php echo $postBlog->post_title; ?></h2>
									<p><?php echo $postBlog->post_excerpt; ?></p>
								</div>
								<div class="col-md-3 d-flex align-items-center px-0">
									<a href="<?php echo $postBlog->guid; ?>" class="btn-blog">Más información</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 p-0">
							<img src="<?php echo $imgBlog; ?>" alt="" class="w-100">
						</div>
					</div>
				</div>
		<?php endforeach; ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>

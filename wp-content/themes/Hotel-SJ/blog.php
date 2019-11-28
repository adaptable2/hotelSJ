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
<?php get_header(); ?>
<!-- banner -->
<section class="banner">
	<div class="container form-banner">
		<div class="row">
			<div class="col-md-4"> 
				<div class="separa">
					<h2 class="font-arabic">Separa</h2>
					<form action="">
						<label for="">Check in:</label>
						<input type="text">
						<label for="">Check out:</label>
						<input type="text">
						<div class="quantity">
							<label for="">Adultos</label>
							<input type="number" min="1" max="9" step="1" value="1">
						</div>
						<div class="quantity">
							<label for="">Niños</label>
							<input type="number" min="1" max="9" step="1" value="1">
						</div>
						<input type="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel-banner">
		<div class="c-home item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/banner@1x.png) no-repeat center center / cover;">
		</div>
		<div class="c-home item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/banner@1x.png) no-repeat center center / cover;">
		</div>
	</div>
</section>
<!-- banner -->
<!-- nossotros -->
<section class="nosotros font-arabic nosotros-one container-fluid py-5 bg-azul color-white">
	<div class="row pb-5">
		<div class="col-md-7 offset-md-1">
			<ul >
				<li>CONFORT</li>
				<li>LUJO</li>
				<li>ESTILO</li>
				<li>CALIDAD</li>
			</ul>
		</div>
		<div class="col-md-3 text-center">
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
		<div class="offset-md-1 col-md-4 img-one">
			<img src="<?php echo get_template_directory_uri(); ?>/img/nosotros1.png" alt="" class="img-fluid">
		</div>
		<div class="col-md-6 d-flex align-items-center">
			<div class="row text-center color-gray">
			<?php
			    	// Argumentos para una busqueda de post type
				$args = array(
						'post_type' => 'items_nosotros', // Nombre del post type
						'order' => 'ASC',
						'category'=>'negro'
					);
				$items_n = new WP_Query($args);
				if ($items_n->posts):
			      // Foreach para recorrer el resultado de la busqueda
					foreach ($items_n->posts as $item):
						$item_desc = $item->post_content;
						$item_img = wp_get_attachment_url( get_post_thumbnail_id($item->ID, 'full') );
			?>				
				<div class="col-md-4 item-icon">
					<img src="<?php echo $item_img; ?>" alt="">
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
		<div class="offset-md-1 col-md-6 text-center d-flex align-items-center">
			<div class="row color-gray">
				<?php
				    	// Argumentos para una busqueda de post type
					$args = array(
							'post_type' => 'items_nosotros', // Nombre del post type
							'order' => 'ASC',
							'category'=>'negro'
						);
					$items_n = new WP_Query($args);
					if ($items_n->posts):
				      // Foreach para recorrer el resultado de la busqueda
						foreach ($items_n->posts as $item):
							$item_desc = $item->post_content;
							$item_img = wp_get_attachment_url( get_post_thumbnail_id($item->ID, 'full') );
				?>				
					<div class="col-md-4 item-icon">
						<img src="<?php echo $item_img; ?>" alt="">
						<p><?php echo $item_desc;?></p>
					</div>
				<?php
					endforeach;
					endif; 
				?>	
			</div>
		</div>
		<div class="col-md-5 pr-0 img-two">
			<img src="<?php echo get_template_directory_uri(); ?>/img/nosotros2.png" alt="" class="img-fluid">
		</div>
	</div>
</section>

<!-- nosotros -->
<section class="servicios container-fluid pb-5">
	<div class="row">
		<div class="title-separate col-12 col-md-6 text-center">
			<h2>Servicios</h2>
		</div>
	</div>
	<div class="row">
		<?php
	    	// Argumentos para una busqueda de post type
		$args = array(
				'post_type' => 'servicio', // Nombre del post type
				'order' => 'ASC'
			);
		$servicios = new WP_Query($args);
		if ($servicios->posts):
	      // Foreach para recorrer el resultado de la busqueda
			foreach ($servicios->posts as $servicio):
				$servicio_img = wp_get_attachment_url( get_post_thumbnail_id($servicio->ID, 'full') );
				$servicio_name = $servicio->post_title;

				?>
				<div class="col p-0 galeria-item d-flex">
					<img src="<?php echo $servicio_img; ?>" alt="" class="w-100">
					<div class="titulo">
						<p><?php echo $servicio_name;?></p>
					</div>			
				</div>
				<?php
					endforeach;
					endif; 
				?>
	</div>
</section>
<!-- nosotros -->
<!-- galeria -->
<section class="galeria container-fluid pb-5">
	<div class="row justify-content-end">
		<div class="title-separate col-12 col-md-5 text-center">
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
				<div class="col p-0 galeria-item d-flex">
					<img src="<?php echo $galeria_img; ?>" alt="" class="img-fluid">
					<div class="titulo">
						<p><?php echo $galeria_name;?></p>
					</div>
				</div>
				<?php
			endforeach;
		endif; 
		?>
	</div>
</section>
<!-- /galeria -->
<?php get_footer(); ?>
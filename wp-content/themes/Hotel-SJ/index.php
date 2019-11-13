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
				<div class="col-12"> 
					<div class="separa bg-azul ">
						<form action="" class="row align-items-end">
							<div class="col-md-3">
								<label for="">Check in:
								</label>
								<input type="text">
							</div>
							<div class="col-md-3">
								<label for="">Check out:
								</label>
								<input type="text">
							</div>
							<div class="col-md-4">
								<div class="quantity">
									<label for="archive.php">Adultos</label>
									<input type="number" min="1" max="9" step="1" value="1">
								</div>
								<div class="quantity">
									<label for="">Niños</label>
									<input type="number" min="0" max="9" step="1" value="0">
								</div>
							</div>
							<div class="col-md-2">
								<input type="submit">
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/TripAdvisor.png" alt="">
				</div>
				<div class="col-md-4 item-trip">
					<div class="star"></div>
					<h2>EXCELENTE</h2>
					<p class="font-arabic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi ab, vero. Ea a eius cupiditate perferendis molestias sapiente eos nemo, beatae, itaque corrupti. Quaerat voluptate repudiandae, accusantium, iste alias asperiores.</p>
					<h5>Camilo Catañeda</h5>
				</div>
				<div class="col-md-4 item-trip">
					<div class="star"></div>
					<h2>EXCELENTE</h2>
					<p class="font-arabic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae eum sit autem. Delectus harum quasi incidunt cum ex consequatur voluptatem fugit, maxime cumque odio sit voluptas error ratione, nihil voluptates.</p>
					<h5>Camilo Catañeda</h5>
				</div>
				<div class="col-md-4 item-trip">
					<div class="star"></div>
					<h2>EXCELENTE</h2>
					<p class="font-arabic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, consequuntur illum ipsum, iusto accusantium voluptatem fugit velit assumenda, distinctio cum ea voluptatibus! Recusandae modi velit officia voluptas quae qui aut.</p>
					<h5>Camilo Catañeda</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- tripAdvisor -->
	<!-- nosotros -->
	<section class="nosotros font-arabic nosotros-one container-fluid py-5 bg-azul color-white">
		<div class="row">
			<div class="col-lg-6 offset-lg-1">
				<ul >
					<li>CONFORT</li>
					<li>LUJO</li>
					<li>ESTILO</li>
					<li>CALIDAD</li>
				</ul>
			</div>
			<div class="col-lg-4 text-center pt-3 pb-5 py-lg-0">
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
				<img src="<?php echo get_template_directory_uri(); ?>/img/nosotros1.png" alt="" class="img-fluid">
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
							<img src="<?php echo $item_img; ?>" alt="">
							<p><?php echo $item_desc;?></p>
						</div>
					<?php
						endforeach;
						endif; 
					?>	
				</div>
			</div>
			<div class="col-lg-5 pr-lg-0 img-two order-0 order-lg-1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/nosotros2.png" alt="" class="img-fluid">
			</div>
		</div>
	</section>
	<!-- nosotros -->
	<!-- servicios -->
	<section class="servicios container-fluid pb-5">
		<div class="row">
			<div class="title-separate col-12 col-lg-6 text-center">
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
					<div class="col-6 col-md p-0 galeria-item d-flex">
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
						<img src="<?php echo $galeria_img; ?>" alt="" class="w-100">
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
</div>

<div class="servicios pb-5 d-none">
	<section class="banner-interna container-fluid d-flex justify-content-center align-items-center font-arabic font-upper" style="background: url(https://picsum.photos/id/222/1366/400) no-repeat center center / cover;">
		<h1>Servicios</h1>
	</section>
	<section class="container-fluid">
		<div class="row servicio">
			<div class="col-md-6 s-img p-0">
				<img src="https://picsum.photos/id/222/985/845" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="http://localhost/hotelSJ/wp-content/uploads/2019/11/gym.png" alt="">
						<div class="font-upper">
							<h2>camilo</h2>
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
				<img src="https://picsum.photos/id/222/985/845" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="http://localhost/hotelSJ/wp-content/uploads/2019/11/gym.png" alt="">
						<div class="font-upper">
							<h2>ALOJAMIENTO EXPRESS</h2>
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
				<img src="https://picsum.photos/id/222/985/845" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="http://localhost/hotelSJ/wp-content/uploads/2019/11/gym.png" alt="">
						<div class="font-upper">
							<h2>camilo</h2>
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
				<img src="https://picsum.photos/id/222/985/845" class="w-100">
			</div>
			<div class="col-md-6 s-text font-arabic d-flex justify-content-center flex-column text-center">
				<div class="row">
					<div class="col-xl-6 col-md-8 py-5">
						<img src="http://localhost/hotelSJ/wp-content/uploads/2019/11/gym.png" alt="">
						<div class="font-upper">
							<h2>ALOJAMIENTO EXPRESS</h2>
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

<div class="habitaciones pb-5 d-none">
	<section class="banner-interna container-fluid d-flex justify-content-center align-items-center font-arabic font-upper" style="background: url(https://picsum.photos/id/222/1366/400) no-repeat center center / cover;">
		<h1>torre ejecutiva</h1>
	</section>
	<section class="container ">
		<div class="row habitacion py-3 color-gray">
			<div class="col-md-7 s-img p-0">
				<div class="carousel-habi">
					<div class="item">
						<img src="https://picsum.photos/id/122/985/845" class="w-100">
					</div>
					<div class="item">
						<img src="https://picsum.photos/id/442/985/845" class="w-100">
					</div>
					<div class="item">
						<img src="https://picsum.photos/id/522/985/845" class="w-100">
					</div>
				</div>
			</div>
			<div class="col-md-5 s-text font-arabic d-flex justify-content-center flex-column">
				<div class="font-upper">
					<h2>jr suite</h2>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
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
		<div class="row habitacion py-3 color-gray">
			<div class="col-md-7 s-img p-0">
				<div class="carousel-habi">
					<div class="item">
						<img src="https://picsum.photos/id/212/985/845" class="w-100">
					</div>
					<div class="item">
						<img src="https://picsum.photos/id/232/985/845" class="w-100">
					</div>
					<div class="item">
						<img src="https://picsum.photos/id/252/985/845" class="w-100">
					</div>
				</div>
			</div>
			<div class="col-md-5 s-text font-arabic d-flex justify-content-center flex-column">
				<div class="font-upper">
					<h2>jr suite</h2>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore numquam facere atque delectus quis nisi iste dolor accusantium odit maxime alias molestias ratione itaque fugiat nobis reiciendis, maiores tempora!</p>
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
	</section>
</div>
<div class="quienes-somos pb-5 d-none">
	<section class="banner-interna container-fluid d-flex justify-content-center align-items-center font-arabic font-upper" style="background: url(https://picsum.photos/id/222/1366/400) no-repeat center center / cover;">
		<h1>Servicios</h1>
	</section>
	<section class="elegirnos bg-beige">
		<div class="container">
			<div class="row justify-content-between">
				<div class="title-quienes bg-cafe col-md-4 d-flex align-items-center justify-content-center font-arabic py-5">
					<h2>Porque elegirnos</h2>
				</div>
				<div class="col-md-6 py-5">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos enim qui, ullam vero, vitae quod nesciunt, quisquam nostrum atque voluptatem est distinctio exercitationem blanditiis tempora excepturi dignissimos aliquam, veritatis reprehenderit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos enim qui, ullam vero, vitae quod nesciunt, quisquam nostrum atque voluptatem est distinctio exercitationem blanditiis tempora excepturi dignissimos aliquam, veritatis reprehenderit.</p>
					 <ul>
					 	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae culpa id, ratione quibusdam necessitatibus amet sequi aspernatur adipisci ullam laborum sit quae saepe veritatis, sapiente incidunt nobis iste. Animi, officiis!</li>
					 	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta libero aut dolores atque esse at ullam ipsam deserunt, nemo nostrum reprehenderit adipisci, doloremque animi laborum, ab voluptatibus, dolorem consequuntur temporibus.</li>
					 </ul>
				</div>
			</div>
		</div>
	</section>
	<section class="amenities bg-azul color-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-6 d-flex justify-content-center img-amenites">
					<img src="https://picsum.photos/id/222/613/832" alt="" class="img-fluid">          
				</div>
				<div class="col-lg-12 col-xl-4 justify-content-center d-flex">
					<div class="row text-center py-5">
						<div class="col-md-12 font-arabic color-dorado">
							<h2>DESCUBRE AMENITIES</h2>
						</div>
						<div class="item col-md-6">
							<img src="https://picsum.photos/id/232/60/60" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum doloribus iusto provident molestiae reprehenderit libero similique deleniti, voluptas!</p>
						</div>
						<div class="item col-md-6">
							<img src="https://picsum.photos/id/232/60/60" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos eligendi repellendus tempora, veniam, fugit </p>
						</div>
						<div class="item col-md-6">
							<img src="https://picsum.photos/id/232/60/60" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae mollitia neque dicta unde, sed esse modi quos harum deserunt eaque </p>
						</div>
						<div class="item col-md-6">
							<img src="https://picsum.photos/id/232/60/60" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis rerum minima distinctio error temporibus! Eius minima, </p>
						</div>
						<div class="item col-md-6">
							<img src="https://picsum.photos/id/232/60/60" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, hic dolorum, error, minima fugiat magni quos porro delectus ab </p>
						</div>
						<div class="item col-md-6">
							<img src="https://picsum.photos/id/232/60/60" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem alias, reprehenderit optio rem consectetur magnam, omnis. Unde </p>
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
							<img src="https://picsum.photos/id/232/60/60" alt="">
						</div>
						<h2 class="font-arabic">50.000</h2>
					</div>
					<p>PERSONAS REGISTRADAS EN NUESTRO HOTEL</p>
				</div>
				<div class="col-md-6 text-center">
					<div class="personas item-trip-ameni text-center">
						<div class="icon-img-fluid">
							<img src="https://picsum.photos/id/232/60/60" alt="">
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
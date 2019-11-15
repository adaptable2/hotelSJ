<?php get_header(); ?>
<div class="galeria pb-5">
	<section class="banner-interna container-fluid d-flex justify-content-center align-items-center font-arabic font-upper" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bn-galeria.jpg) no-repeat center center / cover;">
		<h1>Galeria</h1>
	</section>	
	<div class="container">
		<div class="filter">
			<ul>
				<li class="active"><a href="">TODO</a></li>
				<li><a href="">SALA DE REUNION</a></li>
				<li><a href="">HABITACIONES</a></li>
				<li><a href="">ZONAS COMUNES</a></li>
			</ul>
		</div>
		<section class="grid-galery">
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

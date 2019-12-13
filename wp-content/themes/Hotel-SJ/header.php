<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" async/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" async/>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap" rel="preload" async/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" async/>	

		<?php wp_head(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js" defer></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.js" defer></script>

	</head>
	<body <?php body_class(); ?>>

	<!-- header -->
	<header class="nav-page">
	    <div class="container">
	        <div class="row">
	            <nav class="col-12 navbar navbar-expand-lg ">
	                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" class="img-fluid"></a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="bar-menu"></span>
	                    <span class="bar-menu"></span>
	                    <span class="bar-menu"></span>
	                </button>                
	                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	                	<?php html5blank_nav(); ?>
	                </div> 
	            </nav>
	        </div>
	    </div>
	</header>			
	<!-- /header -->
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
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<!-- header -->
	<header class="nav-page">
	    <div class="container">
	        <div class="row">
	            <nav class="col-12 navbar navbar-expand-lg ">
	                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-src="<?php echo get_template_directory_uri(); ?>/img/white.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" class="img-fluid lazy"></a>
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
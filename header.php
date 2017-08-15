<!doctype html>
<!--[if lt IE 7]>
<html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS2 Feed"
	      href="<?php bloginfo( 'rss2_url' ); ?>"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<!--[if lt IE 9]>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->

</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#page_content"><?php esc_html_e( 'Skip to content', 'hk' ); ?></a>



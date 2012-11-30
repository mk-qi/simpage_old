<?php
/**
 * The Header for our theme.
 * @package simpage
 *
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >
<head>
	<!--[if lt IE 9]>
		<script src="http://www.oozk.com/wp-content/themes/twentyeleven/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="author" content="oozk.com" />
	<meta http-equiv="contact" content="root@mkrss.com" />
	<meta name="copyright" content="Copyright (c)2012-2012 oozk.com. All Rights Reserved." />
	<title><?php wp_title('');if ( !(is_404()) and (is_search()) or (is_single()) or (is_page()) or 
			(function_exists('is_tag') and is_tag()) or 
			(is_archive()) ) { ?><?php _e(' | '); ?><?php } ?><?php bloginfo('name'); ?>
		</title>
<link rel="bookmark" href="<?php echo bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="simpage">
	<header id="banner" role="banner">
		<nav>
			<?php wp_nav_menu( array(
		'theme_location'  => 'primary','container'=> 'nav', 'container_class' => 'navtop', 'container_id'=> 'navtop','menu_id'=> 'navtop','echo' => true,
	)); ?>
 	   </nav> <!-- #access -->
    </header><!-- #branding -->
	
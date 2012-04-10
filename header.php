<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="author" content="oozk.com" />
<meta http-equiv="contact" content="root@mkrss.com" />
<meta name="language" content="en" />
<meta name="copyright" content="Copyright (c)2012-2012 oozk.com. All Rights Reserved." />

<title><?php wp_title('');
 		if ( !(is_404()) and (is_search()) or 
			(is_single()) or (is_page()) or 
			(function_exists('is_tag') and is_tag()) or 
			(is_archive()) ) { ?><?php _e(' | '); ?><?php } ?>
 		
 	<?php bloginfo('name'); ?>
</title>



<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="<?php echo bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>



</head>

<!-- body start -->
<body>
	<div id="layout-header">
		<h1 class="header">
			<span class="about"><a  href="<?php echo get_option('home'); ?>/">关于</a></span>
			<span class="about"><a  href="<?php echo get_option('home'); ?>/">存档</a></span>
			<a class="home" href="<?php echo get_option('home'); ?>" title="Home"><?php  bloginfo('name');?></a>
			<b>&nbsp;|&nbsp;</b> 
			<span class=descrip><?php bloginfo('description'); ?> </span> 
    </h1> 
	</div>
	
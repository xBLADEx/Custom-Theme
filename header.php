<?php
/* 
====================
	HEADER
====================
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<main id="websiteContainer" role="main">
		<div class="mobileBackground">
			<p class="mobileIdentity"><?php bloginfo( 'name' ); ?></p>
			<a class="menuIcon" href="#"><span></span><span></span><span></span>Menu</a>
		</div>
		<div class="mobileMenu"></div>
		<header class="headerBackground">
			<div class="row">
				<div class="medium-3 small-12 columns">
					<a href="/" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
				</div>
	            <div class="hide-for-small medium-9 columns">
	            	<?php //get_template_part('templates/form', 'search'); ?>
	                <nav class="mainNav" role="navigation">
	                    <?php get_template_part( 'templates/menu', 'nav' ); ?>
	                </nav>
	            </div>
	        </div>
		</header>
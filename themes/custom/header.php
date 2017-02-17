<?php
/**
 * Header
 *
 * @package Custom
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'body-site' ); ?>>
	<a href="#" class="mobile-menu-icon"><span>Menu</span></a>

	<header class="header-background">
		<div class="row">
			<div class="small-12 medium-3 columns">
				<a href="/" class="logo"><?php include_once( 'assets/images/logo.svg' ); ?></a>
			</div>

			<div class="medium-9 columns">
				<nav class="main-nav">
					<?php get_template_part( 'templates/menu', 'nav' ); ?>
				</nav>
			</div>
		</div>
	</header>

	<main class="website-container">

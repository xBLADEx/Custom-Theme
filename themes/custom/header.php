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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '-', true, 'right' ); ?></title> <?php // @todo Do we need this with yoast? I think not. ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'body-site' ); ?>>
	<header class="g-header">
		<div class="g-l-row g-header__container">
			<div class="g-header__logo-container">
				<a href="<?php echo esc_url( home_url() ); ?>" class="g-header__logo"><?php get_template_part( 'assets/dist/images/logo.svg' ); ?></a>
			</div>

			<div class="g-header__navigation">
				<nav class="main-nav">
					<button class="mobile-menu-icon"><span><?php esc_html_e( 'Menu', 'custom' ); ?></span></button>
					<?php get_template_part( 'templates/menu-nav' ); ?>
				</nav>
			</div>

			<div class="g-header__actions">
				<?php custom_display_social_icons(); ?>

				<?php get_template_part( 'templates/form-search' ); ?>
			</div>
		</div>
	</header>

	<main class="website-container">

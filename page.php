<?php
/**
 * Page
 *
 * @package Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
custom_display_hero_content();
?>

<div class="g-row">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="page-<?php the_ID(); ?>" <?php post_class( 'wysiwyg-content' ); ?>>
				<?php the_content(); ?>
			</article>
			<?php
		endwhile;
	endif;
	?>
</div>

<?php get_footer(); ?>

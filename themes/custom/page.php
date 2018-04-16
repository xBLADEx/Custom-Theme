<?php
/**
 * Page
 *
 * @package Custom
 */

get_header();
custom_display_hero_content();
?>

<div class="g-page-content">
	<div class="g-l-row">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					?>

					<?php the_content(); ?>
				</article>
				<?php
			endwhile;
		endif;
		?>
	</div>
</div>

<?php custom_display_content_blocks(); ?>

<?php get_footer(); ?>

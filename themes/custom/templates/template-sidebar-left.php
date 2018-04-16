<?php
/**
 * Template Name: Sidebar Left
 *
 * @package Custom
 */

get_header();
?>

<div class="g-page-content">
	<aside class="">
		<?php dynamic_sidebar( 'Sidebar' ); ?>
	</aside>

	<div class="g-l-row">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php get_template_part( 'templates/content', 'title' ); ?>
					</header>

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

<?php get_footer(); ?>

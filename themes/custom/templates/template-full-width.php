<?php
/**
 * Template Name: Full Width
 *
 * @package Custom
 */

get_header();
?>

<div class="g-page-content">
	<div class="g-l-row">
		<?php get_template_part( 'templates/content', 'title' ); ?>
	</div>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</div>
			<?php
		endwhile;
	endif;
	?>
</div>

<?php get_footer(); ?>

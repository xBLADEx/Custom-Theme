<?php
//--------------------------------------------------------------
// Template Name: Full Width
//--------------------------------------------------------------
get_header();
?>
<div class="page-content">
	<div class="row">
		<div class="medium-12 columns">
			<?php get_template_part( 'templates/page', 'title' ); ?>
		</div>
	</div>
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) { the_post(); ?>
			<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</div>
		<?php
		}
	} ?>
</div>
<?php get_footer(); ?>

<?php
/* 
====================
	TEMPLATE NAME: Sidebar Left
====================
*/
get_header(); 
?>
<div class="row page-content">
    <aside class="medium-3 columns" role="complementary">
		<?php dynamic_sidebar( 'Sidebar Left' ); ?>
	</aside>
    <div class="medium-9 columns">
		<?php if ( have_posts() ) { ?>
			<?php while ( have_posts() ) { the_post(); ?>			
				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<?php get_template_part( 'templates/page', 'header' ); ?>
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php } ?>					
					<?php the_content(); ?>
				</article>
			<?php } ?>			
		<?php } ?>
    </div>
</div>
<?php get_footer(); ?>
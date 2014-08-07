<?php
/* 
====================
	TEMPLATE NAME: Blog
====================
*/
get_header(); 
?>
<?php get_template_part( 'templates/page', 'header' ); ?>
<div class="row pageContent">
    <div class="large-9 columns">
    <?php $postsArray = get_posts( array( // http://codex.wordpress.org/Template_Tags/get_posts
		'posts_per_page'   => 10,
		'offset'           => 0,
		'category'         => '',
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => true ) ); 
	?>    
	<?php foreach ( $postsArray as $post ){ 
		setup_postdata( $post ); ?>
		<div class="postContainer">
		    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
				<header>
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php } ?>
					<p class="date">Date: <?php the_time( get_option( 'date_format' ) ); ?></p>
					<p class="categories">Categories: <?php the_category( ', ' ); ?></p>
				</header>
				<div>	
					<?php the_excerpt(); ?>
				</div> 
				<footer>
					<p class="tags"><?php the_tags( '<span>', '</span><span>', '</span>' ); ?></p>
				</footer>
		    </article>
	    </div>
    <?php } ?>
    </div>
	<?php get_template_part( 'templates/page', 'sidebarRight' ); ?>
</div>
<?php get_footer(); ?>
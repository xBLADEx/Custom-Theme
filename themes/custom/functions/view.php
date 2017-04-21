<?php
/**
 * View
 *
 * @package Custom
 */

/**
 * Blank Search
 *
 * @param  string $query Query.
 * @return string        Query.
 */
function custom_blank_search( $query ) {
	// If "s" request variable is set but empty.
	if ( isset( $_GET['s'] ) && empty( $_GET['s'] ) && $query->is_main_query() ) {
		$query->is_search = true;
		$query->is_home = false;
	}

	return $query;
}

add_filter( 'pre_get_posts', 'custom_blank_search' );

/**
 * Shortcode Example
 *
 * @example [name].
 * @return string HTML.
 */
function custom_shortcode_name() {
	ob_start();
	?>

	<?php
	return ob_get_clean();
}

add_shortcode( 'name', 'custom_shortcode_name' );

<?php
/**
 * Post Date
 *
 * @package Custom
 */

?>

<p class="date"><?php esc_html_e( 'Date:', 'custom' ); ?> <?php the_time( get_option( 'date_format' ) ); ?></p>

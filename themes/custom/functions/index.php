<?php
/**
 * Index
 * Entry point for all function files.
 *
 * @package Custom
 */

$files = [
	'clean.php',
	'theme-support.php',
	'enqueue.php',
	'media-custom.php',
	'post-custom.php',
	'register.php',
	'class-custom-nav-menu.php',
	'template-parts.php',
];

foreach ( $files as $file ) {
	require_once $file;
}

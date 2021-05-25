<?php
/**
 * Juho functions and definitions
 *
 * @package Juho
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Juho's includes directory.
$juho_inc_dir = get_template_directory() . '/includes';

// Array of files to include.
$juho_includes = array(
    '/theme-settings.php',                  // Initialize theme default settings.
    '/setup.php',                           // Theme setup and custom theme supports.
    '/widgets.php',                         // Register widget area.
    '/enqueue.php',                         // Enqueue scripts and styles.
    '/template-tags.php',                   // Custom template tags for this theme.
    '/pagination.php',                      // Custom pagination for this theme.
    '/hooks.php',                           // Custom hooks.
    '/extras.php',                          // Custom functions that act independently of the theme templates.
    '/customizer.php',                      // Customizer additions.
    '/custom-comments.php',                 // Custom Comments file.
    '/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/juho/juho/issues/567.
    '/editor.php',                          // Load Editor functions.
    '/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if (class_exists('WooCommerce')) {
    $juho_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if (class_exists('Jetpack')) {
    $juho_includes[] = '/jetpack.php';
}

// Include files.
foreach ($juho_includes as $file) {
    require_once $juho_inc_dir . $file;
}

function custom_excerpt_length($length)
{
    return 35;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
add_image_size('juho-moments', 1980, 600, true);


function age_gate_session_init() {
    if (!session_id()) {
        session_start();
    }
}

add_action( 'init', 'age_gate_session_init' );
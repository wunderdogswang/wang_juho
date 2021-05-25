<?php
/**
 * Juho enqueue scripts
 *
 * @package Juho
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! function_exists('juho_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function juho_scripts()
    {
        // Get the theme data.
        $the_theme     = wp_get_theme();
        $theme_version = $the_theme->get('Version');

        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
        wp_enqueue_style('juho-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

        wp_enqueue_script('jquery');

        wp_enqueue_style(
            'animate',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css',
            '',
            '4.1.1',
            'all'
        );
        
        wp_enqueue_script(
            'wow',
            get_stylesheet_directory_uri() . '/js/wow.min.js',
            array( 'jquery' ),
            '1.3.0',
            true
        );
        
        wp_enqueue_script(
            'wow-init',
            get_stylesheet_directory_uri() . '/js/wow-init.js',
            array( 'jquery' ),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'toggle',
            get_stylesheet_directory_uri() . '/js/toggle.js',
            array( 'jquery' ),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'sticky-header',
            get_stylesheet_directory_uri() . '/js/sticky-header.js',
            array( 'jquery' ),
            '1.0.0',
            false
        );

        wp_enqueue_script(
            'anime-init',
            get_stylesheet_directory_uri() . '/js/anime-init.js',
            '',
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'jquery-cookie',
            get_stylesheet_directory_uri() . '/js/jquery.cookie.js',
            '',
            '1.4.1',
            false
        );

        /* Load time of day script on home page only */
        if (is_page('home')) {
            wp_enqueue_script(
                'time-of-day',
                get_stylesheet_directory_uri() . '/js/time-of-day.js',
                array( 'jquery' ),
                '1.0.0',
                true
            );
        }

        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
        wp_enqueue_script('juho-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true);
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
} // End of if function_exists( 'juho_scripts' ).

add_action('wp_enqueue_scripts', 'juho_scripts');

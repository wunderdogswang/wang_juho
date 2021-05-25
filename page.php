<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Juho
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
    //Hero Section
    get_template_part('template-parts/components/hero', null);
    //Content Section
    get_template_part('template-parts/components/content', null);
get_footer();

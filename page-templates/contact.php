<?php
/**
 * Template Name: Contact
 *
 * Template for ACF repeatable fields/components
 *
 * @package SVO
 */

get_header(); ?>
    <main class="contact">
        <?php
            get_template_part('template-parts/components/hero', null);
            get_template_part('template-parts/pages/contact/content', null);
        ?>
    </main>
<?php get_footer();

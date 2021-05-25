<?php
/**
 * Template Name: FAQ
 *
 * Template for ACF repeatable fields/components
 *
 * @package SVO
 */

get_header(); ?>
    <main class="faq">
        <?php
            get_template_part('template-parts/components/hero', null);
            get_template_part('template-parts/pages/faq/cards', null);
        ?>
    </main>
<?php get_footer();

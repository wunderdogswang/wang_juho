<?php
/**
 * Template Name: Flavor
 *
 * Template for ACF repeatable fields/components
 *
 * @package SVO
 */

get_header(); ?>
    <main class="flavors">
        <?php
            get_template_part('template-parts/components/hero', null);
            get_template_part('template-parts/pages/flavors/intro', null);
            get_template_part('template-parts/pages/flavors/flavors', null);
        ?>
    </main>
<?php get_footer();

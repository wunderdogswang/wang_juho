<?php
/**
 * Template Name: Home
 *
 *
 * @package Juho
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<main class="home">
<?php
        //hero video
        get_template_part('template-parts/pages/home/hero', null);
        // Check if the flexible content field has rows of data
        if (have_rows('content')):
            // Loop through rows.
            while (have_rows('content')) : the_row();
                if (get_row_layout() == 'flavors'):
                    get_template_part('template-parts/pages/home/flavors', null);
                // Indonesia Section
                elseif (get_row_layout() == 'indonesia_intro'):
                    get_template_part('template-parts/pages/home/indonesia', null);
                // About Section
                elseif (get_row_layout() == 'about'):
                    get_template_part('template-parts/pages/home/about', null);
                // #Juho_moments
                elseif (get_row_layout() == 'juho_moments'):
                    get_template_part('template-parts/pages/home/juho_moments', null);
                // Find_Juho
                elseif (get_row_layout() == 'find_juho'):
                    get_template_part('template-parts/pages/home/find_juho', null);
            endif;
            // End loop.
            endwhile;
            // No value.
            else :
            endif;
    ?>
</main>
<?php
get_footer();

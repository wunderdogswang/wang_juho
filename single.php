<?php
/**
 * The template for displaying all news-article posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#news-article-post
 *
 * @package Analytica
 * @since 1.0.0
 */

get_header();
?>
<main>
    <section class="newsArticle__hero" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/news-hero.jpg') no-repeat; background-size: cover;background-position: center;">
        <section class="newsArticle__hero-wrapper">
            <div class="newsArticle__hero-wrapper-date">
                <h6>
                    <?php echo get_the_date('j'); ?>
                </h6>
                <p>
					<?php echo get_the_date('M'); ?>
                </p>
            </div>
            <div class="newsArticle__hero-wrapper-title">
                <h2>
                    <?php the_title_attribute() ?>
                </h2>
               <p>
                    <b>Category</b> : <?php the_category(', '); ?>
               </p>
            </div>
        </section>
    </section>
    <section class="newsArticle__content">
        <?php the_content(); ?>
    </section>
</main>
<?php get_footer(); ?>

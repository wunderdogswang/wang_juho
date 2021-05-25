<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Juho
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
	<div class="four04">
        <div class="four04__content">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                <?php esc_html_e('Oops! 404', 'juho'); ?>
            </h1>
            <p class="wow fadeInUp" data-wow-delay=".4s">
                Sorry, we can’t seem to find what you’re looking for. <br/>
                You've landed on a URL that doesn't seem to exist on our website. Here are some options: <br/><br/>
                <strong>
                    If you think this is an error on our part, please <a href="<?php echo esc_url(home_url()); ?>/contact">let us know.</a>
                </strong>
            </p>
            <a class="btn-primary" href="<?php echo esc_url(home_url()); ?>">
                <?php esc_html_e('Take me back to the home page', 'juho'); ?>
            </a> 
        </div>
	</div>
<?php
get_footer();

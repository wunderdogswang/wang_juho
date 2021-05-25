<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */

?>

	</div><!-- #content -->
	<div class="footer__bg">

	</div>

	<footer class="footer">
		<div class="footer__top">
			<div class="footer__intro">
				<?php dynamic_sidebar('footer__intro'); ?>
			</div>
			<div class="footer__social">
				<?php dynamic_sidebar('footer__social'); ?>
			</div>
		</div>
		<div class="footer__contact">
			<?php dynamic_sidebar('footer__contact'); ?>
		</div>
		<div class="footer__quicklinks">
			<?php dynamic_sidebar('footer__quicklinks'); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
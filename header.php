<?php
	// check before website
	if( empty($_SERVER['HTTP_REFERER']) ){
		// remove session value
		unset($_SESSION['age_gate_confirm']);
	} else {
		// check refer url is from site or other site
		$site_url = site_url();
		$referer_url = $_SERVER['HTTP_REFERER'];
		$cut_referer_url = substr($referer_url, 0, strlen($site_url));
		
		if( $cut_referer_url !== $site_url ){
			// if the site was visited from other external site
			// remove session value
			unset($_SESSION['age_gate_confirm']);
		} else {
			if( isset($_POST['action']) && $_POST['action'] === 'age_gate_submit' ){
				if( isset($_POST['age_gate_confirm']) ){
					// click no button
					if( empty($_POST['age_gate_confirm']) ){
						// remove session value
						unset($_SESSION['age_gate_confirm']);

						//redirect
						wp_redirect( 'https://www.google.com/' );
						exit;
					} else {
						// click yes button
						if( isset($_POST['age_gate_remember']) ){
							// checked remember
							$_SESSION['age_gate_confirm_remembered'] = true;
						} else {
							$_SESSION['age_gate_confirm'] = true;
						}
					}
				}
			}
		}
	}

defined('ABSPATH') || exit;

$container = get_theme_mod('juho_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php echo !(isset($_SESSION['age_gate_confirm']) || isset($_SESSION['age_gate_confirm_remembered'])) ? 'style="overflow: hidden;"' :''; ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;800&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

	<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
	<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

	<!-- Anime js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php juho_body_attributes(); ?> <?php echo !(isset($_SESSION['age_gate_confirm']) || isset($_SESSION['age_gate_confirm_remembered'])) ? 'style="overflow: hidden;"' :''; ?>>
<?php
	if( !(isset($_SESSION['age_gate_confirm']) || isset($_SESSION['age_gate_confirm_remembered'])) ){
?>
		<div class="age-gate-popup">
			<div class="age-gate-popup-inner">
				<div class="age-gate-popup-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/logo-white.svg" alt="logo">
				</div>
				<div class="age-gate-popup-content">
					<form method="post" action="">
						<p>Are you 21 or older?</p>
						<div class="age-gate-popup-checkbox">
							<label>Remember me<input type="checkbox" name="age_gate_remember" value="1"><span></span></label>
						</div>
						<div class="age-gate-popup-button-row">
							<div class="age-gate-popup-button-left">
								<button id="age-gate-popup-button-yes" type="submit" value="1" name="age_gate_confirm">Yes</button>
							</div>
							<div class="age-gate-popup-button-right">
								<button id="age-gate-popup-button-no" type="submit" name="age_gate_confirm">No</button>
							</div>
						</div>
						<input type="hidden" name="action" value="age_gate_submit">
					</form>
				</div>
			</div>
		</div>
<?php
	}
?>
<?php do_action('wp_body_open'); ?>
<div class="site" id="page">
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'juho'); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e('Main Navigation', 'juho'); ?>
			</h2>

		<?php if ('container' === $container) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if (! has_custom_logo()) { ?>

						<?php if (is_front_page() && is_home()) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

						<?php endif; ?>

						<?php
                    } else {
                        the_custom_logo();
                    }
                    ?>
					<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'juho'); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
                wp_nav_menu(
                        array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Juho_WP_Bootstrap_Navwalker(),
                    )
                    );
                ?>
			<?php if ('container' === $container) : ?>
				<div class="header__social">
					<?php dynamic_sidebar('header__social'); ?>
				</div>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

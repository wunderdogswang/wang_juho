<section class="home__hero">
    <video id="home__hero-video" src="" autoplay playsinline loop muted></video>
    <img id="home__hero-fallback" class="home__hero-fallback" src="" alt="">
    <div class="home__hero-content">
        <div class="home__hero-content-wrapper">
            <div class="ml4">
                <h1 class="home__hero-content-title item item-1"></h1>
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/logo.svg" class="item item-2" alt="Juho" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay="4s">
                You've <span>Arrived.</span>
            </h1>
            <div class="wow fadeIn" data-wow-delay="5s" style="position: relative">
                <a class="btn-primary" href="<?php echo esc_url(home_url()); ?>/where-to-find">
                    <?php esc_html_e('Drink JUHO', 'juho'); ?>
                </a>
            </div>
        </div>
    </div>
    <img class="home__hero-wave" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/wave.svg" alt="">
</section>
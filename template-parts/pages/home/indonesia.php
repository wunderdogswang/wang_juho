<?php
    $fallbackImage = get_sub_field('image');
    $backgroundVideo = get_sub_field('video');
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $buttonLabel = get_sub_field('button_label');
    $buttonLink = get_sub_field('button_link');
?>
<secion class="home__indonesia">
    <div class="home__indonesia-container">
        <video src="<?php echo $backgroundVideo; ?>" autoplay loop playsinline muted></video>
        <img class="home__indonesia-container-fallback" src="<?php echo $fallbackImage; ?>" alt="">
        <div class="home__indonesia-container-content">
            <div class="home__indonesia-container-content-wrapper">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    <?php echo $title ?>
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                    <?php echo $description ?>
                </p>
                <div class="wow fadeInUp" data-wow-delay=".5s">
                    <a class="btn-primary" href="<?php echo $buttonLink; ?>">
                        <?php echo $buttonLabel; ?>
                    </a>
                </div>
            </div>
        </div>
        <img class="home__indonesia-container-wave" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/wave.svg" alt="">
    </div>
</secion>
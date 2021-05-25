<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<secion class="home__moments">
    <div class="home__moments-content">
        <div class="home__moments-content-top wow fadeInUp" data-wow-delay=".3s">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/pink-IG.svg" alt="IG">
            <h2>
                <?php echo $title ?>
            </h2>
        </div>
        <p class="wow fadeInUp" data-wow-delay=".4s">
            <?php echo $description ?>
        </p>
    </div>

    <!-- #Juho_moments gallery -->
    <div class="home__moments-gallery">
        <?php
            $images = get_sub_field('gallery');
                if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <div class="home__moments-gallery-single">
                        <a href="https://www.instagram.com/drinkjuho/" target="_blank">
                            <img src="<?php echo esc_url($image['sizes']['juho-moments']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                    </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</secion>
<?php
    $title = get_sub_field('title');
    $instructions = get_sub_field('instructions');
    $image = get_sub_field('image');
?>
<secion class="home__find">
    <div class="home__find-left">
        <h2 class="wow fadeInUp" data-wow-delay=".3s">
            <?php echo $title ?>
        </h2>
        <p class="wow fadeInUp" data-wow-delay=".4s">
            <?php echo $instructions ?>
        </p>
        <div class="wow fadeInUp" data-wow-delay=".5s">
        <a class="btn-primary" href="<?php echo esc_url(home_url()); ?>/where-to-find">
            <?php esc_html_e('Find JUHO', 'juho'); ?>
        </a>
        </div>
    </div>

    <div class="home__find-right">
        <img src="<?php echo $image ?>" alt="">
    </div>
</secion>

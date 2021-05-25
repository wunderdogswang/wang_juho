<?php
    $content = get_field('content');
?> 
<section class="content">
    <section class="content__title">
        <h1 class="wow fadeInUp" data-wow-delay=".3s">
            <?php the_title(); ?>
        </h1>
    </section>
    <?php echo $content; ?>
</section>
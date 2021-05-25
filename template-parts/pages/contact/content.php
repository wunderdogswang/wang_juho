<?php
    $title = get_field('title');
    $introduction = get_field('introduction');
    $contactForm = get_field('contact_form');
?> 
<section class="contact__content">
    <h1 class="wow fadeInUp" data-wow-delay=".3s">
        <?php echo $title; ?>   
    </h1>
    <p class="wow fadeInUp" data-wow-delay=".4s">
        <?php echo $introduction; ?>
    </p>
</section>
<section class="contact__form">
    <?php echo do_shortcode($contactForm) ?>
</section>
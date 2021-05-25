<?php
    // check if the repeater field has rows of data
    if (have_rows('flavor')):
        // loop through the rows of data
        while (have_rows('flavor')) : the_row();
    // display a sub field value
?> 
    <div class="flavors__card">
        <div class="flavors__card-details">
            <h4 class="<?php the_sub_field('name'); ?> wow fadeInUp" data-wow-delay=".3s">
                <?php the_sub_field('name'); ?>
            </h4>

            <h6 class="<?php the_sub_field('name'); ?> wow fadeInUp" data-wow-delay=".4s">
                <?php the_sub_field('description'); ?>
            </h6>

            <div class="flavors__card-details-ingredients wow fadeInUp" data-wow-delay=".5s">
                <?php the_sub_field('ingredients'); ?>
            </div>
  
            <div class="flavors__card-details-nutrition wow fadeInUp" data-wow-delay=".6s">
                <?php the_sub_field('nutrition_facts'); ?>
            </div>
    
            <div class="wow fadeInUp" data-wow-delay=".7s">
                <a class="btn-secondary" href="<?php echo esc_url(home_url()); ?>/where-to-find">
                    <?php esc_html_e('Find JUHO', 'juho'); ?>
                </a>
            </div>
        </div>

        <div class="flavors__card-photo">
            <img class="wow slideInRight flavors__card-photo-desktop" src="<?php the_sub_field('photo'); ?>" alt="<?php the_sub_field('name'); ?>" data-wow-delay=".5s">
            <img class="wow slideInRight flavors__card-photo-mobile" src="<?php the_sub_field('mobile_photo'); ?>" alt="<?php the_sub_field('name'); ?>" data-wow-delay=".5s">
        </div>
    </div>
    <?php
    endwhile;
    else :
    endif;
?>
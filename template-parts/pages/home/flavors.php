<?php
    $title = get_sub_field('title');
?> 
<section class="home__flavors">
    <h2 class="wow fadeInUp" data-wow-delay=".3s">
        <?php the_sub_field('title'); ?>
    </h2>

    <!-- flavor sub-section -->
    <div class="home__flavors-cards">
        <?php
        // check if the repeater field has rows of data
        if (have_rows('flavors')):
            // loop through the rows of data
            while (have_rows('flavors')) : the_row();
                // display a sub field value
                ?> 
                    <div class="home__flavors-item">
                        <img src="<?php the_sub_field('photo'); ?>" alt="<?php the_sub_field('name'); ?>">
                        <h4 class="<?php the_sub_field('name'); ?>">
                            <?php the_sub_field('name'); ?>
                        </h4>
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                            <a class="btn-secondary" href="<?php the_sub_field('link'); ?>">
                                <?php esc_html_e('Shop Now', 'juho'); ?>
                            </a>
                        </div>
                    </div>
                <?php
            endwhile; ?>
    </div>
            <?php
            else :
            endif;
        ?>
</section>
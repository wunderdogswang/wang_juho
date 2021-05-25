<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="home__about">
    <div class="home__about-intro">
        <h2 class="wow fadeInUp" data-wow-delay=".3s">
            <?php echo $title ?>
        </h2>
        <p class="wow fadeInUp" data-wow-delay=".4s">
            <?php echo $description ?>
        </p>
    </div>
    
    <!-- flavor sub-section -->
    <div class="home__about-cards">
        <?php
        // check if the repeater field has rows of data
        if (have_rows('card')):
            // loop through the rows of data
            while (have_rows('card')) : the_row();
                // display a sub field value
                ?> 
                    <div class="home__about-item">
                        <img class="wow rotateIn" src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>" data-wow-delay=".5s">
                        <h5 class="wow fadeInUp" data-wow-delay=".6s">
                            <?php the_sub_field('title'); ?>
                        </h5>
                        <p class="wow fadeInUp" data-wow-delay=".7s">
                            <?php the_sub_field('description'); ?>
                        </p>
                    </div>
                <?php
            endwhile; ?>
            </div>
            <?php
            else :
            endif;
        ?>
</section>
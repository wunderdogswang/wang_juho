<?php
    $introduction = get_field('introduction');
?> 
<section class="flavors__top">
    <h1 class="wow fadeInUp" data-wow-delay=".3s">
        <?php the_title(); ?>
    </h1>
    <p class="wow fadeInUp" data-wow-delay=".4s">
        <?php echo $introduction; ?>
    </p>
</section>

<section class="flavors__composition">
    <?php
        // check if the repeater field has rows of data
        if (have_rows('composition')):
            // loop through the rows of data
            while (have_rows('composition')) : the_row();
        // display a sub field value
    ?> 
            <img class="wow rotateIn" src="<?php the_sub_field('icon'); ?>" alt="" data-wow-delay=".5s">
        <?php
        endwhile;
        else :
        endif;
    ?>
</section>
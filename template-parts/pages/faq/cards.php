<section class="faq__top">
    <h1 class="wow fadeInUp" data-wow-delay=".3s">
        <?php the_title(); ?>
    </h1>
</section>
<div class="faq__card-wrapper">
    <?php
        // check if the repeater field has rows of data
        if (have_rows('cards')):
            // loop through the rows of data
            while (have_rows('cards')) : the_row();
        // display a sub field value
    ?> 
        <div class="faq__card">
            <div class="faq__card-question">
                <h6>
                <i></i>
                <span>
                    <?php the_sub_field('question'); ?>
                </span>
                </h6>
            </div>
            <div class="faq__card-answer">
                <p>
                    <?php the_sub_field('answer'); ?>
                </p>
            </div>
        </div>
        <?php
        endwhile;
        else :
        endif;
    ?>
</div>
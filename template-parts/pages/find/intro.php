<?php
    $title = get_field('title');
    $searchTitle = get_field('search_form_title');
    $instructions = get_field('instructions');
?>
<section class="find__intro">
    <h1 class="wow fadeInUp" data-wow-delay=".3s">
        <?php echo $title; ?>  
    </h1>
</section>

<?php  get_template_part('template-parts/components/store-locator', null);

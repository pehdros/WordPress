<?php get_header(); ?>

<div class="container">
<?php 
while(have_posts()) :the_post();

    get_template_part('template-parts/content', 'single');

    ?>

    <div class="row">
        <div class="text-start col-6">
            <?php next_post_link('&laquo; %link');?>
        </div>
        <div class="text-end col-6">
            <?php previous_post_link('%link &raquo;');?>
        </div>
    </div>

    <?php

    if(comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile;
?>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<!-- Conteúdo do post -->
<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'single');

?>

<!-- Comentários -->
        <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

            endwhile;
    ?>
    

    <?php get_footer(); ?>
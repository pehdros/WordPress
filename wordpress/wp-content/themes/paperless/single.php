<?php get_header(); ?>

<!-- Conteúdo do post -->
<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'single');

endwhile;
?>


<?php get_footer(); ?>
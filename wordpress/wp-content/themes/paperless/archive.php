<?php get_header(); ?>


<!-- BLOG -->
<?php get_sidebar('categorias')?>
<div class="container">
    <div class="row">
        <?php

        the_archive_title('<h1 class="text-center">','</h1>');
        the_archive_description();

        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <?php get_template_part('template-parts/content', 'archive');?>

        <?php
            endwhile;
        endif;

        the_posts_pagination(
            [
                'prev_text' => 'Anterior',
                'next_text' => 'Próximo'
            ]
        );
        ?>
    </div>
</div>


<!-- BLOG -->

<?php get_footer(); ?>
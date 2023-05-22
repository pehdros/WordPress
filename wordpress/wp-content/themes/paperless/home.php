<?php get_header(); ?>

<?php get_sidebar('categorias'); ?>

<!-- Exibe página inicial do blog o home.php -->
<div class="container">
    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

                get_template_part('template-parts/content');

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

<?php get_footer(); ?>
<?php get_header(); ?>

<!-- Página para categorias -->

<section class="py-5">
    <?php get_sidebar('categorias') ?>
</section>

<div class="container">
    <div class="row">
        <?php
        the_archive_title('<h2 class="text-center text-primary pb-4">', '</h2>');
        the_archive_description();

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
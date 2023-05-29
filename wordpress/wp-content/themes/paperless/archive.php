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
        ?>
        <div class="my-5">
            <?php the_posts_pagination(array('mid_size' => 2)); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
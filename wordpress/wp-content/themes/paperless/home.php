<?php get_header(); ?>
<section class="py-5">
<div class="container text-center text-primary">
    <h2 class="">Thaís Godoy Estética e Acupuntura - BLOG</h2>
    <p class="">Tudo o que você precisa saber sobre estética, acupuntura e nossa clínica!</p>
</div>
</section>

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
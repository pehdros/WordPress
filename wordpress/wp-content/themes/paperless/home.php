<?php get_header(); ?>


<!-- BLOG -->
<div class="container">
    <div><?php get_search_form(); ?></div>
    <div class="">
        <p>Categorias:</p>
        <div class="categorias">
            <?php
            if (is_active_sidebar('categorias')) {
                dynamic_sidebar('categorias');
            }
            ?>
        </div>
    </div>
    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <?php get_template_part('template-parts/content', get_post_format()); ?>

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
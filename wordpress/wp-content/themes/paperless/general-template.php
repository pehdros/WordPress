<?php
/*
Template Name: Template Geral
*/
?>

<?php get_header(); ?>

<?php get_sidebar('promocoes'); ?>

<!-- O administrador poderá incluir conteúdo do post e informações em uma sidebar lateral -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-9 pe-5">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-3 bg-success p-4 h-100">
                <?php get_sidebar('lateral'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
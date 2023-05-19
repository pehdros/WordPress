<?php
/*
Template Name: Template Geral
*/
?>

<?php get_header(); ?>

<!-- O administrador poderá incluir promoções -->
<section>
    <div class="container">
        <div class="row">
            <?php
            if (is_active_sidebar('promocao')) {
                dynamic_sidebar('promocao');
            }
            ?>
        </div>
    </div>
</section>

<!-- O administrador poderá incluir conteúdo do post e informações em uma sidebar lateral -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-3 bg-success">
                <?php
                if (is_active_sidebar('sidebar-direita')) {
                    dynamic_sidebar('sidebar-direita');
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
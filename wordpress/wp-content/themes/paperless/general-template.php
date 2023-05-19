<?php
/*
Template Name: Template Geral
*/
?>

<?php get_header(); ?>



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

<div class="">
    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

        <?php get_template_part('template-parts/content', 'quote'); ?>           

        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
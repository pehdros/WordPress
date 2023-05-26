<section class="container my-5">
    <div class="row justify-content-center mb-2">
        <div class="col-12 col-lg-8">
            <article class="" id="post<?php the_ID(); ?><?php post_class(); ?>">
                <div class="categorias"><?php the_category(); ?></div>
                <div class="text-primary py-3">
                    <h1 class=""><?php the_title(); ?></h1>
                    <p>Criado <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
                </div>
            </article>
            <?php the_content(); ?>
            <div class="row">
                <div class="col-6">
                    <?php next_post_link('&laquo; %link'); ?>
                </div>
                <div class="col-6 text-end">
                    <?php previous_post_link('%link &raquo;'); ?>
                </div>
            </div>

        </div>
    </div>
</section>
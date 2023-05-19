<?php get_header(); ?>

<!-- Imagem dinâmica editável em personalizar -->
<section class="banner">
    <h1 class="">
        <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
    </h1>
</section>

<!-- O conteúdo da página Home é editável pelo editor WordPress (Gutenberg) -->
<section class="">
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Últimos posts seguindo as categorias informadas -->
<section class="blog my-5">
    <div class="container">
        <div class="text-center">
            <h2 class="text-primary py-2">Blog</h2>
            <p>Conheça o nosso blog e fique por dentro das novidades na área da estética e acupuntura</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?php
                $featured = new WP_Query('post_type=post&posts_per_page=1&cat=28');
                if ($featured->have_posts()) :
                    while ($featured->have_posts()) : $featured->the_post();
                ?>

                        <div class="col-12">
                            <?php get_template_part('template-parts/content', 'featured') ?>
                        </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif
                ?>
            </div>
            <div class="col-md-8">
                <?php
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'category__not_in' => [28],
                    'category__in' => [25, 29]
                ];
                $secondary = new WP_Query($args);
                if ($secondary->have_posts()) :
                    while ($secondary->have_posts()) : $secondary->the_post();
                ?>
                        <div class="col-12">
                            <?php get_template_part('template-parts/content', 'secondary') ?>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
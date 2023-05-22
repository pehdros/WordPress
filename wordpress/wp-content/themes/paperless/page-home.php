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




<?php get_footer(); ?>
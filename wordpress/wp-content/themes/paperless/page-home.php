<?php get_header(); ?>

<!-- Imagem dinâmica editável em personalizar -->


<!-- O conteúdo da página Home é editável pelo editor WordPress (Gutenberg) -->
<section class="">
    <div class="">
        
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        
    </div>
</section>




<?php get_footer(); ?>
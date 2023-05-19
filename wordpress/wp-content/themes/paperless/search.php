<?php get_header(); ?>

<div class="container">

    <?php

    get_search_form();

    while (have_posts()) : the_post();

        get_template_part('template-parts/content', 'search');

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
    endwhile;

    the_posts_pagination(
        [
            'prev_text' => 'Previous',
            'next_text' => 'Next'
        ]
    );
    ?>
</div>

<?php get_footer(); ?>
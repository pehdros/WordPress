<article id="post<?php the_ID(); ?><?php post_class(); ?>">
    <header class="">
        <h1><?php the_title(); ?></h1>
        <div class="">
            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
            <p>Categorias: <?php the_category(['class' => 'text-decoration-none']); ?></p>
            <p><?php the_tags(); ?></p>
        </div>
    </header>

    <div class="">
        <?php the_content(); ?>
    </div>
</article>


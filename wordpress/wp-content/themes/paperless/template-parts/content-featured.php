<article <?php post_class(['class' => 'card mt-5 ']); ?>>
    <div class="card-body text-primary">
        <div class="row">
            <div class="col-6">
                <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></a>
            </div>
            <div class="col-6">
                <h3 class="card-title "><?php the_title(); ?></h3>
                <span class="opacity-50"><?php echo get_the_date(); ?></span>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-success text-decoration-none">Leia mais</a>
            </div>
        </div>
    </div>
</article>
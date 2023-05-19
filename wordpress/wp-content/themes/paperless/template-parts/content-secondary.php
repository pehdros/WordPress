<article <?php post_class(['class' => 'card mt-1 ']); ?>>
    <div class="row card-body g-0">
        <div class="col-md-4">
            <a href="<?php the_permalink();?>" class="text-decoration-none"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></a>
        </div>
        <div class="col-md-8 text-secondary">
            <div class="px-3 pt-2">
                <h3 class="card-title "><?php the_title(); ?></h3>
                <span class="opacity-50"><?php echo get_the_date(); ?></span>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>" class="btn btn-success text-decoration-none">Leia mais</a>
            </div>
        </div>
    </div>
</article>
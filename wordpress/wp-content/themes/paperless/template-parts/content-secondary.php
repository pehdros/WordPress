<!-- Referente a Blog em page-home.php -->
<article <?php post_class(['class' => 'card my-3']); ?>>
    <div class="row card-body g-0">
        <div class="col-md-5">
            <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></a>
        </div>
        <div class="col-md-7 text-primary px-4">
            <div class="pb-3">
                <h3 class="card-title "><?php the_title(); ?></h3>
                <span class="opacity-50"><?php echo get_the_date();?></span>
            </div>
            <div class="">
                <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-success text-decoration-none">Leia mais</a>
            </div>
        </div>
    </div>
</article>
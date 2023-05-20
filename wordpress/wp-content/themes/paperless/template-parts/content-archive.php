<div class="col-sm-4 mb-3">
    <article class="card">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img']); ?></a>
        <div class="card-body">
            <h3 class="card-header text-center"><?php the_title(); ?></h3>
            <p class="mt-3 opacity-50"><?php echo get_the_date(); ?></p>
            <p><?php echo get_the_excerpt(); ?></p>
        </div>
    </article>
</div>
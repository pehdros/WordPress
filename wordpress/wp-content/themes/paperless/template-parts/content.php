<!-- Conteúdo a ser mostrado em home.php-->
<div class="col-12 col-sm-4 mb-3">
    <article class="border border-primary rounded">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnails', ['class' => 'img-fluid rounded-top']); ?></a>
        <div class="text-center">
            <h3 class=" py-3 bg-primary text-white"><?php the_title(); ?></h3>
            <p class="mt-3 opacity-50 text-primary"><?php echo get_the_date();?></p>
            <p class="text-primary"><?php echo get_the_excerpt(); ?></p>
        </div>
    </article>
</div>
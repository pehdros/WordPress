<?php get_header(); ?>

<section class="map my-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=<?php echo esc_html(get_theme_mod('set_address')); ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-6">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>

                        <?php get_template_part('template-parts/content-quote'); ?>

                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<section class="contato my-5">
    <div class="container">
        <div class="row bg-info">
            <?php
            if (is_active_sidebar('atendimento')) {
                dynamic_sidebar('atendimento');
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
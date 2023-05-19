<footer class="">

    <section class="bg-success">
        <nav class="navbar navbar-expand-md ">
            <div class="container">
                <span class="text-primary"> <?php the_custom_logo(); ?> </span>

                <div class="" id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-footer',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto menu-footer mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </section>

</footer>
<?php wp_footer(); ?>
</body>

</html>
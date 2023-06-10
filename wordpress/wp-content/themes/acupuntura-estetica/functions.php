<?php 

/* -------------------------------------
Enqueu Styles 
---------------------------------------- */

if(!function_exists('tg_estetica')) :

    function tg_estetica(){
        wp_enqueue_style('tg-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    }

endif;

add_action('wp_enqueue_scripts', 'tg_estetica');

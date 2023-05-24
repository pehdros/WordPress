<?php

require_once get_template_directory() . '/inc/customizer.php';

// ESTILOS e SCRIPTS
function load_styles()
{
    //SCRIPTS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/dist/scripts/bootstrap.bundle.min.js', array(), '5.3.0-alpha3', true);
    //STYLES
    /*wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/dist/styles/bootstrap.css', array(), '5.3.0-alpha3', 'all');*/
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/dist/styles/main.css', array(), false, 'all');
}

// FONTAWESOME
if (!function_exists('fa_custom_setup_kit')) {
    function fa_custom_setup_kit($kit_url = '')
    {
        foreach (['wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts'] as $action) {
            add_action(
                $action,
                function () use ($kit_url) {
                    wp_enqueue_script('font-awesome-kit', $kit_url, [], null);
                }
            );
        }
    }
}

fa_custom_setup_kit('https://kit.fontawesome.com/c5065fc2ad.js');

add_action('wp_enqueue_scripts', 'load_styles');

/*-----------------------------------------------------------------------------------------------------------------*/

// NAVWALKER BOOTSTRAP 5 - MENUS 
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach ($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? '' : '';
        $nav_link_class = ($depth > 0) ? 'dropdown-item' : 'nav-link ';
        $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}


// THEME SUPORTE
function registrando_suportes()
{
    // REGISTRO DO MENU HEADER
    register_nav_menus(
        ['main-menu' => 'Menu Tratamentos']
    );
    // REGISTRO DO MENU FOOTER
    register_nav_menus(
        ['menu-footer' => 'Footer']
    );

    // TIPOS DE SUPORTES
    /*---------- IMAGEM DE CABEÇALHO ------------*/
    $args = ['height' => 600, 'width' => 1920];
    add_theme_support('custom-header', $args);
    /*------------- MINIATURAS ----------------*/
    add_theme_support('post-thumbnails');
    /*------------- FORMATO DE POST ---------------*/
    add_theme_support('post-formats', ['video', 'image', 'quote']);
    /*------------ TAG TITLE ----------------- */
    add_theme_support('title-tag');
    /*------------ LOGOTIPO --------------- */
    add_theme_support('custom-logo', ['height' => 60, 'width' => 220]);
}

add_action('after_setup_theme', 'registrando_suportes', 0);

// REGISTRO DE SIDEBARS
add_action('widgets_init', 'registrando_sidebars');
function registrando_sidebars()
{
    // SIDEBAR TOP - HEADER
    register_sidebar(
        [
            'name' => 'Top Bar',
            'id' => 'topbar',
            'description' => 'Área de Ícones e pesquisa',
            'before_widget' => '<div class="container py-1">',
            'after_widget' => '</div>',
            
        ]
    );
    // SIDEBAR PROMOÇÕES - GENERAL TEMPLATE
    register_sidebar(
        [
            'name' => 'Promoções',
            'id' => 'promocao',
            'description' => 'Área de Promoções',
            'before_widget' => '<div class="text-primary">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="">',
            'after_title' => '</h2>'
        ]
    );
    // SIDEBAR LATERAL - GENERAL TEMPLATE
    register_sidebar(
        array(
            'name' => 'Sidebar Direita',
            'id' => 'sidebar-direita',
            'description' => 'Área de categorias para General Template',
            'before_widget' => '<div class="text-primary">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="">',
            'after_title' => '</h2>'
        )
    );
    // SIDEBAR BLOG - CATEGORIAS
    register_sidebar(
        array(
            'name' => 'Categorias',
            'id' => 'categorias',
            'description' => 'Área de categorias para Blog',
            'before_widget' => '<div class="mt-3 mb-5">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="">',
            'after_title' => '</h2>'
        )
    );
}


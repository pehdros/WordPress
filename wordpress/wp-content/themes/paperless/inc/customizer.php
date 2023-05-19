<?php

function codigo_customizer($wp_customize)
{
    $wp_customize->add_section(
        'sec_map',
        array(
            'title' => 'Map',
            'description' => 'Map Section'
        )
    );
    $wp_customize->add_setting(
        'set_address',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_address',
        array(
            'label' => 'Address',
            'description' => 'Corresponde ao mapa',
            'section' => 'sec_map',
            'type' => 'text'
        )
    );
}

add_action('customize_register','codigo_customizer');
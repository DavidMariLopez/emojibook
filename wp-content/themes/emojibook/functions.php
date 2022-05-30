<?php

// CARGAR SCRIPTS Y ESTILOS

function my_scripts_and_styles()
{
    if ( !is_admin() )
    {
        //CARGA DE CSS
        wp_register_style ('font-awesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
        wp_enqueue_style ( 'font-awesome' );

        //CARGA DE JS
        wp_register_script('scripts',
            get_bloginfo ('template_url') . '/js/scripts.js' );
        wp_enqueue_script ( 'scripts' );
    }
}

add_action ( 'wp_enqueue_scripts', 'my_scripts_and_styles' );
    


//  HABILITA LAS IMÁGENES DESTACADAS

    add_theme_support ( 'post-thumbnails' );


//  ELIMINAR TAMAÑOS DE IMAGEN QUE NO USE

    // remove_image_size ( 'medium_large' ); Esto no funciona, las siguientes líneas sí
    update_option ( 'medium_large_size_w', '0' );
    update_option ( 'medium_large_size_h', '0' );

    remove_image_size ( '1536x1536' );
    remove_image_size ( '2048x2048' );


//  AÑADIR FORMATOS DE ENTRADA

    add_theme_support ( 'post-formats', array ( 'audio', 'video' ) );


//  REGISTRO DE MENÚS

    register_nav_menu ( 'main', 'Menú principal' );
    register_nav_menu ( 'footer', 'Menú pie de página' );
    register_nav_menu ( 'social', 'Menú redes sociales' );


//  REGISTRO DE SIDEBARS

    register_sidebar ( array
    (
        'id' => 'blog',
        'name' => 'Sidebar del blog',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar ( array
    (
        'id' => 'page',
        'name' => 'Sidebar de las páginas',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>'
    ));


    // TIPOS DE ENTRADA PERSONALIZADOS

    function my_custom_post_types()
    {
        register_post_type ( 'emoji', array
        (
            'public' => true,
            'menu_position' => 2,
            'supports' => array ( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'labels' => array
            (
                'name' => 'Emojis',
                'singular_name' => 'Emoji',
                'add_new' => 'Añadir nuevo',
                'add_new_item' => 'Añadir nuevo Emoji',
                'all_items' => 'Todos los Emojis',
                'edit_item' => 'Editar Emoji',
                'new_item' => 'Nuevo Emoji',
                'view_item' => 'Ver Emoji',
                'search_items' => 'Buscar Emojis',
                'not_found' =>  'No se han encontrado Emojis',
                'not_found_in_trash' => 'No se han encontrado Emojis en la papelera'
            )
        ));
    }

    add_action ( 'init', 'my_custom_post_types' );



?>
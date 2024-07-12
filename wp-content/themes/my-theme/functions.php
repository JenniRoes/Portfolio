<?php

if(!defined('ABSPATH')) exit;

function my_theme_styles() {
    wp_enqueue_style('my styles', get_stylesheet_directory_uri().'/styles/css/styles.css');
}
add_action('wp_enqueue_scripts', 'my_theme_styles');

function crear_post_type_proyectos() {
    $labels = array(
        'name'                  => _x('Proyectos', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Proyecto', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Proyectos', 'text_domain'),
        'name_admin_bar'        => __('Proyecto', 'text_domain'),
        'archives'              => __('Archivo de Proyectos', 'text_domain'),
        'attributes'            => __('Atributos del Proyecto', 'text_domain'),
        'parent_item_colon'     => __('Proyecto Padre:', 'text_domain'),
        'all_items'             => __('Todos los Proyectos', 'text_domain'),
        'add_new_item'          => __('Añadir Nuevo Proyecto', 'text_domain'),
        'add_new'               => __('Añadir Nuevo', 'text_domain'),
        'new_item'              => __('Nuevo Proyecto', 'text_domain'),
        'edit_item'             => __('Editar Proyecto', 'text_domain'),
        'update_item'           => __('Actualizar Proyecto', 'text_domain'),
        'view_item'             => __('Ver Proyecto', 'text_domain'),
        'view_items'            => __('Ver Proyectos', 'text_domain'),
        'search_items'          => __('Buscar Proyecto', 'text_domain'),
        'not_found'             => __('No encontrado', 'text_domain'),
        'not_found_in_trash'    => __('No encontrado en la papelera', 'text_domain'),
        'featured_image'        => __('Imagen destacada', 'text_domain'),
        'set_featured_image'    => __('Establecer imagen destacada', 'text_domain'),
        'remove_featured_image' => __('Eliminar imagen destacada', 'text_domain'),
        'use_featured_image'    => __('Usar como imagen destacada', 'text_domain'),
        'insert_into_item'      => __('Insertar en el proyecto', 'text_domain'),
        'uploaded_to_this_item' => __('Subido a este proyecto', 'text_domain'),
        'items_list'            => __('Lista de proyectos', 'text_domain'),
        'items_list_navigation' => __('Navegación de la lista de proyectos', 'text_domain'),
        'filter_items_list'     => __('Filtrar lista de proyectos', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Proyecto', 'text_domain'),
        'description'           => __('Descripción del Proyecto', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'proyectos'),
    );
    register_post_type('proyecto', $args);
}
add_action('init', 'crear_post_type_proyectos', 0);


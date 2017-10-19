<?php

add_theme_support('post-thumbnails');
/*
function registrar_produto() {
    $descricao = 'Usado para listar os produtos da Singular';
    $singular = 'Produto';
    $plural = 'Produtos';

    $labels = array(
        'name' => $plural,
        'singular_name' => $singular,
        'view_item' => 'Ver ' . $singular,
        'edit_item' => 'Editar ' . $singular,
        'new_item' => 'Novo ' . $singular,
        'add_new_item' => 'Adicionar novo ' . $singular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-tag',
        'supports' => $supports
    );


    register_post_type( 'produto', $args);    
}

add_action('init', 'registrar_produto');

// Registrando menu principal e de rodape 
function registrar_menus_navegacao() {
    register_nav_menus(array(
                'header-menu' => 'Menu Header',
                'footer-menu' => 'Footer Navigation'
            ));
}

add_action('init','registrar_menus_navegacao');
*/

function registrar_solucao() {
    $descricao = 'Usado para listar as soluções da Singular';
    $singular = 'Solução';
    $plural = 'Soluções';

    $labels = array(
        'name' => $plural,
        'singular_name' => $singular,
        'view_item' => 'Ver ' . $singular,
        'edit_item' => 'Editar ' . $singular,
        'new_item' => 'Novo ' . $singular,
        'add_new_item' => 'Adicionar novo ' . $singular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-tagcloud',
        'supports' => $supports
    );


    register_post_type( 'solucao', $args);    
}

add_action('init', 'registrar_solucao');

function get_titulo() {
	if( is_home() ) {
		bloginfo('name');
	} else {
		bloginfo('name');
		echo ' | ';
		the_title();
	}
}

function get_page_link_by_slug($pageSlug) {
    $page = get_page_by_title($pageSlug);
    return get_permalink($page->ID);
}
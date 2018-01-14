<?php

add_theme_support('post-thumbnails');

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

function registrar_projeto() {
    $descricao = 'Usado para listar os projetos da Singular';
    $singular = 'Projeto';
    $plural = 'Projetos';

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


    register_post_type( 'projeto', $args);    
}

add_action('init', 'registrar_projeto');

function registrar_arquitetos() {
    $descricao = 'Usado para listar os arquitetos parceiros da Singular';
    $singular = 'Arquiteto';
    $plural = 'Arquitetos';

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
        'menu_icon' => 'dashicons-universal-access',
        'supports' => $supports
    );


    register_post_type( 'arquiteto', $args);    
}

add_action('init', 'registrar_arquitetos');

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

function enviar_e_checar_email($nome, $email, $telefone) {
    return wp_mail( 'fredrhae@gmail.com', 'Cadastro arquiteto', 'Nome: ' . $nome . "\n" . 'Email: ' .  $email . "\n" . 'Telefone: ' . $telefone);
}

function my_attachments( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'title',                         // unique field name
      'type'      => 'text',                          // registered field type
      'label'     => __( 'Title', 'attachments' ),    // label to display
      'default'   => 'title',                         // default value upon selection
    ),
    array(
      'name'      => 'caption',                       // unique field name
      'type'      => 'textarea',                      // registered field type
      'label'     => __( 'Caption', 'attachments' ),  // label to display
      'default'   => 'caption',                       // default value upon selection
    ),
  );

  $args = array(

    // title of the meta box (string)
    'label'         => 'Anexos de imagem',

    // all post types to utilize (string|array)
    'post_type'     => array( 'post', 'page','solucao','projeto' ),

    // meta box position (string) (normal, side or advanced)
    'position'      => 'normal',

    // meta box priority (string) (high, default, low, core)
    'priority'      => 'high',

    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => array('image, text'),  // no filetype limit

    // include a note within the meta box (string)
    'note'          => 'Anexe arquivos de imagem aqui!',

    // by default new Attachments will be appended to the list
    // but you can have then prepend if you set this to false
    'append'        => true,

    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Anexe imagens', 'attachments' ),

    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Anexos', 'attachments' ),

    // which tab should be the default in the modal (string) (browse|upload)
    'router'        => 'browse',

    // whether Attachments should set 'Uploaded to' (if not already set)
	'post_parent'   => false,

    // fields array
    'fields'        => $fields,

  );

  $attachments->register( 'my_attachments', $args ); // unique instance name
}

add_action( 'attachments_register', 'my_attachments' );

function read_content_from_text_file($path_text_file)
{
  return file_get_contents($path_text_file);
}
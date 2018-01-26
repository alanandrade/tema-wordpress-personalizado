<?php

add_theme_support('post-thumbnails'); //Suporte a Imagens de destaque (Thumbnails)

function cadastrando_post_type_imoveis(){
    $nomeSingular = 'Imóvel';
    $nomePlural = 'Imóveis';
    $description = 'Imóveis da Imobiliária Malura';


    $labels = array(
        'name' => $nomePlural,
        'singular_name' => $nomeSingular,
        'add_new_item' => 'Adicionar Novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels, //Array de substituicao de labels padroes
        'public' => true,
        'description' => $description,
        'menu_icon' => 'dashicons-admin-home', //Icon da label
        'supports' => $supports //O Post Imóveis irá suportar
    );

    register_post_type( 'imovel', $args);
}

add_action('init', 'cadastrando_post_type_imoveis'); //Executar essa funcao com ao iniciae o arquivo function(init)
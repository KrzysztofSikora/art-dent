<?php 

function ath_register_post_type( $post_type, $plural_name, $singular_name, $slug, $capability_type, $supports = [], $taxonomies = [], $public = true )
{
    $args = [
        'labels' => [
            'name'               => $singular_name,
            'singular_name'      => $singular_name,
            'add_new'            => 'Dodaj nowy',
            'add_new_item'       => 'Dodaj nowy '.$singular_name,
            'edit_item'          => 'Edytuj '.$singular_name,
            'new_item'           => 'Nowy '.$singular_name,
            'all_items'          => 'Wpisy '.$plural_name,
            'view_item'          => 'Zobacz '.$singular_name,
            'search_items'       => 'Znajdź '.$plural_name,
            'not_found'          => 'Nie znaleziono '.$plural_name.' ',
            'not_found_in_trash' => 'Nie znaleziono '.$plural_name.' w koszu',
            'menu_name'          => $plural_name
        ],
        'label'           => $singular_name,
        'public'          => $public,
        'taxonomies'      => $taxonomies,
        'has_archive'     => true,
        'rewrite'         => [ 'slug' => $slug ],
        'capability_type' => $capability_type,
        'supports'        => $supports
    ];
    register_post_type( $post_type, $args );
}

function register_dla_lekarzy_post_type()
{
    ath_register_post_type( 'dla', 'Dla lekarzy', 'Dla', 'dla', 'post', ['title', 'author'] );
}

add_action( 'init', 'register_dla_lekarzy_post_type' );

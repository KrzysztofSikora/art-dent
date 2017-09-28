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
/*
function save_job_data( $post_id, $post, $update )
{
    $meta_keys = [
        'how_to_apply' => 'html',
        'city'         => 'text',
        'country'      => 'text'
    ];

    foreach ($meta_keys as $meta_key => $type) {
        if ( isset( $_POST[ $meta_key ] ) ) {
            if ( $type === 'html' ) {
                $value = wp_kses_post( trim( $_POST[ $meta_key ] ) );
            } else {
                $value = sanitize_text_field( trim( $_POST[ $meta_key ] ) );
            }

            update_post_meta( $post_id, $meta_key, $value );
        }
    }
}
add_action( 'save_post_job', 'save_job_data', 10, 3 );

function how_to_apply()
{
    global $post;

    $how_to_apply = get_post_meta( $post->ID, 'how_to_apply', true );

    $setting = [
        'quicktags'     => false,
        'media_buttons' => false,
        'editor_height' => 120
    ];
    wp_editor( $how_to_apply, 'how_to_apply', $setting);
}

function location()
{
    global $post;
    $city    = get_post_meta( $post->ID, 'city', true );
    $country = get_post_meta( $post->ID, 'country', true );
    ?>
    <input type="text" name="city" class="regular-text" placeholder="City" value="<?php echo $city; ?>" /><br>
    <input type="text" name="country" class="regular-text" placeholder="Country" value="<?php echo $country; ?>" />
    <?php
}


function adds_job_meta_boxes()
{
    add_meta_box( 'job_how_to_apply', 'How to Apply', 'how_to_apply', 'job', 'normal', 'default' );
    add_meta_box( 'job_location', 'Location', 'location', 'job', 'normal', 'default' );
}

add_action( 'add_meta_boxes', 'adds_job_meta_boxes' );

*/
<?php

function odin_classif_cpt() {
    $video = new Odin_Post_Type(
        'Classificados', // Nome (Singular) do Post Type.
        'clssificados_news' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Classificados', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => false,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-megaphone',

        )
    );
}
add_action( 'init', 'odin_classif_cpt', 1 );


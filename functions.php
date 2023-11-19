<?php

function create_custom_posts() {
    register_post_type('formations', [
        'labels' => [
            'name' => __( 'Formations' ),
            'singular_name' => __( 'Formation' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'formations'],
        'show_in_rest' => true,
    ]);
    register_post_type('skills', [
        'labels' => ['name' => 'Soft skills'],
        'public' => true,
        'show_in_rest' => true,
    ]);

    register_post_type('hskills', [
        'labels' => ['name' => 'Hard skills'],
        'public' => true,
        'show_in_rest' => true,
    ]);

    register_post_type('langues', [
        'labels' => ['name' => 'Mes langues'],
        'public' => true,
        'show_in_rest' => true,
    ]);

    register_post_type('interets', [
        'labels' => ['name' => 'Centres intérêts'],
        'public' => true,
        'show_in_rest' => true,
    ]);

    register_post_type('exp_pro', [
        'labels' => ['name' => 'Expériences professionnelles'],
        'public' => true,
        'show_in_rest' => true,
    ]);


}

add_action('init', 'create_custom_posts');





function add_your_fields_meta_box() {
    add_meta_box(
        'your_fields_meta_box', // $id
        'Détails de la Formation', // $title
        'show_your_fields_meta_box', // $callback
        'formations', // $screen
        'normal', // $context
        'high' // $priority
    );
}
add_action('add_meta_boxes', 'add_your_fields_meta_box');






function show_your_fields_meta_box($post) {
    // Récupérer les valeurs existantes
    $start_date = get_post_meta($post->ID, 'start_date', true);
    $end_date = get_post_meta($post->ID, 'end_date', true);

    // Afficher les champs pour les dates
    echo '<label for="start_date">Date de début:</label>';
    echo '<input type="date" id="start_date" name="start_date" value="'.esc_attr($start_date).'"><br><br>';
    
    echo '<label for="end_date">Date de fin:</label>';
    echo '<input type="date" id="end_date" name="end_date" value="'.esc_attr($end_date).'"><br><br>';
}
function save_your_fields_meta($post_id) {
    if (array_key_exists('start_date', $_POST)) {
        update_post_meta(
            $post_id,
            'start_date',
            $_POST['start_date']
        );
    }
    if (array_key_exists('end_date', $_POST)) {
        update_post_meta(
            $post_id,
            'end_date',
            $_POST['end_date']
        );
    }
}
add_action('save_post', 'save_your_fields_meta');
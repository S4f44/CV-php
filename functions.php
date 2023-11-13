<?php

function create_custom_posts() {
    register_post_type('skills', [
        'labels' => ['name' => 'Compétences'],
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

    register_post_type('expro', [
        'labels' => ['name' => 'Expériences professionnelles'],
        'public' => true,
        'show_in_rest' => true,
    ]);


}




add_action('init', 'create_custom_posts');

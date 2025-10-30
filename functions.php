<?php
add_theme_support("post-thumbnails");
function bestemmingen_post_type() {
  register_post_type('bestemmingen', [
    'labels' => [
      'name' => 'Bestemmingen',
      'singular_name' => 'Bestemming',
      'add_new_item' => 'Nieuwe bestemming toevoegen',
      'edit_item' => 'Bestemming bewerken',
      'new_item' => 'Nieuwe bestemming',
      'view_item' => 'Bekijk bestemming',
      'search_items' => 'Zoek bestemmingen',
      'not_found' => 'Geen bestemmingen gevonden',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'bestemmingen'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'menu_icon' => 'dashicons-location-alt',
    'show_in_rest' => true, // voor Gutenberg en ACF
  ]);
}
add_action('init', 'bestemmingen_post_type');

?>
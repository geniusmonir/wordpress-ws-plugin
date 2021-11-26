<?php 
// add_theme_support('post-thumbnails'); // Added Main Function
function university_post_types(){

  // Event Post Type
  register_post_type('campus', array(
    'public' => true,
    'labels' => array(
      'name' => 'Campuses',
      'add_new_item' => 'Add New Campus',
      'edit_item'=>'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    ),
    'menu_icon' => 'dashicons-location-alt',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail',  'author', 'excerpt', 'page-attributes', 'post-formats'),
    'has_archive' => true,
    'rewrite' => array('slug' => 'campuses'),

    // Roles
    'capability_type' => 'campus',
    'map_meta_cap' =>true,
  ));

  // Event Post Type
  register_post_type('event', array(
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item'=>'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail',  'author', 'excerpt', 'page-attributes', 'post-formats'),
    'has_archive' => true,
    'rewrite' => array('slug' => 'events'),

    // Roles
    'capability_type' => 'event',
    'map_meta_cap' =>true,
  ));

  // Programme Post Type
  register_post_type('program', array(
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item'=>'Edit Program',
      'all_items' => 'All Program',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards',
    'show_in_rest' => true,
    //Skipping editor for fixing avoid of body content seach 'editor' is deleted
    'supports' => array( 'title', 'thumbnail',  'author', 'excerpt', 'page-attributes', 'post-formats'),
    'has_archive' => true,
    'rewrite' => array('slug' => 'programs')
  ));

  // Professor Post Type
  register_post_type('professor', array(
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item'=>'Edit Professor',
      'all_items' => 'All Professor',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail',  'author', 'excerpt', 'page-attributes', 'post-formats'),
    // 'has_archive' => true,
    // 'rewrite' => array('slug' => 'professors')
  ));

  // Note Post Type
  register_post_type('note', array(
    'capability_type' => 'note',
    'map_meta_cap' =>true,
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Note',
      'edit_item'=>'Edit Note',
      'all_items' => 'All Note',
      'singular_name' => 'Note'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'author'),
  ));

  // Like Post Type
  register_post_type('like', array(
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Likes',
      'add_new_item' => 'Add New Like',
      'edit_item'=>'Edit Like',
      'all_items' => 'All Like',
      'singular_name' => 'Like'
    ),
    'menu_icon' => 'dashicons-heart',
    'supports' => array( 'title'),
  ));
}

add_action('init','university_post_types');

?>
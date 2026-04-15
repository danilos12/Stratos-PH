<?php

add_theme_support( 'post-thumbnails' );

function testimonials() {
    register_post_type('Case-Study',
        array(
            'labels' => array(
                'name' => __('Case Study'),
                'singular_name' => __('case-study'),
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
            'show_in_menu' => false
        )
    );
}
add_action('init', 'testimonials');

function stratos_enqueue_styles() {
    // Frameworks and fonts
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/framework/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('linearicons', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css');
    wp_enqueue_style('fs-matthew', get_template_directory_uri() . '/assets/fonts/fs-matthew/stylesheet.css');
  // Used by CircularGallery canvas text
  wp_enqueue_style('google-font-figtree', 'https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('selectric', get_template_directory_uri() . '/assets/css/selectric.css');
    
    // Enqueue React bundle with cache busting
    $bundle_url = get_template_directory_uri() . '/assets/js/dist/bundle.js';
    $bundle_path = get_template_directory() . '/assets/js/dist/bundle.js';
    $version = file_exists($bundle_path) ? filemtime($bundle_path) : '1.0';
    
    // Debug: Log when script is being enqueued
    error_log('📦 Enqueuing React bundle: ' . $bundle_url . ' | Version: ' . $version);
    
    wp_enqueue_script('react-bundle', $bundle_url, array(), $version, true);
    
    // Localize script with REST API URL - works on all environments
    wp_localize_script('react-bundle', 'stratoConfig', array(
      'restUrl' => rest_url('stratos/v1/gallery-items')
    ));

    // ✅ Main stylesheet with auto cache-busting
    wp_enqueue_style(
        'stratos-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'stratos_enqueue_styles');


add_action('rest_api_init', function() {
  register_rest_route('stratos/v1', '/gallery-items', array(
    'methods' => 'GET',
    'callback' => 'get_gallery_items',
    'permission_callback' => '__return_true'
  ));
});

function get_gallery_items() {
  $items = array(
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_1.jpg',
      'text' => 'Burglar & Alarm System',
      'url' => home_url('/services/burglar-and-alarm-system/')
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_2.jpg',
      'text' => 'Access Control System',
      'url' => home_url('/services/access-control-system/')
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_3.jpg',
      'text' => 'Video Surveillance & Analytics',
      'url' => home_url('/services/video-surveilance-analytics/')
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_4.jpg',
      'text' => 'Fire Alarm Active Monitoring',
      'url' => home_url('/services/fire-alarm-active-monitoring/'),
    
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_5.jpg',
      'text' => '24/7 Central Monitoring',
      'url' => home_url('/services/central-management-system/'),
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_6.jpg',
      'text' => 'First Responders',
      'url' => home_url('/services/first-responders/'),
    ),
  );
  
  return rest_ensure_response($items);
}

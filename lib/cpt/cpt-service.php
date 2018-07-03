<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_service_custom_post_type') ) {

  // Register Custom Post Type
  function register_service_custom_post_type() {

    $labels = array(
      'name'                => 'Service',
      'singular_name'       => 'Service',
      'menu_name'           => 'Services',
      'parent_item_colon'   => 'Parent Service',
      'all_items'           => 'All Services',
      'view_item'           => 'View Service',
      'add_new_item'        => 'Add New Service',
      'add_new'             => 'New Service',
      'edit_item'           => 'Edit Service',
      'update_item'         => 'Update Service',
      'search_items'        => 'Search Services',
      'not_found'           => 'No service found',
      'not_found_in_trash'  => 'No service found in Trash',
    );
    $args = array(
      'label'               => 'service',
      'description'         => 'Service description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'page-attributes' ),
      // 'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_category'       => 20,
      'menu_icon'           => 'dashicons-universal-access',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'service', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_service_custom_post_type', 0 );

}

/**
 * Custom taxonomies
 */
if ( ! function_exists('register_service_taxonomies') ) {

  function register_service_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'                => _x( 'Service Category', 'taxonomy general name' ),
      'singular_name'       => _x( 'Service Category', 'taxonomy singular name' ),
      'search_items'        => __( 'Search Service Categories' ),
      'all_items'           => __( 'All Service Categories' ),
      'parent_item'         => __( 'Parent Service Category' ),
      'parent_item_colon'   => __( 'Parent Service Category:' ),
      'edit_item'           => __( 'Edit Service Category' ),
      'update_item'         => __( 'Update Service Category' ),
      'add_new_item'        => __( 'Add New Service Category' ),
      'new_item_name'       => __( 'New Service Category Name' ),
      'menu_name'           => __( 'Service Categories' )
    );

    $args = array(
      'hierarchical'        => true,
      'labels'              => $labels,
      'show_ui'             => true,
      'show_admin_column'   => true,
      'query_var'           => true,
      'rewrite'             => array( 'slug' => 'category' )
    );

    register_taxonomy( 'service_category', array( 'service' ), $args ); // Must include custom post type name

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
      'name'                         => _x( 'Service Tags', 'taxonomy general name' ),
      'singular_name'                => _x( 'Service Tag', 'taxonomy singular name' ),
      'search_items'                 => __( 'Search Service' ),
      'popular_items'                => __( 'Popular Service' ),
      'all_items'                    => __( 'All Service' ),
      'parent_item'                  => null,
      'parent_item_colon'            => null,
      'edit_item'                    => __( 'Edit Service' ),
      'update_item'                  => __( 'Update Service' ),
      'add_new_item'                 => __( 'Add New Service' ),
      'new_item_name'                => __( 'New Service Name' ),
      'separate_items_with_commas'   => __( 'Separate Service with commas' ),
      'add_or_remove_items'          => __( 'Add or remove Service' ),
      'choose_from_most_used'        => __( 'Choose from the most used Service' ),
      'not_found'                    => __( 'No Service found.' ),
      'menu_name'                    => __( 'Service Tags' )
    );

    $args = array(
      'hierarchical'            => false,
      'labels'                  => $labels,
      'show_ui'                 => true,
      'show_admin_column'       => true,
      'update_count_callback'   => '_update_post_term_count',
      'query_var'               => true,
      'rewrite'                 => array( 'slug' => 'service_tag' )
    );

    register_taxonomy( 'service_tag', 'service', $args ); // Must include custom post type name

  }

  add_action( 'init', 'register_service_taxonomies', 0 );

}



/**
 * Create ACF setting page under CPT menu
 */

// if ( function_exists( 'acf_add_options_sub_page' ) ){
//   acf_add_options_sub_page(array(
//     'title'      => 'Service Settings',
//     'parent'     => 'edit.php?post_type=service',
//     'capability' => 'manage_options'
//   ));
// }

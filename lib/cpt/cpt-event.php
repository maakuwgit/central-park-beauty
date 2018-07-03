<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_event_custom_post_type') ) {

  // Register Custom Post Type
  function register_event_custom_post_type() {

    $labels = array(
      'name'                => 'Event',
      'singular_name'       => 'Event',
      'menu_name'           => 'Events',
      'parent_item_colon'   => 'Parent Event',
      'all_items'           => 'All Events',
      'view_item'           => 'View Event',
      'add_new_item'        => 'Add New Event',
      'add_new'             => 'New Event',
      'edit_item'           => 'Edit Event',
      'update_item'         => 'Update Event',
      'search_items'        => 'Search Events',
      'not_found'           => 'No event found',
      'not_found_in_trash'  => 'No event found in Trash',
    );
    $args = array(
      'label'               => 'event',
      'description'         => 'Event description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'page-attributes' ),
      // 'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-calendar-alt',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'event', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_event_custom_post_type', 0 );

}


/**
 * Custom taxonomies
 */
if ( ! function_exists('register_event_taxonomies') ) {

  function register_event_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'                => _x( 'Event Type', 'taxonomy general name' ),
      'singular_name'       => _x( 'Event Type', 'taxonomy singular name' ),
      'search_items'        => __( 'Search Event Types' ),
      'all_items'           => __( 'All Event Types' ),
      'parent_item'         => __( 'Parent Event Type' ),
      'parent_item_colon'   => __( 'Parent Event Type:' ),
      'edit_item'           => __( 'Edit Event Type' ),
      'update_item'         => __( 'Update Event Type' ),
      'add_new_item'        => __( 'Add New Event Type' ),
      'new_item_name'       => __( 'New Event Type Name' ),
      'menu_name'           => __( 'Event Types' )
    );

    $args = array(
      'hierarchical'        => true,
      'labels'              => $labels,
      'show_ui'             => true,
      'show_admin_column'   => true,
      'query_var'           => true,
      'rewrite'             => array( 'slug' => 'position' )
    );

    register_taxonomy( 'event_position', array( 'event' ), $args ); // Must include custom post type name

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
      'name'                         => _x( 'Event Tags', 'taxonomy general name' ),
      'singular_name'                => _x( 'Event Tag', 'taxonomy singular name' ),
      'search_items'                 => __( 'Search Event' ),
      'popular_items'                => __( 'Popular Event' ),
      'all_items'                    => __( 'All Event' ),
      'parent_item'                  => null,
      'parent_item_colon'            => null,
      'edit_item'                    => __( 'Edit Event' ),
      'update_item'                  => __( 'Update Event' ),
      'add_new_item'                 => __( 'Add New Event' ),
      'new_item_name'                => __( 'New Event Name' ),
      'separate_items_with_commas'   => __( 'Separate Event with commas' ),
      'add_or_remove_items'          => __( 'Add or remove Event' ),
      'choose_from_most_used'        => __( 'Choose from the most used Event' ),
      'not_found'                    => __( 'No Event found.' ),
      'menu_name'                    => __( 'Event Tags' )
    );

    $args = array(
      'hierarchical'            => false,
      'labels'                  => $labels,
      'show_ui'                 => true,
      'show_admin_column'       => true,
      'update_count_callback'   => '_update_post_term_count',
      'query_var'               => true,
      'rewrite'                 => array( 'slug' => 'event_tag' )
    );

    register_taxonomy( 'event_tag', 'event', $args ); // Must include custom post type name

  }

  add_action( 'init', 'register_event_taxonomies', 0 );

}




/**
 * Create ACF setting page under CPT menu
 */

// if ( function_exists( 'acf_add_options_sub_page' ) ){
//   acf_add_options_sub_page(array(
//     'title'      => 'Event Settings',
//     'parent'     => 'edit.php?post_type=event',
//     'capability' => 'manage_options'
//   ));
// }

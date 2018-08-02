<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_event_custom_post_type') ) {


  // Register Custom Post Type
  function register_event_custom_post_type() {

    $id = get_field( 'event_archive_page', 'option' );
    $slug = ll_get_the_slug( $id );
    $title = get_the_title( $id );
    if ( !$title ) {
      $title = 'Events';
    }

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
      'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
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
    if ( $slug ) {
      $args['rewrite'] = [ 'slug' => $slug ];
    }
    register_post_type( 'event', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_event_custom_post_type', 0 );

}

/**
 * Create ACF setting page under CPT menu
 */

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Event Settings',
    'parent'     => 'edit.php?post_type=event',
    'capability' => 'edit_posts'
  ));
}

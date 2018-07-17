<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_condition_custom_post_type') ) {

  $id = get_field( 'conditions_archive_page', 'option' );
  $slug = ll_get_the_slug( $id );
  $title = get_the_title( $id );
  if ( !$title ) {
    $title = 'Conditions';
  }

  // Register Custom Post Type
  function register_condition_custom_post_type() {

    $labels = array(
      'name'                => 'Condition',
      'singular_name'       => 'Condition',
      'menu_name'           => 'Conditions',
      'parent_item_colon'   => 'Parent Condition',
      'all_items'           => 'All Conditions',
      'view_item'           => 'View Condition',
      'add_new_item'        => 'Add New Condition',
      'add_new'             => 'New Condition',
      'edit_item'           => 'Edit Condition',
      'update_item'         => 'Update Condition',
      'search_items'        => 'Search Conditions',
      'not_found'           => 'No condition found',
      'not_found_in_trash'  => 'No condition found in Trash',
    );
    $args = array(
      'label'               => 'condition',
      'description'         => 'Condition description',
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
      'menu_icon'           => 'dashicons-visibility',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    if ( $slug ) {
      $args['rewrite'] = [ 'slug' => $slug ];
    }
    register_post_type( 'condition', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_condition_custom_post_type', 0 );

}

/**
 * Custom taxonomies
 */
if ( ! function_exists('register_condition_taxonomies') ) {

  function register_condition_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'                => _x( 'Condition Category', 'taxonomy general name' ),
      'singular_name'       => _x( 'Condition Category', 'taxonomy singular name' ),
      'search_items'        => __( 'Search Condition Categories' ),
      'all_items'           => __( 'All Condition Categories' ),
      'parent_item'         => __( 'Parent Condition Category' ),
      'parent_item_colon'   => __( 'Parent Condition Category:' ),
      'edit_item'           => __( 'Edit Condition Category' ),
      'update_item'         => __( 'Update Condition Category' ),
      'add_new_item'        => __( 'Add New Condition Category' ),
      'new_item_name'       => __( 'New Condition Category Name' ),
      'menu_name'           => __( 'Condition Categories' )
    );

    $args = array(
      'hierarchical'        => true,
      'labels'              => $labels,
      'show_ui'             => true,
      'show_admin_column'   => true,
      'query_var'           => true,
      'rewrite'             => array( 'slug' => 'category' )
    );

    register_taxonomy( 'condition_category', array( 'condition' ), $args ); // Must include custom post type name

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
      'name'                         => _x( 'Condition Tags', 'taxonomy general name' ),
      'singular_name'                => _x( 'Condition Tag', 'taxonomy singular name' ),
      'search_items'                 => __( 'Search Condition' ),
      'popular_items'                => __( 'Popular Condition' ),
      'all_items'                    => __( 'All Condition' ),
      'parent_item'                  => null,
      'parent_item_colon'            => null,
      'edit_item'                    => __( 'Edit Condition' ),
      'update_item'                  => __( 'Update Condition' ),
      'add_new_item'                 => __( 'Add New Condition' ),
      'new_item_name'                => __( 'New Condition Name' ),
      'separate_items_with_commas'   => __( 'Separate Condition with commas' ),
      'add_or_remove_items'          => __( 'Add or remove Condition' ),
      'choose_from_most_used'        => __( 'Choose from the most used Condition' ),
      'not_found'                    => __( 'No Condition found.' ),
      'menu_name'                    => __( 'Condition Tags' )
    );

    $args = array(
      'hierarchical'            => false,
      'labels'                  => $labels,
      'show_ui'                 => true,
      'show_admin_column'       => true,
      'update_count_callback'   => '_update_post_term_count',
      'query_var'               => true,
      'rewrite'                 => array( 'slug' => 'condition_tag' )
    );

    register_taxonomy( 'condition_tag', 'condition', $args ); // Must include custom post type name

  }

  add_action( 'init', 'register_condition_taxonomies', 0 );

}



/**
 * Create ACF setting page under CPT menu
 */

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Condition Settings',
    'parent'     => 'edit.php?post_type=condition',
    'capability' => 'edit_posts'
  ));
}

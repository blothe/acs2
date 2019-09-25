<?php
function wpdocs_theme_name_scripts() {
  wp_register_style('main-style', get_template_directory_uri().'/blog.css', array(), true);
  wp_enqueue_style('main-style');
  wp_register_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), true);
  wp_enqueue_style('bootstrap-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

register_nav_menus( array(
  'menu-principal' => 'Menu principal'
) );

// Our custom post type function
function create_posttype() {
  register_post_type( 'guest reviews',
  // CPT Options
  array(
    'labels' => array(
      'name' => __( 'Guest Reviews' ),
      'singular_name' => __( 'Guest Review' )
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'guest reviews'),
  )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Guest Reviews', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Guest Review', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Guest Reviews', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent Guest Review', 'twentythirteen' ),
    'all_items'           => __( 'All Guest Reviews', 'twentythirteen' ),
    'view_item'           => __( 'View Guest Review', 'twentythirteen' ),
    'add_new_item'        => __( 'Add New Guest Review', 'twentythirteen' ),
    'add_new'             => __( 'Add New', 'twentythirteen' ),
    'edit_item'           => __( 'Edit Guest Review', 'twentythirteen' ),
    'update_item'         => __( 'Update Guest Review', 'twentythirteen' ),
    'search_items'        => __( 'Search Guest Review', 'twentythirteen' ),
    'not_found'           => __( 'Not Found', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'guest reviews', 'twentythirteen' ),
    'description'         => __( 'Guest reviews', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registering your Custom Post Type
  register_post_type( 'guest reviews', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

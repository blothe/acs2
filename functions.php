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

/*******************
* CUSTOM POST TYPE ************************************************************
*******************/

// enregistrement CPT
function create_posttype() {
  register_post_type( 'avis clients',
  // options
  array(
    'labels' => array(
      'name' => __( 'Avis clients' ),
      'singular_name' => __( 'Avis client' )
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'avis clients'),
  )
);
}
// initialisation
add_action( 'init', 'create_posttype' );

// création
function custom_post_type() {
  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Avis clients', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Avis client', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Avis clients', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Avis client parent', 'twentythirteen' ),
    'all_items'           => __( 'Tous les avis clients', 'twentythirteen' ),
    'view_item'           => __( 'Voir l\'avis client', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter un nouvel avis client', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier l\'avis client', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser l\'avis client', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les avis clients', 'twentythirteen' ),
    'not_found'           => __( 'Aucun avis client trouvé', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucun avis client trouvé dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'avis clients', 'twentythirteen' ),
    'description'         => __( 'Ce que nos clients pensent de nous', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'avis clients' ),
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
  // enregistrement paramètres
  register_post_type( 'avis client', $args );
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

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

function custom_post_type() {

  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Slogans', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Slogan', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Slogans', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent slogan', 'twentythirteen' ),
    'all_items'           => __( 'Tous les slogans', 'twentythirteen' ),
    'view_item'           => __( 'Voir le slogan', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter un nouveau slogan', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier le slogan', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser le slogan', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les slogans', 'twentythirteen' ),
    'not_found'           => __( 'Aucun slogan trouvé', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucun slogan trouvé dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'slogans', 'twentythirteen' ),
    'description'         => __( 'Notre slogan', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'slogans' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 4,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  // enregistrement paramètres
  register_post_type( 'slogan', $args );

  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Présentations cuisine', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Présentation cuisine', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Présentations cuisine', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent présentation cuisine', 'twentythirteen' ),
    'all_items'           => __( 'Toutes les présentations cuisine', 'twentythirteen' ),
    'view_item'           => __( 'Voir la présentation cuisine', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter une nouvelle présentation cuisine', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier la présentation cuisine', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser la présentation cuisine', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les présentations cuisine', 'twentythirteen' ),
    'not_found'           => __( 'Aucune présentation cuisine trouvée', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucune présentation cuisine trouvée dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'présentations cuisine', 'twentythirteen' ),
    'description'         => __( 'Notre cuisine', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'présentations cuisine' ),
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
  register_post_type( 'prés. cuisine', $args );

  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Présentations ingrédients', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Présentation ingrédients', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Présentations ingrédients', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent présentation ingrédients', 'twentythirteen' ),
    'all_items'           => __( 'Toutes les présentations ingrédients', 'twentythirteen' ),
    'view_item'           => __( 'Voir la présentation ingrédients', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter une nouvelle présentation ingrédients', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier la présentation ingrédients', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser la présentation ingrédients', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les présentations ingrédients', 'twentythirteen' ),
    'not_found'           => __( 'Aucune présentation ingrédients trouvée', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucune présentation ingrédients trouvée dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'présentations ingrédients', 'twentythirteen' ),
    'description'         => __( 'Nos ingrédients', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'présentations ingrédients' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  // enregistrement paramètres
  register_post_type( 'prés. ingrédients', $args );

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
    'menu_position'       => 8,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  // enregistrement paramètres
  register_post_type( 'avis client', $args );

  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Formulaires de réservation', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Formulaire de réservation', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Formulaires de réservation', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent formulaire de réservation', 'twentythirteen' ),
    'all_items'           => __( 'Tous les formulaires de réservation', 'twentythirteen' ),
    'view_item'           => __( 'Voir le formulaire de réservation', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter un nouveau formulaire de réservation', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier le formulaire de réservation', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser le formulaire de réservation', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les formulaires de réservation', 'twentythirteen' ),
    'not_found'           => __( 'Aucun formulaire de réservation trouvé', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucun formulaire de réservation trouvé dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'formulaires de réservation', 'twentythirteen' ),
    'description'         => __( 'Réservez maintenant', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'formulaires de réservation' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 9,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  // enregistrement paramètres
  register_post_type( 'form. réservation', $args );

  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Rubriques "à propos"', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Rubrique "à propos"', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Rubriques "à propos"', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent rubrique "à propos"', 'twentythirteen' ),
    'all_items'           => __( 'Toutes les rubriques "à propos"', 'twentythirteen' ),
    'view_item'           => __( 'Voir la rubrique "à propos"', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter une nouvelle rubrique "à propos"', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier la rubrique "à propos"', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser la rubrique "à propos"', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les rubriques "à propos"', 'twentythirteen' ),
    'not_found'           => __( 'Aucune rubrique "à propos" trouvée', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucune rubrique "à propos" trouvée dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'rubriques "à propos"', 'twentythirteen' ),
    'description'         => __( 'Notre activité', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'rubriques "à propos"' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 10,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  // enregistrement paramètres
  register_post_type( 'à propos', $args );

  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Rubriques "horaires d\'ouverture"', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Rubrique "horaires d\'ouverture"', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Rubriques "horaires d\'ouverture"', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent rubrique "horaires d\'ouverture"', 'twentythirteen' ),
    'all_items'           => __( 'Toutes les rubriques "horaires d\'ouverture"', 'twentythirteen' ),
    'view_item'           => __( 'Voir la rubrique "horaires d\'ouverture"', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter une nouvelle rubrique "horaires d\'ouverture"', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier la rubrique "horaires d\'ouverture"', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser la rubrique "horaires d\'ouverture"', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les rubriques "horaires d\'ouverture"', 'twentythirteen' ),
    'not_found'           => __( 'Aucune rubrique "horaires d\'ouverture" trouvée', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucune rubrique "horaires d\'ouverture" trouvée dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'rubriques "horaires d\'ouverture"', 'twentythirteen' ),
    'description'         => __( 'Nos horaires d\'ouverture', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'rubriques "horaires d\'ouverture"' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 11,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  // enregistrement paramètres
  register_post_type( 'horaires ouverture', $args );

  // interface utilisateur
  $labels = array(
    'name'                => _x( 'Rubriques "adresse"', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Rubrique "adresse"', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Rubriques "adresse"', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent rubrique "adresse"', 'twentythirteen' ),
    'all_items'           => __( 'Toutes les rubriques "adresse"', 'twentythirteen' ),
    'view_item'           => __( 'Voir la rubrique "adresse"', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter une nouvelle rubrique "adresse"', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter', 'twentythirteen' ),
    'edit_item'           => __( 'Modifier la rubrique "adresse"', 'twentythirteen' ),
    'update_item'         => __( 'Actualiser la rubrique "adresse"', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher dans les rubriques "adresse"', 'twentythirteen' ),
    'not_found'           => __( 'Aucune rubrique "adresse" trouvée', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Aucune rubrique "adresse" trouvée dans la corbeille', 'twentythirteen' ),
  );
  // options complémentaires
  $args = array(
    'label'               => __( 'rubriques "adresse"', 'twentythirteen' ),
    'description'         => __( 'Notre adresse', 'twentythirteen' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'rubriques "adresse"' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 12,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  // enregistrement paramètres
  register_post_type( 'adresse', $args );

}

// initialisation
add_action( 'init', 'custom_post_type', 0 );

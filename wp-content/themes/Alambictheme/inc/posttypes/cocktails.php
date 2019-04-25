<?php

add_action( 'init', 'firstPixel_custom_post_type_cocktails' );
function firstPixel_custom_post_type_cocktails() {
   $post_type         = "cocktails";
   $post_type_support = "posts";
   $labels            = array(
      'name'               => _x( 'Cocktails', 'Postype : Nom post', 'firstPixel' ),
      'singular_name'      => _x( 'Cocktails', 'Postype : Nom post singulier', 'firstPixel' ),
      'all_items'          => _x( 'Toutes les cocktails', 'Postype : Tous les posts', 'firstPixel' ),
      'add_new'            => _x( 'Ajouter une cocktail', 'Postype : Ajouter un nouveau', 'firstPixel' ),
      'add_new_item'       => _x( 'Ajouter un nouveau cocktail', 'Postype : Ajouter un nouveau post', 'firstPixel' ),
      'edit_item'          => _x( "Editer un cocktail", 'Postype : Editer post',  'firstPixel' ),
      'new_item'           => _x( 'Nouveau cocktail', 'Postype : Nouveau post', 'firstPixel' ),
      'view_item'          => _x( "Voir cocktail", 'Postype : Voir post',  'firstPixel' ),
      'search_items'       => _x( 'Chercher un cocktail', 'Postype : Chercher post',  'firstPixel' ),
      'not_found'          => _x( 'Pas de résultat', 'Postype : Post non trouver', 'firstPixel' ),
      'not_found_in_trash' => _x( 'Pas de résultat', 'Postype : Post non trouver dans la corbeille', 'firstPixel' ),
      'parent_item_colon'  => _x( 'Cocktail parente:', 'Postype : Post parent',  'firstPixel' ),
      'menu_name'          => _x( 'Cocktails', 'Postype : Nom menu',  'firstPixel' ),
   );

   $args = array(
      'labels'              => $labels,
      'hierarchical'        => false,
      'supports'            => array( 'title', 'thumbnail', 'editor' ),
      'public'              => true, // single.php
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-palmtree',
      'show_in_nav_menus'   => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false, // in search
      'has_archive'         => false, // archive.php
      'query_var'           => true,
      'can_export'          => true,
      'rewrite'             => array( 'slug' => $post_type )
   );

   register_post_type($post_type, $args );

   register_taxonomy(
      'category_cocktails', // slug
      array($post_type), // posttype
      array(
         'label'        => __('Catégories'), // label
         'rewrite'      => array( 'slug' => 'category_cocktails' ), // rewrite
         'hierarchical' => true, // true: categorie, false: tag
      )
   );

}

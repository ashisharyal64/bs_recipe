<?php
function cptui_register_my_cpts() {

    /**
     * Post Type: Recipes.
     */

    $labels = [
        "name" => __( "Recipes", "twentynineteen" ),
        "singular_name" => __( "Recipe", "twentynineteen" ),
        "menu_name" => __( "My Recipes", "twentynineteen" ),
        "all_items" => __( "All Recipes", "twentynineteen" ),
        "add_new" => __( "Add new", "twentynineteen" ),
        "add_new_item" => __( "Add new Recipe", "twentynineteen" ),
        "edit_item" => __( "Edit Recipe", "twentynineteen" ),
        "new_item" => __( "New Recipe", "twentynineteen" ),
        "view_item" => __( "View Recipe", "twentynineteen" ),
        "view_items" => __( "View Recipes", "twentynineteen" ),
        "search_items" => __( "Search Recipes", "twentynineteen" ),
        "not_found" => __( "No Recipes found", "twentynineteen" ),
        "not_found_in_trash" => __( "No Recipes found in trash", "twentynineteen" ),
        "parent" => __( "Parent Recipe:", "twentynineteen" ),
        "featured_image" => __( "Featured image for this Recipe", "twentynineteen" ),
        "set_featured_image" => __( "Set featured image for this Recipe", "twentynineteen" ),
        "remove_featured_image" => __( "Remove featured image for this Recipe", "twentynineteen" ),
        "use_featured_image" => __( "Use as featured image for this Recipe", "twentynineteen" ),
        "archives" => __( "Recipe archives", "twentynineteen" ),
        "insert_into_item" => __( "Insert into Recipe", "twentynineteen" ),
        "uploaded_to_this_item" => __( "Upload to this Recipe", "twentynineteen" ),
        "filter_items_list" => __( "Filter Recipes list", "twentynineteen" ),
        "items_list_navigation" => __( "Recipes list navigation", "twentynineteen" ),
        "items_list" => __( "Recipes list", "twentynineteen" ),
        "attributes" => __( "Recipes attributes", "twentynineteen" ),
        "name_admin_bar" => __( "Recipe", "twentynineteen" ),
        "item_published" => __( "Recipe published", "twentynineteen" ),
        "item_published_privately" => __( "Recipe published privately.", "twentynineteen" ),
        "item_reverted_to_draft" => __( "Recipe reverted to draft.", "twentynineteen" ),
        "item_scheduled" => __( "Recipe scheduled", "twentynineteen" ),
        "item_updated" => __( "Recipe updated.", "twentynineteen" ),
        "parent_item_colon" => __( "Parent Recipe:", "twentynineteen" ),
    ];

    $args = [
        "label" => __( "Recipes", "twentynineteen" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "recipe", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-food",
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
        "taxonomies" => [ "recipe_category" ],
        "show_in_graphql" => false,

    ];

    register_post_type( "recipe", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


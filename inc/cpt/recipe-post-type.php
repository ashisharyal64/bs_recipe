<?php
function cptui_register_my_cpts() {

    /**
     * Post Type: Recipes.
     */

    $labels = [
        "name" => __( "Recipes", "bs_recipe" ),
        "singular_name" => __( "Recipe", "bs_recipe" ),
        "menu_name" => __( "My Recipes", "bs_recipe" ),
        "all_items" => __( "All Recipes", "bs_recipe" ),
        "add_new" => __( "Add new", "bs_recipe" ),
        "add_new_item" => __( "Add new Recipe", "bs_recipe" ),
        "edit_item" => __( "Edit Recipe", "bs_recipe" ),
        "new_item" => __( "New Recipe", "bs_recipe" ),
        "view_item" => __( "View Recipe", "bs_recipe" ),
        "view_items" => __( "View Recipes", "bs_recipe" ),
        "search_items" => __( "Search Recipes", "bs_recipe" ),
        "not_found" => __( "No Recipes found", "bs_recipe" ),
        "not_found_in_trash" => __( "No Recipes found in trash", "bs_recipe" ),
        "parent" => __( "Parent Recipe:", "bs_recipe" ),
        "featured_image" => __( "Featured image for this Recipe", "bs_recipe" ),
        "set_featured_image" => __( "Set featured image for this Recipe", "bs_recipe" ),
        "remove_featured_image" => __( "Remove featured image for this Recipe", "bs_recipe" ),
        "use_featured_image" => __( "Use as featured image for this Recipe", "bs_recipe" ),
        "archives" => __( "Recipe archives", "bs_recipe" ),
        "insert_into_item" => __( "Insert into Recipe", "bs_recipe" ),
        "uploaded_to_this_item" => __( "Upload to this Recipe", "bs_recipe" ),
        "filter_items_list" => __( "Filter Recipes list", "bs_recipe" ),
        "items_list_navigation" => __( "Recipes list navigation", "bs_recipe" ),
        "items_list" => __( "Recipes list", "bs_recipe" ),
        "attributes" => __( "Recipes attributes", "bs_recipe" ),
        "name_admin_bar" => __( "Recipe", "bs_recipe" ),
        "item_published" => __( "Recipe published", "bs_recipe" ),
        "item_published_privately" => __( "Recipe published privately.", "bs_recipe" ),
        "item_reverted_to_draft" => __( "Recipe reverted to draft.", "bs_recipe" ),
        "item_scheduled" => __( "Recipe scheduled", "bs_recipe" ),
        "item_updated" => __( "Recipe updated.", "bs_recipe" ),
        "parent_item_colon" => __( "Parent Recipe:", "bs_recipe" ),
    ];

    $args = [
        "label" => __( "Recipes", "bs_recipe" ),
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


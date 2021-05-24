<?php
function cptui_register_my_taxes() {

    /**
     * Taxonomy: Recipe Categories.
     */

    $labels = [
        "name" => __( "Recipe Categories", "twentynineteen" ),
        "singular_name" => __( "Recipe Category", "twentynineteen" ),
        "menu_name" => __( "Recipe Categories", "twentynineteen" ),
        "all_items" => __( "All Recipe Categories", "twentynineteen" ),
        "edit_item" => __( "Edit Recipe Category", "twentynineteen" ),
        "view_item" => __( "View Recipe Category", "twentynineteen" ),
        "update_item" => __( "Update Recipe Category name", "twentynineteen" ),
        "add_new_item" => __( "Add new Recipe Category", "twentynineteen" ),
        "new_item_name" => __( "New Recipe Category name", "twentynineteen" ),
        "parent_item" => __( "Parent Recipe Category", "twentynineteen" ),
        "parent_item_colon" => __( "Parent Recipe Category:", "twentynineteen" ),
        "search_items" => __( "Search Recipe Categories", "twentynineteen" ),
        "popular_items" => __( "Popular Recipe Categories", "twentynineteen" ),
        "separate_items_with_commas" => __( "Separate Recipe Categories with commas", "twentynineteen" ),
        "add_or_remove_items" => __( "Add or remove Recipe Categories", "twentynineteen" ),
        "choose_from_most_used" => __( "Choose from the most used Recipe Categories", "twentynineteen" ),
        "not_found" => __( "No Recipe Categories found", "twentynineteen" ),
        "no_terms" => __( "No Recipe Categories", "twentynineteen" ),
        "items_list_navigation" => __( "Recipe Categories list navigation", "twentynineteen" ),
        "items_list" => __( "Recipe Categories list", "twentynineteen" ),
        "back_to_items" => __( "Back to Recipe Categories", "twentynineteen" ),
    ];


    $args = [
        "label" => __( "Recipe Categories", "twentynineteen" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'recipe_category', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "recipe_category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "recipe_category", [ "recipe" ], $args );

    /**
     * Taxonomy: Recipe Tags.
     */

    $labels = [
        "name" => __( "Recipe Tags", "twentynineteen" ),
        "singular_name" => __( "Recipe Tag", "twentynineteen" ),
        "menu_name" => __( "Recipe Tags", "twentynineteen" ),
        "all_items" => __( "All Recipe Tags", "twentynineteen" ),
        "edit_item" => __( "Edit Recipe Tag", "twentynineteen" ),
        "view_item" => __( "View Recipe Tag", "twentynineteen" ),
        "update_item" => __( "Update Recipe Tag name", "twentynineteen" ),
        "add_new_item" => __( "Add new Recipe Tag", "twentynineteen" ),
        "new_item_name" => __( "New Recipe Tag name", "twentynineteen" ),
        "parent_item" => __( "Parent Recipe Tag", "twentynineteen" ),
        "parent_item_colon" => __( "Parent Recipe Tag:", "twentynineteen" ),
        "search_items" => __( "Search Recipe Tags", "twentynineteen" ),
        "popular_items" => __( "Popular Recipe Tags", "twentynineteen" ),
        "separate_items_with_commas" => __( "Separate Recipe Tags with commas", "twentynineteen" ),
        "add_or_remove_items" => __( "Add or remove Recipe Tags", "twentynineteen" ),
        "choose_from_most_used" => __( "Choose from the most used Recipe Tags", "twentynineteen" ),
        "not_found" => __( "No Recipe Tags found", "twentynineteen" ),
        "no_terms" => __( "No Recipe Tags", "twentynineteen" ),
        "items_list_navigation" => __( "Recipe Tags list navigation", "twentynineteen" ),
        "items_list" => __( "Recipe Tags list", "twentynineteen" ),
        "back_to_items" => __( "Back to Recipe Tags", "twentynineteen" ),
    ];


    $args = [
        "label" => __( "Recipe Tags", "twentynineteen" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'recipe_tags', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "recipe_tags",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "recipe_tags", [ "recipe" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

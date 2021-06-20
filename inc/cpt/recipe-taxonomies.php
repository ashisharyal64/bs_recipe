<?php
function cptui_register_my_taxes() {

    /**
     * Taxonomy: Recipe Categories.
     */

    $labels = [
        "name" => __( "Recipe Categories", "bs_recipe" ),
        "singular_name" => __( "Recipe Category", "bs_recipe" ),
        "menu_name" => __( "Recipe Categories", "bs_recipe" ),
        "all_items" => __( "All Recipe Categories", "bs_recipe" ),
        "edit_item" => __( "Edit Recipe Category", "bs_recipe" ),
        "view_item" => __( "View Recipe Category", "bs_recipe" ),
        "update_item" => __( "Update Recipe Category name", "bs_recipe" ),
        "add_new_item" => __( "Add new Recipe Category", "bs_recipe" ),
        "new_item_name" => __( "New Recipe Category name", "bs_recipe" ),
        "parent_item" => __( "Parent Recipe Category", "bs_recipe" ),
        "parent_item_colon" => __( "Parent Recipe Category:", "bs_recipe" ),
        "search_items" => __( "Search Recipe Categories", "bs_recipe" ),
        "popular_items" => __( "Popular Recipe Categories", "bs_recipe" ),
        "separate_items_with_commas" => __( "Separate Recipe Categories with commas", "bs_recipe" ),
        "add_or_remove_items" => __( "Add or remove Recipe Categories", "bs_recipe" ),
        "choose_from_most_used" => __( "Choose from the most used Recipe Categories", "bs_recipe" ),
        "not_found" => __( "No Recipe Categories found", "bs_recipe" ),
        "no_terms" => __( "No Recipe Categories", "bs_recipe" ),
        "items_list_navigation" => __( "Recipe Categories list navigation", "bs_recipe" ),
        "items_list" => __( "Recipe Categories list", "bs_recipe" ),
        "back_to_items" => __( "Back to Recipe Categories", "bs_recipe" ),
    ];


    $args = [
        "label" => __( "Recipe Categories", "bs_recipe" ),
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
        "name" => __( "Recipe Tags", "bs_recipe" ),
        "singular_name" => __( "Recipe Tag", "bs_recipe" ),
        "menu_name" => __( "Recipe Tags", "bs_recipe" ),
        "all_items" => __( "All Recipe Tags", "bs_recipe" ),
        "edit_item" => __( "Edit Recipe Tag", "bs_recipe" ),
        "view_item" => __( "View Recipe Tag", "bs_recipe" ),
        "update_item" => __( "Update Recipe Tag name", "bs_recipe" ),
        "add_new_item" => __( "Add new Recipe Tag", "bs_recipe" ),
        "new_item_name" => __( "New Recipe Tag name", "bs_recipe" ),
        "parent_item" => __( "Parent Recipe Tag", "bs_recipe" ),
        "parent_item_colon" => __( "Parent Recipe Tag:", "bs_recipe" ),
        "search_items" => __( "Search Recipe Tags", "bs_recipe" ),
        "popular_items" => __( "Popular Recipe Tags", "bs_recipe" ),
        "separate_items_with_commas" => __( "Separate Recipe Tags with commas", "bs_recipe" ),
        "add_or_remove_items" => __( "Add or remove Recipe Tags", "bs_recipe" ),
        "choose_from_most_used" => __( "Choose from the most used Recipe Tags", "bs_recipe" ),
        "not_found" => __( "No Recipe Tags found", "bs_recipe" ),
        "no_terms" => __( "No Recipe Tags", "bs_recipe" ),
        "items_list_navigation" => __( "Recipe Tags list navigation", "bs_recipe" ),
        "items_list" => __( "Recipe Tags list", "bs_recipe" ),
        "back_to_items" => __( "Back to Recipe Tags", "bs_recipe" ),
    ];


    $args = [
        "label" => __( "Recipe Tags", "bs_recipe" ),
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

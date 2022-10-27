<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://robertochoaweb.com
 * @since      1.0.0
 *
 * @package    Idl_Contracts
 * @subpackage Idl_Contracts/includes
 */

class Idl_Contracts_CPT
{
    /**
     * Method idl_contracts_tours_cpt
     * Register Custom Post Type
     *
     * @return void
     */
    public function idl_contracts_tours_cpt()
    {
        $labels = array(
            'name'                  => _x('Tours', 'Post Type General Name', 'idl-contracts'),
            'singular_name'         => _x('Tour', 'Post Type Singular Name', 'idl-contracts'),
            'menu_name'             => __('Tours', 'idl-contracts'),
            'name_admin_bar'        => __('Tours', 'idl-contracts'),
            'archives'              => __('Tour Archives', 'idl-contracts'),
            'attributes'            => __('Tour Attributes', 'idl-contracts'),
            'parent_item_colon'     => __('Parent Tour:', 'idl-contracts'),
            'all_items'             => __('All Tours', 'idl-contracts'),
            'add_new_item'          => __('Add New Tour', 'idl-contracts'),
            'add_new'               => __('Add New', 'idl-contracts'),
            'new_item'              => __('New Tour', 'idl-contracts'),
            'edit_item'             => __('Edit Tour', 'idl-contracts'),
            'update_item'           => __('Update Tour', 'idl-contracts'),
            'view_item'             => __('View Tour', 'idl-contracts'),
            'view_items'            => __('View Tours', 'idl-contracts'),
            'search_items'          => __('Search Tour', 'idl-contracts'),
            'not_found'             => __('Not found', 'idl-contracts'),
            'not_found_in_trash'    => __('Not found in Trash', 'idl-contracts'),
            'featured_image'        => __('Tour Flyer', 'idl-contracts'),
            'set_featured_image'    => __('Set Tour Flyer', 'idl-contracts'),
            'remove_featured_image' => __('Remove Tour Flyer', 'idl-contracts'),
            'use_featured_image'    => __('Use as Tour Flyer', 'idl-contracts'),
            'insert_into_item'      => __('Insert into Tour', 'idl-contracts'),
            'uploaded_to_this_item' => __('Uploaded to this Tour', 'idl-contracts'),
            'items_list'            => __('Tours list', 'idl-contracts'),
            'items_list_navigation' => __('Tours list navigation', 'idl-contracts'),
            'filter_items_list'     => __('Filter Tours list', 'idl-contracts'),
        );
        $args = array(
            'label'                 => __('Tour', 'idl-contracts'),
            'description'           => __('Tours', 'idl-contracts'),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => false,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type('idltours', $args);
    }

    /**
     * Method idl_contracts_contracts_cpt
     * Register Custom Post Type
     *
     * @return void
     */
    public function idl_contracts_contracts_cpt()
    {
        $labels = array(
            'name'                  => _x('Contracts', 'Post Type General Name', 'idl-contracts'),
            'singular_name'         => _x('Contract', 'Post Type Singular Name', 'idl-contracts'),
            'menu_name'             => __('Contracts', 'idl-contracts'),
            'name_admin_bar'        => __('Contracts', 'idl-contracts'),
            'archives'              => __('Contract Archives', 'idl-contracts'),
            'attributes'            => __('Contract Attributes', 'idl-contracts'),
            'parent_item_colon'     => __('Parent Contract:', 'idl-contracts'),
            'all_items'             => __('All Contracts', 'idl-contracts'),
            'add_new_item'          => __('Add New Contract', 'idl-contracts'),
            'add_new'               => __('Add New', 'idl-contracts'),
            'new_item'              => __('New Contract', 'idl-contracts'),
            'edit_item'             => __('Edit Contract', 'idl-contracts'),
            'update_item'           => __('Update Contract', 'idl-contracts'),
            'view_item'             => __('View Contract', 'idl-contracts'),
            'view_items'            => __('View Contracts', 'idl-contracts'),
            'search_items'          => __('Search Contract', 'idl-contracts'),
            'not_found'             => __('Not found', 'idl-contracts'),
            'not_found_in_trash'    => __('Not found in Trash', 'idl-contracts'),
            'featured_image'        => __('Contract Logo', 'idl-contracts'),
            'set_featured_image'    => __('Set Contract Logo', 'idl-contracts'),
            'remove_featured_image' => __('Remove Contract Logo', 'idl-contracts'),
            'use_featured_image'    => __('Use as Contract Logo', 'idl-contracts'),
            'insert_into_item'      => __('Insert into Contract', 'idl-contracts'),
            'uploaded_to_this_item' => __('Uploaded to this Contract', 'idl-contracts'),
            'items_list'            => __('Contracts list', 'idl-contracts'),
            'items_list_navigation' => __('Contracts list navigation', 'idl-contracts'),
            'filter_items_list'     => __('Filter Contracts list', 'idl-contracts'),
        );
        $args = array(
            'label'                 => __('Contract', 'idl-contracts'),
            'description'           => __('Contracts', 'idl-contracts'),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => false,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type('idlcontracts', $args);
    }
}

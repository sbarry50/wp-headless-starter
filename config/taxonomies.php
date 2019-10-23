<?php
/**
 * Custom taxonomy configurations.
 *
 * @package    SB2Media\Starter
 * @since      1.0.0
 * @author     sbarry50
 * @link       https://github.com/sbarry50/wp-headless-starter
 * @license    MIT
 */

$text_domain = SB2Media\Starter\app()->text_domain;

/*********************************************************
 *
 * Format:
 *  [
 *      'id'          => $id,
 *      'label'       => __($label, $text_domain),
 *      'description' => __($description, $text_domain),
 *      'labels'      => [
 *          'name'               => _x($name, 'post type general name', $text_domain),
 *          'singular_name'      => _x($singlular_name, 'post type singular name', $text_domain),
 *          'menu_name'          => _x($menu_name, 'admin menu', $text_domain),
 *          'name_admin_bar'     => _x($name_admin_bar, 'add new on admin bar', $text_domain),
 *          'add_new'            => _x($add_new, 'business type', $text_domain),
 *          'add_new_item'       => __($add_new_item, $text_domain),
 *          'new_item'           => __($new_item, $text_domain),
 *          'edit_item'          => __($edit_item, $text_domain),
 *          'view_item'          => __($view_item, $text_domain),
 *          'all_items'          => __($all_items, $text_domain),
 *          'search_items'       => __($search_items, $text_domain),
 *          'parent_item_colon'  => __($parent_item_colon, $text_domain),
 *          'not_found'          => __($not_found, $text_domain),
 *          'not_found_in_trash' => __($not_found_in_trash, $text_domain)
 *      ],
 *      'public'              => $boolean,
 *      'supports'            => [ $supports ],
 *      'hierarchical'        => $boolean,
 *      'show_in_menu'        => $boolean,
 *      'show_in_rest'        => $boolean,
 *      'show_in_graphql'     => $boolean,              // If using WPGraphQL Plugin
 *      'graphql_single_name' => $graphql_single_name,  // If using WPGraphQL Plugin
 *      'graphql_plural_name' => $graphql_plural_name,  // If using WPGraphQL Plugin
 *  ],
 *
********************************************************/

return [
    // [
    //     'id'          => 'example',
    //     'label'       => __('Example Type', $text_domain),
    //     'description' => __('Example Type Description', $text_domain),
    //     'labels'      => [
    //         'name'               => _x('Example Types', 'post type general name', $text_domain),
    //         'singular_name'      => _x('Example Type', 'post type singular name', $text_domain),
    //         'menu_name'          => _x('Example Types', 'admin menu', $text_domain),
    //         'name_admin_bar'     => _x('Example Type', 'add new on admin bar', $text_domain),
    //         'add_new'            => _x('Add New', 'example type', $text_domain),
    //         'add_new_item'       => __('Add New Example Type', $text_domain),
    //         'new_item'           => __('New Example Type', $text_domain),
    //         'edit_item'          => __('Edit Example Type', $text_domain),
    //         'view_item'          => __('View Example Type', $text_domain),
    //         'all_items'          => __('All Example Types', $text_domain),
    //         'search_items'       => __('Search Example Types', $text_domain),
    //         'parent_item_colon'  => __('Parent Example Types:', $text_domain),
    //         'not_found'          => __('No example types found.', $text_domain),
    //         'not_found_in_trash' => __('No example types found in Trash.', $text_domain)
    //     ],
    //     'public'              => true,
    //     'supports'            => ['example'],
    //     'hierarchical'        => true,
    //     'show_in_menu'        => true,
    //     'show_in_rest'        => true,
    //     'show_in_graphql'     => true, // If using WPGraphQL Plugin
    //     'graphql_single_name' => 'exampleType', // If using WPGraphQL Plugin
    //     'graphql_plural_name' => 'exampleTypes', // If using WPGraphQL Plugin
    // ],
];

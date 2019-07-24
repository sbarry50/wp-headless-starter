<?php
/**
 * Submenus configuration.
 *
 * @package    SB2Media\Starter
 * @since      1.0.0
 * @author     sbarry50
 * @link       https://example.com
 * @license    MIT
 */

/*********************************************************
 * Custom admin subpages
 *
 * Format:
 *   [
 *      'parent_slug' => $parent_slug,
 *      'page_title'  => $page_title,
 *      'menu_title'  => $menu_title,
 *      'capability'  => $capability,
 *      'menu_slug'   => $menu_slug,
 *      'callback'    => $callback,
  *      'args'       => [
 *          'vue_id' => $vue_id     // Optionally, if you need to add a Vue Component to this menu
 *      ],
 *   ],
 *
 * The following 'parent_slug' values (case sensitive] may be used to add subpages to the default top-level WordPress settings pages:
 *
 *      Dashboard : 'parent_slug' => 'Dashboard',
 *      Posts     : 'parent_slug' => 'Posts',
 *      Media     : 'parent_slug' => 'Media',
 *      Pages     : 'parent_slug' => 'Pages',
 *      Comments  : 'parent_slug' => 'Comments',
 *      Appearance: 'parent_slug' => 'Appearance',
 *      Plugins   : 'parent_slug' => 'Plugins',
 *      Users     : 'parent_slug' => 'Users',
 *      Tools     : 'parent_slug' => 'Tools',
 *      Settings  : 'parent_slug' => 'Settings',
 *
********************************************************/

return [
    // [
    //     'parent_slug'  => 'example-menu',
    //     'page_title'   => 'Example Submenu',
    //     'menu_title'   => 'Example Submenu',
    //     'capability'   => 'manage_options',
    //     'menu_slug'    => 'example-submenu',
    //     'callback'     => 'menu-page.php',
    //     'args' => [],
    // ],
];

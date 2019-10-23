<?php
/**
 * Providers
 *
 * @package    SB2Media\Starter
 * @since      1.0.0
 * @author     sbarry
 * @link       https://github.com/sbarry50/wp-headless-starter
 * @license    MIT
 */

/*********************************************************
 * Top level custom admin pages
 *
 * Format:
 *    $collection => [
 *       $container_id => [
 *            'class'  => SB2Media\Headless\Media\Media::class,
 *            'app' => true,    // Flag for Application container dependency injection
 *            'dependencies' => [
 *                $container_id
 *            ],
 *            'config' => [
 *                $config_filename
 *            ],
 *            'params' => [
 *               $param
 *            ]
 *        ],
 *    ],
********************************************************/

return [

    /*
    |--------------------------------------------------------------------------
    | Base classes
    |--------------------------------------------------------------------------
    |
    | The base classes to initialize to setup and run the plugin.
    |
    */
    'base' => [
        'constants' => [
            'class' => SB2Media\Headless\Setup\Constants::class,
            'app' => true
        ],
        'compatibility' => [
            'class' => SB2Media\Headless\Setup\Compatibility::class,
            'app' => true,
            'params' => [
                'plugin_dependencies' => [
                    [
                        'name' => 'WP GraphQL',
                        'path' => 'wp-graphql/wp-graphql.php',
                        'src' => 'https://docs.wpgraphql.com/getting-started/install-and-activate',
                    ],
                ]
            ]
        ],
        'I18n' => [
            'class' => SB2Media\Headless\Setup\I18n::class,
            'app' => true
        ],
        'views' => [
            'class' => SB2Media\Headless\View\View::class,
            'app' => true
        ],
        'file' => [
            'class' => SB2Media\Headless\File\FileSystem::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | WordPress API
    |--------------------------------------------------------------------------
    |
    | The classes that interact with the various API's to customize and
    | extend the base functionality of WordPress.
    |
    */

    'wordpress' => [
        'media' => [
            'class'  => SB2Media\Headless\Media\Media::class,
            'app' => true,
            'config' => [
                'image-sizes'
            ]
        ],
        'admin-enqueue' => [
            'class'  => SB2Media\Headless\Enqueue\EnqueueManager::class,
            'app' => true,
            'config' => [
                'admin-enqueue'
            ]
        ],
        'enqueue' => [
            'class'  => SB2Media\Headless\Enqueue\EnqueueManager::class,
            'app' => true,
            'config' => [
                'enqueue'
            ]
        ],
        'menus' => [
            'class'  => SB2Media\Headless\WordPress\Menus::class,
            'app' => true,
            'config' => [
                'menus'
            ]
        ],
        'submenus' => [
            'class'  => SB2Media\Headless\WordPress\SubMenus::class,
            'app' => true,
            'config' => [
                'submenus'
            ]
        ],
        'sections' => [
            'class'  => SB2Media\Headless\WordPress\Sections::class,
            'app' => true,
            'config' => [
                'sections'
            ]
        ],
        'custom-post-types' => [
            'class'  => SB2Media\Headless\WordPress\CustomPostTypes::class,
            'app' => true,
            'config' => [
                'post-types'
            ]
        ],
        'meta-boxes' => [
            'class'  => SB2Media\Headless\WordPress\MetaBoxes::class,
            'app' => true,
            'config' => [
                'meta-boxes'
            ]
        ],
        'meta-fields' => [
            'class'  => SB2Media\Headless\WordPress\MetaFields::class,
            'app' => true,
            'config' => [
                'meta-fields'
            ]
        ],
        'settings' => [
            'class'  => SB2Media\Headless\WordPress\Settings::class,
            'app' => true,
            'config' => [
                'settings'
            ]
        ],
        'taxonomies' => [
            'class'  => SB2Media\Headless\WordPress\Taxonomies::class,
            'app' => true,
            'config' => [
                'taxonomies'
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | GraphQL
    |--------------------------------------------------------------------------
    |
    | These are the base GraphQL classes that interact with WPGraphQL to make
    | any custom pages, settings, post types and meta fields accessible via GraphQL.
    |
    */

    'graphql' => [
        'graphql-types' => [
            'class'  => SB2Media\Headless\GraphQL\Types::class,
            'app' => true,
            'config' => [
                'graphql-types',
            ],
        ],
        'graphql-settings' => [
            'class'  => SB2Media\Headless\GraphQL\Settings::class,
            'app' => true,
            'config' => [
                'settings',
            ],
        ],
        'graphql-meta-fields' => [
            'class'  => SB2Media\Headless\GraphQL\MetaFields::class,
            'app' => true,
            'config' => [
                'meta-fields',
            ],
        ],
        'media-details-graphql' => [
            'class' => SB2Media\Headless\Media\MediaDetailsGraphQL::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom plugin classes
    |--------------------------------------------------------------------------
    |
    | This is where you may register any custom classes needed when writing a
    | a plugin to extend the Headless library and WordPress.
    |
    */

    'extension' => [
        // 'example-graphql' => [
        //     'class' => SB2Media\Starter\Example\ExampleGraphQL::class,
        // ],
    ],
];

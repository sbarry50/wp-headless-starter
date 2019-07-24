<?php
/**
 * Admin CSS and Javascript files to enqueue with WordPress.
 *
 * @package    SB2Media\Starter
 * @since      1.0.0
 * @author     sbarry
 * @link       http://example.com
 * @license    MIT
 */


return [

    /*********************************************************
    * Front-end stylesheets to enqueue
    *
    * Format:
    * 'stylesheets' => [
    *     'id'           => $id,
    *     'src'          => $src,
    *     'dependencies' => $deps
    *     'version'      => $ver
    *     'media'        => $media
    *     'only_load'    => [         // Optionally, if you only want to enqueue on specific pages and/or post_types
    *         'page_slug' => $page_slug,
    *         'post_type' => $post_type
    *     ]
    * ],
    ********************************************************/

    'stylesheets' => [
        // [
        //     'id'           => 'stylesheet-name',
        //     'src'          => SB2Media\Starter\url('dist/css/stylesheet-name.css'),
        //     'dependencies' => [],
        //     'version'      => false,
        //     'media'        => 'all',
        // ],
    ],

    /*********************************************************
    * Front-end scripts to enqueue
    *
    * Format:
    * 'scripts' => [
    *     'id'           => $id,
    *     'src'          => $src,
    *     'dependencies' => $deps
    *     'version'      => $ver
    *     'in_footer'    => $in_footer
    *     'media'        => $media    // Optionally, if this a media related script
    *     'localization' => [         // Optionally, if you need to localize PHP data for JS
    *         'js_object_name' => $js_object,
    *         'values'         => $values, // This will most likely be a callback function to retrieve the values
    *     ],
    *     'only_load'    => [         // Optionally, if you only want to enqueue on specific pages and/or post_types
    *         'page_slug' => $page_slug,
    *         'post_type' => $post_type
    *     ]
    * ],
    ********************************************************/

    'scripts' => [
        // [
        //     'id'           => 'script-name',
        //     'src'          => SB2Media\Starter\url('dist/js/script-name.js'),
        //     'dependencies' => [],
        //     'version'      => false,
        //     'in_footer'    => true,
        //     'media'        => true,
        // ],
    ]

];

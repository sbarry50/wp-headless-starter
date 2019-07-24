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
    * Back-end stylesheets to enqueue
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
        //     'id'       => 'settings-admin',
        //     'src'          => SB2Media\Starter\url('dist/css/settings-admin.css'),
        //     'dependencies' => [],
        //     'version'      => false,
        //     'media'       => 'all',
        // ],
    ],

    /*********************************************************
    * Back-end scripts to enqueue
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
        //     'id'           => 'main',
        //     'src'          => SB2Media\Starter\url('dist/js/main.js'),
        //     'dependencies' => [],
        //     'version'      => '1.0.0',
        //     'in_footer'    => true,
        // ],
        // [
        //     'id'           => 'media-uploader',
        //     'src'          => SB2Media\Starter\url('dist/js/media-uploader.js'),
        //     'dependencies' => [],
        //     'version'      => false,
        //     'in_footer'    => true,
        //     'media'        => true,
        // ],
        // [
        //     'id'           => 'jquery-mask',
        //     'src'          => SB2Media\Starter\url('resources/js/jquery.mask.js'),
        //     'dependencies' => [],
        //     'version'      => false,
        //     'in_footer'    => true,
        // ],
        // [
        //     'id'           => 'input-mask',
        //     'src'          => SB2Media\Starter\url('dist/js/input-mask.js'),
        //     'dependencies' => [],
        //     'version'      => false,
        //     'in_footer'    => true,
        // ],
    ]
];

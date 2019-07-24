<?php
/**
 * Settings configuration.
 *
 * @package    SB2Media\Starter
 * @since      1.0.0
 * @author     sbarry50
 * @link       https://github.com/sbarry50/simple-wordpress-settings-pages
 * @license    MIT
 */

/*********************************************************
 * Admin custom fields
 *
 * Format:
 *   [
 *      'id'                    => $id,
 *      'title'                 => $title,
 *      'callback'              => $callback,
 *      'page'                  => $page,
 *      'section'               => $section,
 *      'args'                  => [
 *          'type'              => $type, // 'string' (default), 'boolean', 'integer', 'number'
 *          'group'             => $option_group,
 *          'description'       => $description,
 *          'sanitize_callback' => $sanitize_callback,
 *          'show_in_rest'      => $boolean,
 *          'show_in_graphql'   => $boolean,
 *          'other_args'        => $other_args
 *      ],
 *      'graphql'      => [     // Optionally, if a meta field requires a custom GraphQL type
 *          'type'        => $type,
 *          'description' => $description,
 *          'resolver'    => $resolver,
 *      ]
 *   ],
********************************************************/

return [
    // [
    //     'id'       => 'example_text_input',
    //     'title'    => 'Example Text',
    //     'callback' => 'text.php',
    //     'page'     => 'example-submenu',
    //     'section'  => 'example-section',
    //     'args'     => [
    //         'placeholder' => 'Text input placeholder',
    //         'required'    => true,
    //         'sanitize_callback' => 'sanitize_text_field',
    //         'show_in_rest' => true,
    //     ],
    // ],
];

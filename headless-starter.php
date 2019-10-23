<?php

/*
* Plugin Name: WP-Headless Starter
* Description: Plugin boilerplate for creating GraphQL supported WordPress plugins with the WP-Headless library and WPGraphQL.
* Version: 1.0.0
* Author: sbarry50
* Author URI: https://github.com/sbarry50/wp-headless-starter
* Text Domain: starter
*/

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    die;
}

$autoloader = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloader)) {
    include_once $autoloader;
}

add_action('plugins_loaded', function () {
    SB2Media\Starter\launch(__FILE__);
});

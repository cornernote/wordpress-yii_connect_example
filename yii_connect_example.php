<?php
/*
Plugin Name: Yii Connect Example
Plugin URI: https://github.com/cornernote/wordpress-yii_connect_example/
Description: Shows an example of integration the awesome power of Yii directly from your Wordpress site.
Version: 0.1.0
Author: Zain Ul abidin and Brett O'Donnell
Author URI: http://mrphp.com.au
License: CC-by-nc-nd
*/

/*
Copyright 2013, Zain Ul abidin <zainengineer@gmail.com>, Brett O'Donnell <cornernote@gmail.com>

This work is licensed under the Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License.
To view a copy of this license, visit http://creativecommons.org/licenses/by-nc-nd/3.0/.
*/

// ensure we cannot load directly
if (!function_exists('add_action')) {
    echo 'Yii Connect Example cannot be called directly.';
    exit;
}

// ensure YC is loaded
if (!defined('YC_VERSION') || !YiiConnect::$loaded) {
    return;
}

// define constants
define('YC_EXAMPLE_VERSION', '0.1.0');
define('YC_EXAMPLE_URL', plugin_dir_url(__FILE__));
define('YC_EXAMPLE_PATH', plugin_dir_path(__FILE__));
return;
function yii_connect_example_init()
{

    if (!class_exists('YiiConnect') || !empty(YiiConnect::$loaded)){
        define('YC_EXAMPLE_LOADED', false);
        return  new WP_Error('yii_connect', __("Yii Connect example can't work without using Yii Connect"));
    }
    define('YC_EXAMPLE_LOADED', true);
    // load YCExample
    require_once(YC_EXAMPLE_PATH . 'components/YiiConnectExample.php');

    // set the view path
    YiiConnectExample::$basePath = str_replace('\\', '/', YC_EXAMPLE_PATH);
    // load the init
    YiiConnectExample::init();
}

add_action('init', 'yii_connect_example_init');
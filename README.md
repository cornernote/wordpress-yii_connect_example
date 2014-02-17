# Yii Connect Example
Contributors: zainengineer, cornernote
Tags: yii
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 0.1
License: CC-by-nc-nd
License URI: http://creativecommons.org/licenses/by-nc-nd/3.0/

An example demonstrating integration of Yii directly from your Wordpress site.

## Description

An example demonstrating integration of Yii directly from your Wordpress site.

## Requires

Yii Connect for Wordpress:
https://github.com/cornernote/wordpress-yii_connect


## To Extend
In YiiConnectExample
public static function adminMenu()
add this line
```
add_submenu_page(null, 'Yii Connect Example - Test', 'Test', 'manage_options', 'yii-connect-example-test', 'YiiConnectExample::actionTest');
```

Please note that this is called because we have a line
```
add_action('admin_menu', 'YiiConnect::adminMenu');
```

This causes actions to be added for wp-includes/plugins/do_action tags are passed like admin_footer-admin_page_yii-connect-example-test which maps to our action

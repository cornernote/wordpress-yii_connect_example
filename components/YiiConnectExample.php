<?php

/**
 * Class YiiConnectExample
 */
class YiiConnectExample extends YiiConnectController
{

    /**
     *
     */
    public static function init()
    {
        parent::init();

        // add admin menu
        if (is_admin()) {
            add_action('admin_menu', 'YiiConnectExample::adminMenu');
            add_action('admin_enqueue_scripts', 'YiiConnectExample::registerScripts');
        }
    }

    /**
     *
     */
    public static function adminMenu()
    {
        add_menu_page('Yii Connect Example', 'Yii Connect Example', 'manage_options', 'yii-connect-example', 'YiiConnectExample::actionIndex', YII_CONNECT_EXAMPLE_URL . 'img/icon-menu.png', '11');
    }

    /**
     *
     */
    public static function registerScripts()
    {
        // css
        wp_register_style('yii_connect_example.css', YII_CONNECT_EXAMPLE_URL . 'yii_connect_example.css', array(), YII_CONNECT_EXAMPLE_VERSION . '.0');
        wp_enqueue_style('yii_connect_example.css');
        // js
        wp_register_script('yii_connect_example.js', YII_CONNECT_EXAMPLE_URL . 'yii_connect_example.js', array('jquery'), YII_CONNECT_EXAMPLE_VERSION . '.0');
        wp_enqueue_script('yii_connect_example.js');
    }

    /**
     *
     */
    public static function actionIndex()
    {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }

        $ticket = new Ticket('search');
        if (!empty($_GET['Ticket']))
            $ticket->attributes = $_GET['Ticket'];

        self::render('index', array(
            'ticket' => $ticket,
        ));
    }


}
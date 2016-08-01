<?php
/**
 * Created by PhpStorm.
 * User: denis_000
 * Date: 03.11.2015
 * Time: 11:59
 */


include_once (ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

class Installer_Upgrader_Skins extends WP_Upgrader_Skin{

    function __construct($args = array()){
        $defaults = array( 'url' => '', 'nonce' => '', 'title' => '', 'context' => false );
        $this->options = wp_parse_args($args, $defaults);
    }

    function header(){

    }

    function footer(){

    }

    function error($error){
        $this->installer_error = $error;
    }

    function add_strings(){

    }

    function feedback($string){

    }

    function before(){

    }

    function after(){

    }

}


function Photography_Management_Base_Premium_Ajax_Installer()
{


    include_once (ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    global $cc_phmm_config;
    //var_dump($cc_phmm_config);
    //


    //require_once( ABSPATH . 'wp-load.php' );

    if (!current_user_can('install_plugins'))
        wp_die(__('You do not have sufficient permissions to install plugins on this site.'));

    include_once (ABSPATH . 'wp-admin/includes/plugin-install.php'); //for plugins_api..

//    $plugin = 'photography-management-premium/photography-management-premium.php';
    $plugin = $cc_phmm_config['premium_plugin_key'];

    $p_id = get_option('cc_photo_manage_id');

    $options = array(
        'timeout' => ((defined('DOING_CRON') && DOING_CRON) ? 30 : 3),
        'user-agent' => 'WordPress/' . get_bloginfo('version') . '; ' . get_bloginfo('url'),
        'body' => array(
            'version' => $cc_phmm_config['version'],
            'plugin_id' => $p_id
        )
    );

    $premium_install_url = $cc_phmm_config['wpps_url'] . '/premium/' . $cc_phmm_config['plugin_slug_abbr'];
    $premium_install_url = str_replace('https://', 'http://', $premium_install_url); //some hosts are behind proxy -> https impossible
    $raw_response = wp_remote_post($premium_install_url, $options);

    if (is_wp_error($raw_response))
    { //error, maybe server is down
        header('Content-Type: application/json');
        die(json_encode(array('status' => 'error', 'data' => '')));
    }

    $status_code = wp_remote_retrieve_response_code($raw_response);



    if (200 != $status_code) { //server seems to be down, apache responded
        header('Content-Type: application/json');
        die(json_encode(array('status' => 'unknown', 'data' => '')));
    }

    try {
        $response = json_decode(wp_remote_retrieve_body($raw_response));
        if (empty($response)){
            header('Content-Type: application/json');
            die(json_encode(array('status' => 'bad_response', 'data' => '')));
        }
    } catch (Exception $e) {
        print_r($e);
        header('Content-Type: application/json');
        die(json_encode(array('status' => 'bad_response', 'data' => '')));
    }



    $upgrader = new Plugin_Upgrader(new Installer_Upgrader_Skins());
    $suc = $upgrader->install($response->package);




    header('Content-Type: application/json');
    $status = $suc === true ? 'ok' : 'error_during_installation';
    die(json_encode(array('status' => $status, 'data' => $suc)));

    //include(ABSPATH . 'wp-admin/admin-footer.php');

}

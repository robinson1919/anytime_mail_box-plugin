<?php
if(!defined('ABSPATH')) exit('No direct script access allowed');
/*
* Adds styles and javascript to the frontend
*/

function anytime_frontend_script(){

    wp_enqueue_script('anytimejs', plugins_url('../assets/anytime.js', __FILE__ ), array('jquery'), 1.0, true );

    wp_localize_script('anytimejs', 'admin_url', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'anytime_frontend_script');


/*
* Adds styles and javascript to the frontend of the admin when creating a quiz
*/

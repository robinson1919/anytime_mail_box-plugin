<?php
/* --------------------------------
    Plugin Name: Any Time Mail Box Helper
    Plugin URI: https://github.com/robinson1919/quizbook-free
    Description: Plugin for editing quizes or questionaries
    Version: 1.0.
    Author: Robinson Batista Madrigal
    Author URI: https://github.com/robinson1919
    License: GPL2
    License URI: https://gnu.org/licenses/gpl-2.0.html
    Text Domain: rewrite
*/

if(!defined('ABSPATH')) exit('No direct script access allowed');


/*
* Adds a the scripts and css
*/
require_once plugin_dir_path(__FILE__) . 'includes/scripts.php';


/*
* Receives the value from the front end and send the request to any time mailbox
*/
require_once plugin_dir_path(__FILE__) . 'includes/result.php';





?>

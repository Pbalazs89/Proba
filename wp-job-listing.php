<?php

/**   
    * Plugin name: Test Plugin
    * Plugin URI: http://www.decorolux.com
    * Description: A plugin for testing plugins
    * Author: Balazs Paszli
    * Author URI: http://www.decorolux.com
    * Version: 1.0
    * License: GPLv2
    */

//Exit if accessed directly
        if (! defined('ABSPATH' ) ) {
            exit;
        }
     
require_once ( plugin_dir_path(__FILE__) . 'wp-job-cpt.php');
require_once ( plugin_dir_path(__FILE__) . 'wp-job-render-admin.php');
require_once ( plugin_dir_path(__FILE__) . 'wp-job-fields.php');

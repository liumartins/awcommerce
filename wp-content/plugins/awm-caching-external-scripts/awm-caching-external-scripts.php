<?php
/*
Plugin Name: Awm Caching External Scripts
Plugin URI: https://awcommerce.com.br/awm-caching-scripts
Description: A plugin to make improvements performance in your online projects
Version: 1.0
Author: AwCommerce - Lindomar Martins
Author URI: https://www.awcommerce.com.br
License: GPLv2
*/


if ( ! function_exists( 'add_filter' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}

if ( ! defined( 'AWM_CES_FILE' ) ) {
    define( 'AWM_CES_FILE', __FILE__ );
}

// Load the Awm Caching External plugin.
require_once dirname( AWM_CES_FILE) . '/externaljs.php';

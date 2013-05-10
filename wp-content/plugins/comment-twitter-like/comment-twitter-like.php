<?php
/*
Plugin Name: comment twitter like
Plugin URI: 
Description: 
Version: 0.9
Author: Willy Bahuaud
Author URI: http://wabeo.fr
License: GPLv2 or later
*/
DEFINE( 'CTL_PLUGIN_URL', trailingslashit( WP_PLUGIN_URL ) . basename( dirname( __FILE__ ) ) );
DEFINE( 'CTL_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );CTL
/**
LOAD JS ON FRONT OFFICE
CATCH COMMENT AUTHORS NAMES
*/
function ctl_enqueue_comments_scripts() {
    wp_register_script( 'ctl-comment-script', CTL_PLUGIN_URL . '/js/ctl-comment-script.js', array( 'jquery' ), '0.9', true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'ctl-comment-script' );

    $authorsnames = array();
    wp_localize_script( 'ctl-comment-script', 'comment-authors-names', $authorsnames );
}
add_action( 'wp_enqueue_scripts', 'ctl_enqueue_comments_scripts' );

/**
CATCH NAME IN COMMENTS & ADD ANCHOR LINK (OR OPACITY)
*/
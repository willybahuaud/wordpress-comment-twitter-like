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
DEFINE( 'CTL_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
/**
LOAD JS ON FRONT OFFICE
*/
function ctl_enqueue_comments_scripts() {
    wp_register_script( 'ctl-comment-script', CTL_PLUGIN_URL . '/js/ctl-comment-script.js', array( 'jquery' ), '0.9', true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'ctl-comment-script' );

    //Authors names will be caugth in javascript
}
add_action( 'wp_enqueue_scripts', 'ctl_enqueue_comments_scripts' ); //wp_enqueue_scripts

/**
CATCH NAME IN COMMENTS & ADD ANCHOR LINK (OR OPACITY)
*/
function ctl_modify_comment_text( $content, $com ) {
    return '<span class="ctl-author" data-name="' . sanitize_title( $com->comment_author ) . '" data-real-name="' . esc_attr( $com->comment_author ) . '"></span>' . $content;
}
add_filter('comment_text', 'ctl_modify_comment_text', 10, 2);
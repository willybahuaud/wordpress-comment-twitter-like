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
global $ctlAuthors;

/**
LOAD JS ON FRONT OFFICE
*/
function ctl_enqueue_comments_scripts() {
    wp_register_style( 'ctl-styles', CTL_PLUGIN_URL . '/ctl-styles.css', false, '0.9', 'all' );
    wp_enqueue_style( 'ctl-styles' );

    wp_register_script( 'caretposition', CTL_PLUGIN_URL . '/js/jquery.caretposition.js', array( 'jquery' ), '0.9', true );
    wp_register_script( 'sew', CTL_PLUGIN_URL . '/js/jquery.sew.min.js', array( 'jquery','caretposition' ), '0.9', true );
    wp_register_script( 'ctl-comment-script', CTL_PLUGIN_URL . '/js/ctl-comment-script.js', array( 'jquery','caretposition','sew' ), '0.9', true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'caretposition' );
    wp_enqueue_script( 'sew' );
    wp_enqueue_script( 'ctl-comment-script' );
}
add_action( 'wp_enqueue_scripts', 'ctl_enqueue_comments_scripts' ); //wp_enqueue_scripts

/**
CATCH NAME IN COMMENTS & ADD ANCHOR LINK (OR OPACITY)
*/
function ctl_modify_comment_text( $content, $com ) {
    global $ctlAuthors;
    $ctlAuthors[] = array( 'val' => sanitize_title( $com->comment_author ), 'meta' => $com->comment_author );

    //Rearrange content
    $modifiedcontent = preg_replace('/\@([a-zA-Z0-9\-]*)$/', '<button data-cible="$1">$1</button>', $content);
    return '<span class="ctl-author" data-name="' . sanitize_title( $com->comment_author ) . '"></span>' . $content;
}
add_filter('comment_text', 'ctl_modify_comment_text', 10, 2);

/**
RETRIEVE AUTHORS NAMES ON THE OTHER SIDE (SAVING ONE)
*/
function printnames(){
    global $ctlAuthors;
    wp_localize_script( 'ctl-comment-script', 'ctlAuthors', $ctlAuthors);

    $data    = serialize( $ctlAuthors ); 
    $encoded = htmlentities( $data );
    echo '<input type="hidden" name="ctlAuthors" value="' . $encoded . '">';
}
add_action('comment_form','printnames');
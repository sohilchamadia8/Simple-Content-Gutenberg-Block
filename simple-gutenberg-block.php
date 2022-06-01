<?php

/**
 * Plugin Name: Simple Gutenberg Block
 * Description: This is a static content show using gutenberg block
 * Version: 1.0.0
 * Author: Sohil Chamadia
 * Author URI: https://sohilchamadia8.wordpress.com/
 */

define('SG_BLOCK_URL_PATH', plugins_url('sc-gutenberg-block'));

add_action('init', 'gutenberg_custom_block');

/**
 * Initialize gutenberg block
 */
function gutenberg_custom_block() {

    wp_register_style(
        'sg-block-editor-styles',
        SG_BLOCK_URL_PATH . '/editor.css',
        array('wp-edit-blocks'),
    );


    wp_register_style(
        'sg-block-styles',
        SG_BLOCK_URL_PATH . '/style.css',
        array('wp-edit-blocks'),
    );


    wp_register_script(
        'sg-block-editor-js',
        SG_BLOCK_URL_PATH . '/sg-block.js',
        array('wp-blocks')
    );

    register_block_type(
        'gutenberg-block/simple-block',
        array(
            'style' => 'sg-block-styles',
            'editor_style' => 'sg-block-editor-styles',
            'editor_script' => 'sg-block-editor-js',
        )
    );
}

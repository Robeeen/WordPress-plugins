<?php
/**
 * Plugin Name: My Blocks
 * Author: Shams Khan
 * Author URI: https://github.com/robeeen
 * Version: 1.0.0
 * Description: WordPress Gutenberg Block
 * Text-Domain: wp-gutten-block
 */

if( ! defined( 'ABSPATH' ) ) : exit(); endif; // No direct access allowed.

function loadMyBlocksFile(){
    wp_enqueue_script(
        'my-unique-handle',
        plugin_dir_url(__FILE__) . 'my-block.js',
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
    );
}
add_action('enqueue_block_editor_assets', 'loadMyBlocksFile');
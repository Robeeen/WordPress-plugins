<?php 
/*
	Plugin Name: First Test Plugin
	Description: Test plugin
	Version: 1.0
	Author: Shams
	Author URL: https://shamskhan.xyz
*/

	// add_filter('the_content', 'addToEndOfPost');

	// //This plugin will add h3 headline just below content of the page is_page() only.

	// function addToEndOfPost($content){
	// 	if( is_page() && is_main_query()){
	// 		return $content . '<h3>This is my Name - Shams</h3>';
	// 	}
		
	// 	return $content;
	// }

class wordCount {
	function __construct(){
		add_action('admin_menu', array($this, 'adminPage'));
		add_action('admin_init', array($this, 'settings'));
	}

	function settings () {
		add_settings_section('first_section', null, null, 'word-count-settings');
		add_settings_field('wcp_location', 'Displa Location', array($this, 'locationHTML'), 'word-count-settings', 'first_section');
		register_setting('wordCountPlugin', 'wcp_location', array('sanitize_callback'=>'sanitize_text_field', 'default' => '0'));
		
		function adminPage(){
		add_options_page('Word Count Settings', 'Word Count', 'manage_options', 'word-count-settings', array($this, 'ourHTML'));
	}

	function ourHTML(){ ?>
		<div class="wrap">
			<h1>Word Count Settings:</h1>
		</div>
	<?php
	}
}

$wordCount = new wordCount();

	

	
<?php 
/*
	Plugin Name: First Test Plugin
	Description: Test plugin
	Version: 1.0
	Author: Shams
	Author URL: https://shamskhan.xyz
*/

	add_filter('the_content', 'addToEndOfPost');

	//This plugin will add h3 headline just below content of the page is_page() only.

	function addToEndOfPost($content){
		if( is_page() && is_main_query()){
			return $content . '<h3>This is my Name - Shams</h3>';
		}
		
		return $content;
	}


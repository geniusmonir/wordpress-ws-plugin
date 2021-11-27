<?php 

/*
 Plugin Name: Our Test Plugin
 Description: A plugin for testing purpose
 Version: 1.0
 Author: Monir
 Author URI: https://webanion.com
 */

add_filter('the_content', 'addToEndOfPost');

function addToEndOfPost($content){
    if(is_single() && is_main_query()){
        return $content . '<p>My name is Monir</p>';
    }
    return $content;
} 
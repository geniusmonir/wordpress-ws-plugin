<?php 

/*
 Plugin Name: Our Test Plugin
 Description: A plugin for testing purpose
 Version: 1.0
 Author: Monir
 Author URI: https://webanion.com
 */


class WordCountAndTimePlugin{
    function __construct(){
        add_action('admin_menu', array($this, 'adminPage'));
    }

    function adminPage(){
        add_options_page('Word Count Setting','Word Count','manage_options','wa-word-count-setting-page', array($this,'ourHTML'));
    }

    function ourHTML(){ ?>

    <p class="x">Hello World 2</p>

    <?php } 
}

$wordCountAndTimePlugin = new WordCountAndTimePlugin();



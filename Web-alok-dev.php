<?php
/**
* Plugin Name:Web Alok Dev
* Plugin uri:https://beefreshoney.wordpress.com
* Description: This is the Web Alok development Solution.
* Author:Alok Singh
* Author uri:https://beefreshoney.wordpress.com
* Version:1.0.4
* Tags: wordpress, Website, Deveolpment
* License:GPL v2
*/
//defined('ABSPATH')|| die("You can't Access Directly");
//echo "Hello";

register_activation_hook(__FILE__,'web_alok_dev_activate');
register_deactivation_hook(__FILE__,'web_alok_dev_dactivate');

function web_alok_dev_activate(){
	global $wpdb;
  global $table_prefix;
  $table=$table_prefix.'web_alok_dev';
	$sql="CREATE TABLE $table (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `design` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;ALTER TABLE $table
  ADD PRIMARY KEY (`id`);ALTER TABLE $table
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
  //$wpdb->query($sql);

}
function web_alok_dev_dactivate(){
	global $wpdb;
  global $table_prefix;
  $table=$table_prefixa.'web_alok_dev';
	$sql="DROP TABLE $table";
  //$wpdb->query($sql);

}
add_action('admin_menu', 'web_alok_dev_menu');

function web_alok_dev_menu(){
	add_menu_page('Web Alok Dev','Web Alok Dev','10','__FILE__','web_alok_dev_list');
}
 add_shortcode('web_alok_dev_list_shortcode','web_alok_dev_list');
function web_alok_dev_list(){
	include('emp_data.php');
}
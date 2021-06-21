<?php
/**
 * @package WpTechPageRedirection
 **
Plugin Name: WpTech Page Redirection & Hit Counter 
Plugin URI: https://wptech.online/
Description: This plugin is use for page redirection and page hit counter.
Version: 1.0
Author: Sumeet Bhardwaj
Author URI: https://wptech.online/sumeetbhardwaj
License: GPLv2 or later
Text Domain: prhc
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 1
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., VPO Kakroli Sardara Bhiwani Haryana 127308

Copyright 2021-2022 Sumeet Bhardwaj, Inc.
*/

defined('ABSPATH') or die("Hey, You con't access  this file, you silly human!");


// define constant plugin url & path 
define('WPTECH_PAGE_REDIRECTION_HIT_COUNTER_PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('WPTECH_PAGE_REDIRECTION_HIT_COUNTER_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
$plugin = plugin_basename( __FILE__ );
class WptechPageRedirectonHitCounter
{	
	function wptech_plugin_add_settings_link( $links ) {
		$settings_link = '<a href="admin.php?page=wptech-page-redirection-hit-counter-setting-page">' . __( 'Settings' ) . '</a>';
		array_push( $links, $settings_link );
		return $links;
	}
	public function wptech_enqueue_admin_script()
	{
		wp_enqueue_style( 'wptech_custom_tabs_style', WPTECH_PAGE_REDIRECTION_HIT_COUNTER_PLUGIN_URL . 'src/css/wptech_custom_tabs_style.css' );
		wp_enqueue_script( 'wptech_custom_tabs_script', WPTECH_PAGE_REDIRECTION_HIT_COUNTER_PLUGIN_URL . 'src/js/wptech_custom_tabs_script.js' );
		wp_enqueue_script( 'wptech_custom_tabs_script', WPTECH_PAGE_REDIRECTION_HIT_COUNTER_PLUGIN_URL . 'src/js/wptech_custom_admin_tabs_script.js' );
	
	}
	public function wptech_admin_settings()
	{ 
		require_once WPTECH_PAGE_REDIRECTION_HIT_COUNTER_PLUGIN_PATH.'/class/WptechAdminSetting.php';
	}
	
	 public function wptech_current_page_redirection(){
		global $post;
		$meta = get_post_meta( get_the_id() );
		if(!empty($meta['wptech_page_redirection_url'][0])){
			 wp_redirect( esc_html( $meta['wptech_page_redirection_url'][0] ) );
			exit();
		}
	} 
}
if( class_exists( 'WptechPageRedirectonHitCounter' ))
{
	$wptechpageredirectonhitcounter = new WptechPageRedirectonHitCounter();
	
	// admin settings page action hook
	add_action( 'admin_enqueue_scripts', array( $wptechpageredirectonhitcounter, 'wptech_enqueue_admin_script' ));
	add_action( 'admin_menu', array( $wptechpageredirectonhitcounter, 'wptech_admin_settings' ));
	add_action('add_meta_boxes', array( $wptechpageredirectonhitcounter, 'wptech_admin_settings' ) );
	add_action( 'template_redirect', array( $wptechpageredirectonhitcounter, 'wptech_current_page_redirection' ));

}

add_filter( "plugin_action_links_$plugin", array( $wptechpageredirectonhitcounter,'wptech_plugin_add_settings_link') );

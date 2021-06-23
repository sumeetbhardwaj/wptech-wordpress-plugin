<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

function wptech_plugin_uninstall()
{
		global $wpdb;
		$table_name = $wpdb->prefix .'wptech_visitor_counter';
		$sql = 'DROP TABLE IF EXISTS '.$table_name;
		$wpdb->query($sql);
		$wpdb->get_results('DELETE FROM `wp_postmeta` WHERE meta_key = "wptech_page_redirection_url"' );
		$this->settings = ['wptech_redirection_option_on_off', 'wptech_redirection_option_show_all', 'wptech_hit_counter_option_on_off' ];
		foreach ( $this->settings as $setting ) {
			$wpdb->get_results('DELETE FROM `wp_options` WHERE option_name = "'.$setting.'"' );
		}
		
		
}
wptech_plugin_uninstall();

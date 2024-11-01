<?php
/*
Plugin Name: YouTube Direct
Description: Allows admins using YouTube Direct (YTD) on Google's App Engine to be able to upload via the WordPress Admin area.
Version: 0.1
Author: Plug In Studios
License: GPL3
*/

// Register activation hook
register_activation_hook( __FILE__, 'pisytd_activate' );
function pisytd_activate() {
	add_option('pisytd_url', null, '', 'yes');
	add_option('pisytd_admin_name', null, '', 'yes');
	add_option('pisytd_admin_user', null, '', 'yes');
	add_option('pisytd_a1_name', null, '', 'yes');
	add_option('pisytd_a1_id', null, '', 'yes');
	add_option('pisytd_a2_name', null, '', 'yes');
	add_option('pisytd_a2_id', null, '', 'yes');
	add_option('pisytd_a3_name', null, '', 'yes');
	add_option('pisytd_a3_id', null, '', 'yes');
	add_option('pisytd_a4_name', null, '', 'yes');
	add_option('pisytd_a4_id', null, '', 'yes');
	add_option('pisytd_a5_name', null, '', 'yes');
	add_option('pisytd_a5_id', null, '', 'yes');
	add_option('pisytd_a6_name', null, '', 'yes');
	add_option('pisytd_a6_id', null, '', 'yes');
	add_option('pisytd_a7_name', null, '', 'yes');
	add_option('pisytd_a7_id', null, '', 'yes');
}

// Register deactivation hook
register_deactivation_hook( __FILE__, 'pisytd_deactivate' );
function pisytd_deactivate() {
	delete_option('pisytd_url');
	delete_option('pisytd_admin_name');
	delete_option('pisytd_admin_user');
	delete_option('pisytd_a1_name');
	delete_option('pisytd_a1_id');
	delete_option('pisytd_a2_name');
	delete_option('pisytd_a2_id');
	delete_option('pisytd_a3_name');
	delete_option('pisytd_a3_id');
	delete_option('pisytd_a4_name');
	delete_option('pisytd_a4_id');
	delete_option('pisytd_a5_name');
	delete_option('pisytd_a5_id');
	delete_option('pisytd_a6_name');
	delete_option('pisytd_a6_id');
	delete_option('pisytd_a7_name');
	delete_option('pisytd_a7_id');
}

// Admin init
add_action('admin_init', 'pisbpas_admin_init' );
function pisbpas_admin_init(){
	register_setting( 'pisytd_settings', 'pisytd_url' );
	register_setting( 'pisytd_settings', 'pisytd_admin_name' );
	register_setting( 'pisytd_settings', 'pisytd_admin_user' );
	register_setting( 'pisytd_settings', 'pisytd_a1_name' );
	register_setting( 'pisytd_settings', 'pisytd_a1_id' );
	register_setting( 'pisytd_settings', 'pisytd_a2_name' );
	register_setting( 'pisytd_settings', 'pisytd_a2_id' );
	register_setting( 'pisytd_settings', 'pisytd_a3_name' );
	register_setting( 'pisytd_settings', 'pisytd_a3_id' );
	register_setting( 'pisytd_settings', 'pisytd_a4_name' );
	register_setting( 'pisytd_settings', 'pisytd_a4_id' );
	register_setting( 'pisytd_settings', 'pisytd_a5_name' );
	register_setting( 'pisytd_settings', 'pisytd_a5_id' );
	register_setting( 'pisytd_settings', 'pisytd_a6_name' );
	register_setting( 'pisytd_settings', 'pisytd_a6_id' );
	register_setting( 'pisytd_settings', 'pisytd_a7_name' );
	register_setting( 'pisytd_settings', 'pisytd_a7_id' );
}

if (is_admin()) {
	// Admin menu
	add_action('admin_menu', 'pisytd_menu');
	function pisytd_menu() {
		// Add menu page & submenu pages
		// YouTube Direct
		add_menu_page('YouTube Direct', 'YouTube Direct', 'contributor', 'pisytd', 'pisytd_upload_submenu_page', plugins_url('img/pisytd16.png', __FILE__), 25.5);
		if (get_option('pisytd_url')!=null){
			// Upload
			add_submenu_page('pisytd', 'YouTube Direct Upload', 'Upload', 'contributor', 'pisytd', 'pisytd_upload_submenu_page' );
			function pisytd_upload_submenu_page() {
				include 'pisytd_upload.php';
			}
			// Admin
			add_submenu_page('pisytd', 'YouTube Direct Admin', 'Admin', 'contributor', 'pisytd_admin', 'pisytd_admin_submenu_page' );
			function pisytd_admin_submenu_page() {
				include 'pisytd_admin.php';
			}
		}
		// Settings
		add_submenu_page('pisytd', 'YouTube Direct Settings', 'Settings', 'manage_options', 'pisytd_settings', 'pisytd_settings_submenu_page' );
		function pisytd_settings_submenu_page() {
			include 'pisytd_settings.php';
		}
	}
}

?>
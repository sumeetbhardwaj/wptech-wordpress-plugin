<?php
/**
 * @package RedirectionPage
 **/
 
 class WptechAdminSetting
 {	
	public function __constructor()
	{
		
	}
	function wptech_page_redirection_and_hit_counter_admin_menu() {
    add_menu_page( 'Redirection Hit Counter Setting', 'Redirection Hit Counter Setting', 'manage_options','wptech-page-redirection-hit-counter-setting-page', array( $this, 'wptech_page_redirection_and_hit_counter_setting'), 'dashicons-share', 40 );
	
	}
	
	public function wptech_page_redirection_and_hit_counter_setting()
	{ 
		require_once WPTECH_PAGE_REDIRECTION_HIT_COUNTER_PLUGIN_PATH.'/templates/admin.php';
	}
	
	// matabox for page redirection url
	function wptech_redirecttion_page_custom_field_add() {
		$screens = array( 'page', 'post' );
		foreach ( $screens as $screen ) {
		   add_meta_box('Wptech_page_url_Redirection', 'For Page Redirection Url ', array( $this, 'wptech_page_redirection_custom_field' ), $screen, 'normal', 'high');
		}
	}
	function wptech_page_redirection_custom_field(){
	    global $post;
		?>
		<div class="row">
			<div class="fields">
				<span style="color:red">Note :- Please Url don,t use without http:// or https:// </span>
				<input type="text" name="wptech_page_redirection_url" id="wptech_page_redirection_url" style="margin-top:10px" size="100" value="<?php echo get_post_meta($post->ID, 'wptech_page_redirection_url', true)?> "/>
			</div>
		</div>
		<?php
	}	
	function wptech_redirection_page_custom_field_data_save(){
		global $post;
		if(!empty($post->ID)){
			$wptech_page_url = sanitize_text_field( $_POST['wptech_page_redirection_url'] );
			$page_redirection_url = trim($wptech_page_url," ");
			update_post_meta($post->ID, 'wptech_page_redirection_url', $page_redirection_url );
		}
	}
}
$adminSetting = new WptechAdminSetting();
$adminSetting->wptech_page_redirection_and_hit_counter_admin_menu();
$adminSetting->wptech_redirecttion_page_custom_field_add();
add_action('save_post', array( $adminSetting, 'wptech_redirection_page_custom_field_data_save') );







?>
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
	{ ?>
		<h1> Thank You For Useing This Plugin !</h1><br><br>
		<p>Hey Guys<br><br>
		I want to give a best plugin for page redirection and current page hit counter.<br>
		But now page redirection functionality is working properly.<br><br>
			Thank's & Regard's<br>
				WpTech 
		</p>
	<?php }
	// matabox for page redirection url
	function wptech_redirecttion_page_custom_field_add() {
		$screens = get_post_types();
		foreach ( $screens as $screen ) {
		   add_meta_box('Wptech_page_url_Redirection', 'For Page Redirection Url ', array( $this, 'wptech_page_redirection_custom_field' ), $screen, 'normal', 'high');
		}
	}
	function wptech_page_redirection_custom_field(){
	    global $post;
		?>
		<div class="row">
			<div class="fields">
				<input type="text" name="wptech_page_redirection_url" id="wptech_page_redirection_url" style="margin-top:10px" size="100" value="<?php echo get_post_meta($post->ID, 'wptech_page_redirection_url', true)?>" placeholder="http://www.example.com"/>
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
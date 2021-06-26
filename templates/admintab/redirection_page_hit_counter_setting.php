<div id="tab-1" class="tab-pane active">
	<div class="container">
		<h1 style="margin-bottom:20px;">All Seeting Manager</h1>
		<form method="post" action="options.php">
			<?php 
				settings_fields( 'wptech_page_plugin_settings_group' );
				do_settings_sections( 'wptech_page_plugin_settings_group' ); ?>
				<div class="tab-1-main">
					<div class="inner-main-1" >
						All Redirection Page On :
					</div>
					<div class="inner-main-2">
						<label class="switch">
						  <input type="checkbox" name="wptech_redirection_option_on_off" value="1" <?php echo ( esc_attr( get_option('wptech_redirection_option_on_off') ) )? "checked": "";?>>
						  <span class="slider round"></span>
						</label>  
					</div>
				</div>
				<div class="tab-1-main">
					<div class="inner-main-1">
					Show Input Field In Every Page :
					</div>
					<div class="inner-main-2">
						<label class="switch">
						  <input type="checkbox" name="wptech_redirection_option_show_all" value="1"<?php echo (esc_attr( get_option('wptech_redirection_option_show_all') ) )? "checked" : ""; ?>>
						  <span class="slider round"></span>
						</label>
					</div>
				</div>
				<div class="tab-1-main">
					<div class="inner-main-1">
					Hit Counter On :
					</div>
					<div class="inner-main-2">
						<label class="switch">
						  <input type="checkbox" name="wptech_hit_counter_option_on_off" value="1" <?php echo (esc_attr( get_option('wptech_hit_counter_option_on_off') ) )? "checked" : ""; ?> >
						  <span class="slider round"></span>
						</label>
					</div>
				</div>
				<?php
				submit_button();
				?>
			</form>
			<h1 style="margin-bottom:20px;">Page Redirection Manager</h1>
			<form method="post" action="">
				<div class="tab-1-main" style="margin-bottom:0;">
					<div class="inner-main-1" style="width:40%;">
						<div class="row">
						  <div class="inner-main-1" >
							Redirection Url From :
						 </div>
						  <div class="col-75">
							<input type="text" id="fname" name="page_url_from" placeholder="https//www.example.com">
						  </div>
						</div>
					</div>
					<div class="inner-main-2" style="width:40%;">
						<div class="row">
						  <div class="inner-main-1">
							Redirection Url To :
							</div>
						  <div class="col-75">
							<input type="text" id="lname" name="red_page_url" value="" placeholder="https//www.abc.com">
						  </div>
						</div>
					</div>
				</div>
				<button type="submit" class="button button-primary" name="url_submit" style="margin-bottom:10px; padding:0 20px"> Save </button>
			</form>
			<?php
			global $wpdb;
				if(isset($_POST['url_submit'])){
					$page_url_from = esc_url( trim($_POST['page_url_from'], " "));
					$red_page_url = esc_url( trim( $_POST['red_page_url'], " " ));
					$page_url_arr = explode("/",trim($page_url_from,'/'));
					$page_url_name = end($page_url_arr);
					$postArray = $wpdb->get_results('SELECT * FROM `wp_posts` WHERE post_name = "'.$page_url_name.'"' );
					$postValues = json_decode(json_encode($postArray), true);
					if(!empty($postValues[0]['ID']) ){
						update_post_meta( $postValues[0]['ID'], 'wptech_page_redirection_url', $red_page_url );
					}
				} ?>
		</div>
</div>
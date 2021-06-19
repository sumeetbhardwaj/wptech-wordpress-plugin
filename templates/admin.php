<div class="wrap">
	<h1>Page Redirection & Hit Counter Setting</h1>
	<?php settings_errors(); ?>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-1">Redirection Settings</a></li>
		<li><a href="#tab-2">Hit Counter Settings</a></li>
		<li><a href="#tab-3">About</a></li>
	</ul>

	<div class="tab-content">
		<div id="tab-1" class="tab-pane active">

			<form method="post" action="options.php">
				<?php 
					settings_fields( 'wptech_page_plugin_settings' );
					do_settings_sections( 'wptech_page_plugin' ); ?>
					<label class="switch">
					  <input type="checkbox">
					  <span class="slider round"></span>
					</label>
					<?php
					submit_button();
				?>
			</form>
			
		</div>

		<div id="tab-2" class="tab-pane">
			<form method="post" action="options.php">
				<?php 
					settings_fields( 'wptech_page_plugin_settings' );
					do_settings_sections( 'wptech_page_plugin' ); ?>
					<label class="switch">
					  <input type="checkbox">
					  <span class="slider round"></span>
					</label>
					<?php
					submit_button();
				?>
			</form>
		</div>

		<div id="tab-3" class="tab-pane">
			<h3>Thank You For Useing This Plugin !</h3>
		<p>Hey Guys<br><br>
		I want to give a best plugin for page redirection and current page hit counter.<br>
		But now page redirection functionality is working properly.<br><br>
			Thank's & Regard's<br>
				WpTech 
		</p>
		</div>
	</div>
</div>
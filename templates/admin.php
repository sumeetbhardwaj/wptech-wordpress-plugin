<div class="wrap">
	<h1>Page Redirection & Hit Counter Setting</h1><hr>
	<?php settings_errors(); ?>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-1">Redirection Page & Hit Counter Settings</a></li>
		<li><a href="#tab-2">Redirection Page</a></li>
		<li><a href="#tab-3">Hit Counter Page</a></li>
		<li><a href="#tab-4">About</a></li>
	</ul>

	<div class="tab-content">
		<?php
			require_once'admintab/redirection_page_hit_counter_setting.php';
			require_once'admintab/page_hit_counter_tab.php';
			require_once'admintab/page_redirection_tab.php';
			require_once'admintab/page_hit_counter_tab.php';
		?>
		<div id="tab-4" class="tab-pane">
			<div class="container">
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
</div>
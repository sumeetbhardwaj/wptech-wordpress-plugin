<div class="wrap">
	<h1>Page Redirection & Hit Counter Setting</h1><hr>
	<?php settings_errors(); ?>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-1">Redirection Page & Hit Counter Settings</a></li>
		<li><a href="#tab-2">Redirection Page</a></li>
		<li><a href="#tab-3">Hit Counter Page</a></li>
	</ul>

	<div class="tab-content">
		<?php
			require_once'admintab/redirection_page_hit_counter_setting.php';
			require_once'admintab/page_hit_counter_tab.php';
			require_once'admintab/page_redirection_tab.php';
			require_once'admintab/page_hit_counter_tab.php';
		?>
		
	</div>
</div>
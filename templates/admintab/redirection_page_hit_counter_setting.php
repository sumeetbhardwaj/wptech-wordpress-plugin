<div id="tab-1" class="tab-pane active">
	<div class="container">
		<h1 style="margin-bottom:20px;">Seeting Manager</h1>
		<form method="post" action="options.php">
			<?php 
				settings_fields( 'wptech_page_plugin_settings' );
				do_settings_sections( 'wptech_page_plugin' ); ?>
				<div class="tab-1-main">
					<div class="inner-main-1" >
						All Redirection Page Off :
					</div>
					<div class="inner-main-2">
						<label class="switch">
						  <input type="checkbox">
						  <span class="slider round"></span>
						</label>
					</div>
				</div>
				<div class="tab-1-main">
					<div class="inner-main-1">
					Show Url Input In pages :
					</div>
					<div class="inner-main-2">
						<label class="switch">
						  <input type="checkbox">
						  <span class="slider round"></span>
						</label>
					</div>
				</div>
				<?php
				submit_button();
				?>
			</form>
		</div>
</div>
<div id="tab-2" class="tab-pane">
			<form method="post" action="options.php">
				<?php 
					settings_fields( 'wptech_page_plugin_settings' );
					do_settings_sections( 'wptech_page_plugin' ); ?>
					<div class="tab-1-main">
						<div class="inner-main-1">
							Page Hit Counter Off :
						</div>
						<div class="inner-main-2">
							<label class="switch">
							  <input type="checkbox">
							  <span class="slider round"></span>
							</label>
						</div>
					</div>
					<!--<div class="tab-1-main">
						<div class="inner-main-1">
						Show Url Input In pages :
						</div>
						<div class="inner-main-2">
							<label class="switch">
							  <input type="checkbox">
							  <span class="slider round"></span>
							</label>
						</div>
					</div> -->
					<?php
					submit_button();
				?>
			</form>
		</div>
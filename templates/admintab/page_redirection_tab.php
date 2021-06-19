<div id="tab-1" class="tab-pane active">
	<ul class="tab">
	  <li class="innerli"><a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'redirectPage')">Redirection Page Setting</a></li>
	  <li class="innerli"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'redirectPabeTable')">Redirection Page Details</a></li>
	</ul>

	<div id="redirectPage" class="tabcontent" style="display: block;">
	<h1 style="margin-bottom:20px;">Redirection Page Setting</h1>
	  <form method="post" action="options.php">
				<?php 
					settings_fields( 'wptech_page_plugin_settings' );
					do_settings_sections( 'wptech_page_plugin' ); ?>
					<div class="tab-1-main">
						<div class="inner-main-1">
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
					
					
					<div class="row">
					  <div class="inner-main-1">
						Redirection Url From :
					 </div>
					  <div class="col-75">
						<input type="text" id="fname" name="firstname" placeholder="https//www.example.com">
					  </div>
					</div>
					<div class="row">
					  <div class="inner-main-1">
						Redirection Url To :
						</div>
					  <div class="col-75">
						<input type="text" id="lname" name="lastname" placeholder="https//www.abc.com">
					  </div>
					</div>
					<?php
					submit_button();
				?>
			</form>
	</div>

	<div id="redirectPabeTable" class="tabcontent">
	  <p>Coming soon...</p>
	</div>
	
</div>
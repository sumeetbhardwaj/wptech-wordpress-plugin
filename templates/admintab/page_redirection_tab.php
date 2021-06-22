<div id="tab-2" class="tab-pane">
	<div class="container">
		<h1 style="margin-bottom:20px;">Redirection Manager</h1>
	  <form method="post" action="">
				<div class="tab-1-main" style="margin-bottom:0;">
					<div class="inner-main-1" style="width:40%;">
						<div class="row">
						  <div class="inner-main-1" >
							Redirection Url From :
						 </div>
						  <div class="col-75">
							<input type="text" id="fname" name="firstname" placeholder="https//www.example.com">
						  </div>
						</div>
					</div>
					<div class="inner-main-2" style="width:40%;">
						<div class="row">
						  <div class="inner-main-1">
							Redirection Url To :
							</div>
						  <div class="col-75">
							<input type="text" id="lname" name="lastname" placeholder="https//www.abc.com">
						  </div>
						</div>
					</div>
				</div>
				<button class="button button-primary" style="margin-bottom:10px;">Save</button>
			</form>
			<?php
				global $wpdb;
				$values = $wpdb->get_results('SELECT * FROM `wp_postmeta` WHERE meta_key = "wptech_page_redirection_url"' );
				$myArray = json_decode(json_encode($values), true);
			?>
			<table id="customers">
			  <tr>
				<th>Sr. No</th>
				<th>Page Name</th>
				<th>Page Url</th>
				<th>Redirection Url</th>
			  </tr>
			  
				<?php
				$i = 1;
				foreach($myArray as  $value){ 
					if($value['meta_value'] != ""):
						?>
					<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo esc_attr( strtoupper( get_the_title($value['post_id']) ) ); ?></td>
					<td><?php echo esc_attr( get_permalink($value['post_id']) );?></td>
					<td><?php echo esc_attr( $value['meta_value'] ); ?></td>
					</tr>
				<?php  $i++;
					endif; } ?>
							  
			</table>

		<div class="pagination">
		  <a href="#">&laquo;</a>
		  <a href="#">1</a>
		  <a class="active" href="#">2</a>
		  <a href="#">3</a>
		  <a href="#">4</a>
		  <a href="#">5</a>
		  <a href="#">6</a>
		  <a href="#">&raquo;</a>
		</div>
	</div>
</div>
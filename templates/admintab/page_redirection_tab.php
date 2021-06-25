<div id="tab-2" class="tab-pane">
	<div class="container">
		<h1 style="margin-bottom:20px;">Redirection Details</h1>
	  <?php global $wpdb;
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
					if(esc_attr($value['meta_value']) != ""):
						?>
					<tr>
					<td><?php echo esc_attr( $i ); ?></td>
					<td><?php echo esc_attr( strtoupper( get_the_title($value['post_id']) ) ); ?></td>
					<td><?php echo esc_attr( get_permalink($value['post_id']) );?></td>
					<td><?php echo esc_attr( $value['meta_value'] ); ?></td>
					</tr>
				<?php  $i++;
					endif ; } ?>
							  
			</table>
	</div>
</div>
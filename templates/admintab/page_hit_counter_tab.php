<div id="tab-3" class="tab-pane">
	<div class="container">
		<h1 style="margin-bottom:20px;">Hit Counter Manager</h1>
		<table id="customers">
			  <tr>
				<th>Sr. No</th>
				<th>Page ID</th>
				<th>Page Name</th>
				<th>Visits</th>
				<th>Visit Date</th>
				<th>IP Address</th>
			  </tr>
		<?php
		global $wpdb;
		$offset = 1;
		$table_name = $wpdb->prefix .'wptech_visitor_counter';
		$get_page_visitor_data_show = $wpdb->get_results("SELECT * FROM $table_name ORDER BY visitor DESC" );
		foreach($get_page_visitor_data_show as $page_visitor_data ){
		?>
		<tr>
			<td><?php echo esc_attr( $offset ) ;?></td>
			<td><?php echo esc_attr( $page_visitor_data->page_id ) ;?></td>
			<td>
			<a href="<?php echo get_permalink( $page_visitor_data->page_id ) ?>">
			<?php echo strtoupper( get_the_title( $page_visitor_data->page_id  ) ) ;?></a>
			</td>
			<td><?php echo esc_attr( $page_visitor_data->visitor ) ;?></td>
			<td><?php echo esc_attr( $page_visitor_data->visitor_time );?></td>
			<td><?php echo esc_attr( $page_visitor_data->ip_address );?></td>
		  </tr>
		  <?php $offset ++; } ?>
			</table>
	</div>
</div>
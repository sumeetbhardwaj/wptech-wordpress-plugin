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
		$limit = 5;
		if(isset( $_GET['page_no'] )){
		  $page = esc_attr( $_GET['page_no'] );
		}else{
		  $page = 1;
		}
		$offset = ($page - 1) * $limit;
		 $table_name = $wpdb->prefix .'wptech_visitor_counter';
		 if(isset( $_POST['show_date'] )){
			 $date_from = esc_attr( $_POST['date_from'] );
			 $date_to = esc_attr( $_POST['date_to'] );
			 $get_page_visitor_data_show = $wpdb->get_results("SELECT * FROM $table_name WHERE visitor_time BETWEEN '{$date_from}' AND '{$date_to}' ORDER BY visitor_time DESC ");
			}else{
			 $get_page_visitor_data_show = $wpdb->get_results("SELECT * FROM $table_name ORDER BY visitor DESC LIMIT {$offset},{$limit}" );
		}
		foreach($get_page_visitor_data_show as $page_visitor_data ){
		?>
		<tr>
			<td><?php echo $offset + 1 ;?></td>
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
<?php
global $wpdb;
$table = 'wp_contact_us';
$query = "SELECT * FROM " . $table . " ORDER BY `id` DESC";
$results = $wpdb->get_results($query, ARRAY_A);

// echo "<pre>";
// print_r($results);
?>

<div class="wrap">
	<h1 class="wp-heading-inline"><?php echo get_admin_page_title();?></h1>
	<table class="wp-list-table widefat fixed striped table-view-list posts" style="margin-top:40px;">
		<thead>
			<tr>
				<th class="manage-column" style="width:10px;">#</th>
				<th class="manage-column">Name</th>
				<th class="manage-column">Email</th>
				<th class="manage-column">Phone Number</th>
				<th class="manage-column">Company Name</th>
				<th class="manage-column">Company Website</th>
				<th class="manage-column">Message</th>
				<th class="manage-column">Date</th>
		</thead>
		<tbody>
			<?php if(isset($results) && count($results) > 0){ $count = 1;?>
				<?php foreach ($results as $value) {?>
					<tr>
						<td><?php echo $count;?></td>
						<td><?php echo $value['name'];?></td>
						<td><?php echo $value['email'];?></td>
						<td><?php echo $value['country_code'] . '-' . $value['phone_number'];?></td>
						<td><?php echo $value['company_name'];?></td>
						<td><?php echo $value['company_website'];?></td>
						<td><?php echo $value['description'];?></td>
						<td><?php echo date('d M, Y h:i A', strtotime($value['created']));?></td>
					</tr>
				<?php $count++;}?>
			<?php }else{?>
				<tr><td colspan="8">No feedbacks are currently available.</td></tr>
			<?php }?>
		</tbody>
	</table>
</div>
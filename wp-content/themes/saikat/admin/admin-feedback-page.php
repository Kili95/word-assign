<?php
global $wpdb;
$table = 'wp_contact_us';
$query = "SELECT * FROM " . $table;
$results = $wpdb->get_results($query, ARRAY_A);

// echo "<pre>";
// print_r($results);
?>

<div class="wrap">
	<h1 class="wp-heading-inline"><?php echo get_admin_page_title();?></h1>
	<table class="wp-list-table widefat fixed striped table-view-list posts" style="margin-top:40px;">
		<thead>
			<tr>
				<th class="manage-column">#</th>
				<th class="manage-column">Name</th>
				<th class="manage-column">Email</th>
				<th class="manage-column">Description</th>
				<th class="manage-column">Date</th>
		</thead>
		<tbody>
			<?php if(isset($results) && count($results) > 0){ $count = 1;?>
				<?php foreach ($results as $value) {?>
					<tr>
						<td><?php echo $count;?></td>
						<td><?php echo $value['name'];?></td>
						<td><?php echo $value['email'];?></td>
						<td><?php echo $value['description'];?></td>
						<td><?php echo date('d M, Y h:i A', strtotime($value['created']));?></td>
					</tr>
				<?php $count++;}?>
			<?php }else{?>
				<tr><td colspan="5">No feedbacks are currently available.</td></tr>
			<?php }?>
		</tbody>
	</table>
</div>
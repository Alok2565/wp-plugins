<?php
	global $wpdb;
	global $table_prefix;
	$table=$table_prefixa.'web_alok_dev';
	$sql="SELECT *FROM $table";
	$result=$wpdb->get_results($sql);

	//print_r($result);
?>
<table border="2">
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Designation</th>
	</tr>
	<?php
		foreach($result as $list){
	?>
	<tr>
		<td><?php echo $list->id?></td>
		<td><?php echo $list->name?></td>
		<td><?php echo $list->design?></td>
	</tr>
	<?php		
		}
	?>
</table>
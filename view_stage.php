<?php 
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM stage_list where id = ".$_GET['id'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}

							
?>
<div class="container-fluid">
	<dl>
		<dt><b class="border-bottom border-primary">Stage</b></dt>
		<dd><?php echo ucwords($stage) ?></dd>
	</dl>
	
	<dl>
		<dt><b class="border-bottom border-primary">Description</b></dt>
		<dd><?php echo html_entity_decode($description) ?></dd>
		
	</dl>
</div>

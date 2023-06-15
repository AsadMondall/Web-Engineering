 
	<?php
	
	include "dbconnect.php";
	$id =$_GET['del_id'];
	echo $id;
	
	$sql = "DELETE FROM teacher WHERE id = '$id'";
	if($conn->query($sql))
	{
		echo "sucessfully deleted.";
	}
	else   "failed delete";
	
	
	?>
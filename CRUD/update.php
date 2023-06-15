<?php
include "dbconnect.php";
$id =$_GET['update_id'];
$name=$_POST['f_name'];
$designation=$_POST['f_designation'];
$phone=$_POST['f_phone'];
$dob=date('y-m-d',strtotime($_POST['f_dob']));
$address=$_POST['f_address'];

$sql = "UPDATE teacher
       SET  name= '$name' ,designation= '$designation', phone='$phone', dob='$dob',address='$address'
	   WHERE id = '$id'"; 
		

		
		if($conn->query($sql))
		{
			header('location:index.php');
			echo "data updated successfully";
			
		}
		else
		{
			echo "updation failed";
		}
		
		
		$conn->close();
?>

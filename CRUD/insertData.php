
<?php
include "dbconnect.php";
$name=$_POST['f_name'];
$designation=$_POST['f_designation'];
$phone=$_POST['f_phone'];
$dob=date('y-m-d',strtotime($_POST['f_dob']));
$address=$_POST['f_address'];

$sql = "INSERT INTO teacher (id, name,designation,phone,dob, address) 
		VALUES (NULL, '$name', '$designation', '$phone','$dob','$address')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>


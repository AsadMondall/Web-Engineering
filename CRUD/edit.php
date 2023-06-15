	<?php
	
	include "dbconnect.php";
	$id =$_GET['edit_id'];
     $sql = "SELECT * FROM teacher WHERE id = '$id'";
	 $result= $conn->query($sql);
	 $arr = $result->fetch_assoc();
	 
	 $nam = $arr['name'];
	 $des = $arr['designation'];
	 $phon = $arr['phone'];
	 $dob = $arr['dob'];
	 $addr  = $arr['address'];
	 
	
	?>
	<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="update.php?update_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>designation</label>
			<input type="text" value="<?php echo $des ?>" name="f_designation"> <br> <br>
			<label>phone</label>
			<input type="text"  value="<?php echo $phon ?>" name="f_phone" > <br> <br>
			<label>dob</label>
			<input type="text"  value="<?php echo $dob ?>" name="f_dob" > <br> <br>
			<label>address</label>
			<input type="text"  value="<?php echo $addr ?>" name="f_address" > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
</html>
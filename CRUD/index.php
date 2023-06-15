<?php
	include "dbconnect.php";
	
	$s="SELECT * FROM teacher";
	$result=$conn->query($s);
	
	//echo "<h1>adhhd</h1>";
	/*
	while($r = $result->fetch_assoc())
	{
		$name=$r['name'];
		echo $name;
		echo "ajgdsdjk";
	}
	*/
	//echo $r['email'];
	//echo gettype($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
	
		<center>
			<h1> Teacher</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>phone</th>
					<th>Dob</th>
					<th>address</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$des=$r['designation'];
					$phone =$r['phone'];
					$dob =$r['dob'];
					$address =$r['address'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $phone . "</td>";
						echo "<td>". $dob . "</td>";
						echo "<td>". $address . "</td>";
						echo "<td> <a href= 'edit.php?edit_id=$idd'> Edit </a> </td>";
						echo "<td> <a href= 'delete.php?del_id=$idd'> Delete </a> </td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="4"><a href="insertForm.php">Insert Record</a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>





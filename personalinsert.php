<?php
	$host="localhost:8111";
	$user="root";
	$pass="";
	$db="online_passport";
	$conn=mysqli_connect($host,$user,$pass);
	mysqli_select_db($conn,$db);
	
	$name=$_POST['name'];
	$lname=$_POST['lastname'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$ms=$_POST['maritalstatus'];
	$address=$_POST['address'];
	$place=$_POST['placeofbirth'];
	$city=$_POST['city'];
	$id=$_POST['id'];
	$phone=$_POST['phone'];

	$sql = "INSERT INTO `online_passport`.`personal_details` (`name`, `lname`, `fathers name`, `mothers name`, `DOB`, `gender`,`martial status`,`address`,`place of birth`, `city`,`phone`,`id`) VALUES ('{$name}','{$lname}', '{$fname}', '{$mname}', '{$dob}', '{$gender}','{$ms}', '{$address}', '{$place}', '{$city}', '{$phone}', '{$id}');";
	$retval = mysqli_query( $conn, $sql );
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}

	$sql = "UPDATE `online_passport`.`status` SET `personal details` = 'Submitted' WHERE `id`='{$id}' ;";
	$retval = mysqli_query( $conn, $sql );

	echo'	<script type="text/javascript">
					alert("Data Added successfully");
					window.location = "other_h.php";
				</script>';					
	mysqli_close($conn);
?>
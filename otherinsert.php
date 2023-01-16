<?php
	$host="localhost:8111";
	$user="root";
	$pass="";
	$db="online_passport";
	$conn=mysqli_connect($host,$user,$pass);
	mysqli_select_db($conn,$db);
	$type=$_POST['passporttype'];
	$education=$_POST['education'];
	$nationality=$_POST['nationality'];
	$religion=$_POST['religion'];
	$aadhaar=$_POST['anumber'];
	$pan=$_POST['pannumber'];

	$id=$_POST['id'];

	$sql = "INSERT INTO `online_passport`.`other_details` (`passport type`, `educational qualificatoin`, `nationality`, `relegion`, `aadhaar card number`, `pan card number`,`id`) VALUES ('{$type}','{$education}', '{$nationality}', '{$religion}', '{$aadhaar}', '{$pan}','{$id}');";
	$retval = mysqli_query( $conn, $sql );
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}

	$sql = "UPDATE `online_passport`.`status` SET `other details` = 'Submitted' WHERE `id`='{$id}' ;";
	$retval = mysqli_query( $conn, $sql );

	echo'	<script type="text/javascript">
					alert("Data added Successfuly");
					window.location = "reference_h.php";
				</script>';					
	mysqli_close($conn);
?>
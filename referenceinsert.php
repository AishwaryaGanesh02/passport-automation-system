<?php
	$host="localhost:8111";
	$user="root";
	$pass="";
	$db="online_passport";
	$conn=mysqli_connect($host,$user,$pass);
	mysqli_select_db($conn,$db);
	$name=$_POST['referencename'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$name2=$_POST['referncename2'];
	$address2=$_POST['address2'];
	$phone2=$_POST['phone2'];

	$id=$_POST['id'];

	$sql = "INSERT INTO `online_passport`.`references` (`reference name 1`, `address 1`, `phone 1`, `reference name 2`, `address 2`, `phone 2`,`id`) VALUES ('{$name}','{$address}', '{$phone}', '{$name2}', '{$address2}', '{$phone2}','{$id}');";
	$retval = mysqli_query( $conn, $sql );
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}

	$sql = "UPDATE `online_passport`.`status` SET `references` = 'Submitted' WHERE `id`='{$id}' ;";
	$retval = mysqli_query( $conn, $sql );
	echo'	<script type="text/javascript">
					alert("Data added Successfuly");
					window.location = "appointment_h.php";
				</script>';					
	mysqli_close($conn);
?>
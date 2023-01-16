<?php
	$host="localhost:8111";
	$user="root";
	$pass="";
	$db="online_passport";
	$conn=mysqli_connect($host,$user,$pass);
	mysqli_select_db($conn,$db);

	$locality=$_POST['locality'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$id=$_POST['id'];

	$sql = "INSERT INTO `online_passport`.`appointment_details` (`passport office details`, `date`, `time`,`id`) VALUES ('{$locality}','{$date}', '{$time}','{$id}');";
	$retval = mysqli_query( $conn, $sql );

	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}

	$sql = "UPDATE `online_passport`.`status` SET `appointment details` = 'Submitted' WHERE `id`='{$id}' ;";
	$retval = mysqli_query( $conn, $sql );

	echo'	<script type="text/javascript">
					alert("Data added Successfuly");
					window.location = "status_h.php";
				</script>';					
	mysqli_close($conn);
?>
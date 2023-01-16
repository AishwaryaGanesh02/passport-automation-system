<?php
	$host="localhost:8111";
	$user="root";
	$pass="";
	$db="online_passport";
	$conn=mysqli_connect($host,$user,$pass);
	mysqli_select_db($conn,$db);

	$check=$_POST['check'];
    $id=$_POST['id'];

	$sql = "UPDATE `online_passport`.`status` SET `verification` = '{$check}' WHERE `id`='{$id}';";
	$retval = mysqli_query( $conn, $sql );

	$sql = "UPDATE `online_passport`.`status` SET `dispatch` = 'Dispatched' WHERE `id`='{$id}' AND `verification` = 'Verified' ;";
	$retval = mysqli_query( $conn, $sql );

	echo'	<script type="text/javascript">
					alert("Data added Successfuly");
					window.location = "home_h.php";
				</script>';					
	mysqli_close($conn);
?>
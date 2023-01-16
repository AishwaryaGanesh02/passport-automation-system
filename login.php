<?php
$host="localhost:8111";
$user="root";
$pass="";
$db="online_passport";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
$id=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['password'];
if($id > 9999)
{
	$sql = "SELECT * from online_passport.officer where email='$email';";
	$result=mysqli_query($conn,$sql);
	if (!$result|| mysqli_num_rows($result) > 0)
	{
	echo '<script language="Javascript">
		alert("Logged In successfully ");
		window.location=("applicantid.php");</script>';
	} 
	else
	{
	echo '<script language="Javascript">
		alert("Invalid Username Or Password ");
		window.location=("login_h.php");
		</script>';
	}
}
else
{
	$sql = "SELECT * from online_passport.register where email='$email';";
	$result=mysqli_query($conn,$sql);
	if (!$result|| mysqli_num_rows($result) > 0)
	{

	echo '<script language="Javascript">
		alert("Logged In successfully ");
		window.location=("personal_h.php");</script>';
	} 
	else
	{
	echo '<script language="Javascript">
		alert("Invalid Username Or Password ");
		window.location=("login_h.php");
		</script>';
	}
}
mysqli_close($conn); 
?> 

<?php
$host="localhost:8111";
$user="root";
$pass="";
$db="online_passport";
$conn=mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($conn,$db);
$name=$_POST['name'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$sql="SELECT * FROM online_passport.register where email='$email';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo '<script language="JavaScript">
		alert("There is already an account associated with this Email.. ");
		window.location=("register_h.php");
		</script>';
}
else
{

$sql = "INSERT INTO `online_passport`.`register` (`name`, `lname`, `dob`, `email`, `phone`, `pasword`,`confpassword`) VALUES ('{$name}','{$lname}', '{$dob}', '{$email}', '{$phone}', '{$password}','{$cpassword}');";
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

$query ="INSERT INTO `online_passport`.`status` (`id`) SELECT id from online_passport.register where email='$email'";;
$retval = mysqli_query($conn, $query); 
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

}

$sql="SELECT id from online_passport.register where email='$email';";
$result=mysqli_query($conn,$sql);
if(!$result || mysqli_num_rows($result)>0)
{
	echo '<h1> Registration Successful </h1></br></br>';
	echo '<table width=600>';
	while($row=mysqli_fetch_assoc($result))
	{
		echo '<tr><td><h2> ID </h2></td><td><h2>'.$row['id'].'<h2></td></tr>';
	}
	echo '</table>';
	echo '<h3>!!!!Note this for future reference!!!!</h3></br>';

	echo "<a href='login_h.php' class='link'><h3>Continue</h3></a>";
        
}

				
mysqli_close($conn);
?>
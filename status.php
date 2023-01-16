<?php
$host="localhost:8111";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
$db="online_passport";
mysqli_select_db($conn,$db);
$id=$_POST['id'];
$sql="SELECT * from online_passport.status where id='$id';";
$result=mysqli_query($conn,$sql);
if(!$result){
    die(mysqli_error($conn));
}
if(mysqli_num_rows($result)>0)
{
    echo '<h1> STATUS </h1>';
    echo '<table border=1 width=600>';
    while($row=mysqli_fetch_assoc($result))
    {
        echo '<tr><td>Personal Details: </td><td>'.$row['personal details'].'</td></tr>';
        echo '<tr><td>Other Details</td><td>'.$row['other details'].'</td></tr>';
        echo '<tr><td>References</td><td>'.$row['references'].'</td></tr>';
        echo '<tr><td>Appointment Details</td><td>'.$row['appointment details'].'</td></tr>';
        echo '<tr><td>Verification</td><td>'.$row['verification'].'</td></tr>';
        echo '<tr><td>Dispatch</td><td>'.$row['dispatch'].'</td></tr>';
    }
    echo '</table>';
}
mysqli_close($conn);
?>
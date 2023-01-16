<!DOCTYPE html>
<html>
    <head>
        <title>Applicant Details</title>
    </head>
    <body bgcolor="f9f7f5">
        <center>
        <h2>Applicant Details</h2>
        <?php
        $host="localhost:8111";
        $user="root";
        $pass="";
        $conn=mysqli_connect($host,$user,$pass);
        $db="online_passport";
        mysqli_select_db($conn,$db);
        $id=$_POST['id'];
        $sql="SELECT * from online_passport.personal_details where id='$id';";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die(mysqli_error($conn));
        }
        if(mysqli_num_rows($result)>0)
        {
        echo '<h1> Personal Details </h1>';
        echo '<table border=1 width=600>';
        while($row=mysqli_fetch_assoc($result))
        {
        echo '<tr><td>Name</td><td>'.$row['name'].'</td></tr>';
        echo '<tr><td>Lastname</td><td>'.$row['lname'].'</td></tr>';
        echo '<tr><td>Fathers name</td><td>'.$row['fathers name'].'</td></tr>';
        echo '<tr><td>Mothers name</td><td>'.$row['mothers name'].'</td></tr>';
        echo '<tr><td>Date of birth</td><td>'.$row['DOB'].'</td></tr>';
        echo '<tr><td>Gender</td><td>'.$row['gender'].'</td></tr>';
        echo '<tr><td>Marital status</td><td>'.$row['martial status'].'</td></tr>';
        echo '<tr><td>Address</td><td>'.$row['address'].'</td></tr>';
        echo '<tr><td>City</td><td>'.$row['city'].'</td></tr>';
        echo '<tr><td>Place of birth</td><td>'.$row['place of birth'].'</td></tr>';
        echo '<tr><td>Phone</td><td>'.$row['phone'].'</td><tr>';
        }
        echo '</table>';
        }
        mysqli_close($conn);
        ?>



        <?php
        $host="localhost:8111";
        $user="root";
        $pass="";
        $conn=mysqli_connect($host,$user,$pass);
        $db="online_passport";
        mysqli_select_db($conn,$db);
        $id=$_POST['id'];
        $sql="SELECT * from online_passport.other_details where id='$id';";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die(mysqli_error($conn));
        }
        if(mysqli_num_rows($result)>0)
        {
        echo '<h1> Other details </h1>';
        echo '<table border=1 width=600>';
        while($row=mysqli_fetch_assoc($result))
        {
        echo '<tr><td>Passport type</td><td>'.$row['passport type'].'</td></tr>';
        echo '<tr><td>Educational Qualification</td><td>'.$row['educational qualificatoin'].'</td></tr>';
        echo '<tr><td>Nationality</td><td>'.$row['nationality'].'</td></tr>';
        echo '<tr><td>Relegion</td><td>'.$row['relegion'].'</td></tr>';
        echo '<tr><td>Aadhaar card number</td><td>'.$row['aadhaar card number'].'</td></tr>';
        echo '<tr><td>Pan card number</td><td>'.$row['pan card number'].'</td></tr>';

        }
        echo '</table>';
        }
        mysqli_close($conn);
        ?>


        <?php
        $host="localhost:8111";
        $user="root";
        $pass="";
        $conn=mysqli_connect($host,$user,$pass);
        $db="online_passport";
        mysqli_select_db($conn,$db);
        $id=$_POST['id'];
        $sql="SELECT * from online_passport.references where id='$id';";
        $result=mysqli_query($conn,$sql);
        if(!$result || mysqli_num_rows($result)>0)
        {
        echo '<h1> References </h1>';
        echo '<table border=1 width=600>';
        while($row=mysqli_fetch_assoc($result))
        {
        echo '<tr><td>Name 1</td><td>'.$row['reference name 1'].'</td></tr>';
        echo '<tr><td>Address 1</td><td>'.$row['address 1'].'</td></tr>';
        echo '<tr><td>Phone 1</td><td>'.$row['phone 1'].'</td></tr>';
        echo '<tr><td>Name 2</td><td>'.$row['reference name 2'].'</td></tr>';
        echo '<tr><td>Address 2</td><td>'.$row['address 2'].'</td></tr>';
        echo '<tr><td>Phone 2</td><td>'.$row['phone 2'].'</td></tr>';

        }
        echo '</table>';
        }
        mysqli_close($conn);
        ?>


        <?php
        $host="localhost:8111";
        $user="root";
        $pass="";
        $conn=mysqli_connect($host,$user,$pass);
        $db="online_passport";
        mysqli_select_db($conn,$db);
        $id=$_POST['id'];
        $sql="SELECT * from online_passport.appointment_details where id='$id';";
        $result=mysqli_query($conn,$sql);
        if(!$result || mysqli_num_rows($result)>0)
        {
        echo '<h1> Appointment details</h1>';
        echo '<table border=1 width=600>';
        while($row=mysqli_fetch_assoc($result))
        {
        echo '<tr><td>Passport office</td><td>'.$row['passport office details'].'</td></tr>';
        echo '<tr><td>Date</td><td>'.$row['date'].'</td></tr>';
        echo '<tr><td>Time</td><td>'.$row['time'].'</td></tr>';
        }
        echo '</table>';
        }
        mysqli_close($conn);
        ?>

        <h1>VALIDATION</h1> 
        <FORM method="POST" action="validate.php">
        <PRE>
            Enter Applicant ID: <input type='number' name='id' required>
            <INPUT type="CHECKBOX" name="check" value="Verified" required/><p>
            I acknowledge that the details submitted by the applicant is true.
            </p>
            <input type="submit" name="submit" value="SUBMIT">
        </PRE>
        </FORM>
    </body>
</html>
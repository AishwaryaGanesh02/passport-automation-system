<?php
        $host="localhost:8111";
        $user="root";
        $pass="";
        $conn=mysqli_connect($host,$user,$pass);
        $db="online_passport";
        mysqli_select_db($conn,$db);
        
        $sql="SELECT id from online_passport.status where `personal details` = 'Submitted' 
                        AND `other details`= 'Submitted' AND `references` = 'Submitted' AND `appointment details` = 'Submitted' 
                        AND NOT `verification`='Verified';";
        $result=mysqli_query($conn,$sql);
        if(!$result || mysqli_num_rows($result)>0)
        {
            echo '<h1> Applicants </h1>';
            echo '<table border=1 width=600>';
            while($row=mysqli_fetch_assoc($result))
            {
                echo '<tr><td> ID </td><td>'.$row['id'].'</td></tr>';
            }
            echo '</table>';
        }
        echo "<a href='applicantdetails_h.php' class='link'>Next</a>";
        mysqli_close($conn);
?>
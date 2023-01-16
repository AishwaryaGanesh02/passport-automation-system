<!DOCTYPE html>
<html>
    <head>
    <style>
      .link{
            background-color:#f9f7f5;
            color:#0a4a84;
            }
    </style>
    <title>Other Details</title>
    </head>
    <body bgcolor="#f9f7f5">
        <center>
        <h2>Personal Details > <i>Other Details</i> > References > Appointment > <a href="status_h.php">Status</a> > <a href="home_h.php">Logout</a> </h2>
        <form method="post" action="otherinsert.php">
        <fieldset>
        <legend><h1>OTHER DETAILS</h1></legend>
        <pre>
        <div align="left">
            

        ID  		    :	<input type="number" name="id" required />


        PASSPORT TYPE	:	<input type="radio" name="passporttype" value="normal" />NORMAL	<input type="radio" name="passport type" value="Tatkal" />TATKAL


        EDUCATION		:	<select name="education">
        <option value="select option" selected>Select option</option>
        <option value="matriculate">Matriculate</option>
        <option value="HSC">Higher secondary</option>
        <option value="degree">Degree</option>
        <option value="post graduate">Post graduate</option>
        </select>


        Nationality		:	<select name="nationality">
        <option value="select option" selected> Select option</option>
        <option value="Indian">Indian</option>
        <option value="Anglo indian">Anglo Indian</option>
        <option value="Others">Others</option>
        </select>


        Religion		:   <select name="religion">
        <option value="select option" selected> Select option</option>
        <option value="Hindu">Hindu</option>
        <option value="christian">Christian</option>
        <option value="Islam">Islam</option>
        <option value="others">Others</option>
        </select>


        AADHAAR NUMBER	:	<input type="text" name="anumber" required />


        PAN NUMBER	    :   <input type="text" name="pannumber" required />

                            <input type="submit" name="submit" value="SUBMIT">
        </div>

        </pre>
        </fieldset>
        </form>
        <a href="reference_h.php" class="link">Next</a>
    </body>
</html>

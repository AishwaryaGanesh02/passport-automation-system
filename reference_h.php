<!DOCTYPE html>
<html>
    <head>
        <style>
        .link {
            background-color:#f9f7f5;
            color:#0a4a84;
        }
        </style>
        <title>References</title>
    </head>
    <body bgcolor="f9f7f5">
        <center>
        <h2>Personal Details > Other Details > <i>References</i> > Appointment > <a href="status_h.php">Status</a> > <a href="home_h.php">Logout</a> </h2>
        <form method="post" action="referenceinsert.php">
            <fieldset>
            <legend><h1>REFERENCES</H1></legend>

            <pre>
            <div align="left">


            ID		        :		<input type="number" name="id" required size=30/> 


            REFERENCE 1		:		<input type="text" name="referencename" required />


            ADDRESS			:		<textarea name="address" required size=30></textarea>


            PHONE NUMBER	:		<input type="text" name="phone" required size=30/>


            REFERENCE 2		:		<input type="text" name="referncename2" required />


            ADDRESS			:		<textarea name="address2" required size=30></textarea>


            PHONE NUMBER	:		<input type="text" name="phone2" required size=30/>

                                    <input type="submit" name="submit" value="SUBMIT">
            </div>
            </pre>
        </form>
        <a href="appointment_h.php" class="link">NEXT</a>
        </fieldset>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <style>
            .link{
            background-color:#f9f7f5;
            color:#0a4a84;
            }
        </style>
        <title>Appointment</title>
    </head>

    <body bgcolor="f9f7f5">
        <center>
        <h2>Personal Details > Other Details > References > <i>Appointment</i> > <a href="status_h.php">Status</a> > <a href="home_h.php">Logout</a> </h2>
        <form method="post" action="appointmentinsert.php">
            <pre>
                <div align="left">
                    <fieldset>
                    <legend>
                    <h1>APPOINTMENT DETAILS</h1></legend>              

                    ID			                :	<input type="number" name="id" required />

                    
                    PASSPORT LOCALITY (Chennai)	    :	<select name="locality">
                    <option value="select category">Select category</option>
                    <option value="Tambaram">Tambaram</option>
                    <option value="Sali gramam">Saligramam</option>
                    <option value="Aminjikarai">Aminjikarai</option> 
                    </select>
                    

                    DATE				:	<input type="date" name="date" required /> 


                    TIME				:	<input type="time" name="time" required />


                                            <input type="submit" name="submit" value="SUBMIT" />
                </div>
            </pre>
        </form>
        <a href="status_h.php" class="link">Next</a>
        </fieldset>
    </body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<style>
		.link {
            background-color:#f9f7f5;
            color:#0a4a84;
        }
		div {
        margin-bottom: 10px;
		}
		input {
			padding: 5px 10px;
		}
		</style>
		<title>Personal Details</title>
	</head>
	<body bgcolor="#f9f7f5">
		<center>
		<h2><i>Personal Details</i> > Other Details > References > Appointment > <a href="status_h.php">Status</a> > <a href="home_h.php">Logout</a> </h2>
		<form method="post" action="personalinsert.php">
		<fieldset>
		<legend><h2>PERSONAL DETAILS</h2></legend>
		<pre>
		<div align="left">
			
		ID				:	    <input type="number" name="id" required />


		NAME			:	    <input type="text" name="name" required size=30/>


		LAST NAME		:		<input type="text" name="lastname" required size=30/>


		FATHER'S NAME	:		<input type="text" name="fname" required size=30/>


		MOTHER'S NAME	:		<input type="text" name="mname" required size=30/>


		DATE OF BIRTH	:       <input type="date" name="dob" required size=30/>


		GENDER			:	    <input type="radio" name="gender" value="male" />male	<input type="radio" name="gender" value="female" />female


		MARITAL STAUTS	:	    <input type="radio" name="maritalstatus" value="single" />single	<input type="radio" name="maritalstatus" value="married" />married


		ADDRESS			:		<textarea name="address" required size=30></textarea>


		PLACE OF BIRTH	:		<input type="text" name="placeofbirth" required />


		CITY			:		<input type="text" name="city" required size=30/> 


		PHONE NUMBER	:		<input type="text" name="phone" required size=30/>

								<input type="submit" name="submit" value="SUBMIT" />
		</div>
						

		<h3><a href="other_h.php" class="link">Next</a></h3>
		</pre>
		</fieldset>
		</form>
	</body>
</html>

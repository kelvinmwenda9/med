<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h1>Register for MedBook Services</h1>
	<form method="POST">
		<input type="text" name="fname" placeholder="Enter your Fullname"><br><br>
		<input type="date" name="dob" placeholder="Enter your Date of Birth"><br><br>

		<label>Gender </label><br>
		<select name="gender">
			<option></option>
			<option>MALE</option>
			<option>FEMALE</option>
		</select><br><br>

		<label>Service Type </label><br>
		<select name="tservice">
			<option></option>
			<option>ONE</option>
			<option>TWO</option>
		</select><br><br>

		<input type="text" name="comments" placeholder="General Comments"><br><br>

		<input type="submit" name="submit">


	</form>

	<br>
	Press<a href='http://localhost/TEST/display.php'> this link to go back to display values </a>


</body>
</html>

<?php 

	if (empty($_POST)) {
			# code...
		}

	else{

		$fname = $_POST['fname'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$tservice = $_POST['tservice'];
		$comments = $_POST['comments'];


		$connect = mysqli_connect("localhost","root","","test_db");
		$sql = "INSERT INTO data(fname,dob,gender,tservice,comments) VALUES('$fname','$dob','$gender','$tservice','$comments')";

		$response = mysqli_query($connect,$sql);

		

		if ($response==true) {
			echo "Data has been recorded";
		}
		else{
			echo "Re-enter your data again";
		}

	}
	

 ?>
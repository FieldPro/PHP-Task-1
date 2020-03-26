<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
	<body>
	<br>
		<h3>Contact Me</h3>

		<form action="ContactForm.php" method="POST">
			<p>
				<label for="fname">First Name</label><br>
				 <input type="text" name="fname" placeholder="Enter Your First Name" />
			</p>

			<p>
				<label for="lname">Last Name</label><br>
				 <input type="text" name="lname" placeholder="Enter Your Last Name" />
			</p>
			
			<p>
				<label for="email">Email</label><br>
				<input type="email" name="email" placeholder="Enter Your Email" required />
			</p>
			
			<p>
				<label for="department">Department</label><br/>
				   
				 <select name="department">
					  <option>Select Department</option>
					  <option>IT</option>
					  <option>Security</option>
					  <option>F&B</option>
				</select>
			</p>
			
			<p>
				<label for="gender">Gender</label><br>
				<input type="radio" name="gender" />Male<br>
				<input type="radio" name="gender" />Female<br>
				<input type="radio" name="gender" />Prefer not to say
			</p>
			
			<p>
				<label for="message">Your Message</label><br>
				<textarea name="message"></textarea>
			</p>

			<p>
				<input type="checkbox" name="terms" required /> You are agreeing to our terms and conditions by checking this box.
			</P>
		 
			<button type="submit" name ="submit">Submit</button>
		</form>

	</body>
</html>

<?php
	
	if(isset($_POST['submit'])) 
	{
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$department = $_POST["department"];
			$gender = $_POST["gender"];
			$message = $_POST["message"];
			
			$file = fopen("UserInfo.txt", "a");
			fwrite($file, $fname);
			fwrite($file, $lname);
			fwrite($file, $email);
			fwrite($file, $department);
			fwrite($file, $gender);
			fwrite($file, $message);
			fclose($file);
			
	}
?>
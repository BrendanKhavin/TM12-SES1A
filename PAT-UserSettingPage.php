<!-- PATIENT SETTING PAGE -->

<?php 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "password";
	 $db = "sql12337112";
	 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	 $patientname = "karen"; 

	 $sqlValue = "SELECT * FROM `users` WHERE `patientname`='$patientname'";
	 $resultValue = mysqli_query($conn,$sqlValue);
	if (mysqli_num_rows($resultValue) >= 1) {
		while($row = $resultValue->fetch_assoc()) {
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$phonenumber = $row['phonenumber'];
			$email = $row['username'];
			$password = $row['password'];
		}
		
	}
	
		$firstname = $_POST['FirstName'];
		$lastname = $_POST['LastName'];
		$phonenumber = $_POST['PhoneNumber'];
		$email = $_POST['Email'];
		$password = $_POST['password'];
	
	
	//if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST['submit'])) {
		if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) { 
		$message = "Please fill in all fields"; 
		}
	} else { 
		$sql = "SELECT * FROM `users` WHERE `usertype`='Doctor' and `lastname`='$doctorname'";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) == 1) {
		//Pass
			$query = "INSERT INTO `users` (`firstname`, `lastname`, 'phonenumber', `username`, `password`) VALUES ('$firstname', '$lastname', '$phonenumber', '$email','$password')";
			if ($conn->query($query) === TRUE) {
				$message = "Your account details were sucessfully updated"; 
			} else {
				$message = "Oops :/ \n An error occured updating your account details, please try again.";
			}
		
		}
	} 

?>	

<!DOCTYPE html>
<html> 
	<script src="https://kit.fontawesome.com/56b24aa4ed.js" crossorigin="anonymous"></script>
	<head>
		<title>Online Medical Centre - Patient</title> <!-- page title in tab -->
		<link rel="stylesheet" href="WebsiteStyling.css"> <!-- The css file -->
		<script src="WebsiteScript.js"></script> <!-- the javascript file -->
		<link rel="icon" type="image/x-icon" href="favicon.ico"/> <!-- icon file -->
	</head>	
	<body>
		<!-- fixed top navigation bar -->
		<header>
			<div class="navigation" id="nav"> 
				<a id="websiteHeading" href="#websiteHeading" onclick="window.location.href='PAT-HomePage.htm'"><i class="fas fa-clinic-medical"></i><b> Online Medical Centre</b></a>
				<div class="navbar-right">
					<a href="#home" onclick="window.location.href='PAT-HomePage.htm'"><i class="fas fa-home"></i><b> Home</b></a>
					<a href="#consultations" onclick="window.location.href='PAT-ConsultationPage.php'"><i class="fas fa-calendar-alt"></i><b> Consulations</b></a>
					<a href="#accountSettings" onclick="window.location.href='PAT-UserSettingPage.php'"><i class="fas fa-user-cog"></i><b> My Account</b></a>
					<a href="#logout" onclick="window.location.href='index.html'"><i class="fas fa-sign-out-alt"></i><b> Log Out</b></a>
				</div>
				
				<!-- change to toggle menu if the window size is too small to fit top navigation bar comfortably -->
				<a href="javascript:void(0);" class="icon" onclick="navbarResize()"> 
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</header>
		
		<!-- <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> --> 
		
		<!-- content body of website -->
		<div class="body">
			<section class="contentContainer">
				<h2>Account Settings</h2> 
				<p>Here you are able to update the details of your account. Please click save after making changes to ensure your details are updated.</p> 
				
				<hr>
				
				<br>
				
				<form class="editPatientDetails" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
					<div class="editPatientDetails" id="editPatientDetails">
					
					<p id="message" name="message"><?php echo $message ?></p>
					
					<!-- need to add in way to display user data -->
						<label for="firstName"><b>First Name</b></label>
							<input type="text" id="firstName" name="FirstName" value="<?php echo $firstname ?>" required>
								
						<label for="lastName"><b>Last Name</b></label>
							<input type="text" id="lastName" name="LastName" value="<?php echo $lastname ?>" required>
						
						<label for="phone"><b>Phone Number</b></label>
							<input type="tel" id="phoneNumber" name="PhoneNumber" value="<?php echo $phonenumber ?>">
					
						<label for="email"><b>Email</b></label>
							<input type="email" id="email" name="Email" value="<?php echo $email ?>" required >
					
						<label for="password"><b>Password</b></label>
							<input type="password" name="password" value="<?php echo $password ?>" required>
						
						<br>
						
						<br>
						
						<label><input type="checkbox" name="marketingCheck">Want to receive marketing emails?</label>
					
						<br>
						
						<br>
						
						<button type="submit">Submit</button>
						
						<br>
						
						<button type="reset" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</section>
		</div>
		
		<!-- fixed footer bar -->
		<div class="footer">
			<div class="etcDetails">
				<a href="MAIN-FAQPage.htm">FAQ</a>
				<a href="MAIN-Terms&ConditionsPage.htm">Terms &amp; Conditions</a>
				<a href="MAIN-PrivacyPage.htm">Privacy</a>
				<a href="MAIN-SecurityPage.htm">Security</a>
			</div>
			
			<p id="copyRight">&copy; 2020 Online Medical Centre - All Rights Reserved.</p>
		</div>
	</body>
</html>
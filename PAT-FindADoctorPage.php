<!-- Find a doctor page -->

<?php
	$dbhost = "sql12.freesqldatabase.com";
	 $dbuser = "sql12337112";
	 $dbpass = "yacY8zPDxP";
	 $db = "sql12337112";
	 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	 $usertype = "Doctor"
	 
	 $sqlValue = "SELECT * FROM `users` WHERE `usertype`='$usertype'";
	 $resultValue = mysqli_query($conn,$sqlValue);
?>

<!DOCTYPE html>
<html> 
	<script src="https://kit.fontawesome.com/56b24aa4ed.js" crossorigin="anonymous"></script>
	<head>
		<title>Online Medical Centre</title> <!-- This is the title of the site that shows up in the tab feel free to change it -->
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
		
		<!-- content body of website -->
		<div class="body">
			<section class="contentContainer">
				<h2>Find A Doctor</h2>
				<p>Here you will find all the doctors available on the website. Simply click on their name to begin chatting.</p>
				
				<hr>
				
				<div class="findDoc" id="findDoc">
					<?php while($row = $resultValue->fetch_assoc()): ?>
					<label for="doctorName" id="doctorName"><a href="chatFinal.html"><b>Dr. <?php echo $row["firstname"] + row["lastname"]; ?></b></a></label>
					
					<p><b>Languages Spoken</b> <?php echo $row["lang"]; ?></p>
					
					<p><b>Phone Number</b> <?php echo $row["phonenumber"]; ?></p>
					
					<p><b>Email</b> <?php echo $row["username"]; ?></p>
					
					<p><b>Office</b> <?php echo $row["address"]; ?></p>
				
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3312.232515169314!2d151.1981017!3d-33.8836651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5aa7383337c73213!2sUTS%20Faculty%20of%20Engineering%20and%20IT!5e0!3m2!1sen!2sau!4v1588215213583!5m2!1sen!2sau" width="100%" height="40%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					
					<br>
					
					<?php endwhile; ?>
				</div>
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
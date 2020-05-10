<?php
	$dbhost = "sql12.freesqldatabase.com";
	$dbuser = "sql12337112";
	$dbpass = "yacY8zPDxP";
	$db = "sql12337112"; 
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
	$radioOption = $_POST["radioOption"];
	$firstname = $_POST["FirstName"];
	$lastname = $_POST["LastName"];
	$email = $_POST["Email"];
	$phoneNumber = $_POST["PhoneNumber"];
	$apptID = $_POST["ApptID"];
	$message = $_POST["Message"];

	//need to confirm table name
	$sql ="INSERT INTO enquiryData (enquiryType, firstname, lastname, email, phoneNumber, apptID, message) VALUES ('$radioOption','$firstname','$lastname','$email','$phoneNumber','$apptID','$message')";
	
	if(mysqli_query($conn, $sql)) {
		include("MAIN-postEnquiryForm-[Success].htm");
	} else {
		include("MAIN-postEnquiryForm-[Failed].htm");
	}
	
	mysqli_close($conn);
?>

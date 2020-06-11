<?php

$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "password";
 $db = "sql12337112";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 $firstname = $_POST['FirstName'];
 $lastname = $_POST['LastName'];
 $P = $_POST['PhoneNumber'];
 $type = $_POST['emergencyType'];


  $sql = "INSERT INTO `urgentcases`(`firstname`, `lastname`, 'phonenumber', 'emergencytype') VALUES ('$firstname', '$lastname', '$phone', '$type')";

if ($conn->query($sql) === TRUE) {
    include("PAT-UrgentCasesPage-[Success].htm");
} else {
    include("PAT-UrgentCasesPage-[Failed].htm");
}

$conn->close();
//usertype

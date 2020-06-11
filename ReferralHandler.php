<?php

$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "password";
 $db = "sql12337112";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 $Pat_firstname = $_POST['P-FirstName'];
 $Pat_lastname = $_POST['P-LastName'];
 $Pat_email = $_POST['P-Email'];
 $consultationSummary = $_POST['consultationSummary'];
 $Doc_firstname = $_POST['D-FirstName'];
 $Doc_lastname = $_POST['D-LastName'];
 $Doc_email = $_POST['D-Email'];
 $Doc_phone = $_POST['D-PhoneNumber'];
 
 //need to confirm table name

  $sql = "INSERT INTO `referral`(`pat_firstname`, `pat_lastname`, 'PAT_email', `consultationSummary`, 'doc_firstname', 'doc_lastname', 'doc_email', 'doc_phonenumber') VALUES ('$Pat_firstname', '$Pat_lastname', '$Pat_email', '$consultationSummary', '$Doc_firstname', '$Doc_lastname', '$Doc_email, '$Doc_phone')";

if ($conn->query($sql) === TRUE) {
    include("DOC-MakeReferralPage-[Success].htm");
} else {
    include("DOC-MakeReferralPage-[Failed].htm");
}

$conn->close();
//usertype

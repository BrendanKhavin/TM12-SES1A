<?php

$dbhost = "sql12.freesqldatabase.com";
 $dbuser = "sql12337112";
 $dbpass = "yacY8zPDxP";
 $db = "sql12337112";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 $Pat_firstname = $_POST['P-FirstName'];
 $Pat_lastname = $_POST['P-LastName'];
 $Pat_email = $_POST['P-Email'];
 $apptId = $_POST['ApptID'];
 $consultationType = $_POST['radioOption'];
 $consultationSummary = $_POST['consultationSummary'];
 $recommendation = $_POST['recommendation'];
 $referralNotice = $_POST['referralNotice'];
 $prescription = $_POST['prescription'];
 $Doc_firstname = $_POST['D-FirstName'];
 $Doc_lastname = $_POST['D-LastName'];
 $Doc_email = $_POST['D-Email'];
 $Doc_phone = $_POST['D-PhoneNumber'];
 
 //need to confirm table name

  $sql = "INSERT INTO `medicalsubscriptions`(`pat_firstname`, `pat_lastname`, 'pat_email', 'apptId', `consultationType`, `consultationSummary`, `recommendation`, `referralNotice`, 'prescription', 'doc_firstname', 'doc_lastname', 'doc_email', 'doc_phonenumber') VALUES ('$Pat_firstname', '$Pat_lastname', '$Pat_email', '$apptId', '$consultationType', '$consultationSummary', '$recommendation', '$referralNotice', '$prescription', '$Doc_firstname', '$Doc_lastname', '$Doc_email, '$Doc_phone')";

if ($conn->query($sql) === TRUE) {
    include("DOC-CreateMedicalSubscriptionPage-[Success].htm");
} else {
    include("DOC-CreateMedicalSubscriptionPage-[Failed].htm");
}

$conn->close();
//usertype

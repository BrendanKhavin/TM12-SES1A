<?php

$dbhost = "sql12.freesqldatabase.com";
 $dbuser = "sql12337112";
 $dbpass = "yacY8zPDxP";
 $db = "sql12337112"; 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 $forgotPassword = $_POST['email'];
//need to confirm table name
 $sql = "INSERT INTO `forgotPassword`(`email`) VALUES ('$forgotPassword)";

if ($conn->query($sql) === TRUE) {
    include("MAIN-ForgotPasswordPage-[Success].htm");
} else {
   include("MAIN-ForgotPasswordPage-[Failed].htm");

$conn->close();
?>
<?php

$dbhost = "sql12.freesqldatabase.com";
 $dbuser = "sql12337112";
 $dbpass = "yacY8zPDxP";
 $db = "sql12337112";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 $firstname = $_POST['fname'];
 $lastname = $_POST['sname'];
 $phone = $_POST['PhoneNumber'];
$username = $_POST['email'];
 $password = $_POST['password'];
 $usertype = 'Doctor';
 $DoctorId = $_POST['DoctorId']; 

  $sql = "INSERT INTO `users`(`firstname`, `lastname`, 'phonenumber', `username`, `password`, `usertype`, `doctorid`) VALUES ('$firstname', '$lastname', '$phone', '$username','$password', '$usertype', '$DoctorId')";

if ($conn->query($sql) === TRUE) {
    include("MAIN-SignUpPage-[Success].htm");
} else {
    include("MAIN-SignUpPage-[Failed].htm");
}

$conn->close();
//usertype

<?php

$dbhost = "sql12.freesqldatabase.com";
 $dbuser = "sql12337112";
 $dbpass = "yacY8zPDxP";
 $db = "sql12337112";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 $firstname = $_POST['fname'];
 $lastname = $_POST['sname'];
 //username = email
$username = $_POST['email'];
 $password = $_POST['password'];
 $usertype = 'patient';

 $sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `password`, `usertype`) VALUES ('$firstname', '$lastname', '$username','$password', '$usertype')";

if ($conn->query($sql) === TRUE) {
    echo "Sign up successful, now please log-in";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//usertype

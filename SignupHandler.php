<?php

$dbhost = "sql12.freesqldatabase.com";
 $dbuser = "sql12337112";
 $dbpass = "yacY8zPDxP";
 $db = "sql12337112";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 $id = 'customerphp4';
 $firstname = $_POST['fname'];
 $lastname = $_POST['sname'];
 //username = email
$username = $_POST['email'];
 $password = $_POST['password'];

 $sql = "INSERT INTO `users`(`id`, `username`, `password`) VALUES ('$id','$firstname', '$lastname', $username','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Sign up successful, now please log-in";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
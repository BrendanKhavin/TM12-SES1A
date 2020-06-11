<?php

$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "password";
 $db = "sql12337112";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 $username = $_POST['email'];
 $password = $_POST['password'];

 $sql = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) == 1) {
//Pass
	while($row = $result->fetch_assoc()) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $usertype = $row['usertype'];
		if($usertype == "patient"){
			include("PAT-HomePage.htm");
		} else if($usertype == "Doctor"){
			include("DOC-HomePage.htm");
		}
	} 
}else {
	echo 'Incorrect username or password';
//Fail
}
//if ($conn->query($sql) === TRUE) {
  //  echo "Login Successful!";
//} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
///}


$conn->close();
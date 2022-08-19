<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$database = "users";

	//Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
//
// // Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	



	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];



	$req = "INSERT INTO users (email, fname, lname, username, pwd, logtime) values ('$email','$fname','$lname','$uname','$pwd',now())";


	if ($conn->query($req) === TRUE) {
		header("Location:index.php"); 
	} else {
		  echo "Error: " . $req . "<br>" . $conn->error;
	}
	



	

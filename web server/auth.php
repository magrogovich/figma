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

	



	$email = $_POST['name'];
	$pwd = $_POST['pass'];

	echo "$email $pwd";

	$req = "SELECT email,pwd FROM users WHERE email='$email' AND pwd='$pwd'";

	$res = $conn->query($req);

	if (mysqli_num_rows($res) == 1) {
		header("Location:map.php");
	} else {
		echo "email or password is uncorrect";
	}	


	
	



	

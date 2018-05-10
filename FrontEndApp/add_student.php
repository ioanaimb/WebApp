<?php
	// Get values from form  
	$firstName = $_POST["first_name"];
	$lastName = $_POST["last_name"];
	$address = $_POST["address"];
	$age = $_POST["age"];

	
	// Prepare db connection
	$servername = "localhost";
	$username = "root";
	$password = "student";
	$dbname = "clujschool";

	//Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	// Check connection
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

	// Prepare Stmt and bind values
	$stmt = $conn->prepare("INSERT INTO students (firstname,lastname,address,age) VALUES (?,?,?,?)");
	$stmt->bind_param("sssi",$firstName,$lastName,$address,$age);
	$stmt->execute();

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header('Location: students.php');
?>
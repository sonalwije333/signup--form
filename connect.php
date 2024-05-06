<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
	$Password = $_POST['Password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form(Name,   Email ,  Mobile , Password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $Email ,  $Mobile  ,  $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
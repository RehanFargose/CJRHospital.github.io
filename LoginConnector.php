<?php
	$email=$_POST['email'];
	$password=$_POST['password'];
	//Basic parameter to be connected

	$conn = new mysqli('localhost','root','','testlogin');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
		echo "There was an error establishing connection to the server";
	}
	else{
		$stmt=$conn->prepare("insert into loginbasic(email,password)values(?, ?)");
		$stmt->bind_param("ss",$email, $password);
		$stmt->execute();
		header("Location: PTreport.html");
		//echo "Login is successfull....";
		$stmt->close();
		$conn->close(); 



	}
?>
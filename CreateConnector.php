<?php
	$email=$_POST['email'];
	$password=$_POST['password'];
	$Name=$_POST['Name'];
	$date=$_POST['date'];
	//Basic parameter to be connected

	$conn = new mysqli('localhost','root','','testlogin');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("insert into createbasic(email,password,Name,date)values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$email, $password,$Name,$date);
		$stmt->execute();
		echo "Account created successfully....";
		$stmt->close();
		$conn->close(); 
 


	}
?>
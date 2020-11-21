<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$service=$_POST['service'];
	$DOB=$_POST['DOB'];
	//Basic parameter to be connected

	$conn = new mysqli('localhost','root','','testlogin');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("insert into servicesbasic(name,email,message,service,DOB)values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss",$name,$email,$message,$service,$DOB);
		$stmt->execute();
		echo "Request sent successfully....";
		$stmt->close();
		$conn->close(); 
 


	}
?>
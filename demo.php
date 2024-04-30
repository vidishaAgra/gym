<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$pincode = $_POST['pincode'];

	$server="localhost";
	$user="root";
	$password="";
	$db_name="userdatabase";
	
	
	$con = mysqli_connect($server,$user,$password,$db_name) or die("connection failed");

	//  $sql = "create table record(name varchar(30),phone int,email varchar(50),password varchar(50),state varchar(30),country varchar(50),pincode varchar(50))";

	$sql="insert into record(name,phone,email,password,state,country,pincode) values('$name','$phone','$email','$password','$state','$country','$pincode')";

	if(mysqli_query($con, $sql)) {
		// If the query is successful, redirect to a new HTML page
		header("Location:thankyou.html");
		// exit(); // Make sure to exit after the header to prevent further execution
	} else {
		echo "Record insertion failed";
	}
	
?>
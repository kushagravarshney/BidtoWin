<?php

	session_start();

	$con = mysqli_connect('localhost' , 'root' , '');
	mysqli_select_db($con,'signin'); //Enter database name

	$name = $_POST['username'];
	$pass = $_POST['password'];

	$s = "select * from logintable where name = '$name'";//enter table name

	$result = mysqli_query($con ,$s);

	$num = mysqli_num_rows($result);

	if($num == 1){
		$_SESSION['username'] = $name;
		header('location:index1.php');
	}
	else{
		header('location:buy.html');
	}
?>
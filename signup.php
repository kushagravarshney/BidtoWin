<?php

	session_start();

	$con = mysqli_connect('localhost' , 'root' , '');
	mysqli_select_db($con,'signin'); //Enter database name

	$name = $_POST['username'];
	$dob = $_POST['birthdate'];
	$gen = $_POST['gender'];
	$email = $_POST['email'];
	$pnum = $_POST['phonenum'];
	$pass = $_POST['password'];

	$s = "select * from logintable where name = '$name' ";//enter table name

	$result = mysqli_query($con ,$s);

	$num = mysqli_num_rows($result);

	if($num == 1){
		header('location:index3.html');
	}
	else{
		$reg = "insert into logintable(name,dob,gen,email,pnum,pass) values('$name',$dob,'$gen','$email',$pnum,'$pass')";//enter table name
		mysqli_query($con, $reg);
		header('location:index2.html');
	}
?>
<?php

session_start();
header('lacation:login.php');

$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'new_register');

$s="select * from userlogin where name='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if ($num==1) {
	$_SESSION['err']="Username Already taken";
}else{
	$reg="insert into userlogin(name,password,email) values('$name','$pass','$email')";
	mysqli_query($con,$reg);
	$_SESSION['err']="registered successfully";
}




?>
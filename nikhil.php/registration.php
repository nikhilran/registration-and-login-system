<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'ugn');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from uttable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Usename Already Taken";
}else{
	$reg= " insert into uttable(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}

?>	
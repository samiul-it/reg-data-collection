<?php
require_once('connection.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
echo $fname;
echo $lname;
echo $gender;
echo $email;
echo $password;


$sql = "INSERT INTO reglist (id,firstname,lastname,email,password,gendar,age,religion,phone,country,expectation,salary,url) VALUES ('','$fname','$lname','$email','$password','$gender','','','','','','','')";
 $result=mysqli_query($conn, $sql);
 if($result)
{
	header("Location: login-front.php");
}
else
{
	echo "Error :".$sql;
}
?>
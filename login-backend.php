
<?php

require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];


$password = MD5($pwd);

$sql = "SELECT * FROM reglist WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
   echo "Success...!";
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$email = $row["email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
   
	header("Location: welcome.php");
}
else
{
   
   echo "<div class='jumbotron'> <h1> Log in Unsuccessful </h1>";
   echo "Your email:".$email;
	echo "<br>Invalid Credentials </div>";
   
}
?>
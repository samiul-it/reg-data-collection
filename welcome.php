<link rel="stylesheet" href="style.css">
<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');


$id = $_SESSION['id'];

//echo "ID=". $id;







$fname = $lname = $email = $gender = $age=$religion=$phone=$country=$expectation=$salary=$img='';
$sql = "SELECT * FROM reglist WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["firstname"];
		$lname = $row["lastname"];
		$email = $row["email"];
		$gender = $row["gendar"];
		$age=$row["age"];
		$religion=$row["religion"];
		$phone=$row["phone"];
		$country=$row["country"];
		$expectation=$row["expectation"];
		$salary=$row["salary"];
		$img=$row["url"];
		$useform=require ('profile.php');
		

	}
}
	
?>
<div class="jumbotron">
	<center>
		<div class="alert alert-warning" role="alert">
		<h1>Welcome <?php echo $fname." ".$lname; ?></h1>
		</div>
		<div class="alert alert-dark" role="alert">
		<h2>Email: <?php echo $email  ?></h2>
		</div>
		
		<!-- <?php include ('profile.php');?> -->
		
		<h3><?php echo $img;  ?> <span class="badge bg-secondary">New</span></h3>
		<h2></h2>
		<!-- <a href="logout.php">Logout</a> -->
		<a href="logout.php"><button type="button" class=" btn btn-outline-info">Log Out</button></a>
	</center>
</div>

<div class="jumbotron">
	<center>
	<table class="table table-hover">
	<tr>
	
		<td class="table-primary">FirstName:<?php echo $fname ?></td>
		<td class="table-secondary">LastName:<?php echo $lname ?></td>
		<td class="table-success">Age:<?php echo $age ?></td>
		<td class="table-danger">Gender:<?php echo $gender ?></td>
		<td class="table-warning">Nationality:<?php echo $country ?></td>
		<td class="table-info">Contact Number:<?php echo $phone ?></td>
		<td class="table-light">Expectation:<?php echo $expectation ?></td>
		<td class="table-dark">Salary:<?php echo $salary ?></td>
	</tr>
	</table>
	</center>
	<br><br><br>
</div>
<?php 
	//$session_control=session_status();
	// if(session_status()==2){
	// 	//echo "Session Statsu : ->".session_status();
	// 	//echo "Form Will be here";
	// }
	// else {
	// 	echo "Please Log in to Your account";
	// }

	//include ('profile.php');
	include ('footer.php');

?>
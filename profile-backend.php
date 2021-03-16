<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry New Parcel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="jumbotron">
    <center>
    <h1 >Your Informations Submitted Successfully...</h1>
    <a href="welcome.php"><button class="btn btn-info">Back To Profile</button></a>
    
    </center>
    
    </div>
</body>
</html>

<?php 
require_once('connection.php');
require_once('welcome.php');

$age=$_POST['age'];
$religion=$_POST['religion'];
$phone=$_POST['number'];
$country=$_POST['country'];
$expect=$_POST['expect'];
$url=$_POST['url'];
$salary=$_POST['salary'];
echo $id;


// echo $age;
// echo $phone;
// echo $religion;
// echo $salary;
// echo $country;
// echo $expect;
// echo $salary;

$sql = "UPDATE reglist 
SET age = '$age',religion='$religion',phone='$phone',country='$country',expectation='$expect',salary='$salary',url='$url'
WHERE id = $id";
 $result=mysqli_query($conn, $sql);

//include('profile-view.php');

?>
<?php
//header("Location: http://localhost/phpregsys/welcome.php");
//exit();
?>


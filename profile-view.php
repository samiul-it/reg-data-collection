<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Parcels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>


<?php
require_once('connection.php');
echo "<h1> Your Information </h1>";

$sql="select * FROM profiles";
$res=mysqli_query($conn,$sql);
?>
<html>
<body>
<button align="center" onclick="myFunction()">Make a Print Copy</button>
<script>
function myFunction() {
window.print();
}
</script>
<table align="center" border="1">
<tr>
<td>ID</td>
<td>Age</td>
<td>Phone</td>
<td>Religion</td>
<td>Country</td>
<td>Expectation</td>
<td>Salary</td>

</tr><?php
while($row=mysqli_fetch_assoc($res))
{ ?>
<tr>
<td ><?php echo $row["id"]; ?> </td>
<td ><?php echo $row["age"]; ?> </td>
<td ><?php echo $row["phone"]; ?> </td>
<td ><?php echo $row["religion"]; ?> </td>
<td ><?php echo $row["country"]; ?> </td>
<td ><?php echo $row["expectation"]; ?> </td>
<td ><?php echo $row["salary"]; ?> </td>
<!-- <td ><?php echo $row["date"]; ?> </td>
<td ><?php echo $row["code"]; ?> </td>
<td ><?php echo $row["status"]; ?> </td> -->
</tr>
<?php
}
?>
</table>
</body>
</html>
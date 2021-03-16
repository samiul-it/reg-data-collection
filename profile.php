<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Information</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="jumbotron">

    <center>
    <h1>Enter Your Infromations</h1>
    <div class="jumbotron">
    <form action="profile-backend.php" method="POST">

<label>Enter Your Age:  </label>
<input  type="number" name="age" >

<span>Religion:</span>
<input type="text" name="religion">
<br>
<span>Phone Number:</span>
<input type="number" name="number" required>

<span >Nationality:</span>
<input type="text" name="country">
<br>
<span>Expectations :</span>
<input type="text" name="expect">

<span>Salary:</span>
<input type="number" name="salary" required>
<br>
<span>Image URL:</span>
<input type="text" name="url" >
<br>
<label class="form-check-label" for="invalidCheck2">
         <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>Confirm Informations?
      </label>
<button type="submit" class="btn btn-info">Enter</button>



</form>
    </div>
    </center>
    </div>

    
    
</body>
</html>
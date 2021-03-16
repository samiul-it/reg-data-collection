<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');


?>
<?php 
		
    echo "Checking a php Session:".session_status();
    // echo "Session:".session_status() == PHP_SESSION_ACTIVE ;
  ?>
<div class="jumbotron">
  <center>
<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="admin-login-backend.php">
	<h1>Admin Login</h1>
	
  <div class="d-grid gap-2">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tok">Token:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="token" id="tok" placeholder="Enter Admin Token" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
      
    </div>
  </div>
  </div>
</form>
<button type="submit" name="" class="btn btn-danger">Forgot Password?</button>

</div>
</center>
</div>
<?php include ('footer.php'); ?>
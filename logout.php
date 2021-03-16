
<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
session_unset();
session_destroy();
header("Location: login-front.php");
echo "Checking a php Session isITOK?->:".session_status();
?>
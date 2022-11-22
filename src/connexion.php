<?php
$servername               = "localhost";
$username                 = "root";
$password                 ="";
$database                 ="instruments_de_music";

$con                      = mysqli_connect($servername, $username, $password, $database);
if ($con->connect_errno) {
    echo("Connection failed: " . $con->connect_error);
  }
 
  




?>



<?php
$servername               = "localhost";
$username                 = "root";
$password                 ="";
$database                 ="instruments_de_music";
global $con;
$con                      = new mysqli($servername, $username, $password, $database);
if ($con->connect_errno) {
    echo("Connection failed: " . $con->connect_error);
  }
 
  




?>



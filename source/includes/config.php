<?php
// Step 1: Create Database Connection


$host = $_SERVER['HTTP_HOST'];

if ($host == 'localhost:8888') {
  // Local database credentials
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'root';
  $dbname = 'portfolio';
}
else {
  // Remote database credentials
  $dbhost = "localhost";
  $dbuser = "vlstewar_idm232";
  $dbpass = "LAL(S[!q~xBr";
  $dbname = "vlstewar_idm232";
}



$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check the connection is good with no errors
if (mysqli_connect_errno()) {
    die('Database connection failed: '.
    mysqli_connect_error().
    ' ('.mysqli_connect_errno().')'
  );
}



function redirect_to($location)
{
    header('Location: '.$location);
    exit;
}
?>
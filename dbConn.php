<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fwm";
//$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} */
$db = mysqli_connect($servername, $username, $password, $dbname);
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
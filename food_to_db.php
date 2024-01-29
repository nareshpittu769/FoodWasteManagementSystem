<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fwm";

$food_num=$_POST["food_num"];
$food_quantity=$_POST["food_quantity"];
$prep_time=$_POST["prep_time"];
$exp_time=$_POST["exp_time"];
$foodtype=$_POST["foodtype"];
$nutricous_type=$_POST["nutricous_type"];
$Food_des=$_POST["Food_des"];

 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO food_details(No_of_items,Food_quantity,Prep_time,Exp_time,Food_Category,Nutricious_level,Food_description) VALUES ('$food_num','$food_quantity','$prep_time','$exp_time','$foodtype','$nutricous_type','$Food_des')";

if ($conn->query($sql) === TRUE) {
  echo "Data Submitted Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


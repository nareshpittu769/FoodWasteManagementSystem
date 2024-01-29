<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fwm";
$id=0;
$org_name=$_POST["org_name"];
$org_head=$_POST["org_head"];
$email=$_POST["email"];
$Pno=$_POST["phonenumber"];
$pwd=$_POST["password"];
$address=$_POST["address"];

 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ngo_registrations(id,NGO_Name,NGO_Headname,Email_id,Phone_Number,Password,Address) VALUES ('$id','$org_name','$org_head','$email','$Pno','$pwd','$address')";

if ($conn->query($sql) === TRUE) {
  echo "Data Submitted Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


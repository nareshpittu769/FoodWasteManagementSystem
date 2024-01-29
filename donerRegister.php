<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fwm";
$id=0;
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$Pno=$_POST["phonenumber"];
$pwd=$_POST["password"];
$orgname=$_POST["organizationname"];
$orgtype=$_POST["organizationtype"];
$address=$_POST["address"];
$subject = "FWM registration";
$message = "<i>Hello $fname,You have successfully registered for Food Wastage Management System.<br>Njoyy the experience of online donation!!!</i>";
$headers = "From: vikaschowdary2401@gmail.com";
 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO donar_registrations(id,First_Name,Last_Name,Email_id,Phone_Number,Password,Organization_Name,Organization_Type,Address) VALUES ('$id','$fname','$lname','$email','$Pno','$pwd','$orgname','$orgtype','$address')";

if ($conn->query($sql) === TRUE) {
  if(mail($email,$subject,$message,$headers)){
    echo "Email sucessfully sent to $email";
  }
  else{
    echo "Email sending failed";
  }
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
/*?>

$to = "$email";

/*$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";*/

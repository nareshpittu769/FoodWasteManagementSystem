<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fwm";
$email=$_POST["Email"];
$pwd=$_POST["Password"];
//
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql =" SELECT * FROM users1 WHERE Email='$email' and Password='$pwd' ";
$res= mysqli_query($conn, $sql);
if(empty($res)){
    
    header("Location: home.html");
    exit();
}
else{
    alert("Invalid crredentials!! Try again!!");
    exit();
}
$sql1 =" SELECT * FROM users1 WHERE Email='$email' and Password='$pwd' and Type='donor' ";
$res1= mysqli_query($conn, $sql1);
if(empty($res1)){
    header("Location: ngo_home.html");
    exit();
}
else{
    alert("Invalid crredentials!! Try again!!");
    exit();
}
mysqli_close($conn);
?>
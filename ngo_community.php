<!DOCTYPE html>
<html>
<head>
  <style>
      body{
        background-image:url("https://image.shutterstock.com/image-illustration/golden-3d-room-background-260nw-1124770811.jpg");
        background-repeat:no-repeat;
        background-size:100%;
      }
    table{
        margin-left:100px;
        margin-right:90px;
        margin-top:40px;
        background-color:rgba(0,0,0,0.511);
        background: rgba( 255, 255, 255, 0.1 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
    }
  </style>
</head>
<body>

<h1 align="center">NGO COMMUNITY</h1>

<table border="2" align="center" cellspacing="5" cellpadding="5" width="85%">
  <tr>
    <td><b>Sno</b></td>
    <td><b>Organization Name</b></td>
    <td><b>Organization Head</b></td>
    <td><b>Email_Id</b></td>
    <td><b>Phone Number</b></td>
    <td><b>Address</b></td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from ngo_registrations"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['NGO_Name']; ?></td>
    <td><?php echo $data['NGO_Headname']; ?></td>
    <td><?php echo $data['Email_id']; ?></td>
    <td><?php echo $data['Phone_Number']; ?></td>
    <td><?php echo $data['Address']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
<?php
include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from donar_registrations"); // fetch data from database


while($data = mysqli_fetch_array($records))
{

  
     $n=$data['First_Name'];
     $e=$data['Email_id'];
     $p=$data['Password']; 
     $t="donar";
     $sql ="INSERT INTO USERS1 (Name,Email_id,Password,Type) VALUES('$n','$e','$p','$t')";
     if ($db->query($sql) === TRUE) {
        $flag=1;
    }
    else{
        $flag=0;
    }
}
if($flag==1){
  echo "user database is set!!";
}
else{
  echo "Error: " . $sql . "<br>" . $db->error;
}
     
$NGOrecords = mysqli_query($db,"select * from ngo_registrations");
while($data = mysqli_fetch_array($NGOrecords))
{

     $n1=$data['NGO_Headname'];
     $e1=$data['Email_id'];
     $p1=$data['Password']; 
     $t1="NGO";
     $sql ="INSERT INTO USERS1 (Name,Email_id,Password,Type) VALUES('$n1','$e1','$p1','$t1')";
     if ($db->query($sql) === TRUE) {
          $flag=1;
    }
    else{
          $flag=0;
    }
}
if($flag==1){
    echo "user database is set!!";
}
else{
    echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();     
?>
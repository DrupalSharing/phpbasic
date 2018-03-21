
<?php

require 'database.php';
$database = new database(); // calling constractor function of class database

$conn = $database->dbConnect(); 


$uid = $_REQUEST['uid'];
$op = $_REQUEST['op'];

$firstname = $_REQUEST['firstname'];
$email = $_REQUEST['email'];
$psw = $_REQUEST['psw'];
$message = $_REQUEST['message'];

if (empty($uid)){
  $sql .= "INSERT INTO user (first_name, email, password, aboutme )
  VALUES ('".$firstname."', '".$email."', '".$psw."', '".$message."')";
 } 

else {
  if($op == 'edit' ){
  $sql = "UPDATE user SET first_name = '".$firstname."', email = '".$email."', password = '".$psw."', aboutme ='".$message."' WHERE uid = $uid ";
   } 

   else if($op == 'delete' ){
  $sql = "DELETE FROM user WHERE uid = $uid ";
   } 

  } 
//echo $sql ;
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();

header("Location:index.php");
die();
?>

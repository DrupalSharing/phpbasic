<!DOCTYPE html>
<html>
<head>
  <style>
  body {background-color: #ccffff;}
  h1 {color: blue;}
  </style>
</head>

<?php
require 'database.php';
$database = new database(); // calling constractor function of class database

$conn = $database->dbConnect(); 


$sql = "SELECT * FROM user";
$result = $conn->query($sql);

?>

<body>
<h1>Record list</h1>

<table >
  <tr>
    <th>First name</th>
    <th>Email</th> 
    <th>Password</th>
    <th>About Me</th>
  </tr>

<?php 
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <tr>   
    <td> <?php echo $row["first_name"] ?></td>
    <td> <?php echo  $row["email"]?> </td> 
    <td>*****</td>
    <td> <?php echo $row["aboutme"] ?> </td>
    <td>  <a href="edit.php?uid=<?php echo $row["uid"] ?>"> Edit </a>   </td>
    <td>  <a href="delete.php?uid=<?php echo $row["uid"] ?>"> Delete </a>   </td>


  </tr>
      
<?php      
    }
}
?>
  
</table>

<?php $conn->close(); ?>

<br> New Registration:
<a href="registration.php">Click here</a> <br> 

</body>

</html>
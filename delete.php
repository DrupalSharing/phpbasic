<!DOCTYPE html>
<html>
<head>
  <style>
  body {background-color: #ffe6cc;}
  h1 {color: blue;}
  </style>
</head>

<body>
<h1>Do you want to delete</h1>

<?php
 $uid = $_REQUEST['uid'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "userPortalDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user where uid = $uid";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<table>
  <tr>
    <th>First name</th>
    <th>Email</th> 
    <th>Password</th>
    <th>About Me</th>
  </tr>

<tr>   
    <td> <?php echo $row["first_name"] ?></td>
    <td> <?php echo  $row["email"]?> </td> 
    <td>*****</td>
    <td> <?php echo $row["aboutme"] ?> </td>
    
  </tr>

</table>
<form action="action_page.php?uid=<?php echo $row["uid"] ?>&op=delete" method="POST">

  <br>
  <input type="submit" value="Yes">
  <a href="index.php">Cancle</a> <br> 

</form> 

</body>
</html>
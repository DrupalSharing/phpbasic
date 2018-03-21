<!DOCTYPE html>
<html>
<head>
  <style>
  body {background-color: #e6ffe6;}
  h1 {color: blue;}
  </style>
</head>

<body>
<h1>Edit Form</h1>

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

<form action="action_page.php" method="POST">

  <input type="hidden" name="op" value="edit">
  <input type="hidden" name="uid" value="<?php echo $row["uid"] ?>">
  
  First name:
    <input type="text" name="firstname" value="<?php echo $row["first_name"] ?>" >
    <br>
    Last name:
    <input type="text" name="lastname">
    <br>    <br>

 Gender:  <br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
  <br>    <br>
School: 
  <select name=“Select”>
    <option value=“a”>A</option>
    <option value=“b”>B</option>
    <option value=“c”>C</option>
  </select>
  <br>    <br>
 Email Address:
    <input type="text" name="email" value="<?php echo $row["email"] ?>">
    <br>***Email address would be the user name for your account.<br>    <br>
 User password:
  <input type="password" name="psw" value="<?php echo $row["first_name"] ?>">
  <br>  <br>

 Upload Picture:
  <input type="file" name="pic" accept="image/*">
   
  <br><br>
About:(Write something about yourself) <br>
  <textarea name="message" rows="10" cols="30">
    <?php echo $row["aboutme"] ?>
  </textarea>

<br>
  <input type="checkbox" name="newsletter" value="newsletter"> I would like to get Newsletter<br>
  <input type="checkbox" name="accept" value="accept"> accept terms of condition <br>


  <br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
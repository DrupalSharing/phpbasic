<!DOCTYPE html>
<html>
<head>
  <style>
  body {background-color: #ccffff;}
  h1 {color: blue;}
  </style>
</head>

<body>
<h1>Registration Form</h1>

<form action="action_page.php" method="POST">
  First name:
    <input type="text" name="firstname">
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
    <input type="text" name="email">
    <br>***Email address would be the user name for your account.<br>    <br>
 User password:
  <input type="password" name="psw">
  <br>  <br>

 Upload Picture:
  <input type="file" name="pic" accept="image/*">
  
  <br><br>
About:(Write something about yourself) <br>
  <textarea name="message" rows="10" cols="30">
  </textarea>

<br>
  <input type="checkbox" name="newsletter" value="newsletter"> I would like to get Newsletter<br>
  <input type="checkbox" name="accept" value="accept"> accept terms of condition <br>


  <br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
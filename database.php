<?php

class database{

var $servername;
var $username;
var $password;
var $dbname;

public function database (){
	$this->servername = "localhost";
	$this->username = "root";
	$this->password = "root";
	$this->dbname = "userPortalDB";
}

public function dbConnect(){
// Create connection
	$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

	else return $conn;

  }

}
?>




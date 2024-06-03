<?php

$servername = "localhost";

$username = "root"; // user  name for the server

$password = ""; // password for the server

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}

?>
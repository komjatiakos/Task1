<?php 
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("<b>Connection failed: <b>" . $conn->connect_error . '<br/>');
}
//echo "Connected successfully" . '<br/>';
?>
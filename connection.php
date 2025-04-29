<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'hackx';

$conn = mysqli_connect($server, $username, $password, $db);

if ($conn) {
  echo "";
} else {
  echo 'no connection';
  die("No connection: " . mysqli_connect_error());
}

<?php 	

$localhost = "sql305.infinityfree.com";
$username = "if0_36530212";
$password = "RZFiykpzz8kOc";
$dbname = "if0_36530212_sinventoryphp";
//$store_url = "http://localhost/SimpleInventorySystem-PHP/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
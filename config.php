<?php 
$host = "sql310.epizy.com"; /* Host name */ 
$user = "epiz_34344088"; /* User */ 
$password = "VKn6nKAa23"; /* Password */ 
$dbname = "epiz_34344088_myproject"; /* Database name */ 
$con = mysqli_connect($host, $user, $password,$dbname); 
// Check connection 
if (!$con) { 
   die("Connection failed: " . mysqli_connect_error()); 
}
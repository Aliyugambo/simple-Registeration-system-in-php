<?php 

$mysql_savername = "localhost";
$mysql_name      = "root";
$mysql_password = "";

$db_name = "lab3";

$conn = mysqli_connect($mysql_savername,$mysql_name,$mysql_password,$db_name );

if (!$conn) {
	
	echo "connection failed!";
	exit();
}


 ?>
 
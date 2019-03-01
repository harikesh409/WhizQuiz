<?php
define('DB_HOST','localhost');
define('DB_USER','csi2k19');
define('DB_PASS','csi2k19');
define('DB_NAME','csi19');
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$conn){
	die("Connection error: " . mysqli_connect_errno());
}
?>
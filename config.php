<?php
define('DB_HOST','localhost');
define('DB_USER','epiz_23542810');
define('DB_PASS','9948584863');
define('DB_NAME','epiz_23542810_csi');
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$conn){
	die("Connection error: " . mysqli_connect_errno());
}
?>
<?php
require_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$query = "select * from users where email='$email' and password = '$password'";
$exec = mysqli_query($conn,$query);
$no_rows = mysqli_num_rows($exec);
if($no_rows>=1) {
    // echo "Success";
    header("Location: details.php");
} else {
    echo "Wrong credentials";
}
?>
<?php
require_once('config.php');
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<title>Quiz</title>
</head>
<body>
 <?php 
  include "navbar.php"; ?>
<?php

$query = "select * from questions";
$exec = mysqli_query($conn,$query);
$answers=array('null');
while($row=mysqli_fetch_array($exec)) {
	array_push($answers,$row['answer']);
}
// print_r($answers);
$score = 0;
foreach($_POST as $key => $value){
	$question = str_split($key);
	// echo $question[1] . " : " . $value . "<br />\r\n";
	if( !strcmp(strtolower(trim($value)), strtolower(trim($answers[$question[1]]))) ) {
		$score++;
	
	}
}
$email = $_SESSION['email'];
$query2="UPDATE `users` SET `isSubmitted`='1',`score`=$score where email='$email'";
$exec2 = mysqli_query($conn,$query2);
if($exec2) {
	echo "<h2 class='text-success text-center mt-5 display-2'>Thank you.</h2>";
	echo "<h4 class='text-success text-center'>Your answers have been submitted.</h4>";	
} else {
	echo "Error: ".mysqli_error($conn);
}
// echo $score;
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
require_once('config.php');
session_start();
?>
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
	if(!strcmp($value, $answers[$question[1]])) {
		$score++;
	}
}
$email = $_SESSION['email'];
$query2="UPDATE `users` SET `isSubmitted`='1',`score`=$score where email='$email'";
$exec2 = mysqli_query($conn,$query2);
if($exec2) {
	echo "Thank You";
} else {
	echo "Error: ".mysqli_error($conn);
}
// echo $score;
?>
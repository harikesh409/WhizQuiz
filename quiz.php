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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
  <img src="images/lendi.png" alt="lendi" width="100" height="80">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
		<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
	  </li>
	</ul>
    <button class="btn btn-outline-success my-2 my-sm-0" type="button"> <a href="logout.php">Log Out</a></button>  
  </div>
</nav>
<div class="container">
    <form action="result.php" method="post" class="mt-4" onsubmit="return onSubmit();">
    <?php 
        $query = "SELECT * FROM questions ORDER BY RAND()";
        $exec = mysqli_query($conn,$query) or die('error');
    while($row=mysqli_fetch_assoc($exec)) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>".$row['question']."</h5>";
        echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q1' value=".$row['option1'].">";
        echo "<label for='".$row['qid']."q1' class='ml-2'>".$row['option1']."</label>";
        echo "<br>";
        echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q2' value=".$row['option2'].">";
        echo "<label for='".$row['qid']."q2' class='ml-2'>".$row['option2']."</label>";
        echo "<br>";
        echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q3' value=".$row['option3'].">";
        echo "<label for='".$row['qid']."q3' class='ml-2'>".$row['option3']."</label>";
        echo "<br>";
        echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q4' value=".$row['option4'].">";
        echo "<label for='".$row['qid']."q4' class='ml-2'>".$row['option4']."</label>";
        echo "<br>";
        echo '</div>';
        echo '</div>';
        echo '<br>';
    }
    ?>     
    <br>
    <input type="submit" class="btn btn-block btn-outline-dark" value="Submit">
</div>
</form>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
  function onSubmit() {
    if(confirm('Are you sure?')) {
      return true;
    } else {
      return false;
    }
  }
  </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html> 
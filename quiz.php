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
    <form action="#" method="post" class="mt-4">
    <?php 
        $query = "SELECT * FROM `questions` ORDER BY RAND()";
    while($row=mysqli_fetch_rows($query)) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>$row['question']</h5>";
        echo "<input type='radio' name=$row['qid'] id=$row['qid']>";
        echo "<label>$row['option1']</label>";
        echo '</div>';
        echo '</div>';
    }
    ?>
    
    
        
        
            <h5 class="card-title">This is some text within a card body.</h5>
            <div>
            <input type="radio" name="1" id="1"> <label for="1">1</label><br>
            <input type="radio" name="1" id="2">2<br>
            <input type="radio" name="1" id="3">3<br>
            <input type="radio" name="1" id="4">4<br>
            </div>
        </div>
    </div>
</div>
    </form>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
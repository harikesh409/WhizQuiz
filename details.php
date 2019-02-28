<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>User Details</title>
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
<h2 class="mt-4">Candidate Details</h2>
<hr>
<form action="details.php" method="post">
<input type="text" class="form-control" name="name1" placeholder="Name of Member 1" required>
<br>
<input type="text" class="form-control" name="name2" placeholder="Name of Member 2">
<br>
<input type="text" class="form-control" name="college" placeholder="College Name" required>
<br>
<input type="submit" class="btn btn-outline-primary btn-block" name="submit" value="Submit">
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
  $name1 = $_POST['name1'];
  $name2 = $_POST['name2'];
  $college = $_POST['college'];
  $query = "INSERT INTO `user_details`(`Name1`, `Name2`, `College`) VALUES ('$name1','$name2','$college')";
  $exec = mysqli_query($conn,$query) or die("Error");
  if($exec) {
    // echo "Success";
    header("Location: quiz.php");
  }
}
?>
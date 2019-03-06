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
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>User Details</title>
</head>
<body>
  <?php
  include "navbar.php"; 
  if(!isset($_SESSION['email'])) {
    header("Location: index.php");
  } else {
    $email = $_SESSION['email'];
    $query2 = "SELECT * from users where email='$email'";
    $exec2 = mysqli_query($conn,$query2);
    $row = mysqli_fetch_array($exec2);
    if(strcmp($row['name1'], "")) {
      header("Location: instructions.php");
    }
  }
  ?>
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
  <script src="assets/jquery-3.3.1.min.js"></script>
  <script src="assets/popper.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
  $name1 = $_POST['name1'];
  $name2 = $_POST['name2'];
  $college = $_POST['college'];
  $email = $_SESSION['email'];
  $query = "UPDATE `users` SET `name1`='$name1',`name2`='$name2',`college`='$college' WHERE email='$email'";
  $exec = mysqli_query($conn,$query) or die("Error");
  if($exec) {
    $_SESSION['details']="true";
    header("Location: instructions.php");
  }
}
?>
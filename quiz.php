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
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<title>Quiz</title>
</head>
<body>
  <?php 
  include "navbar.php"; 
  if(!isset($_SESSION['email'])) {
    header("Location:index.php");
  } else {
    $email = $_SESSION['email'];
    $query2 = "SELECT * from users where email='$email'";
    $exec2 = mysqli_query($conn,$query2);
    $row = mysqli_fetch_array($exec2);
    if(!strcmp($row['isSubmitted'], "1")) {
      die("<h2 class='text-danger text-center mt-5 display-3'>Quiz already submitted</h2>");
    }
  }
  ?>
  <div id="overlay">
    <div class="card mx-auto text-center" style="width: 18rem;margin-top: 25%">
      <div class="card-body">
        <h3>Are you sure?</h3>
        <div class="p-3">
          <button class="btn btn-secondary" onclick="cancel()">Nope</button>
          <button class="btn btn-primary" onclick="submitTest()">Damn Sure!</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-8">
        <h2>Tech Whiz Quiz Round 1</h2>
      </div>
      <div class="col-md-*">
       <!--  <div id="countdowntimer"><span class="px-3" id="ms_timer"></span></div> -->
       <div id="countdown"></div>
       <div class="count"></div>
     </div>
   </div>
   <hr>
   <form action="result.php" method="post" class="mt-4">
    <?php 
    $query = "SELECT * FROM questions ORDER BY RAND()";
    $exec = mysqli_query($conn,$query) or die('error');
    $i=1;
    while($row=mysqli_fetch_assoc($exec)) {
      echo '<div class="card">';
      echo '<div class="card-body">';
      echo "<h5 class='card-title'>".$i++.". ".$row['question']."</h5>";
      echo "<div class='row'>";
      echo "<div class='col-6 inputGroup'>";
      echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q1' value='".$row['option1']."''>";
      echo "<label for='".$row['qid']."q1' class='ml-2'>".$row['option1']."</label>";
        // echo "<br>";
      echo "</div>";
      echo "<div class='col-6 inputGroup'>";
      echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q2' value='".$row['option2']."''>";
      echo "<label for='".$row['qid']."q2' class='ml-2'>".$row['option2']."</label>";
        // echo "<br>";
      echo "</div></div>";
      echo "<div class='row'>";
      echo "<div class='col-6 inputGroup'>";
      echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q3' value='".$row['option3']."''>";
      echo "<label for='".$row['qid']."q3' class='ml-2'>".$row['option3']."</label>";
        // echo "<br>";
      echo "</div>";
      echo "<div class='col-6 inputGroup'>";
      echo "<input type='radio' name='q".$row['qid']."' id='".$row['qid']."q4' value='".$row['option4']."''>";
      echo "<label for='".$row['qid']."q4' class='ml-2'>".$row['option4']."</label>";
      echo "</div></div>";
        // echo "<br>";
      echo '</div>';
      echo '</div>';
      echo '<br>';
    }
    ?>     
    <br>
    <input type="button" class="btn btn-block btn-outline-dark m-3" value="Submit" onclick="verifySubmit()">
  </div>
</form>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.time-to.min.js"></script>
<link rel="stylesheet" type="text/css" href="timeTo.css" />
<script>
  $(document).ready(function() {
    window.history.pushState(null, "", window.location.href);        
    window.onpopstate = function() {
      window.history.pushState(null, "", window.location.href);
    };
  });
  let switchCount=1;
  $(window).blur(function() {
    if(switchCount==3) {
      submitTest();
    } else {
      alert(`Warning ${switchCount}: Do not switch to other tabs! Another ${3-switchCount} tries will get you disqualified.`);
      switchCount++;
    }
  });

  if (window.performance) {
    console.info("window.performance works fine on this browser");
  }
  if (performance.navigation.type == 1) {
   submitTest();
} else {
  console.info( "This page is not reloaded");
}
$('#countdown').timeTo({
  countdownAlertLimit:60,
  seconds: 20 * 60,
  theme: "black",
  fontSize: 38,
  displayHours:false,
  callback:submitTest
});
function verifySubmit() {
  $("#overlay").show();
}
function cancel() {
  $("#overlay").hide();
}
function submitTest() {
  $("form").submit();
}
</script>
<script src="assets/popper.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
</body>
</html> 
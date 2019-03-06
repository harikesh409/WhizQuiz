<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Finals Round 2</title>
	<style>
	.card {
		margin-top: 10%;
	}
</style>
</head>
<body>
	<?php include "../navbar.php"; ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div>
				<div class="card fat">
					<div class="card-body">
						<h2 class="card-title text-center">Instructions for Round 2</h2>
						<hr>
						<ul style="font-size: 20px;">
							<li>Each team will get <b>3 questions</b>.</li>
							<li><b>30 seconds</b> will be given for each question.</li>
							<li>Points will be awarded based on the category of the question selected by the participant.</li>
							<li>Points are allotted as <b>10</b>, <b>20</b> and <b>40</b> marks for the correct answers and <b>half</b> of the marks will be deduced for a wrong answer.</li>
							<li>If the question is passed, <b>half</b> of the original points will be awarded for correct answer.</li>
						</ul>
						<button class="btn btn-outline-primary btn-block" onclick="proceed();">Start</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../assets/jquery-3.3.1.min.js"></script>
	<script>
		function proceed() {
			window.location="round2.php";
		}
	</script>
	<script src="../assets/popper.min.js"></script>
	<script src="../assets/bootstrap.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Semi Finals Round 1</title>
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
						<h2 class="card-title text-center">Instructions for Round 1</h2>
						<hr>
						<ul style="font-size: 20px;">
							<li><b>5</b> different topics are displayed.</li>
							<li>Participants can choose <b>1</b> topic from the displayed topics.</li>
							<li><b>6</b> questions are displayed from the choosen topic one after the other and there will not be any options.</li>
							<li>Time allocated for each question is <b>30 seconds</b>.</li>
							<li>For each correct answer you will be awarded <b>10 points.</b></li>
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
			window.location="round1.php";
		}
	</script>
	<script src="../assets/popper.min.js"></script>
	<script src="../assets/bootstrap.min.js"></script>
</body>
</html>
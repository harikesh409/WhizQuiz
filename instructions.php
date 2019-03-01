<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<title>Instructions</title>
	<style>
	.card {
		margin-top: 10%;
	}
</style>
</head>
<body>
	<?php 
	include "navbar.php";
	if(isset($_SESSION['proceed'])) {
		header("Location: quiz.php");
	}
	?>
	<div class="container ">
		<div class="row justify-content-md-center">
			<div>
				<div class="card fat">
					<div class="card-body">
						<h2 class="card-title text-center">Instructions</h2>
						<ul style="font-size: 20px;">
							<li>Total time for the quiz is 	</li>
							<li>Do not switch between tabs.</li>
							<li>Switching tabs 3 times intentionally/unintentionally will get you disqualified.</li>
							<li>Refreshing the page will submit your quiz.</li>
						</ul>
						<button class="btn btn-outline-primary btn-block" onclick="proceed();">Proceed</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		function proceed() {
			window.location="quiz.php";

			<?php  
			$_SESSION['proceed']=true;
			$_SESSION['last_action'] = time();
			?>
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
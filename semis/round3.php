<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Semi Finals - Round 3</title>
	<style>
	.mySlides {display: none}
	.slideshow-container img {vertical-align: middle;
		height: 500px;
	}
	.slideshow-container {
		max-width: 1000px;
		position: relative;
		margin: auto;
	}
	.text {
		font-size: 30px;
		padding: 8px 12px;
		text-align: center;
	}
	.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
	}
	.card {
		margin-top: 10%;
	}
	.hide {
		display: none;
	}
</style>
</head>
<body>
	<?php include "../navbar.php"; ?>
	<div class="container" id="intro">
		<div class="row justify-content-md-center">
			<div>
				<div class="card fat">
					<div class="card-body">
						<h2 class="card-title text-center">
							Instructions for Round 3
						</h2>
						<hr>
						<ul style="font-size: 20px">
							<li>Each team will get <b>2</b> questions.</li>
							<li><b>30 seconds</b> will be given for each question and <b>5 seconds</b> for the pass question.</li>
							<li><b>10 points</b> will be awarded for each correct answer and <b>5 points</b> will be deducted for wrong answer.</li>
							<li><b>5 points</b> will be awarded for correct answer of a pass question.</li>
						</ul>
						<button onclick="start()" class="btn btn-secondary btn-block">Start</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container my-4" id="round3">
		<h4>Semi Finals - Round 3</h4>
		<hr>
		<div class="slideshow-container">
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Which company developed the first GUI OS?</h2>
				<div class="text hide text-success">Apple</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Radio?</h2>
				<div class="text hide text-success">Gurglielmo Marconi</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Elevator?</h2>
				<div class="text hide text-success">Elisha Otis</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who proposed Theory of Evolution?</h2>
				<div class="text hide text-success">Charles Darwin</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Printing Press?</h2>
				<div class="text hide text-success">John Gutenberg</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Cotton Gin?</h2>
				<div class="text hide text-success">Eli Whitney</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Internet?</h2>
				<div class="text hide text-success">Vint Cerf</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented WWW?</h2>
				<div class="text hide text-success">Tim Berner Lee</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Pendulum Clock?</h2>
				<div class="text hide text-success">Christiaan Huygens</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who created Email?</h2>
				<div class="text hide text-success">Shiva Ayyuddurai or Tomlinson</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Telegraph?</h2>
				<div class="text hide text-success">Samuel Morse</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Laptop?</h2>
				<div class="text hide text-success">Osborne</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented Dynamite?</h2>
				<div class="text hide text-success">Alfred Nobel</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who invented X-ray?</h2>
				<div class="text hide text-success">Wilhelm Conrad Roentgen</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who discovered DNA structure?</h2>
				<div class="text hide text-success">James Dewey Watson</div>
			</div>
			<div class="mySlides card mt-0 p-3 text-center">
				<h2>Who discovered Radium?</h2>
				<div class="text hide text-success">Marie Sklodowska Curie</div>
			</div>
			<div class="mySlides text-center">
				<h2 class="text-success display-4">Thank you for participating.<br> Please await for results.</h2>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<button class="btn btn-block btn-outline-primary next" onclick="plusSlides(1)">Next Question</button>
			</div>
			<div class="col-md-6">
				<button class="btn btn-block btn-outline-primary" onclick="showAnswer(1)">Show Answer</button>
			</div>
		</div>
	</div>
	<script src="../assets/jquery-3.3.1.min.js"></script>
	<script>

		var slideIndex = 1;
		showSlides(slideIndex);
		function showAnswer(n) {
			let ans = $(".text")[slideIndex-1];
			$(ans).show();
		}
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			if (n > slides.length-1) {
				// slideIndex = 1;
				$(".next").prop('disabled',true);
			}    
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slides[slideIndex-1].style.display = "block";  

		}
		$(document).ready(function(){
			$("#round3").hide();
		});
		function start() {
			$("#intro").hide();
			$("#round3").show();
		}
	</script>
	<script src="../assets/popper.min.js"></script>
	<script src="../assets/bootstrap.min.js"></script>
</body>
</html>
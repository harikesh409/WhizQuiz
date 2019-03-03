<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
</style>
</head>
<body>
	<?php include "../navbar.php"; ?>
	<div class="container" id="intro">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="card fat">
					<div class="card-body">
						<h2 class="card-title text-center">
							Welcome to Semi Finals Round 3
						</h2>
						<button onclick="start()" class="btn btn-secondary btn-block">Start</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container my-4" id="round2">
		<h4>Semi Finals - Round 3</h4>
		<hr>
		<div class="slideshow-container">
			<div class="mySlides ">
				<div class="numbertext">1 / 3</div>
				<img src="images/1.png" style="width:100%">
				<div class="text">Caption Text</div>
			</div>
			<div class="mySlides ">
				<div class="numbertext">2 / 3</div>
				<img src="images/2.png" style="width:100%">
				<div class="text">Caption Two</div>
			</div>
			<div class="mySlides ">
				<div class="numbertext">3 / 3</div>
				<img src="images/csi.png" style="width:100%">
				<div class="text">Caption Three</div>
			</div>
		</div>
		<button class="btn btn-block btn-outline-primary" onclick="plusSlides(1)">Next Question</button>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			if (n > slides.length) {
				slideIndex = 1;
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
			$("#round2").hide();
		});
		function start() {
			$("#intro").hide();
			$("#round2").show();
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Semi Finals - Round 2</title>
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
							Instructions for round 2
						</h2>
						<hr>
						<ul style="font-size: 20px;">
							<li><b>4</b> questions on Logos and <b>4 </b>questions Taglines are given for each team.(2+2)</li>
							<li>Each team should nominate <b>only one</b> person to answer this round.</li>
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
	<div class="container my-4" id="round2">
		<h4>Semi Finals - Round 2</h4>
		<hr>
		<div class="slideshow-container">
			<div class="mySlides">
				<img src="images/1.jpg" style="width:100%">
				<div class="text hide">HTC</div>
			</div>
			
			<div class="mySlides">
				<img src="images/2.jpg" style="width:100%">
				<div class="text hide">Citroën</div>
			</div>
			
			<div class="mySlides">
				<img src="images/3.jpg" style="width:100%">
				<div class="text hide">UNICEF</div>
			</div>
			
			<div class="mySlides">
				<img src="images/4.jpg" style="width:100%">
				<div class="text hide">Olay</div>
			</div>
			
			<div class="mySlides">
				<img src="images/5.jpg" style="width:100%">
				<div class="text hide">Philips</div>
			</div>
			
			<div class="mySlides">
				<img src="images/6.jpg" style="width:100%">
				<div class="text hide">Baidu</div>
			</div>
			
			<div class="mySlides">
				<img src="images/7.jpg" style="width:100%">
				<div class="text hide">Rolex</div>
			</div>
			
			<div class="mySlides">
				<img src="images/8.jpg" style="width:100%">
				<div class="text hide">Barclays</div>
			</div>
			
			<div class="mySlides">
				<img src="images/9.jpg" style="width:100%">
				<div class="text hide">IMDB</div>
			</div>
			
			<div class="mySlides">
				<img src="images/10.jpg" style="width:100%">
				<div class="text hide">TripAdvisor</div>
			</div>
			
			<div class="mySlides">
				<img src="images/11.jpg" style="width:100%">
				<div class="text hide">ShopClues</div>
			</div>
			
			<div class="mySlides">
				<img src="images/12.jpg" style="width:100%">
				<div class="text hide">Flipboard</div>
			</div>
			
			<div class="mySlides">
				<img src="images/13.jpg" style="width:100%">
				<div class="text hide">ZoomCar</div>
			</div>
			
			<div class="mySlides">
				<img src="images/14.jpg" style="width:100%">
				<div class="text hide">XBox</div>
			</div>
			
			<div class="mySlides">
				<img src="images/15.jpg" style="width:100%">
				<div class="text hide">Spotify</div>
			</div>
			
			<div class="mySlides">
				<img src="images/16.jpg" style="width:100%">
				<div class="text hide">Bently</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Impossible is Nothing</h2>
				<div class="text hide text-success">Addidas</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Born Tough</h2>
				<div class="text hide text-success">Ceat</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Delighting you always</h2>
				<div class="text hide text-success">Canon</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Don't dream it, drive it.</h2>
				<div class="text hide text-success">Jaguar</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Your potential. Our passion</h2>
				<div class="text hide text-success">Microsoft</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Finger Lickin' Good</h2>
				<div class="text hide text-success">KFC</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Think different</h2>
				<div class="text hide text-success">Apple</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Definitely male</h2>
				<div class="text hide text-success">Bajaj Pulsar</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>New thinking, new possibilities</h2>
				<div class="text hide text-success">Hyundai</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Make. Believe</h2>
				<div class="text hide text-success">Sony</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Fly the good times</h2>
				<div class="text hide text-success">Kingfisher airlines</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>It gives you wiiings</h2>
				<div class="text hide text-success">Red Bull</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Because you're worth it</h2>
				<div class="text hide text-success">L'Oréal</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Just do it</h2>
				<div class="text hide text-success">Nike</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>The world's local bank</h2>
				<div class="text hide text-success">HSBC</div>
			</div>
			<div class="mySlides card m-0 text-center p-3">
				<h2>Ideaa for life</h2>
				<div class="text hide text-success">Panasonic</div>
			</div>
			<div class="mySlides">
				<a href="round3.php">Proceed to Round 3.</a>
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
			$("#round2").hide();
		});
		function start() {
			$("#intro").hide();
			$("#round2").show();
		}
	</script>
	<script src="../assets/popper.min.js"></script>
	<script src="../assets/bootstrap.min.js"></script>
</body>
</html>
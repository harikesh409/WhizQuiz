<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Semi Finals - Round 1</title>
	<style>
	.card {
		margin-top: 10%;
	}
	.category {
		height: 80px;
		text-transform: capitalize;
	}
	.hide {
		display: none;
	}
</style>
</head>
<body>
	<?php include "../navbar.php"; ?>
	<div class="container" id="category">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="card fat">
					<div class="card-body">
						<h2 class="card-title text-center">
							Welcome to Semi Finals Round 1
						</h2>
						<h2>Select your category</h2>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="sports">sports</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="current">current affairs</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="GK">GK</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="Politics">Politics</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="set">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="card fat">
					<div class="card-body">
						<h2>Select set number</h2>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block set" data-set="1">1</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block set" data-set="2">2</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block set" data-set="3">3</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block set" data-set="4">4</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-outline-primary btn-block set" data-set="5">5</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="questions">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title text-center question"></h2>
			</div>
		</div>
		<br>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		let current1 = ['abcd','efgh','ijklmn'];
		let current2=['123','456','789'];
		let GK1 = ['gk1','gk2','gk3','gk4'];
		$(document).ready(function() {
			$("#set").hide();
			$("#questions").hide();
		});
		$(".category").click(function(event) {
			let category = $(this).data("category");
			$("#category").hide();
			$("#set").show();
			$(".set").click(function(event) {
				let set = $(this).data("set");
				let selected = category+set;
				console.log(selected);
				$("#set").hide();
				$("#questions").show();
				$("#questions").append(`<button class="btn btn-outline-primary btn-block" onclick="nextQuestion(${selected})">Next Question</button>`);

				$(".question").html(eval(selected)[0]);
			});
		});
		function getNextIdx(idx=0) {
			return (idx + 1);
		}
		let idx;
		function nextQuestion(selectedQuestion) {
			idx = getNextIdx(idx);
			$(".question").html(eval(selectedQuestion)[idx]);			
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
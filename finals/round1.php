<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Finals - Round 1</title>
	<style>
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
							Welcome to Finals Round 1
						</h2>
						<button onclick="start()" class="btn btn-secondary btn-block">Start</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="questions">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title text-center statement"></h2>
				<h2 class="card-title text-center question"></h2>
			</div>
		</div>
		<br>
		<button class="btn btn-block btn-outline-primary" onclick="nextQuestion()">Next Question</button>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		let questions = ["aiwer__jawer__","awer_ _aewr","awr_ _"]
		let statements = ["abcdef","awraerwer","awerrhluaiweer"];
		$(document).ready(function() {
			$("#questions").hide();
		});
		function start() {
			$("#intro").hide();
			$("#questions").show();
			$(".question").html(questions[0]);
			$(".statement").html(statements[0]);
		}
		function getNextIdx(idx=0) {
			return (idx + 1);
		}
		let idx;
		function nextQuestion() {
			idx = getNextIdx(idx);
			$(".question").html(questions[idx]);
			$(".statement").html(statements[idx]);
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
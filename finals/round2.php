<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Finals - Round 2</title>
	<style>
	.card {
		margin-top: 10%;
	}
	.mark {
		height: 80px;
	}
	.back {
		cursor: pointer;
		font-size: 50px;
	}
</style>
</head>
<body>
	<?php include "../navbar.php"; ?>
	<div class="container" id="marks">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="card fat">
					<div class="card-body">
						<h2 class="card-title text-center">
							Welcome to Finals Round 2
						</h2>
						<h2>Select</h2>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block mark" data-mark="ten">10</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block mark" data-mark="twenty">20</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block mark" data-mark="thirty">30</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block mark" data-mark="fifty">50</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="questions"><br>
		<h2><a onclick="back()" class="back">&larr;</a> Finals - Round 2</h2>
		<div class="card">
			<div class="card-body">
				<h2 class="card-title text-center question"></h2>
			</div>
		</div>
		<br>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		let ten = ['a','b','c'];
		let twenty = ['wer','awer','awrawr'];
		let thirty = ['wer','QWERQWER','qwerqer'];
		let fifty = ['aqetwert','qwer','uir'];
		$("#questions").hide();
		$(".mark").click(function(event) {
			$("#marks").hide();
			$("#questions").show();
			let selected = $(this).data('mark');
			$("#questions").append(`<button class="btn btn-outline-primary btn-block" onclick="nextQuestion(${selected})">Next Question</button>`);
			$(".question").html(eval(selected)[0]);
			console.log(selected);
		});
		function getNextIdx(idx=0) {
			return (idx + 1);
		}
		let idx;
		function nextQuestion(selectedQuestion) {
			idx = getNextIdx(idx);
			$(".question").html(eval(selectedQuestion)[idx]);			
		}
		function back() {
			$("#marks").toggle();
			$("#questions").toggle();
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
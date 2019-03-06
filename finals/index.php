<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
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
			<div>
				<div class="card fat">
					<div class="card-body">
						<h2 class="card-title text-center">
							Instructions for Round 1
						</h2>
						<hr>
						<ul style="font-size: 20px;">
							<li>Each team will get <b>2 questions</b>.</li>
							<li><b>60 seconds</b> will be given for each question.</li>
							<li>The question will be a hidden word with a hint and <b>2 letters</b> revealed. <b>40 points</b> will be awarded if the question is answered correctly in the first chance.</li>
							<li>You can atmost reveal <b>2</b> more letters.</li>
							<li>Revealing <b>1</b> letter at each time the points will decrease from <b>40</b> to <b>20</b> and <b>10</b>.</li>
						</ul>
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
		<div class="row">
			<div class="col-md-6">
				<button class="btn btn-block btn-outline-primary" onclick="showHint1()">Show Hint 1</button>
			</div>
			<div class="col-md-6">
				<button class="btn btn-block btn-outline-primary hint2" onclick="showHint2()">Show Hint 2</button>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<button class="btn btn-block btn-outline-primary" onclick="nextQuestion()">Next Question</button>
			</div>
			<div class="col-md-6">
				<button class="btn btn-block btn-outline-primary" onclick="showAnswer()">Show Answer</button>
			</div>
		</div>
		
	</div>
	<script src="../assets/jquery-3.3.1.min.js"></script>
	<script>

		let questions = ["_ _r_ _ _ _ _ _ _","_ _ _e_ _ _ _","_ _ _r_ _ _ _ _d_ _ _ _","_ _ _t_ _","_ _m_ _ _ _ _ _ _","_ _ _u_ _ _ _ _","_ _ _ _ _ _r_ _ _","_ _ _ _ _ _c_ _ _","_ _ _s_ _ _ _ _ _ _ _","_ _ _ _ _ _ _ _ _o_ _ _ _","_ _ _ _ _p_ _ _ _ _ _ _ _","_ _ _ _ _s_ _ _ _ _ _ _"," "];
		let hint1 = ["_ _r_ _ _ _i_ _","_e_e_ _ _ _","_ o _r_ _ _ _ _d_ _ _ _","_i_t_ _","_ _m_ _ _ _b_ _","_ _ _u_ _ _i_","_ _a_ _ _r_ _ _","_ _ _l_ _c_ _ _","_ _ _s_ _ __a_ _ _","_ _t_ _ _ _ _ _o_ _ _ _","_ _ _ _ _p_ _t_ _ _ _ _","_o_ _ _s_ _ _ _ _ _ _"];
		let hint2 = ["_ a r_ _ _ _i_ _","_e_e_ _n_","_ o _r_s_ _ _d_ _ _ _","_i_t u _","_ _m_p_ _b_ _","_ _ o u_ _ _i_","_ l a_ _ _r_ _ _","_ _ _l_ _c e_ _","_e_s_ _ __a_ _ _","_ _t_ _ _ _o_o_ _ _ _","_ _ _ _ _p_ _t_t_ _ _","_o_ _ _s_ _ _a_ _ _"];
		let answers = ["N a r c i s s i s t","D e l e g a n t","C o r r e s p o n d e n c e","V i r t u e","G a m o p h o b i a","A c o u s t i c s","P l a g i a r i s m","A d o l e s c e n t","P e r s e v e r a n c e","A n t h r o p o l o g i s t","I n t e r p r e t a t i o n","S o p h i s t i c a t e d"];
		let statements = ["Someone in love with himself","A constant effort","A close similarity","Showing high moral standards","Fear of getting married, being in a relationship, or commitment","The branch of physics concerned with the properties of sound","The practice of taking someone else's work or ideas and passing them off as one's own","Process of developing from a child into an adult","Doing something despite difficulties","One who studies the evolution of mankind","The action of explaining the meaning of something","Developed to a high degree of complexity","<a href='round2Instructions.php'>Proceed to round 2</a>"];
		$(document).ready(function() {
			$("#questions").hide();
		});
		function start() {
			$("#intro").hide();
			$("#questions").show();
			nextQuestion();
			$(".hint2").prop("disabled",true);
			// $(".question").html(questions[0]);
			// $(".statement").html(statements[0]);
		}
		function getNextIdx(idx=0) {
			return (idx + 1);
		}
		let idx=-1;
		function nextQuestion() {
			idx = getNextIdx(idx);
			$(".question").html(questions[idx]);
			$(".statement").html(statements[idx]);
		}
		function showAnswer() {
			// idx = getNextIdx(idx);
			$(".question").html(answers[idx]);
		}
		function showHint1() {
			$(".question").html(hint1[idx]);
			$(".hint2").prop('disabled',false);
		}
		function showHint2() {
			$(".question").html(hint2[idx]);
		}
	</script>
	<script src="../assets/popper.min.js"></script>
	<script src="../assets/bootstrap.min.js"></script>
</body>
</html>
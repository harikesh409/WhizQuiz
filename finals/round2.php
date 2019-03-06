<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
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
	.hide {
		display: none;
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
						<h2>Select Marks Category</h2>
						<hr>
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
							<div class="col-md-12">
								<button class="btn btn-outline-primary btn-block mark" data-mark="forty">40</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row text-center">
			<div class="col-md-12">
				<a href="round3Instructions.php">Proceed to round 3</a>
			</div>
		</div>
	</div>
	<div class="container" id="questionNumbers">
		<div class="card fat">
			<div class="card-body">
				<h2>Questions</h2>
				<hr>
				<div class="row">
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="0">1</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="1">2</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="2">3</button>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="3">4</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="4">5</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="5">6</button>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="6">7</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="7">8</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="8">9</button>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="9">10</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="10">11</button>
					</div>
					<div class="col-md-4">
						<button class="btn btn-outline-primary num" data-num="11">12</button>
					</div>
				</div>
			</div>
		</div>
		

	</div>
	<div class="container" id="questions"><br>
		<h2>Finals - Round 2</h2>
		<div class="card">
			<div class="card-body">
				<h2 class="card-title text-center question"></h2>
				<h2 class="answer text-center"></h2>
			</div>
		</div>
		<br>
	</div>
	<script src="../assets/jquery-3.3.1.min.js"></script>
	<script>
		let ten = ["Which country’s football team has won the 2018 Intercontinental Cup football title?","Who was the author of the Arthashastra?","The reaction which converts sugar solution into alcohol is an example of","The smallest populated state of India is","The normal threshold of hearing is around","Which bank is the Banker of the Banks?","Instrument for measuring wind speed","Joule is the unit of","Last Commonwealth Games are held in","Numismatics is the study of","Distance between earth and moon","Distance between earth and moon","The longest dam of India is the"];
		let tenans = ["India","Chanakya","Fermentation","Sikkim","25-45 db","RBI","Anemometers","Energy","2018","Coins","384,400 km","Hirakud Dam"];

		let twenty = ["Eugenics is the study of _______ ?","India’s first-ever national police museum will be established in which city?","Who is popularly known as “The Saint of Gutters”?","‘My Music, My Life’ is the autobiography of which person?","Through which Translocation of food materials in plants takes place?","Name the instrument used to measure relative humidity","Smallest country in Asia is","Buland Darwaza is located in","Who wrote Devdas?","The state having the largest area of forest cover in India is?","World’s most ancient game is?","Driest place in India"];
		let twentyans = ["Altering human beings by changing their genetic component","Delhi","Mother Teresa","Pt. Ravi Shankar","Phloem","Hygrometer","Vatican City","Fatehpur Sikri","Saratchandra Chattopadhyay","Madhya Pradesh","Wrestling","Jaisalmer"];

		let forty = ["Mahatma Gandhi founded which of the following newspapers in 1903 at South Africa?","Who is the first non-Indian to receive the Bharat Ratna?","The national sport of Canada is","Which tree, once very popular in social forestry, is now taken to be environmental hazard?","Logarithm tables were invented by?","Which color in Olympic ring represent Asia?","Which is the first country to issue paper currency?","Which country awards the Nobel Prize?","The first synthetic fibre made by man was","Who won Nobel Prize in year 1998?","Name of the first university of India?","Gmail was created by?"];
		let fortyans = ["Indian Opinion","Khan Abdul Ghaffar Khan","Lacrosse","Eucalyptus","John Napier","Yellow","China","Sweden","Nylon","Amartya Sen","Nalanda University","Paul Buchheit"];

		$("#questions").hide();
		$("#questionNumbers").hide();
		$(".mark").click(function(event) {
			$("#marks").hide();
			$("#questionNumbers").show();

			// $("#questions").show();
			let selected = $(this).data('mark');
			let ans = $(this).data('mark')+"ans";
			$(".num").click(function(event) {
				let index = $(this).data('num');
				$("#questions").show();
				$(".question").html(eval(selected)[index]);	
				// $(".question").append(`<br><br><b class='text-success hide'>Answer: `+eval(ans)[index]+`</b>`);
				$("#questionNumbers").hide();
				$("#questions").append(`<button class="btn btn-outline-primary btn-block" onclick="showAnswer(${ans},${index})">Show Answer</button></div></div>`);
			});			
		});
		function getNextIdx(idx=0) {
			return (idx + 1);
		}
		let idx1=-1;
		function nextQuestion(selectedQuestion) {
			idx1 = getNextIdx(idx1);
			if(idx1>4) {
				$(".next").prop('disabled',true);
			}
			$(".question").html(eval(selectedQuestion)[idx1]);			
		}
		function showAnswer(selectedQuestion,index) {
			// idx2 = getNextIdx(idx2);
			$(".answer").html(`<b class='text-success'>Answer: `+eval(selectedQuestion)[index]+`</b>`);
		}
		function back() {
			$("#marks").toggle();
			$("#questions").toggle();
		}
	</script>
	<script src="../assets/popper.min.js"></script>
	<script src="../assets/bootstrap.min.js"></script>
</body>
</html>
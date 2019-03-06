<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<title>Finals - Round 3</title>
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
						<h2>Select your category</h2>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="movies">Movies</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="sports">Sports</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="science">General Science</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="mythology">Mythology</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="history">History & Politics</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block category" data-category="autobiographies">Autobiographies</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row text-center">
			<div class="col-md-12">
				<a href="round4.php" class="text-center">Proceed to round 4</a>
			</div>
		</div>
		
	</div>
	<div class="container" id="set">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="card fat">
					<div class="card-body">
						<h2>Select set number</h2>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block set" data-set="1">1</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline-primary btn-block set" data-set="2">2</button>
							</div>
						</div>
						<br>
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
	<script src="../assets/jquery-3.3.1.min.js"></script>
	<script>
		let movies1 = ["Who Developed The Character Mickey Mouse? ","In which movie was Sr.NTR first screened ?","Bollywood movie with highest number of songs","Tagline of film 'NENU LOCAL'","Who is the Heroine Of First Movie Of Ram CharanTej?","Official Name Of Oscar Awards "];
		let movies1ans = ["Waltdisney","ManaDesam","Indra Sabha ","ATTITUDE IS EVERYTHING","Neha Sharma","Academy Award Of Merit"];

		let movies2 = ["Who Is The Director Of the movie The Dark Knight? ","What is the tagline of the film Theenmar ?","First talkie Movie In Tollywood ?","Creator Of Marvel Movies?","What Is The First Telugu Color Movie?","Who Directed Marvel's Avengers Infinity War?"];
		let movies2ans = ["Christopher Nolan","Celebration of Love","BhaktaPrahlada","Martin Goodman","AlluriSeetharamaRaju","Russo Brothers"];

		let sports1 = ["What is the fastest record time in 100m race?","Who is the current Number 1 ranker in Tennis?","Which golfer ranked no.1 for the longest time?","Who is the current world champion of chess?","First Olympic games were conducted in which country?","First Indian to win gold medal in Olympics?"];
		let sports1ans = ["9.58 sec","Novac Djokovic","Tiger Woods","Magnus Carlsen","Greece","Abhinav Bindra"];

		let sports2 = ["First Indian woman to win a medal in Olympics?","Which team had won the ICC world cup most no. of times?","Who is the first captain Indian Odi cricket team?","Who is the first captain Indian Test cricket team?","What is the highest team score by any team in the Odi’s?","How many centuries does Virat Kohli scored across all formats until now?"];
		let sports2ans = ["Abhinav Bindra","Australia","Ajit wadekar","C.K. Naidu","481 by England","64(39+25)"];

		let science1 = ["Name the animal without red blood cells?","Most commonly used bleaching agent?","Which atmospheric layer helps in radio transmission?","What are the light phenomenons that cause a rainbow?","What is the molecular formula of Mustard gas?","Who is known as father of Zoology"];
		let science1ans = ["Earthworm","Chlorine","Ionosphere","Reflection, Refraction and Dispersion","C<sub>4</sub>H<sub>8</sub>Cl<sub>2</sub>S","Aristotle"];

		let science2 = ["Which chemical element produces green flame in fireworks?","Who in 1231 was the first to describe the science of optics?","A magnifying glass is what type of lens?","What is the primary component in Natural Gas?","What pollutant is responsible for Ozone holes?","Name the pigment which is responsible for absorption of light in plants?"];
		let science2ans = ["Barium","Robert Grosseteste","Convex","Methane","CFC","Chlorophyll"];

		let mythology1 = ["Who is architect of the bridge built by Lord Rama to cross the ocean and reach Lanka? ","Who is wife of Vasishta? ","Who is the mother of Hanuma? ","Who is the son of Dronacharya? ","Who is the wife of sugreeva? ","In the Ramayana, during the fourteen years of Rama’s exile, Bharat did not rule from Ayodhya. What was his temporary capital? "];
		let mythology1ans = ["Nala","Arundhati","Anjanidevi","Ashwaddama","Tara","Nandigram"];

		let mythology2 = ["Who was the First Man Died According to Mahabharat?","In Ramayan, Meghanath is the other name of ","Who is the mother of satrughna?","Palace of wax is built by? ","Who helped Sri Rama to cross ganga river in Aranya Kanda? ","Who is the silbling of panduraja and dhrutharastra? "];
		let mythology2ans = ["Yama","Indrajittu","Sumitra","Duryodhana","Guhudu","Vidurudu"];

		let history1 = ["The station where Gandhi was dropped down from train in South Africa?","What is the army found by subhash chandra Bose in 1943?","What the first newspaper in India?","Who is the only Telugu person to be the president of India?","Who said the slogan 'Give me blood, I’ll give you freedom'?","Who said the slogan 'Jai Jawan,Jai Kisan'?"];
		let history1ans = ["Pietermaritzburg railway station","Azad P Fauj","Bengal Gazette","Neelam SanjeevaReddy","Subhash Chandra Bose","Lal Bahudur Shastri"];

		let history2 = ["Narendra modi is _______ th prime minister of India?","Who is the 3rd president of India?","Who is the present railway minister?","Who is the first woman defence minister of India?","Who is the first chief minister of India?","During which years was Emergency situation declared in India ?"];
		let history2ans = ["14","Zakir Hussian","Piyush Goyal","Nirmala Sitaraman","Suchetra Kriplani","1975-77"];

		let autobiographies1 = ["Which tennis star published the autobiography Serious in 2002?","Who called his 2006 autobiography Totally Frank?","Which celebrity chef wrote the 2006 autobiography Humble Pie?","Which film, starring Robert Redford and Mia Farrow, was based on a book by F Scott Fitzgerald?","On whose novel was the film Witness for the prosecution based?","Which actor's autobiography is called Jack Of All Trades?"];
		let autobiographies1ans = ["John McEnroe","Frank Lampard","Gordon Ramsay","The Great Gatsby","Agatha Christie","Jack Warner"];
		let autobiographies2 = ["Who wrote the book on which the film The Stepford Wives was based?","Which comedian wrote the 2006 autobiography Semi-Detached?","Whose autobiography name was 'An Autobiography'?","What is the English translation of the title of Adolf Hitler's autobiographical work 'Mein Kampf'?","Which inventor called his 2006 autobiography Against the Odds?","Whose autobiography was 'How I Became a Hindu'?"];
		let autobiographies2ans = ["Ira Levin","Gryff Rhys Jones","Jawaharlal Nehru","My Struggle","James Dyson","Sita Ram Goel"];


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
				let ans = category+set+"ans";
				// console.log(selected);	
				$("#set").hide();
				$("#questions").show();
				$("#questions").append(`
					<div class='row'>
					<div class='col-md-6'><button class="btn btn-outline-primary btn-block next" onclick="nextQuestion(${selected})">Next Question</button></div><div class='col-md-6'><button class="btn btn-outline-primary btn-block ans" onclick="showAnswer(${ans})">Show Answer</button></div></div>`);
				nextQuestion(selected);
				// $(".question").html(eval(selected)[0]);
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
			$(".ans").prop('disabled', false);
		}
		function showAnswer(selectedQuestion) {
			$(".question").append(`<br><br><b class='text-success'>Answer: `+eval(selectedQuestion)[idx1]+`</b>`);
			$(".ans").prop('disabled',true);
		}
	</script>
	<script src="../assets/popper.min.js"></script>
	<script src="../assets/bootstrap.min.js"></script>
</body>
</html>
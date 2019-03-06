<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap.min.css">
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
							<div class="col-md-12">
								<button class="btn btn-outline-primary btn-block category" data-category="history">History & Politics</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row text-center">
			<div class="col-md-12">
				<a href="round2.php" class="text-center">Proceed to round 2</a>
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
							<div class="col-md-12">
								<button class="btn btn-outline-primary btn-block set" data-set="3">3</button>
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

		let movies1 = ['How Many Oscars Did Titanic Receive ?','Chiranjeevi’s Full Name',' Director of Happy New Year','Who Is The Author Of Jamesbond Series Of Books?','First Movie Of Vijay Devarakonda? ','Remake of Iru Mugan in telugu? '];
		let movies1ans = ["11","Konidala Siva SankaraVara Prasad","Farah Khan","Ianfleming","Nuvvila","Inkokkadu"];

		let movies2 = ["Mahesh babu 's first movie as a child artist? ","First Indian movie submitted for Oscar?","Krish's first movie?","Who is the director of highest grossing movie ?","Who won Best Actress award at Oscar 2019? ","What movie is the song 'Kajra Re' from?"];
		let movies2ans = ["Needa","Mother India","Gamyam","James Cameron","Olivia Colman","Bunty aur babli"];

		let movies3 = ['Who Owns Marvel Studios Now ?','Name the heroines in the Telugu movie Hello Brothers','What Is The Character Name Of Spiderman in his movies? ',"What's the movie with the tagline 'LOVE-HATE-LOVE-STORY'?","Character Names Of Hero And Heroine In Titanic?","Father of Indian cinema"];
		let movies3ans = ["Disney","Soundarya and RamyaKrishna","Peterparker","Fida","Jack Dawson And Rosy Dewitt Bukater","Dadasaheb Phalke "];

		let movies4 = ["What is the tagline of the film Dhookudu ?","Who is the Singer of the Song Shallow, Which Received Oscar In 2019? ","In Which Year Did AmitabhBachchan Debut In Hindi Cinema?","Which telugu actor Received First Filmfare Award For Best Actor ?","Tag line of movie 'Bichagadu'","First Indian towin Oscar "];
		let movies4ans = ["Daring and Dashing","Ladygaga","1972","Ntr For Badipantulu In 1972","THE BILLIONAIRE ","Bhanu athaiya"];

		let movies5 = ["Who Developed The Character Mickey Mouse? ","In which movie was Sr.NTR first screened ?","Bollywood movie with highest number of songs","Tagline of film 'NENU LOCAL'","Who is the Heroine Of First Movie Of Ram CharanTej?","Official Name Of Oscar Awards "];
		let movies5ans = ["Waltdisney","ManaDesam","Indra Sabha ","ATTITUDE IS EVERYTHING","Neha Sharma","Academy Award Of Merit"];

		let movies6 = ["Who Is The Director Of the movie The Dark Knight? ","What is the tagline of the film Theenmar ?","First talkie Movie In Tollywood ?","Creator Of Marvel Movies?","What Is The First Telugu Color Movie?","Who Directed Marvel's Avengers Infinity War?"];
		let movies6ans = ["Christopher Nolan","Celebration of Love","BhaktaPrahlada","Martin Goodman","AlluriSeetharamaRaju","Russo Brothers"];

		let sports1 = ["Which is the first of the four Grand slam tennis tournaments to be held each year?","Indira Gandhi Cup is associated with which sport.","Who received the Wisden Award for the ‘Indian Cricketer of the 20th Century’?","Who has taken most no.of wickets in Tests?","What is the distance between the popping crease and the stumps on a cricket pitch?","Deodar Trophy is associated with which sport?"];
		let sports1ans = ["Australian Open","Boxing","Kapil Dev","Muralidharan","4 feet","Cricket"];

		let sports2 = ["Which player scored most runs in Ranji’s ?","“Bull’s eye” term is used in which game?","Who was the Captain of the Indian Hockey Team, which won the first Olympic Gold Medal in Amsterdam in 1928?","How many players are there on each side in the game of basketball?","Rangaswami Cup is associated with which sport?","In which country did the game of Chess originate?"];
		let sports2ans = ["Wasim Jaffer","Shooting","Jaipal Singh","5","Hockey","India"];

		let sports3 = ["The first World Cup in cricket was held in which year?","2018 FIFA World Cup was held in which country?","Who is the only sportsperson to get Bharat Ratna?","Who wrote the book A Century Is Not Enough?","Who won most no.of gold medals in Olympics?","Who is the richest sportsman in the world?"];
		let sports3ans = ["1971","Russia","Sachin","Sourav Ganguly","Michael Phelps","Floyd Mayweather"];

		let sports4 = ["What is the fastest record time in 100m race?","Who is the current Number 1 ranker in Tennis?","Which golfer ranked no.1 for the longest time?","Who is the current world champion of chess?","First Olympic games were conducted in which country?","First Indian to win gold medal in Olympics?"];
		let sports4ans = ["9.58 sec","Novac Djokovic","Tiger Woods","Magnus Carlsen","Greece","Abhinav Bindra"];

		let sports5 = ["First Indian woman to win a medal in Olympics?","Which team had won the ICC world cup most no. of times?","Who is the first captain Indian Odi cricket team?","Who is the first captain Indian Test cricket team?","What is the highest team score by any team in the Odi’s?","How many centuries does Virat Kohli scored across all formats until now?"];
		let sports5ans = ["Abhinav Bindra","Australia","Ajit wadekar","C.K. Naidu","481 by England","64(39+25)"];

		let science1 = ["Which type of transmission uses shortest waves?","What is the name of the most radioactive isotope on the planet?","The sex of a newborn baby is determined by the chromosome inherited from?","What is the color of ammonium chloride?","The s-orbital of the L shell is represented as what?","Which plant has the lifespan of 4000 years?"];
		let science1ans = ["Satellite TV","Polonium 210","The father","White","2s","Gnetum"];

		let science2 = ["The rate of heartbeat is accelerated by the hormone called?","Which is called blue-print of information?","How many groups are there in the modern periodic table?","Who carried out the first nuclear fission reaction in 1938?","In which layer of the atmosphere the aurora is created?","Who gave the scientific explanation to the electrolytic reaction?"];
		let science2ans = ["adrenaline","DNA","18","Otto Hahn","In the Thermosphere","Faraday"];

		let science3 = ["Which ions are attracted to the cathode?","As the size of the atom increases the electronegativity?","What is the name of the wind measuring device?","What is the name of that branch of Biology which devoted to identifying, naming and classifying organisms?","What are the symptoms of release of too much T3 and T4 hormones","What is the fifth state of matter?"];
		let science3ans = ["Cations","Decreases","Anemometer","Taxonomy","Anxity, Nervousness, Hair loss","Bose-Einstein Condensate"];

		let science4 = ["Name the animal without red blood cells?","Most commonly used bleaching agent?","Which atmospheric layer helps in radio transmission?","What are the light phenomenons that cause a rainbow?","What is the molecular formula of Mustard gas?","Who is known as father of Zoology"];
		let science4ans = ["Earthworm","Chlorine","Ionosphere","Reflection, Refraction and Dispersion","C<sub>4</sub>H<sub>8</sub>Cl<sub>2</sub>S","Aristotle"];

		let science5 = ["Which chemical element produces green flame in fireworks?","Who in 1231 was the first to describe the science of optics?","A magnifying glass is what type of lens?","What is the primary component in Natural Gas?","What pollutant is responsible for Ozone holes?","Name the pigment which is responsible for absorption of light in plants?"];
		let science5ans = ["Barium","Robert Grosseteste","Convex","Methane","CFC","Chlorophyll"];

		let mythology1 = ["Who is the grandson of Arjuna? ","In the Mahabharata, How many days did battle of Kurukshetra last? ","Name of the poison consumed by Lord Shiva","Who is the sister of Krishna and balarama?","Who build the mayasabha in mahabharath? ","Who is the guru of the devata’s? "];
		let mythology1ans = ["Parikshith","18","Halahalam","Subhadra","Maya","Brihaspathi"];

		let mythology2 = ["Who is the wife of Bharatha?","Who is the son of ganga in  mahabharath? ","What is the name of Sri Krishna’s conch shell? ","What is the name of Manmadha’s wife? ","What are the names of Panduraju’s wives? ","Name of arjuna during his exile? "];
		let mythology2ans = ["Mandavi","Bhishma","Panchajanya","Rathi devi","Kunti and madri","Bruhannala"];

		let mythology3 = ["What were the chapters in Bhagavata called as?","Meaning of the word Krishna ","What is the name of the sister of kaurava’s? ","Who has the name Yudhistara in mahabharat? ","What is the name of Narada’s Veena? ","From which forest Sita was abducted? "];
		let mythology3ans = ["Skandhas","dark or black ","Dussala","Dharmaraju","Mahati","Dandakaranya"];

		let mythology4 = ["Who is architect of the bridge built by Lord Rama to cross the ocean and reach Lanka? ","Who is wife of Vasishta? ","Who is the mother of Hanuma? ","Who is the son of Dronacharya? ","Who is the wife of sugreeva? ","In the Ramayana, during the fourteen years of Rama’s exile, Bharat did not rule from Ayodhya. What was his temporary capital? "];
		let mythology4ans = ["Nala","Arundhati","Anjanidevi","Ashwaddama","Tara","Nandigram"];

		let mythology5 = ["Who was the First Man Died According to Mahabharat?","In Ramayan, Meghanath is the other name of ","Who is the mother of satrughna?","Palace of wax is built by? ","Who helped Sri Rama to cross ganga river in Aranya Kanda? ","Who is the silbling of panduraja and dhrutharastra? "];
		let mythology5ans = ["Yama","Indrajittu","Sumitra","Duryodhana","Guhudu","Vidurudu"];

		let mythology6 = ["According to Hindu mythology, who is the guru of the rakshasa’s? ","Originally Brahma the Creator had five heads. Who cut off one of his heads? ","Draupadi was the daughter of whom? ","Name of vibhishana daughter who helped sita devi in ashoka vana? ","Who is the mother of maricha? ","According to Mahabharat, Ganga was the wife of whom?"];
		let mythology6ans = ["Sukracharya","Lord shiva","Drupada","Trijata","Thataki","Santana"];

		let history1 = ["In which year did the Jalianwala Bagh tragedy took place?","Who was the dictator of Italy during WW2?","Which countries are known as the axis forces during WW2?","Who is the designer our national flag?","Who is the father of Akbar?","When was Indian constitution adopted?"];
		let histor1ans = ["1919","Benito Mussolini","Germany,Italy,Japan","Pingali Venkaiyah","Humayun","26 November, 1949"];

		let history2 = ["Who is the only Lok sabha speaker from Andhra Pradesh?","In which year was Rajiv Gandhi assassinated?","Who is the current Lok sabha speaker of India?","Who is the home minister of Andhra Pradesh?","Who is the first Vice President of India?","When was Andhra Pradesh state formed?"];
		let history2ans = ["Neelam Sanjeevareddy","1991","Sumitra Mahajan","Nimmakayala Chinarajappa","Sarvepalli Radhakrishnan","1953 October 1"];

		let history3 = ["Muslim League was formed in the year?","Who is known as the Grand Old man of India?","Who said 'Swaraj is my birth right'?","Non-cooperation movement was started in which year?","Slat Satyagraha also known as what?","Indian National Congress was founded by whom?"];
		let history3ans = ["1906","Dadabhai Naoroji","Bala Gangadhar Tilak","1920","Dandi March","A.O.Hume"];

		let history4 = ["The station where Gandhi was dropped down from train in South Africa?","What is the army found by subhash chandra Bose in 1943?","What the first newspaper in India?","Who is the only Telugu person to be the president of India?","Who said the slogan 'Give me blood, I’ll give you freedom'?","Who said the slogan 'Jai Jawan,Jai Kisan'?"];
		let history4ans = ["Pietermaritzburg railway station","Azad P Fauj","Bengal Gazette","Neelam SanjeevaReddy","Subhash Chandra Bose","Lal Bahudur Shastri"];

		let history5 = ["Narendra modi is _______ th prime minister of India?","Who is the 3rd president of India?","Who is the present railway minister?","Who is the first woman defence minister of India?","Who is the first chief minister of India?","During which years was Emergency situation declared in India ?"];
		let history5ans = ["14","Zakir Hussian","Piyush Goyal","Nirmala Sitaraman","Suchetra Kriplani","1975-77"];

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
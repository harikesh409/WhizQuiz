<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<title>Login</title>
	<style>
	.card {
		margin-top: 10%;
	}
</style>
</head>
<body>
	<?php 
	include "navbar.php";
	if(isset($_SESSION['email'])){
		if($_SESSION['email'] && $_SESSION['details']) {
			header("Location: instructions.php");
		} else if($_SESSION['email']) {
			header("Location: details.php");
		}
	}
	?>
	<div class="container ">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="card fat">
					<div class="card-body">
						<h4 class="card-title text-center">Login</h4>
						<form action="login.php" method="post">
							<div class="form-group">
								<label for="email">
									E-Mail Address
									<span class="text-danger"> * </span>
								</label>
								<input id="email" type="email" class="form-control" name="email" value="" required autofocus tabindex="1">
							</div>
							<div class="form-group">
								<label for="password">
									Password
									<span class="text-danger"> * </span>
								</label>
								<input id="password" type="password" class="form-control" name="password" required tabindex="2">
							</div>
							<div class="form-group no-margin">
								<input type="submit" class="btn btn-outline-primary btn-block btn-round" name="submit" value="Login" tabindex="4">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
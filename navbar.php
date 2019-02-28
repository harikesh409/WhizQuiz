<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php">
		<img src="images/lendi.png" alt="lendi" width="50" height="50">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</div>
	<?php
	session_start();
	if(isset($_SESSION['email'])) {
		echo "<a class='btn btn-outline-success m-2 my-sm-0' href='logout.php'>Log Out</a>";
	}
	?>
	<img src="images/csi.png" alt="CSI" width="50" height="50">
</nav>
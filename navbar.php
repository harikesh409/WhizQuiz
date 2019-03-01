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
				<h4 class='text-white current'>Lendi Institute of Engineering and Technology</h4>
			</li>
		</ul>
	</div>
	<img src="images/csi.png" alt="CSI" width="50" height="50">
	<?php
	session_start();
	if(isset($_SESSION['email'])) {
		echo "<a class='btn btn-outline-success m-2 my-sm-0' href='logout.php'>Log Out</a>";
	}
	?>
</nav>
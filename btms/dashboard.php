<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>NBA Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="left-sidebar is-preload">
	<style>
		body{
			background-image:url(images/R.jpeg) ;
		}
	</style>
	<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="dashboard.php">Basketball Team  <span>Management System</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="#">Welcome <?php echo $_SESSION['username']; ?></a></li>
							<li class="submenu">
								<a href="#">Menu</a>
								<ul>
									<li><a href="dashboard.php">Home</a></li>
									
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</li>
							<li><a href="logout.php" class="button primary">Logout</a></li>
						</ul>
					</nav>
				</header>

				<section class="wrapper style3 container special">

							<header class="major">
								<h2>NBA <strong>Team </strong>Details</h2>
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										
										<header>
											<h3>Team details</h3>
										</header>
										
										<a href="team.php"> Add Team details</a></p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										
										<header>
											<h3>Player Details</h3>
										</header>
										
										<a href="players.php">Add Player Details</a></p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										
										<header>
											<h3>Match details</h3>
										</header>
										
										<a href="matches.php">Add match details</a></p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										
										<header>
											<h3>Performances</h3>
										</header>
										
										<a href="performances.php">Add team performance details</a></p>
									</section>

								</div>
							</div>

							<footer class="major">
								<ul  class="buttons">
									<a href="showplayers.php" class="button">Show all player details</a>
								</ul>

								<ul class="buttons">
									<a href="showteam.php" class="button">Show all team details</a>
								</ul>

								<ul class="buttons">
									<a href="showmatches.php" class="button">Show all match details</a>
								</ul>

								<ul class="buttons">
									<a href="showperformances.php" class="button">Show all performance details</a>
								</ul>
							</footer>

						</section>

			<!-- Footer 
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>-->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
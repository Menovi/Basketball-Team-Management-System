<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Showing All Team Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			 
				<header id="header">
					<h1 id="logo"><a href="dashboard.php">Basketball Team <span>Management System</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="#">Welcome <?php echo $_SESSION['username']; ?></a></li>
							<li class="submenu">
								<a href="#">Menu</a>
								<ul>
									<li><a href="dashboard.php">Add Details</a></li>
									<li><a href="contact.html">Contact</a></li>
									

								</ul>
							</li>
							<li><a href="logout.php" class="button primary">Logout</a></li>
						</ul>
					</nav>
				</header>
				<section class="wrapper style3 container special">

				
<table width="100%"  border="1">
<tr>
<th>Sl no.</th>
<th>Team ID</th>
<th>Team Name</th>
<th>Home Court</th>
<th>Modify</th></tr>	
				
				
				<?php

				require('dbconnect.php');
				$username = $_SESSION['username'];
				$query = "SELECT TeamID,Team_name,Home_Court from `team`";
				$result = mysqli_query($conn,$query);
				$cnt=1;

				if (mysqli_num_rows($result)>0){
						while($row = mysqli_fetch_array($result))
						{

							
					
						
						// echo "<br><ul class='buttons'>
						// 			<a href='deletebooking.php' class='button'>Delete Player</a><br><br>
						// 			<a href='update.php' class='button'>Update Player Details</a>
						// 		</ul>";
						// echo "<br><br>";
					?>	
					
					
					<html>
					<tr>	
					 <td><?php echo $cnt;?></td>
					 
					 <td><?php echo $row['TeamID'];?></td>
				
					 <td><?php echo $row['Team_name'];?></td>
					
					 <td><?php echo $row['Home_Court'];?></td>

					

					 <!-- <td><?php echo "<a href='delete.php' >Delete Player</a> &nbsp&nbsp&nbsp
									<a href='update.php' >Update Player</a>";?></td> -->
					
					<td><?php echo "<a href=deleteteam.php?TeamID=".$row['TeamID'].">Delete</a> &nbsp&nbsp&nbsp  
					                <a href=updateteam.php?TeamID=".$row['TeamID']." & Team_name=".$row['Team_name']."
									& Home_Court=".$row['Home_Court'].">Update</a>";?></td>
									
					</tr>
					
					</html>
					 
					 
					 <?php
					
																
					// echo "<br>";
					 $cnt=$cnt+1;?>
					
			
			
					<?php

				}
			}
				
				?>







</table>
										
				<footer class="major">
								<ul class="buttons">
									<a href="dashboard.php" class="button">Go Back</a>
								</ul>
							</footer>
			</section>
			
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
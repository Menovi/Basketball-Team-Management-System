<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Showing All Performance Details</title>
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

				
<table width="117%"  border="1">
<tr>
<th>Sl no.</th>
<th>Perf ID</th>
<th>Player ID</th>
<th>Match ID</th>
<th>2Points</th>
<th>3Points</th>
<th>Free Throws</th>
<th>Total Points</th>
<th>Assists</th>
<th>Rebounds</th>
<th>Mins Played</th>
<th>Fouls made</th>
<th>Modify</th></tr>	
				
				
				<?php

				require('dbconnect.php');
				$username = $_SESSION['username'];
				$query = "SELECT performance_id,player_id,match_id,twopointsmade,threepointsmade,freethrowsmade,
                          totalpoints,assists,rebounds,minutesplayed,foulsmade from `performances`";
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
					 
					 <td><?php echo $row['performance_id'];?></td>
				
					 <td><?php echo $row['player_id'];?></td>
					
					 <td><?php echo $row['match_id'];?></td>

					 <td><?php echo $row['twopointsmade'];?></td>

					 <td><?php echo $row['threepointsmade'];?></td>
				
					 <td><?php echo $row['freethrowsmade'];?></td>

                     <td><?php echo $row['totalpoints'];?></td>
					
                    <td><?php echo $row['assists'];?></td>

                    <td><?php echo $row['rebounds'];?></td>

                    <td><?php echo $row['minutesplayed'];?></td>
               
                    <td><?php echo $row['foulsmade'];?></td>


					 <!-- <td><?php echo "<a href='delete.php' >Delete Player</a> &nbsp&nbsp&nbsp
									<a href='update.php' >Update Player</a>";?></td> -->
					
					<td><?php echo "<a href=deleteperformances.php?performance_id=".$row['performance_id'].">Delete</a> &nbsp&nbsp&nbsp  
					                <a href=updateperformances.php?performance_id=".$row['performance_id']." & player_id=".$row['player_id']."
									& match_id=".$row['match_id']." & twopointsmade=".$row['twopointsmade']." & threepointsmade=".$row['threepointsmade']."
									& freethrowsmade=".$row['freethrowsmade']." & totalpoints=".$row['totalpoints']." & assists=".$row['assists']."
                                    & rebounds=".$row['rebounds']." & minutesplayed=".$row['minutesplayed']." & foulsmade=".$row['foulsmade'].">Update</a>";?></td>
									
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
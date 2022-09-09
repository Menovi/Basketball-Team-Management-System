<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Team</title>
    <link rel="stylesheet" href="assets/css/style5.css" />
</head>


<header id="header">
<h1 id="logo"><a href="dashboard.php">Basketball Team  <span>Management System</span></a></h1>
					<nav id="nav">
						
					<li><a href="team.php">Add another team</a></li>
					</nav>		
									
				</header>
            


<body>
    <?php
    require('dbconnect.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        $Team_name = $_POST['Team_name'];
        $TeamID = $_POST['TeamID'];
        $Home_Court = $_POST['Home_Court'];
       


        $query    = "INSERT into `team` (Team_name,TeamID,Home_Court)
                     VALUES ('$Team_name','$TeamID','$Home_Court')";
        $result   = mysqli_query($conn, $query);


        if ($result) {
           
            echo "<div class='form'>
                  <h3>Team added successfully</h3><br/>";
                
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing</h3><br/>

                  </div>";
            echo ("Error: " . mysqli_error($conn));
        }
    } else {
    ?>
        <form class="form" action="" method="post">

            <fieldset>
                <legend><strong>Form</strong></legend>
                Team name: <br><br><input type="text" placeholder="Team name" name="Team_name" class="login-input" required><br>
                Team ID: <br><br><input type="text" placeholder="Team ID" name="TeamID" class="login-input" required><br>
                Home Court: <br><br><input type="text" placeholder="Home Court" name="Home_Court" class="login-input" required><br>
                
                <input type="submit" name="submit" value="Submit" class="login-button">


            </fieldset>



        </form>
    <?php
    }
    ?>


</body>

</html>
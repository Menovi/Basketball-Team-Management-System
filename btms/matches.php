<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Matches</title>
    <link rel="stylesheet" href="assets/css/style8.css" />
</head>


<header id="header">
<h1 id="logo"><a href="dashboard.php">Basketball Team  <span>Management System</span></a></h1>
					<nav id="nav">
						
					<li><a href="matches.php">Add another match details</a></li>
					</nav>		
									
				</header>
            


<body>
    <?php
    require('dbconnect.php');

    $sql = "SELECT * FROM `team`";
    // $sql1 = "SELECT * FROM `team`";
    $all_teams = mysqli_query($conn,$sql);
    // $all_teams1 = mysqli_query($conn,$sql1);
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        $match_id = $_POST['match_id'];
        $team1_id = mysqli_real_escape_string($conn,$_POST['team1_id']);
        $team1points = $_POST['team1points'];
        $team2_id = mysqli_real_escape_string($conn,$_POST['team2_id']);
        $team2points = $_POST['team2points'];
        $match_date = $_POST['match_date'];
        $match_location = $_POST['match_location'];

        $query    = "INSERT into `matches` (match_id,team1_id,team1points,team2_id,team2points,match_date,match_location)
        VALUES ('$match_id','$team1_id','$team1points','$team2_id','$team2points','$match_date','$match_location')";
$result   = mysqli_query($conn, $query);



        if ($result) {
           
            echo "<div class='form'>
                  <h3>Match details added successfully</h3><br/>";
                
        } else {
            echo "<div class='form'>
                  <h3>Invalid Teams. Enter correct Team IDs.</h3><br/>

                  </div>";
            echo ("Error: " . mysqli_error($conn));
        }
    } else {
    ?>
        <form class="form" action="" method="post">
        <style>
         select {
            width: 100%;
            padding: 15px 25px;
            border: 1px;
            border-radius: 0px;
            background-color: white;
         }
      </style>

            <fieldset>
                <legend><strong>Form</strong></legend>
                Match ID: <br><br><input type="text" placeholder="Match ID" name="match_id" class="login-input" required><br>
                
                Team 1 ID: 
                <br><br><input type="text" placeholder="Team 1 ID" name="team1_id" class="login-input" required><br>
                    <!-- <br><br><select name="team"><br>
                    <?php 
                    while ($team = mysqli_fetch_array(
                        $all_teams,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $team["TeamID"];?>">
                    <?php echo $team["TeamID"];?>
                    </option>
                    <?php 
                    endwhile; 
                    ?>
                    </select><br><br> -->

                Team 1 Points: <br><br><input type="number" placeholder="Team 1 points" name="team1points" class="login-input" required><br>
                
                Team 2 ID: 
                <br><br><input type="text" placeholder="Team 2 ID" name="team2_id" class="login-input" required><br>
                    <!-- <br><br><select name="team"><br>
                    <?php 
                    while ($team = mysqli_fetch_array(
                        $all_teams1,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $team["TeamID"];?>">
                    <?php echo $team["TeamID"];?>
                    </option>
                    <?php 
                    endwhile; 
                    ?>
                    </select><br><br> -->
                
                Team 2 Points: <br><br><input type="number" placeholder="Team 2 Points" name="team2points" class="login-input" required><br>
                Date: <br><br><input type="date" placeholder="Match date" name="match_date" class="login-input" required><br>
                Location: <br><br><input type="text" placeholder="Match Location" name="match_location" class="login-input" required><br>
                
                <input type="submit" name="submit" value="Submit" class="login-button">


            </fieldset>



        </form>
    <?php
    }
    ?>


</body>

</html>
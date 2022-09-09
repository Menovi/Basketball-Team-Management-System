<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Performances</title>
    <link rel="stylesheet" href="assets/css/style7.css" />
</head>


<header id="header">
<h1 id="logo"><a href="dashboard.php">Basketball Team  <span>Management System</span></a></h1>
					<nav id="nav">
						
					<li><a href="performances.php">Add another Player Performance</a></li>
					</nav>		
									
				</header>
            


<body>
    <?php
    require('dbconnect.php');

    $sql = "SELECT * FROM `players`";
    $all_players = mysqli_query($conn,$sql);
    
    $sql1 = "SELECT * FROM `matches`";
    $all_matches = mysqli_query($conn,$sql1);


    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        $performance_id = $_POST['performance_id'];
        $player_id = $_POST['player_id'];
        $match_id = $_POST['match_id'];
        $twopointsmade = $_POST['twopointsmade'];
        $threepointsmade = $_POST['threepointsmade'];
        $freethrowsmade = $_POST['freethrowsmade'];
        $totalpoints = $_POST['totalpoints'];
        $assists = $_POST['assists'];
        $rebounds = $_POST['rebounds'];
        $minutesplayed = $_POST['minutesplayed'];
        $foulsmade = $_POST['foulsmade'];


        $query    = "INSERT into `performances` (performance_id,player_id,match_id,twopointsmade,threepointsmade,freethrowsmade,totalpoints,assists,rebounds,minutesplayed,foulsmade)
        VALUES ('$performance_id','$player_id','$match_id','$twopointsmade','$threepointsmade','$freethrowsmade','$totalpoints','$assists','$rebounds','$minutesplayed','$foulsmade')";
$result   = mysqli_query($conn, $query);



        if ($result) {
           
            echo "<div class='form'>
                  <h3>Player Performance added successfully</h3><br/>";
                
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>

                  </div>";
            echo ("Error: " . mysqli_error($conn));
        }
    } else {
    ?>
        <form class="form" action="" method="post">
        
        <style>
         select {
            width: 100%;
            padding: 15px 15px;
            border: 1px;
            border-radius: 0px;
            background-color: white;
         }
        </style>

            <fieldset>
                <legend><strong>Form</strong></legend>
                Performance ID: <br><br><input type="text" placeholder="Performance ID" name="performance_id" class="login-input" required><br>
                
                Player ID: 
                <br><br><input type="text" placeholder="Player ID" name="player_id" class="login-input" required><br>
                    <!-- <br><br><select name="players"><br>
                    <?php 
                    while ($players = mysqli_fetch_array(
                        $all_players,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $players["player_id"];?>">
                    <?php echo $players["player_id"];?>
                    </option>
                     <?php 
                        endwhile; 
                     ?>
                     </select><br><br> -->
                
               
                Match ID: 
                <br><br><input type="text" placeholder="Match ID" name="match_id" class="login-input" required><br>
                    <!-- <br><br><select name="matches"><br>
                    <?php 
                    while ($matches = mysqli_fetch_array(
                        $all_matches,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $matches["match_id"];?>">
                    <?php echo $matches["match_id"];?>
                    </option>
                     <?php 
                        endwhile; 
                     ?>
                     </select><br><br> -->
                
                
                2 Points made: <br><br><input type="number" placeholder="No of two pointers" name="twopointsmade" class="login-input" required><br>
                3 Points made: <br><br><input type="number" placeholder="No of three pointers" name="threepointsmade" class="login-input" required><br>
                Free throws made : <br><br><input type="number" placeholder="Free throws made" name="freethrowsmade" class="login-input" required><br>
                Total Points: <br><br><input type="number" placeholder="Total points scored" name="totalpoints" class="login-input" required><br>
                Assists: <br><br><input type="number" placeholder="Assists made" name="assists" class="login-input" required><br>
                Rebounds: <br><br><input type="number" placeholder="Rebounds made" name="rebounds" class="login-input" required><br>
                Minutes Played: <br><br><input type="number" placeholder="minutes played" name="minutesplayed" class="login-input" required><br>
                Fouls Made: <br><br><input type="number" placeholder="Fouls made" name="foulsmade" class="login-input" required><br>

                <input type="submit" name="submit" value="Submit" class="login-button">


            </fieldset>



        </form>
    <?php
    }
    ?>


</body>

</html>
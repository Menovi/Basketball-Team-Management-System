<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Update</title>
    <link rel="stylesheet" href="assets/css/style12.css"/>
</head>
<body>


<?php
    require('dbconnect.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['update'])) {
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


        $query    = "UPDATE `performances` set player_id='$player_id',match_id='$match_id',twopointsmade='$twopointsmade',
                     threepointsmade='$threepointsmade',freethrowsmade='$freethrowsmade',totalpoints='$totalpoints',
                     assists='$assists',rebounds='$rebounds',minutesplayed='$minutesplayed',
                     foulsmade='$foulsmade' WHERE performance_id='$performance_id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Updated Successfully</h3><br/>
                  <p class='link'>Click here to <a href='showperformances.php'> Go Back</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Couldn't Update ! Re-check Your details</h3><br/>
                  <p class='link'>Click here to <a href='showperformances.php'> Go Back</a></p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="post" name="login">
        <h1 class="login-title">Update Performance details</h1>
        Enter Performance ID : <br><br><input type="text" class="login-input" name="performance_id" placeholder="Reconfirm Performance ID to Update" required autofocus="true"/>
        Enter Player ID: <br><br><input type="text"  placeholder="Player ID" name="player_id" class="login-input" required><br> 
        Enter Match ID <br><br><input type="text"  placeholder="Match ID" name="match_id" class="login-input" required><br>
        Enter 2 Points made: <br><br><input type="number"  placeholder="No. of 2 pointers" name="twopointsmade" class="login-input" required><br> 
        Enter 3 Points made: <br><br><input type="number"  placeholder="No, of 3 pointers" name="threepointsmade" class="login-input" required><br>
        Enter Free throws made: <br><br><input type="number"  placeholder="No of Free throws made" name="freethrowsmade" class="login-input" required><br>  
        Enter Total Points: <br><br><input type="number"  placeholder="Total Points" name="totalpoints" class="login-input" required><br> 
        Enter Assists: <br><br><input type="number"  placeholder="Assists" name="assists" class="login-input" required><br> 
        Enter Rebounds <br><br><input type="number"  placeholder="Rebunds" name="rebounds" class="login-input" required><br>
        Enter Minutes Played: <br><br><input type="number"  placeholder="Minutes Played" name="minutesplayed" class="login-input" required><br> 
        Enter Fouls Made <br><br><input type="number"  placeholder="Fouls Made" name="foulsmade" class="login-input" required><br>     
        <input type="submit" value="Update" name="update" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>
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
        $match_id = $_POST['match_id'];
        $team1_id = $_POST['team1_id'];
        $team1points = $_POST['team1points'];
        $team2_id = $_POST['team2_id'];
        $team2points = $_POST['team2points'];
        $match_date = $_POST['match_date'];
        $match_location = $_POST['match_location'];

        $query    = "UPDATE `matches` set team1_id='$team1_id',team1points='$team1points',team2_id='$team2_id',team2points='$team2points',match_date='$match_date',match_location='$match_location' WHERE match_id='$match_id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Updated Successfully</h3><br/>
                  <p class='link'>Click here to <a href='showmatches.php'> Go Back</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Couldn't Update ! Re-check Your details</h3><br/>
                  <p class='link'>Click here to <a href='showmatches.php'> Go Back</a></p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="post" name="login">
        <h1 class="login-title">Update Match details</h1>
        Enter Match ID : <br><br><input type="text" class="login-input" name="match_id" placeholder="Reconfirm Match ID to Update" required autofocus="true"/>
        Enter Team 1 ID: <br><br><input type="text"  placeholder="Team 1 ID" name="team1_id" class="login-input" required><br> 
        Enter Team 1 Points: <br><br><input type="number"  placeholder="Team 1 Points" name="team1points" class="login-input" required><br>
        Enter Team 2 ID: <br><br><input type="text"  placeholder="Team 2 ID" name="team2_id" class="login-input" required><br> 
        Enter Team 2 Points: <br><br><input type="number"  placeholder="Team 2 Points" name="team2points" class="login-input" required><br>
        Enter Match date: <br><br><input type="date"  placeholder="Match Date" name="match_date" class="login-input" required><br>  
        Enter Match Location: <br><br><input type="text"  placeholder="Location" name="match_location" class="login-input" required><br>      
        <input type="submit" value="Update" name="update" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>
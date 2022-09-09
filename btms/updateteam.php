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
        $TeamID = $_POST['TeamID'];
        $Team_name = $_POST['Team_name'];
        $Home_Court = $_POST['Home_Court'];

        $query    = "UPDATE `team` set Team_name='$Team_name',Home_Court='$Home_Court' WHERE TeamID='$TeamID'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Updated Successfully</h3><br/>
                  <p class='link'>Click here to <a href='showteam.php'> Go Back</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Couldn't Update ! Re-check Your details</h3><br/>
                  <p class='link'>Click here to <a href='showteam.php'> Go Back</a></p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="post" name="login">
        <h1 class="login-title">Update Team details</h1>
        Enter TeamID : <br><br><input type="text" class="login-input" name="TeamID" placeholder="Reconfirm Team ID to Update" required autofocus="true"/>
        Enter Team Name: <br><br><input type="text"  placeholder="New Team name" name="Team_name" class="login-input" required><br> 
        Enter Home Court: <br><br><input type="text"  placeholder="Home Court" name="Home_Court" class="login-input" required><br>    
        <input type="submit" value="Update" name="update" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>
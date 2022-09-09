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

    // $sql = "SELECT * FROM `players`";
    // $all_players = mysqli_query($conn,$sql);

    // When form submitted, check and create user session.
    if (isset($_POST['update'])) {
        $username = $_SESSION['username'];
        $player_id = $_POST['player_id'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $height = $_POST['height'];
        $dob = $_POST['dob'];
        $pos_name = $_POST['pos_name'];

        $query    = "UPDATE `players` set f_name='$f_name',l_name='$l_name',height='$height',dob='$dob',pos_name='$pos_name' WHERE player_id='$player_id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Updated Successfully</h3><br/>
                  <p class='link'>Click here to <a href='showplayers.php'> Go Back</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Couldn't Update ! Re-check Your details</h3><br/>
                  <p class='link'>Click here to <a href='showplayers.php'> Go Back</a></p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="post" name="login">
    <style>
         select {
            width: 100%;
            padding: 15px 15px;
            border: 1px;
            border-radius: 0px;
            background-color: white;
         }
      </style>
        <h1 class="login-title">Update Player details</h1>
        Enter Player Id : <br><br><input type="text" class="login-input" name="player_id" placeholder="Reconfirm Player ID to Update" required autofocus="true"><br>
        
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
        
        Enter First Name: <br><br><input type="text"  placeholder="First name" name="f_name" class="login-input" required><br> 
        Enter Last Name: <br><br><input type="text"  placeholder="Last name" name="l_name" class="login-input" required><br>
        Enter Height: <br><br><input type="number"  placeholder="Height" name="height" class="login-input" required><br> 
        Enter DOB: <br><br><input type="date"  placeholder="Date of Birth" name="dob" class="login-input" required><br>
        Enter Position: <br><br><input type="text"  placeholder="Position" name="pos_name" class="login-input" required><br>       
        <input type="submit" value="Update" name="update" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>
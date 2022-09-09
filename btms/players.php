<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Players</title>
    <link rel="stylesheet" href="assets/css/style6.css" />
</head>


<header id="header">
<h1 id="logo"><a href="dashboard.php">Basketball Team  <span>Management System</span></a></h1>
					<nav id="nav">
						
					<li><a href="players.php">Add another Player</a></li>
					</nav>		
									
				</header>
            


<body>
    <?php
    require('dbconnect.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        $player_id = $_POST['player_id'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $height = $_POST['height'];
        $dob = $_POST['dob'];
        $pos_name = $_POST['pos_name'];

        $query    = "INSERT into `players` (player_id,f_name,l_name,height,dob,pos_name)
        VALUES ('$player_id','$f_name','$l_name','$height','$dob','$pos_name')";
$result   = mysqli_query($conn, $query);



        if ($result) {
           
            echo "<div class='form'>
                  <h3>Player added successfully</h3><br/>";
                
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>

                  </div>";
            echo ("Error: " . mysqli_error($conn));
        }
    } else {
    ?>
        <form class="form" action="" method="post">

            <fieldset>
                <legend><strong>Form</strong></legend>
                Player ID: <br><br><input type="text" placeholder="Player ID" name="player_id" class="login-input" required><br>
                First Name: <br><br><input type="text" placeholder="First Name" name="f_name" class="login-input" required><br>
                Last Name: <br><br><input type="text" placeholder="Last Name" name="l_name" class="login-input" required><br>
                Height: <br><br><input type="number" placeholder="Height in cm" name="height" class="login-input" required><br>
                DOB: <br><br><input type="date" placeholder="Birth Date" name="dob" class="login-input" required><br>
                Position Name: <br><br><input type="text" placeholder="Position name" name="pos_name" class="login-input" required><br>
                
                <input type="submit" name="submit" value="Submit" class="login-button">


            </fieldset>



        </form>
    <?php
    }
    ?>


</body>

</html>
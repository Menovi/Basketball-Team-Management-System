<?php 
 require('dbconnect.php');     
    $player_id = $_GET['player_id'];
    $query    = "DELETE from `players` WHERE player_id='$player_id' ";
    $result   = mysqli_query($conn, $query);
   
if($result){
header("Location: showplayers.php");
}
else {
    echo "Row not deleted";
}    
?>
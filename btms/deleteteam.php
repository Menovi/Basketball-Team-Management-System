<?php 
 require('dbconnect.php');     
    $TeamID = $_GET['TeamID'];
    $query    = "DELETE from `team` WHERE TeamID='$TeamID' ";
    $result   = mysqli_query($conn, $query);
   
if($result){
header("Location: showteam.php");
}
else {
    echo "Row not deleted";
}    
?>
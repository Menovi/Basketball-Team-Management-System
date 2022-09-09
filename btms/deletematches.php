<?php 
 require('dbconnect.php');     
    $match_id = $_GET['match_id'];
    $query    = "DELETE from `matches` WHERE match_id='$match_id' ";
    $result   = mysqli_query($conn, $query);
   
if($result){
header("Location: showmatches.php");
}
else {
    echo "Row not deleted";
}    
?>
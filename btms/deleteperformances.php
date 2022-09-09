<?php 
 require('dbconnect.php');     
    $performance_id = $_GET['performance_id'];
    $query    = "DELETE from `performances` WHERE performance_id='$performance_id' ";
    $result   = mysqli_query($conn, $query);
   
if($result){
header("Location: showperformances.php");
}
else {
    echo "Row not deleted";
}    
?>
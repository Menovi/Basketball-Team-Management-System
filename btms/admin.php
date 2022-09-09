<?php

$conn = "";

try {
	$db = new mysqli("localhost","root","","basketteam");
}
catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
if(isset($_POST['admin_id']) && isset($_POST['admin_name']) && isset($_POST['admin_password']) ){
    $admin_id = $_POST['admin_id'];
$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];
}
?>

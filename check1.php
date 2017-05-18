<?php
require_once 'db.php';
@session_start();
$user = $_SESSION['username'];
 $dbcon =  Connect_Open();
$c1 = "UPDATE records SET survey_response = 'NOT_NOW' WHERE email = '".$user."'";
$Crun=mysqli_query($dbcon,$c1);
Connect_Close($dbcon);
?>

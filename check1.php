<?php
include("db.php");
@session_start();
$user = $_SESSION['username'];
$c1 = "UPDATE records SET survey_response = 'NOT_NOW' WHERE email = '".$user."'";
$Crun=mysqli_query($dbcon,$c1);
?>

<?php
require_once 'db.php';
$dbcon = Connect_Open();
$username = $_POST['email'];
$password = $_POST['password'];
$c1 = "select * from users,records where users.Email=BINARY '".$username."'  and users.Pass= BINARY '".$password."' and users.Email = records.email";
    $Crun=mysqli_query($dbcon,$c1);
     if ($Crun->num_rows != 0) {
       echo 1;
     }else{
     	echo 0;
     }
if ($Crun->num_rows != 0) {
$row = $Crun->fetch_object();
$survey_response = $row->survey_response;
if($survey_response!="complete")
{
$q1 = "UPDATE records SET survey_response = 'OPEN' WHERE email = '".$username."'";
 mysqli_query($dbcon,$q1);
 }
 }
 Connect_Close($dbcon);
?>

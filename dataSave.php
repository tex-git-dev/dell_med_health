<?php
include("db.php");
$MData = $_POST['MData'];
$email = $_POST['email'];
$MData = addslashes($MData);
$c1 = "select * from records where email='".$email."' and status='active'";
$Crun=mysqli_query($dbcon,$c1);
$row = $Crun->fetch_object();
$id= $row->id;
$c2 = "UPDATE records SET module_data='".$MData."' WHERE email='".$email."'";
$Crun1=mysqli_query($dbcon,$c2);
echo $Crun1;
?>
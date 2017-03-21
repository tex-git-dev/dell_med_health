<?php
include("db.php");
$username = $_POST['email'];
$password = $_POST['password'];
$c1 = "select * from users where Email=BINARY '".$username."'  and Pass= BINARY '".$password."'";
    $Crun=mysqli_query($dbcon,$c1);
     if ($Crun->num_rows != 0) {
       echo 1;
     }else{
     	echo 0;
     }
    // echo isLoginSessionExpired();
?>
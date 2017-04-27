<?php
include("db.php");
$username = $_POST['email'];
$password = $_POST['password'];
$c1 = "select * from users,records where users.Email=BINARY '".$username."'  and users.Pass= BINARY '".$password."' and users.Email = records.email";
    $Crun=mysqli_query($dbcon,$c1);
     if ($Crun->num_rows != 0) {
       echo 1;
     }else{
     	echo 0;
     }
?>

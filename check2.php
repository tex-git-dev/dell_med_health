<?php
require_once 'db.php';
@session_start();
$user = $_SESSION['username'];
 $dbcon =  Connect_Open();
$c1 = "select * from users,records where users.Email= '".$user."' and users.Email = records.email";
    $Crun=mysqli_query($dbcon,$c1);
     if ($Crun->num_rows == 0) {
       $c2 = "Delete from records  WHERE email = '".$user."'";
       mysqli_query($dbcon,$c2);
	   $c3 = "Delete from users  WHERE Email = '".$user."'";
	   mysqli_query($dbcon,$c3);
	   
	   session_destroy();  
       header("Location: index.php");
     }
 Connect_Close($dbcon);
?>

<?php 
function Connect_Open()
{ /*
$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"dellitl");
date_default_timezone_set("Asia/Kolkata");	


$dbcon=mysqli_connect("localhost","root","098pmg123");  
mysqli_select_db($dbcon,"dellitl"); 
date_default_timezone_set("Asia/Kolkata"); 
*/

$dbcon=mysqli_connect("23.253.97.11","dellmedapps_2","itlrocks");  
mysqli_select_db($dbcon,"dell_med"); 
date_default_timezone_set("America/New York"); 

return $dbcon;
}

function Connect_Close($dbcon)
{
 mysqli_close($dbcon);
}

?>




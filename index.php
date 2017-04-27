<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dell Medical School | The University of Texas at Austin</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="fonts/fonts.css"/>
    <link rel="stylesheet" href="css/animate.css"> 
      <link rel="stylesheet" href="css/common.css">
      
      <link rel="stylesheet" href="css/maxWidth_100x299.css">
      <link rel="stylesheet" href="css/maxWidth_300x500.css">
      <link rel="stylesheet" href="css/maxWidth_501x765.css">
      <link rel="stylesheet" href="css/maxWidth_766x1000.css">

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script type="text/javascript" src="js/wow.js"></script>
      <script type="text/javascript" src="js/plotly-latest.min.js"></script>
      <script type="text/javascript" src="js/jquery.inview.js"></script>
	<!--   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
      <link href="http://vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
      <script src="http://vjs.zencdn.net/5.11/video.min.js"></script>
       <script src="js/audioplayer.js"></script>

	<script src="js/script.js"></script>
       <?php

include("mail.php");


include("db.php");
$LoadPage = 'home';
$firstTimeWel=false;
//below is predefiend json for all user inputs. 
$startData='{';
$startData.='"m1":{"HR":"0","MIN":"0","complete":"0","status":"active","sections":{';
$startData.='"s1":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s2":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s3":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s4":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s5":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s6":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s7":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s8":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s9":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""}';
$startData.='}},';
$startData.='"m2":{"HR":"0","MIN":"0","complete":"0","status":"active","sections":{';
$startData.='"s1":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s2":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s3":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s4":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s5":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s6":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s7":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s8":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""}';
$startData.='}},';
$startData.='"m3":{"HR":"0","MIN":"0","complete":"0","status":"active","sections":{';
$startData.='"s1":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s2":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s3":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s4":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s5":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s6":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s7":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s8":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""},';
$startData.='"s9":{"HR":"0","MIN":"0","complete":"0","response1":"","response2":"","response3":""}';
$startData.='}}';
$startData.='}';
//Below process is used for get full host path. Ex. echo pathUrl();
function pathUrl($dir = __DIR__){
    $root = "";
    $dir = str_replace('\\', '/', realpath($dir));
    $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';
    $root .= '://' . $_SERVER['HTTP_HOST'];
    if(!empty($_SERVER['CONTEXT_PREFIX'])) {
        $root .= $_SERVER['CONTEXT_PREFIX'];
        $root .= substr($dir, strlen($_SERVER[ 'CONTEXT_DOCUMENT_ROOT' ]));
    } else {
        $root .= substr($dir, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
    }
    $root .= '/';
    return $root;
}
//For all post request.
if($_POST){
  if(isset($_POST['login']))  
  {
    //If user comes to login then enter this condition.
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c1 = "select * from users where Email='".$username."' and Pass='".$password."'";
    $Crun=mysqli_query($dbcon,$c1);
     if ($Crun->num_rows != 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        //$firstTimeWel=true;
        $LoadPage = 'home';
        $row0 = $Crun->fetch_object();
        $_SESSION['Fname']= $row0->Fname;
        $_SESSION['Lname']= $row0->Lname;
     }
  }
  if(isset($_POST['registration']))  
  {
    //If user want to registration then enter this condition.
    $Fname=$_POST['Fname'];  
    $Lname=$_POST['Lname']; 
    $Email=$_POST['Email']; 
    $Pass=$_POST['Pass']; 
    $Org=$_POST['Org']; 
    $Age=$_POST['Age']; 
    $Gender=$_POST['Gender']; 
    $City=$_POST['City']; 
    $State=$_POST['State']; 
    $Country=$_POST['Country']; 
    $PPRole=$_POST['PPRole']; 
    $c1 = "select * from users where Email='".$Email."'";
    $Crun=mysqli_query($dbcon,$c1);
     if ($Crun->num_rows == 0) {

       $q1="INSERT INTO users (Fname,Lname,Email,Pass,Org,Age,Gender,City,State,Country,PPRole) VALUES ('$Fname','$Lname','$Email','$Pass','$Org','$Age','$Gender','$City','$State','$Country','PPRole');";  
     $Qrun1=mysqli_query($dbcon,$q1);
        if($Qrun1 == 1){
        //If user registration data insert perfectly then it will create record row in records table. 
            $q2="INSERT INTO records (Fname,Lname,email,module_Number,module_data,status) VALUES ('$Fname','$Lname','$Email','m1','$startData','active');";
            $Qrun2=mysqli_query($dbcon,$q2);
             session_start();
              $_SESSION['username'] = $Email;
              $_SESSION['password'] = $Pass;
              $LoadPage = 'home';
              $_SESSION['Fname']= $Fname;
              $_SESSION['Lname']= $Lname;
        }
         $firstTimeWel=true;
     
    }else{
      ?>
     <script>
      $(document).ready(function(){
          app.Alert("E-mail ID is already registered.");
        });
      </script>
      <?php
    }

  }

}
 @session_start();
if(@$_SESSION['username']){
  //If session is active then find data in records table for this user. 
  $c0 = "select * from records where email='".$_SESSION['username']."' and status='active'";
  $Crun0=mysqli_query($dbcon,$c0);
  $row = $Crun0->fetch_object();
  $module_Number= $row->module_Number;
  $module_data= $row->module_data;
  $module_section_data= $row->module_section_data;
  $status= $row->status;
  $data = json_encode($module_data);
  //echo $data;
?>
<script type="text/javascript">

$(document).ready(function() {
  //After that data convert  string to JSON object .
  app.MData = JSON.parse(<?php echo ($data);?>);
  app.SelecteM = '<?php echo $module_Number;?>';
  app.init();
  // below function is used for all module data populate for all three modules.
  app.MDataPopulate();
    
    /*$(document).userTimeout({
      logouturl: 'Logout.php',
      session: 60000,
      force:45000,
    });*/
});
</script>
<?php }else{?>
<script type="text/javascript">
//If session is inactive then call simple init function. 
$(document).ready(function() {
        app.init();
});
</script>
<?php }?>
   </head>
   <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
   <body>
<?php 
// below is header file include.
include 'header.php';
// if user is enter the section parts then call below condition
if(@isset($_GET['id'])) {
  ?>
<script type="text/javascript">
$(document).ready(function() {
var mnumber = app.qs["id"][1];
if(mnumber==1)
{
app.ClickOnModule="module1";
}
if(mnumber==2)
{
app.ClickOnModule="module2";
}
if(mnumber==3)
{
app.ClickOnModule="module3";
}
  // this is used for modules button active and deactive stage in menu module section.
    var s = app.qs["id"][6];
    app.SelecteM = app.qs["id"][0]+app.qs["id"][1];
    var c = parseInt(app.qs["id"][1])-1;
     $(".allModule1 .btn").eq(c).addClass('act1');
     $(".allModule2 .btn").eq(c).addClass('act1');
     $(".allModule3 .btn").eq(c).addClass('act1');
  // below function is used for all sections data populate for all three modules.
    app.SDataPopulate(s);
});
</script>
  <?php
try {
  //if users enter section part then call below made path.
   include 'view/'.@$_GET['id'].'.php';
} catch(Exception $e) {
  //if path is not exist then user redirect to homepage.
   include 'view/'.$LoadPage.'.php';
}
  
}else{
  //if session is inactive then user also redirect to homepage.
  include 'view/'.$LoadPage.'.php';
}
//include 'footer.php';



  ?>
   
   </body>
</html>

<script>
document.getElementById('id01').style.display='none';
</script>
<?php
if(!$_SESSION['username']){
  ?>
  <script>
  window.location.href="<?php echo pathUrl();?>";
  </script>
<?php
}
?>
 <?php 
 include("db.php");
@session_start();
$user = $_SESSION['username'];
 $chk = "";
if(isset($_GET["survey"]))
{
 $chk = $_GET["survey"];
}
if($chk=="complete")
{
$c1 = "UPDATE records SET survey_response = 'complete' WHERE email = '".$user."'";
$Crun=mysqli_query($dbcon,$c1);
}
$c2 = "select * from records where email='".$user."' and status='active'";
$Crun1=mysqli_query($dbcon,$c2);
$row = $Crun1->fetch_object();
$chk= $row->survey_response;
 ?>
<link rel="stylesheet" href="css/survey.css">
    <div class="survey">
    <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br> 
			    <?php 
 if($chk!="complete"){
?> 
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">Collection Complete</p></f>
            </div>
         </div>
		 <?php 
		 }
		 ?>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>
			    <?php 
 if($chk=="complete"){
  echo "We thank you for your time spent taking this survey.
Your response has been recorded.";
 }
 else{
 
 ?>
			   Introduction to Value-Based Health Care
			   <?php 
			   }
			   ?>
			   </h2></f>
            </div>
         </div>
		 			    <?php 
 if($chk!="complete"){
?> 
         <div class="row">
            <div class="col-sm-12">
               <a  class="" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a>
            </div>
         </div>
		 <?php
		 }
		 ?>
      </div>
   </div>
 </div>
 
 <div class="col-md-12" style="display:<?php if($chk=="complete"){ echo "none";}else{ echo "block"; } ?>;">
 <h3 class="text-center" style="font-weight:bold;">CONGRATULATIONS!</h3> 
 <p class="text-center" style="font-size:14px;padding:0px 150px;">
 You have completed the first collection of modules in Dell Medical School’s series on Value-Based
Health Care, <b>Introduction to Value-Based Health Care</b>.</p>

 <p class="text-center" style="font-size:14px;padding:0px 150px;">
We would like to thank you for taking the time to complete this collection and hope you found the
experience, information, and presentation valuable.</p>
 <h3 class="text-center" style="font-weight:bold;">Please take a moment to</h3>
 <p class="text-center"><button style="padding:20px 100px;background:#43BEA7;color:white;font-size:14px;" onclick="clickFuncrion()">Complete our Survey</button></p>
<p class="text-center"  style="font-size:14px;">Your certificate will be emailed to you within a week of survey completion.</p>
<p class="text-center" style="font-size:14px;">Thank you!</p>
 </div>
 
 <script>
 function clickFuncrion()
 {
 
      var url ='https://utexas.qualtrics.com/jfe/form/SV_8u0qXmVTQYx5XUx';
      var win = window.open(url, '_blank');
      win.focus();
}
 </script>



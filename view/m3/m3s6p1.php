<?php
if(!$_SESSION['username']){
  ?>
  <script>
  window.location.href="<?php echo pathUrl();?>";
  </script>

<?php
}
include("view/cjs.php");
?>
<script src="js/jqcloud-1.0.4.js"></script>
<link rel="stylesheet" type="text/css" href="jqcloud/jqcloud.css" />
<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>
<link rel="stylesheet" href="css/m3s6p1.css">
<style>
.m3s6p1 .bbc
{
background-color:#3B4254;
color:white;
}
.m3s6p1 .rbc
{
background-color:#BF5700;
color:white;
}
.m3s6p1 .marginpading{
padding:20px 0px;
margin:5px;
}
.m3s6p1 .mympd1 .row
{
padding:10px 7px;
}
.m3s6p1 .mympd1 p i{
font-size:20px;
padding:6px;
text-align:center;
color:#BF5700;
cursor:pointer;
}
.m3s6p1 span
{
display:none;
}

.modal-body, .modal-header{
background-color:#BF5700!important;
color:white;
}
</style>
<div class="m3s6p1">
<div class="col-md-12">
<div class="col-md-5">
<p style="text-align:justify;color:black;">
Ms. Grace Chen knows to avoid the perfume section in the department store. At
53-years-old, she has lived with asthma her entire life. Scented perfumes and other
“triggers” can suddenly cause her airways to spasm, sending her into a fit of
wheezing. Today, she is not entirely sure what set off her symptoms, but she could
feel her chest tightening up as it became more and more difficult to catch her
breath, a sensation that she has experienced many times before. She reached into
her purse to take out her inhaler and took a few puffs. She still felt like she was
trying to breathe through a snorkel to get the air down to her lungs. Realizing that
she may need help, she asked her son to drive her to a nearby urgent care clinic.
At the urgent care clinic, Ms. Chen is <a href="" class="span1show">evaluated by a physician</a>,<a href="" class="span2show">given a breathing treatment</a>, and <a href="" class="span3show">undergoes an electrocardiogram (EKG)</a>. Following the breathing treatment, she continues to have significant wheezing and shortness of breath, so
the <a href="" class="span4show">urgent care clinic physician coordinates</a> for an <a href="" class="span5show">ambulance to take her to an emergency room across town</a>. Ms. Chen has had to visit the ER for her asthma
before, but it has been a number of years since the last episode that was this bad.
In the ER, <a href="" class="span6show">she is promptly placed in a room</a> and <a href="" class="span7show">evaluated by an emergency medicine physician</a>. Ms. Chen <a href="" class="span8show">undergoes further breathing treatments</a>. A <a href="" class="span9show">chest x-ray is taken</a>, <a href="" class="span10show">blood is drawn for labs</a>, and <a href="" class="span11show">another EKG done</a>. Her labs are ok, her chest x-ray is clear, and her EKG remains normal. The <a href="" class="span12show">physician then decides to
obtain a chest CT (computed tomography) scan</a> “just to be sure nothing was
missed.” The CT scan does not reveal any significant abnormalities. <a href="" class="span13show">Following
more breathing treatments</a> and an <a href="" class="span14show">intravenous administration of solumedrol (a
steroid)</a>, she improves. She ultimately is <a href="" class="span15show">discharged home with self-care
instructions</a>, including directions for using her home inhalers and a <a href="#" class="span16show">prescription</a> for
oral steroids.
</p>
</div>
<div class="col-md-7">
<div class="row">
<div class="col-md-5 bbc marginpading" style="text-align:center">Chargemaster</div>
<div class="col-md-5 rbc marginpading" style="text-align:center">TDABC</div>
<div class="col-md-1 rbc" style="padding:10px 0px;margin:5px;text-align:center;">See cost Breakdowd</div>
</div>

<div class="row">
<div class="col-md-5 bbc marginpading mympd1">
<!--Evaluation md start-->
<div class="row">
<div class="col-md-8">
Evaluation (MD)
</div>
<div class="col-md-4">
<span class="span1">$108.20</span>
</div>
</div>
<!--Evaluation md end-->

<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="span2">$340.00</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--EKG (Technician) start-->
<div class="row">
<div class="col-md-8">
EKG (Technician)
</div>
<div class="col-md-4">
<span class="span3">$550.00</span>
</div>
</div>
<!--BEKG (Technician) end-->

<!--UCC Coordinates (MD).$ start-->
<div class="row">
<div class="col-md-8">
UCC Coordinates (MD)
</div>
<div class="col-md-4">
<span class="span4">$376.00</span>
</div>
</div>
<!--UCC Coordinates (MD).$ end-->

<!--Ambulance drives to ER start-->
<div class="row">
<div class="col-md-8">
Ambulance drives to ER
</div>
<div class="col-md-4">
<span class="span5">$995</span>
</div>
</div>
<!--Ambulance drives to ER end-->

<!--Assigned room (Nurse) start-->
<div class="row">
<div class="col-md-8">
Assigned room (Nurse)
</div>
<div class="col-md-4">
<span class="span6">$799</span>
</div>
</div>
<!--Assigned room (Nurse) end-->

<!--Evaluation (ER MD) start-->
<div class="row">
<div class="col-md-8">
Evaluation (ER MD)
</div>
<div class="col-md-4">
<span class="span7">$536.24</span>
</div>
</div>
<!--Evaluation (ER MD) end-->

<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="span8">$340.00</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--X-ray (Technician) start-->
<div class="row">
<div class="col-md-8">
X-ray (Technician)
</div>
<div class="col-md-4">
<span class="span9">$435</span>
</div>
</div>
<!--X-ray (Technician) end-->


<!--Blood for labs (Nurse and Technician) start-->
<div class="row">
<div class="col-md-8">
Blood for labs (Nurse and Technician)
</div>
<div class="col-md-4">
<span class="span10">$410.00</span>
</div>
</div>
<!--Blood for labs (Nurse and Technician) end-->


<!--EKG (Technician) start-->
<div class="row">
<div class="col-md-8">
EKG (Technician)
</div>
<div class="col-md-4">
<span class="span11">$550</span>
</div>
</div>
<!--EKG (Technician) end-->



<!--Chest CT (Technician) start-->
<div class="row">
<div class="col-md-8">
Chest CT (Technician)
</div>
<div class="col-md-4">
<span class="span12">$3070</span>
</div>
</div>
<!--Chest CT (Technician) end-->


<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="span13">$340</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--IV steroid (Nurse) start-->
<div class="row">
<div class="col-md-8">
IV steroid (Nurse)
</div>
<div class="col-md-4">
<span class="span14">$427</span>
</div>
</div>
<!--IV steroid (Nurse) end-->


<!--Discharge and education
(Nurse) start-->
<div class="row">
<div class="col-md-8">
Discharge and education(Nurse)
</div>
<div class="col-md-4">
<span class="span15">$358</span>
</div>
</div>
<!--Discharge and education
(Nurse) end-->

</div>

<div class="col-md-5 rbc marginpading mympd1">
<!--Evaluation md start-->
<div class="row">
<div class="col-md-8">
Evaluation (MD)
</div>
<div class="col-md-4">
<span class="span1">$45.40</span>
</div>
</div>
<!--Evaluation md end-->

<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="span2">$28.04</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--EKG (Technician) start-->
<div class="row">
<div class="col-md-8">
EKG (Technician)
</div>
<div class="col-md-4">
<span class="span3">$65.75</span>
</div>
</div>
<!--BEKG (Technician) end-->

<!--UCC Coordinates (MD).$ start-->
<div class="row">
<div class="col-md-8">
UCC Coordinates (MD)
</div>
<div class="col-md-4">
<span class="span4">$24.80</span>
</div>
</div>
<!--UCC Coordinates (MD).$ end-->

<!--Ambulance drives to ER start-->
<div class="row">
<div class="col-md-8">
Ambulance drives to ER
</div>
<div class="col-md-4">
<span class="span5">$34.69</span>
</div>
</div>
<!--Ambulance drives to ER end-->

<!--Assigned room (Nurse) start-->
<div class="row">
<div class="col-md-8">
Assigned room (Nurse)
</div>
<div class="col-md-4">
<span class="span6">$13.68</span>
</div>
</div>
<!--Assigned room (Nurse) end-->

<!--Evaluation (ER MD) start-->
<div class="row">
<div class="col-md-8">
Evaluation (ER MD)
</div>
<div class="col-md-4">
<span class="span7">$65.87</span>
</div>
</div>
<!--Evaluation (ER MD) end-->

<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="span8">$29.47</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--X-ray (Technician) start-->
<div class="row">
<div class="col-md-8">
X-ray (Technician)
</div>
<div class="col-md-4">
<span class="span9">$17.84</span>
</div>
</div>
<!--X-ray (Technician) end-->


<!--Blood for labs (Nurse and Technician) start-->
<div class="row">
<div class="col-md-8">
Blood for labs (Nurse and Technician)
</div>
<div class="col-md-4">
<span class="span10">$136.27</span>
</div>
</div>
<!--Blood for labs (Nurse and Technician) end-->


<!--EKG (Technician) start-->
<div class="row">
<div class="col-md-8">
EKG (Technician)
</div>
<div class="col-md-4">
<span class="span11">$65.75</span>
</div>
</div>
<!--EKG (Technician) end-->



<!--Chest CT (Technician) start-->
<div class="row">
<div class="col-md-8">
Chest CT (Technician)
</div>
<div class="col-md-4">
<span class="span12">$301.12</span>
</div>
</div>
<!--Chest CT (Technician) end-->


<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="span13">$27.82</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--IV steroid (Nurse) start-->
<div class="row">
<div class="col-md-8">
IV steroid (Nurse)
</div>
<div class="col-md-4">
<span class="span14">$53.41</span>
</div>
</div>
<!--IV steroid (Nurse) end-->


<!--Discharge and education
(Nurse) start-->
<div class="row">
<div class="col-md-8">
Discharge and education(Nurse)
</div>
<div class="col-md-4">
<span class="span15">$21.45</span>
</div>
</div>
<!--Discharge and education
(Nurse) end-->

</div>

<div class="col-md-1 mympd1" style="padding:20px 0px;margin:5px;background-color:whitesmoke">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal1"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal2"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal3"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal4"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal5"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal6"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal7"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal8"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal9"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal10"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal3"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal12"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal13"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal14"></i></p>
<p><i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal15"></i></p>
</div>
</div>

<div class="row">
<div class="col-md-5 bbc marginpading">
All charges from chargemaster<br/>
Total:<span style="float:right;" class="total1">$9,634.44</span>
 </div>
<div class="col-md-5 rbc marginpading" >
All charges from chargemaster<br/>
Total:<span style="float:right;" class="total2">$931.36</span>
</div>
</div>

<div class="row">
<div class="col-md-5 bbc marginpading calc1" style="text-align:center;cursor:pointer;"> Calculate</div>
<div class="col-md-5 rbc marginpading calc2" style="text-align:center;cursor:pointer;">Calculate</div>
</div>

<div class="row">
<div class="col-md-5 bbc marginpading">
Co-insurance (20%):<span style="float:right;" class="coinc1">$1926.88</span><br/>
Co-payments ($20):<span style="float:right;" class="copay1">$20</span><br/>
Deductible ($1000; $500 paid):<span style="float:right;" class="deduc1">$500</span><br/>
 </div>
<div class="col-md-5 rbc marginpading">
Co-insurance (20%):<span style="float:right;" class="coinc2">$186.27</span><br/>
Co-payments ($20):<span style="float:right;" class="copay2">$20</span><br/>
Deductible ($1000; $500 paid):<span style="float:right;" class="deduc2">$500</span><br/>

</div>
</div>
<div class="row">

<div class="col-md-3">
</div>
<div class="col-md-4 showallspan" style="text-align:center;padding:5px 0;background-color:#BF5700;color:white;cursor:pointer;">
Quick add all costs
</div>

</div>

</div>
<div class="container">
<h3 style="text-align:center;">Reimbursement</h3>
</div>
<div class="container" style="text-align:center;">
<div class="col-md-5 bbc marginpading">
Fee-for-Service
 </div>
<div class="col-md-5 rbc marginpading" >
Bundled Payments
</div>
</div>

<div class="container">
<div class="col-md-5 bbc marginpading">
Total:<span style="float:right;" class="total1">$931.36</span><br/>
Negotiated insurance rate…. 20%<br/>
Urgent Care <span style="float:right;" class="total1">$1926.88</span><br/>
Emergency Department <span style="float:right;" class="total1">$1926.88</span><br/>
</div>
<div class="col-md-5 rbc marginpading" >
Asthma exacerbation treatment: $1500
<br/><br/><br/><br/>
</div>
</div>

</div>
</div>


<!-- Modal 1 start -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Evaluation: 15 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Urgent Care Physician:
	  </div>
	 <div class="col-md-2">
	 $185,000 +
	 </div>
	 <div class="col-md-2">
	 15,000 +
	 </div>
	  
	  <div class="col-md-2">
	 8,000 +
	 </div>
	 <div class="col-md-2">
	  $208,000
	 </div>
	 <div class="col-md-1">
	  $17,333
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$17,333 (Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $155/hour
	   </div>
	</div>
	
	
	     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	$500,000 
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $1000 
	 </div>
	<div class="col-md-1">
      $5000 
	 </div>
	 <div class="col-md-2">
	  $56,000
	 </div>
	 <div class="col-md-1">
	  $4667
	 </div>
      </div>
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$4667 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $6.40 /hour
	   </div>
	</div> 
	      
Total ($155 * 0.25) + ($6.40 * 0.25) = $45.40  
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 1 end -->

<!-- Modal 2 start -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Breathing Treatment: 20 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-1">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-1">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-3">
	  Nurse:
	  </div>
	 <div class="col-md-1">
	 $65,000 +
	 </div>
	 <div class="col-md-2">
	 9,000 +
	 </div>
	  <div class="col-md-2">
	 10,800 +
	 </div>
    <div class="col-md-1">
	  2,560 +
	 </div> 
	
	 <div class="col-md-2">
	 $87,360 
	 </div>
	 <div class="col-md-1">
	  $7,280
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,280(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $65/hour
	   </div>
	</div>
	
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	  $500,000
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $1000 
	 </div>
	<div class="col-md-1">
      $5000 
	 </div>
	 <div class="col-md-2">
	  $56,000
	 </div>
	 <div class="col-md-1">
	  $4667
	 </div>
      </div>

	  
	  	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	   <div class="col-md-5">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$4667 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $6.40 /hour
	   </div>
	</div> 
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-2">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-2">
	  Nebulizer:
	  </div>
	 <div class="col-md-2">
	  $200
	 </div>
	 <div class="col-md-2">
	 1 yr  
	</div>	
	<div class="col-md-2">
      $40 
	 </div>
	 <div class="col-md-2">
	  $240
	 </div>
	 <div class="col-md-2">
	  $20
	 </div>
      </div>
	  
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	   <div class="col-md-5">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$20 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	  = $0.03 per hour
	   </div>
	</div> 
	<p>Albuterol: 5mg/ml: $4.47</p>
<p>	Total ($65 * 0.33) + ($6.40 * .33) + ($0.03 * .33) + $4.47 = $28.04 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 2 end -->

<!-- Modal 3 start -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">EKG: 20 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-2">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Technician:
	  </div>
	 <div class="col-md-2">
	 $50,000 +
	 </div>
	 <div class="col-md-2">
	 7,000 +
	 </div>
	  <div class="col-md-2">
	 2,500 +
	 </div>
	 <div class="col-md-2">
	 $59,500
	 </div>
	 <div class="col-md-2">
	 $4,958
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $4,958(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $44/hour
	   </div>
	</div>
	
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	  $500,000
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $1000 
	 </div>
	<div class="col-md-1">
      $5000 
	 </div>
	 <div class="col-md-2">
	  $56,000
	 </div>
	 <div class="col-md-1">
	  $4667
	 </div>
      </div>
	  
	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$4667 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $6.40 /hour
	   </div>
	</div> 

	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Electrocardiogram Machine:
	  </div>
	 <div class="col-md-2">
	  $50,000
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $200 
	 </div>
	 <div class="col-md-2">
	  $5200
	 </div>
	 <div class="col-md-2">
	  $433
	 </div>
      </div>
	  
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	   <div class="col-md-5">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$433 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	  = $0.60 per hour
	   </div>
	</div> 
	<p>Electrodes (10): $5.30 each</p>
<p>	Total ($44 * 0.25) + ($6.40 * .25) + ($0.60 * .25) + ($5.30 *10) = $65.75 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 3 end -->


<!-- Modal 4 start -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Ambulance Coordination: 10 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-2">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Technician:
	  </div>
	 <div class="col-md-2">
	 $185,000 +
	 </div>
	 <div class="col-md-2">
	 15,000 +
	 </div>
	  <div class="col-md-2">
	 8,000 +
	 </div>
	 <div class="col-md-2">
	 $339,705
	 </div>
	 <div class="col-md-2">
	 $28309
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $28309(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $155/hour
	   </div>
	</div>
<p>	Total ($155 * 0.16) = $25 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 4 end -->



<!-- Modal 5 start -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Ambulance Drives to ER: 15 minutes/10 miles</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-2">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Driver:
	  </div>
	 <div class="col-md-2">
	 $25000 +
	 </div>
	 <div class="col-md-2">
	 2,500 +
	 </div>
	  <div class="col-md-2">
	 3,000 +
	 </div>
	 <div class="col-md-2">
	 $30,500
	 </div>
	 <div class="col-md-2">
	 $2,542
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $2,542(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $22.70/hour
	   </div>
	</div>

	
	     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-2">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  EMT (X2):
	  </div>
	 <div class="col-md-2">
	 $32,000 +
	 </div>
	 <div class="col-md-2">
	 3,000 +
	 </div>
	  <div class="col-md-2">
	 3,000 +
	 </div>
	 <div class="col-md-2">
	 $38,000
	 </div>
	 <div class="col-md-2">
	 $3,167
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $3,167(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $28.27/hour
	   </div>
	</div>
	
	
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Ambulance:
	  </div>
	 <div class="col-md-2">
	 $125,000
	 </div>
	 <div class="col-md-1">
	 4 yr 
	</div>	
	<div class="col-md-2">
      $24,000
	 </div>
	 <div class="col-md-2">
	  $55,250
	 </div>
	 <div class="col-md-1">
	  $4,604
	 </div>
    </div>
	  
	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$4,604 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $6.30 per hour
	   </div>
	</div> 

	  
	<p>Cost per mile = $1.33</p>
<p>Total ($22.70 * 0.25) + ($28.27 * .25)(2) + ($6.30 * .25) + ($1.33 * 10) =
$34.69 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 5 end -->


<!-- Modal 6 start -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Assigned Room: 15 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-2">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Nurse:
	  </div>
	 <div class="col-md-2">
	 $65,000 +
	 </div>
	 <div class="col-md-2">
	 9,000 +
	 </div>
	  <div class="col-md-2">
	 10,800 +
	 </div>
	 <div class="col-md-2">
	 $87,360
	 </div>
	 <div class="col-md-2">
	 $7,280
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $7,280(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $44/hour
	   </div>
	</div>
	
	
	
	     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	$850,000
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $2000 
	 </div>
	<div class="col-md-1">
      $7000 
	 </div>
	 <div class="col-md-2">
	  $94,000
	 </div>
	 <div class="col-md-1">
	  $7,833
	 </div>
      </div>
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,833 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $10.73 per hour
	   </div>
	</div> 
	      
Total ($44 * 0.25) + ($10.73 * .25) = $13.68 
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 6 end -->

<!-- Modal 7 start -->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Evaluation: 15 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Urgent Care Physician:
	  </div>
	 <div class="col-md-2">
	 $315,000 +
	 </div>
	 <div class="col-md-2">
	 15,000 +
	 </div>
	  
	  <div class="col-md-2">
	 12,000 +
	 </div>
	 <div class="col-md-2">
	 $339,705
	 </div>
	 <div class="col-md-1">
	  $28309
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$28309 (Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $252.76/hour
	   </div>
	</div>
	
	
	     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	$850,000 
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $2000 
	 </div>
	<div class="col-md-1">
      $7000 
	 </div>
	 <div class="col-md-2">
	  $94,000
	 </div>
	 <div class="col-md-1">
	  $7,833
	 </div>
      </div>
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,833 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $10.73 per hour
	   </div>
	</div> 
	      
Total ($252.76 * 0.25) + ($10.73 * 0.25) = $65.87 
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 7 end -->

<!-- Modal 8 start -->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Breathing Treatment: 20 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-1">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-1">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-3">
	  Nurse:
	  </div>
	 <div class="col-md-1">
	 $65,000 +
	 </div>
	 <div class="col-md-2">
	 9,000 +
	 </div>
	  <div class="col-md-2">
	 10,800 +
	 </div>
    <div class="col-md-1">
	  2,560 +
	 </div> 
	
	 <div class="col-md-2">
	 $87,360 
	 </div>
	 <div class="col-md-1">
	  $7,280
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,280(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $65/hour
	   </div>
	</div>
	
	
	     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	$850,000 
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $2000 
	 </div>
	<div class="col-md-1">
      $7000 
	 </div>
	 <div class="col-md-2">
	  $94,000
	 </div>
	 <div class="col-md-1">
	  $7,833
	 </div>
      </div>
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,833 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $10.73 per hour
	   </div>
	</div>   

	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-2">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-2">
	  Nebulizer:
	  </div>
	 <div class="col-md-2">
	  $200
	 </div>
	 <div class="col-md-2">
	 1 yr  
	</div>	
	<div class="col-md-2">
      $40 
	 </div>
	 <div class="col-md-2">
	  $240
	 </div>
	 <div class="col-md-2">
	  $20
	 </div>
      </div>
	  
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	   <div class="col-md-5">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$20 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	  = $0.03 per hour
	   </div>
	</div> 
	<p>Albuterol: 5mg/ml: $4.47</p>
<p>	Total ($65 * 0.33) + ($10.73 * .33) + ($0.03 * .33) + $4.47 = $29.47 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 8 end -->

<!-- Modal 9 start -->
  <div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Chest X-Ray: 20 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-2">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Technician::
	  </div>
	 <div class="col-md-2">
	 $50,000 +
	 </div>
	 <div class="col-md-2">
	 7,000 +
	 </div>
	  <div class="col-md-2">
	 2,500 +
	 </div>
	 <div class="col-md-2">
	 $59,500
	 </div>
	 <div class="col-md-2">
	 $4,958
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $4,958(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $44/hour
	   </div>
	</div>

	
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-2">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-2">
	  Examination Room::
	  </div>
	 <div class="col-md-2">
	 $1,00,000
	 </div>
	 <div class="col-md-1">
	20 yr 
	</div>	
	<div class="col-md-2">
     $7,000
	 </div>
	<div class="col-md-2">
	 15,000
	 </div>
	 <div class="col-md-2">
	  $72,000
	 </div>
	 <div class="col-md-1">
	  $6,000
	 </div>
    </div>
	  
	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$6,000 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $8.22 per hour
	   </div>
	</div> 


	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-2">
	  X-ray Machine:
	  </div>
	 <div class="col-md-2">
	 $130,000
	 </div>
	 <div class="col-md-1">
	10 yr
	</div>	
	<div class="col-md-2">
     $3,000
	 </div>
	 <div class="col-md-2">
	$16,00
	 </div>
	 <div class="col-md-1">
	  $1,333
	 </div>
    </div>
	  
	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$1,333(Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $1.83 per hour
	   </div>
	</div> 

	  

<p>Total ($44 * 0.33) + ($8.22 * .33) + ($1.83 * .33) = $17.84 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 9 end -->

<!-- Modal 10 start -->
  <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Blood Draw and Analysis: Variable Time</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-1">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Nurse:
	  </div>
	 <div class="col-md-2">
	 $65,000 +
	 </div>
	 <div class="col-md-2">
	 9,000 +
	 </div>
	  <div class="col-md-2">
	 10,800 +
	 </div>
	  <div class="col-md-2">
	 2,560 +
	 </div> 
	 <div class="col-md-1">
	 $87,360
	 </div>
	 <div class="col-md-1">
	 $7,280
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $7,280(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $65/hour
	   </div>
	</div>

     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-1">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
   </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Technician (Analysis):
	  </div>
	 <div class="col-md-2">
	 $45,000 +
	 </div>
	 <div class="col-md-2">
	 2,700 +
	 </div>
	  <div class="col-md-2">
	 4,000 +
	 </div>
	  <div class="col-md-2">
	 5,000 +
	 </div> 
	 <div class="col-md-1">
	 $56,700
	 </div>
	 <div class="col-md-1">
	 $4,725
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $4,725(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $42/hour
	   </div>
	</div>

	
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-1">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
   </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Pathologist (analysis):
	  </div>
	 <div class="col-md-2">
	 $250,000 +
	 </div>
	  <div class="col-md-2">
	 10,000 +
	 </div>
	  <div class="col-md-2">
	 7,000 +
	 </div> 
	 <div class="col-md-1">
	 $267,000
	 </div>
	 <div class="col-md-1">
	 $22,250
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $22,250(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $199/hour
	   </div>
	</div>

<div class="col-md-12">
	<div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	$850,000
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $2000 
	 </div>
	<div class="col-md-1">
      $7000 
	 </div>
	 <div class="col-md-2">
	  $94,000
	 </div>
	 <div class="col-md-1">
	  $7,833
	 </div>
  </div>
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,833 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $10.73 per hour
	   </div>
	</div> 


	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-2">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	   <div class="col-md-2">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-2">
	 Analysis Lab:
	  </div>
	 <div class="col-md-2">
	 $1,000,000
	 </div>
	 <div class="col-md-2">
	10 yr
	</div>	
	<div class="col-md-2">
     $3,000
	 </div>
	 <div class="col-md-2">
	$15,00
	 </div>
	 <div class="col-md-1">
	  $118,000
	 </div>
     <div class="col-md-1">
	  $9,833
	 </div>
    </div>
	  
	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$9,833(Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $13.48 per hour
	   </div>
	</div> 
<p>Vials: $0.35 each</p>
<p>Vacutainer Blood Collection set: $0.93 each </p>

<p>Total ($65 * 0.33) + ($42 * 1) + ($199 * 0.25) + ($10.73 * .33) + ($13.48
* 1.25) + ($0.35 * 5)+ $0.93 = $136.27 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 10 end -->

<!-- Modal 12 start -->
  <div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">CT Scan: Variable Time</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-1">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Technician:
	  </div>
	 <div class="col-md-2">
	$45,000 +
	 </div>
	 <div class="col-md-2">
	 3,670 +
	 </div>
	  <div class="col-md-2">
	 4,000 +
	 </div>
	 <div class="col-md-2">
	 5,000 +
	 </div>
	 <div class="col-md-1">
	$56,760
	 </div>
	 <div class="col-md-1">
	$4,805
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $4,958(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $43/hour
	   </div>
	</div>
	
	
	
	     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-2">
	 Tech Support
	 </div>
	 <div class="col-md-1">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	 <div class="col-md-12" >
	  <div class="col-md-2">
	  Radiologist::
	  </div>
	 <div class="col-md-2">
	$350,000 +
	 </div>
	  <div class="col-md-2">
	 1,000 +
	 </div>
	 <div class="col-md-2">
	 7,000 +
	 </div>
	 <div class="col-md-1">
	$367,000
	 </div>
	 <div class="col-md-1">
	$30,583
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;"> $30,583(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $273/hour
	   </div>
	</div>
	
	
	
	
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	  $900,000
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $2000 
	 </div>
	<div class="col-md-1">
      $1000 
	 </div>
	 <div class="col-md-2">
	 $102,000
	 </div>
	 <div class="col-md-1">
	  $8500
	 </div>
      </div>
	  
	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$8500 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   == $11.64 per hour
	   </div>
	</div> 

	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  CT Scanner:
	  </div>
	 <div class="col-md-2">
	  $100,000
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $4000 
	 </div>
	 <div class="col-md-2">
	  $14000
	 </div>
	 <div class="col-md-2">
	 $1,167
	 </div>
      </div>
	  
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	   <div class="col-md-5">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$1,167 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	  = $1.60 per hour
	   </div>
	</div> 
<p>	Total ($43 * 0.5) + ($273 * 1) + ($11.64 * 0.5) + ($1.60 * .5) = $301.12 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 12 end -->

<!-- Modal 13 start -->
  <div class="modal fade" id="myModal13" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Breathing Treatment: 20 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-1">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-1">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-3">
	  Nurse:
	  </div>
	 <div class="col-md-1">
	 $57,900 +
	 </div>
	 <div class="col-md-2">
	 9,000 +
	 </div>
	  <div class="col-md-2">
	 10,800 +
	 </div>
    <div class="col-md-1">
	  3000 +
	 </div> 
	 <div class="col-md-2">
	 $80,700
	 </div>
	 <div class="col-md-1">
     $6,725
	 </div>
    </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$6,725(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $60/hour
	   </div>
	</div>
	
	
	     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	$850,000 
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $2000 
	 </div>
	<div class="col-md-1">
      $7000 
	 </div>
	 <div class="col-md-2">
	  $94,000
	 </div>
	 <div class="col-md-1">
	  $7,833
	 </div>
      </div>
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,833 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $10.73 per hour
	   </div>
	</div>   

	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-2"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-2">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-2">
	  Nebulizer:
	  </div>
	 <div class="col-md-2">
	  $200
	 </div>
	 <div class="col-md-2">
	 1 yr  
	</div>	
	<div class="col-md-2">
      $40 
	 </div>
	 <div class="col-md-2">
	  $240
	 </div>
	 <div class="col-md-2">
	  $20
	 </div>
      </div>
	  
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	   <div class="col-md-5">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$20 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	  = $0.03 per hour
	   </div>
	</div> 
	<p>Albuterol: 5mg/ml: $4.47</p>
<p>	Total ($60 * 0.33) + ($10.73 * .33) + ($0.03 * .33) + $4.47 = $27.82</p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 13 end -->

<!-- Modal 14 start -->
  <div class="modal fade" id="myModal14" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">IV Steroid: 20 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-1">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-1">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-3">
	  Nurse:
	  </div>
	 <div class="col-md-1">
	 $65,000 +
	 </div>
	 <div class="col-md-2">
	 9,000 +
	 </div>
	  <div class="col-md-2">
	 10,800 +
	 </div>
    <div class="col-md-1">
	  2,560 +
	 </div> 
	
	 <div class="col-md-2">
	 $87,360 
	 </div>
	 <div class="col-md-1">
	  $7,280
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,280(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $65/hour
	   </div>
	</div>
	
	
	     <div class="col-md-12">
	  <div class="col-md-3"></div>
	 <div class="col-md-2">
	 Purchase Price
	 </div>
	 <div class="col-md-1">
	 Useful Life
	 </div>
      <div class="col-md-2">
	 Yearly Maintenance
	 </div>
	  <div class="col-md-1">
	 Yearly Utilities
	 </div>
	 <div class="col-md-2">
	  Annual Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
    </div>
	  
	 <div class="col-md-12">
	  <div class="col-md-3">
	  Examination Room:
	  </div>
	 <div class="col-md-2">
	$850,000 
	 </div>
	 <div class="col-md-1">
	 10 yr  
	</div>	
	<div class="col-md-2">
      $2000 
	 </div>
	<div class="col-md-1">
      $7000 
	 </div>
	 <div class="col-md-2">
	  $94,000
	 </div>
	 <div class="col-md-1">
	  $7,833
	 </div>
      </div>
	
	<div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,833 (Monthly cost of resource)</span><br/>
			  <span>730 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $10.73 per hour
	   </div>
	</div>   

	<p>Soldumedrol: 1 dose @ 125mg = $17.95/p>
	<p>IV Administration Set: $5.47</p>
	<p>IV Bag and needle: $5.00</p>
<p>	Total ($65 * 0.33) + ($10.73 * .33) + $17.95 + $5.47 + $5.00 = $53.41 </p>
	   </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal 14 end -->

<!-- Modal 15 start -->
  <div class="modal fade" id="myModal15" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h3 class="modal-title">Discharge, Education, Px: 20 minutes</h3>
        </div>
        <div class="modal-body">
		<div class="col-md-12">
		<div class="col-md-4">
		Capacity cost rate for resource =
		</div>
		<div class="col-md-4">
		<span style="border-bottom:2px solid white;padding-bottom:3px;">Expanses Attribute to resource</span>
		<span>Available capacity of resource</span>  
		</div>
      </div>
     <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-3"></div>
	 <div class="col-md-1">
	 Salary
	 </div>
	 <div class="col-md-2">
	 Supervision
	 </div>
	 <div class="col-md-2">
	 Occupancy
	 </div>
	  <div class="col-md-1">
	 Tech Support
	 </div>
	 <div class="col-md-2">
	  Anal Cost
	 </div>
	 <div class="col-md-1">
	  Monthly Cost
	 </div>
      </div>
	  
	 <div class="col-md-12" >
	  <div class="col-md-3">
	  Nurse:
	  </div>
	 <div class="col-md-1">
	 $65,000 +
	 </div>
	 <div class="col-md-2">
	 9,000 +
	 </div>
	  <div class="col-md-2">
	 10,800 +
	 </div>
    <div class="col-md-1">
	  2,560 +
	 </div> 
	
	 <div class="col-md-2">
	 $87,360 
	 </div>
	 <div class="col-md-1">
	  $7,280
	 </div>
      </div>

	 <div class="col-md-12" style="margin-top:20px;">
	  <div class="col-md-4"></div>
	   <div class="col-md-4">
	          <span style="border-bottom:2px solid white;padding-bottom:3px;">$7,280(Monthly cost of resource)</span><br/>
			  <span>112 hours (Monthly available hours)</span>
	   </div>
	   <div class="col-md-4">
	   	   = $65/hour
	   </div>
	</div>
	
<p>	Total ($65 * 0.33) = $21.45 </p>
	   </div>
      </div>
    </div>
  </div>
<!-- Modal 15 end -->




<script>
var ctr = 0;
$(".span1show").click(function(){
if(ctr==0)
{
$(".span1").css("display","block");
ctr++;
}
return false;
});

$(".span2show").click(function(){
if(ctr==1)
{
$(".span2").css("display","block");
ctr++;
}
return false;
});

$(".span3show").click(function(){
if(ctr==2)
{
$(".span3").css("display","block");
ctr++;
}
return false;
});

$(".span4show").click(function(){
if(ctr==3)
{
$(".span4").css("display","block");
ctr++;
}
return false;
});

$(".span5show").click(function(){
if(ctr==4)
{
$(".span5").css("display","block");
ctr++;
}
return false;
});

$(".span6show").click(function(){
if(ctr==5)
{
$(".span6").css("display","block");
ctr++;
}
return false;
});

$(".span7show").click(function(){
if(ctr==6)
{
$(".span7").css("display","block");
ctr++;
}
return false;
});

$(".span8show").click(function(){
if(ctr==7)
{
$(".span8").css("display","block");
ctr++;
}
return false;
});

$(".span9show").click(function(){
if(ctr==8)
{
$(".span9").css("display","block");
ctr++;
}
return false;
});

$(".span10show").click(function(){
if(ctr==9)
{
$(".span10").css("display","block");
ctr++;
}
return false;
});

$(".span11show").click(function(){
if(ctr==10)
{
$(".span11").css("display","block");
ctr++;
}
return false;
});

$(".span12show").click(function(){
if(ctr==11)
{
$(".span12").css("display","block");
ctr++;
}
return false;
});

$(".span13show").click(function(){
if(ctr==12)
{
$(".span13").css("display","block");
ctr++;
}
return false;
});

$(".span14show").click(function(){
if(ctr==13)
{
$(".span14").css("display","block");
ctr++;
}
return false;
});

$(".span15show").click(function(){
if(ctr==14)
{
$(".span15").css("display","block");
ctr++;
}
return false;
});

$(".calc1").click(function(){
if(ctr==15)
{
$(".total1").css("display","block");
$(".deduc1").css("display","block");
$(".copay1").css("display","block");
$(".coinc1").css("display","block");
}
});

$(".calc2").click(function(){
if(ctr==15)
{
$(".total2").css("display","block");
$(".deduc2").css("display","block");
$(".copay2").css("display","block");
$(".coinc2").css("display","block");
}
});

$(".fa-eye-slash").click(function(e){
$(this).removeClass("fa-eye-slash");
$(this).addClass("fa-eye");
});
$(".showallspan").click(function(){
ctr = 15;
$(".m3s6p1 .span1,.m3s6p1 .span2,.m3s6p1 .span3,.m3s6p1 .span4,.m3s6p1 .span5,.m3s6p1 .span6,.m3s6p1 .span7,.m3s6p1 .span7,.m3s6p1 .span8,.m3s6p1 .span9,.m3s6p1 .span10,.m3s6p1 .span11,.m3s6p1 .span12,.m3s6p1 .span13,.m3s6p1 .span14,.m3s6p1 .span15").css("display","block");
});

</script>
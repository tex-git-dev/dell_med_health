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

<style>
#insurance
{
display:none;
}
.spana,.spanb
{
display:none;
}
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
padding:3.6px;
text-align:center;
color:#BF5700;
cursor:pointer;
}
.m3s6p1 .m3s6b9 span {
  display:none;
}

.modal-body, .modal-header {
  background-color:#BF5700!important;
  color:white;
}

</style>

<link rel="stylesheet" href="css/m3s6p1.css">
<div class="m3s6p1">
       <div class="jumbotron b1">
         <div class="container text-center bg-2">
            <br>
         <br>         
         <div class="row">
            <div class="col-sm-12"> 
             <f><p data--duration="1.5s">MODULE 3 | <label style="color:#f68121;">Section 6</label></p></f>
            </div>
         </div>
          <div class="row">
            <div class="col-sm-12"> 
              <f><h2>Care Redesign Case: MD Anderson (TDABC)</h2></f></div>
            </div>
          <div class="row">
            <div class="col-sm-12">  
               <a  class="wow fadeInDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
            </div>
         </div>
         </div>
      </div>
      <br>
    <br>

      <div class="Step1 container m3s6b2">
        <div class="row">
            <!-- <div class="col-sm-2"></div> -->
              <div class="col-sm-12">
                <f><h3 class="text-uppercase text-center">case study: time-driven activity-based costing (tdabc)</h3></f>
                <br>
                 <f><p>The University of Texas MD Anderson Cancer Center is a nationally recognized leader in cancer care located in Houston, Texas. Patients travel from across the US to seek specialized evaluation and care at MD Anderson. According to a 2011 article in the Harvard Business Review, MD Anderson sees more than 30,000 new patients every year, accounting for approximately 20% of cancer care within the Houston region and 1% of cancer care nationally.<sup>1</sup></p></f>
                 <f><p>In 2010, MD Anderson introduced time-driven activity-based costing (TDABC) to help measure the true cost of cancer-care delivery. Like most major medical centers, MD Anderson had traditionally used a charge-based costs accounting system, which was not felt to accurately reflect true costs of care.</p></f>
                 <f><p>“With impending health care reform set to shift the industry away from fee-for-service reimbursement to bundled or global payments, we needed a cost system that could provide more accurate patient-level costs by condition,” wrote MD Anderson’s Heidi Albright and Tom Feeley.<sup>1</sup></p></f>
                 <f><p>The multidisciplinary team of clinicians and internal financial staff members worked to pilot TDABC in the Head and Neck Cancer Center, starting with developing a care delivery value chain. A care delivery value chain charts each of the activities involved in a patient’s care for a medical condition.</p></f>
                 <f><p>Next, the team created process maps that included all resources involved for each segment or location of care.<sup>1</sup> For example, each process and resource utilized in the outpatient clinic, radiation therapy, and in chemotherapy administration needed to be mapped. This is a very time-consuming process. The team estimated that each segment of the process map took approximately 40 hours to complete and required multiple team members across disciplines.</p></f>
               </div>
            <!-- <div class="col-sm-2"></div> -->
         </div>
      </div>      
<br> <br>


<div class="jumbotron m3s6b3">    
      <div class="container"> 
        <f><h4 class="text-center text-uppercase">anesthesia assessment center</h4></f>
        <f><p class="text-center">Baseline Process | January 2009</p></f>
        <div class="row">
              <div class="col-sm-12">
                 <img src="img/m3s6img2a.png" class="img-responsive">
              </div>
        </div>
      </div>
</div> 
<br><br>

    <div class="container">
        <div class="row">
              <div class="col-sm-12">
                 <f><p>They then had to estimate how much time it would take to perform each task and the capacity cost of each health care provider. This work was validated at each step by the frontline personnel who actually perform the tasks.</p></f>
                 <f><p>The team then estimated per-patient costs for each process step.</p></f>
                 <f><p>To study how this method would work, the group examined the costs in a preoperative assessment center that had implemented two phases of performance improvement initiatives. Using TDABC principles, they showed an overall reduction in time spent by patient and personnel of 33%, which resulted in a 46% reduction in the costs of providing care in the center. The details of these results are presented below. </p></f>
              </div>
         </div>
    </div>
<br><br><br>



    <div class="container m3s6b5">
        <div class="row">            
              <div class="col-sm-12">
                 <f><h4 class="text-uppercase text-center">process cost</h4></f>
                 <br>
                 <img src="img/m3s6img3.png" class="center-block img-responsive">
              </div>            
         </div>
    </div>
    <br><br>

    <div class="container m3s6b6">
        <div class="row">            
              <div class="col-sm-12">
                 <f><h4 class="text-center">PROCESS TIME (min)</h4></f>
                 <br>
                 <img src="img/m3s6img4.png" class="center-block img-responsive">
              </div>            
         </div>
    </div>
    <br><br>

     <div class="container m3s6b8">
        <div class="row">            
              <div class="col-sm-12">
                 <f><h4 class="text-center text-uppercase">number of preoperative assesments</h4></f>
                 <br>
                 <img src="img/m3s6img5.png" class="center-block img-responsive">
              </div>            
         </div>
    </div>
    <br>

  <div class="container">
    <div class="row">            
        <div class="col-sm-12 text-center">          
          <f><p style="color:#96979b;">Figures adapted from the results of a TDABC analysis of Preoperative Assessment Process at an MD Anderson Preoperative Assessment Center.<sup>1</sup></p></f>
        </div>
    </div>
      <br><br>
    <div class="row">            
        <div class="col-sm-12">          
          <f><p>After the Phase Two implementation period, process cost, process time, and the number of preoperative assessments were measured and compared to the Phase One and Baseline periods. Both cost and process time decreased after both intervention phases, while the number of preoperative assessments increased. This represents a more efficient process for both patients and providers.</p></f>
        </div>
    </div>    
  </div>

  <br><br>
  <div class="jumbotron m3s6b3">    
      <div class="container"> 
        <f><h4 class="text-center text-uppercase">anesthesia assessment center</h4></f>
        <f><p class="text-center">Post Phase II Process | March 2012</p></f>
        <div class="row">
              <div class="col-sm-12">
                 <img src="img/m3s6img6a.png" class="img-responsive">
              </div>
        </div>
      </div>
</div> 
<br>
<div class="container">
    <div class="row">            
        <div class="col-sm-12">          
          <f><p>“TDABC, which we have found straightforward to implement, requires a significant time investment to develop process maps for all care areas,” wrote Albright and Feeley. “But this investment has yielded additional benefits by supporting process improvement opportunities and facilitating the standardization of care. Perhaps most important, the new costing approach helps us set priorities for process improvements and measure their cost impact... Through this work, we hope to provide convincing evidence of the health care value that MD Anderson’s integrative cancer treatment strategy actually delivers.”<sup>2</sup></p></f>
        </div>
    </div>    
  </div>

<br><br>

<div class="jumbotron col-md-12 m3s6b9"> 
  <div class="container m3s6b10">
          <div class="row">
            <div class="col-sm-12">
              <f><h3 class="text-center text-uppercase">activity: calculating costs</h3></f>
              <!-- <br>
              <f><p class="text-uppercase"><em>At the urgent care clinic, Ms. Chen is evaluated by a physician, given a breathing treatment, and undergoes an electrocardiogram (EKG). Following the breathing treatment, she continues to have significant wheezing and shortness of breath, so the urgent care clinic physician coordinates for an ambulance to take her to an emergency room across town. Ms. Chen has had to visit the ER for her asthma before, but it has been a number of years since the last episode that was this bad.</em></p></f> -->
            </div>
          </div>
  </div>


<br>
<div class="col-md-12" style="z-index: 1;">
  <!-- <hr style="border-color: #cacaca currentcolor currentcolor;"> -->
<div class="col-md-12">
<div class="row">
<div class="col-md-5" id="mytextop">
<p style="color:black;">
Ms. Grace Chen knows to avoid the perfume section in the department store. At
53-years-old, she has lived with asthma her entire life. Scented perfumes and other
“triggers” can suddenly cause her airways to spasm, sending her into a fit of
wheezing. Today, she is not entirely sure what set off her symptoms, but she could
feel her chest tightening up as it became more and more difficult to catch her
breath, a sensation that she has experienced many times before. She reached into
her purse to take out her inhaler and took a few puffs. She still felt like she was
trying to breathe through a snorkel to get the air down to her lungs. Realizing that
she may need help, she asked her son to drive her to a nearby urgent care clinic.
At the urgent care clinic, Ms. Chen is <a href="" class="span1show">evaluated by a physician</a>, <a href="" class="span2show">given a breathing treatment</a>, and <a href="" class="span3show">undergoes an electrocardiogram (EKG)</a>. Following the breathing treatment, she continues to have significant wheezing and shortness of breath, so
the <a href="" class="span4show">urgent care clinic physician coordinates</a> for an <a href="" class="span5show">ambulance to take her to an emergency room across town</a>. Ms. Chen has had to visit the ER for her asthma
before, but it has been a number of years since the last episode that was this bad.<br><br>
In the ER, <a href="" class="span6show">she is promptly placed in a room</a> and <a href="" class="span7show">evaluated by an emergency medicine physician</a>. Ms. Chen <a href="" class="span8show">undergoes further breathing treatments</a>. A <a href="" class="span9show">chest x-ray is taken</a>, <a href="" class="span10show">blood is drawn for labs</a>, and <a href="" class="span11show">another EKG done</a>. Her labs are ok, her chest x-ray is clear, and her EKG remains normal. The <a href="" class="span12show">physician then decides to
obtain a chest CT (computed tomography) scan</a> “just to be sure nothing was
missed.” The CT scan does not reveal any significant abnormalities. <a href="" class="span13show">Following
more breathing treatments</a> and an <a href="" class="span14show">intravenous administration of solumedrol (a
steroid)</a>, she improves. She ultimately is <a href="" class="span15show">discharged home with self-care
instructions</a>, including directions for using her home inhalers and a <a href="#" class="span16show">prescription</a> for
oral steroids.
</p>
</div>

<div class="col-md-3 col-sm-12 col-xs-12" id="calcfirst">
<p class="bbc" style="padding:25px 0;text-align:center;margin:5px;">Chargemaster</p>
<div class="bbc marginpading mympd1">
<!--Evaluation md start-->
<div class="row">
<div class="col-md-8">
Evaluation (MD)
</div>
<div class="col-md-4">
<span class="span1">$350</span>
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
<!--Discharge and education (Nurse) start-->
<div class="row">
<div class="col-md-8">
Discharge and education(Nurse)
</div>
<div class="col-md-4">
<span class="span15">$0</span>
</div>
</div>
<!--Discharge and education (Nurse) end-->
</div>
<p class="bbc" style="padding:25px 5px;margin:5px;">All charges from chargemaster<br/>
Total  <span class="total1" style="float:right;">$9900</span>
</p>
<p class="bbc showainc" style="padding:25px 0;text-align:center;cursor:pointer;margin:5px;">Show Insurance Rates (A)</p>
<p class="bbc showbinc" style="padding:25px 0;text-align:center;cursor:pointer;margin:5px;">Show Insurance Rates (B)</p>
</div>

<div class="col-md-3 col-sm-12 col-xs-12" id="insurance">
<div style="position:absolute;top:795px;left: -7px;font-size:20px;cursor:pointer;" id="clcarrow">
	&lt;
</div>
<p class="bbc spantmp" style="padding:15px 0;text-align:center;margin:5px;">Commercial Insurance __ (30% Negotiated Rate)</p>
<p class="bbc spana" style="padding:15px 0;text-align:center;margin:5px;">Commercial Insurance A (30% Negotiated Rate)</p>
<p class="bbc spanb" style="padding:15px 0;text-align:center;margin:5px;">Commercial Insurance B (30% Negotiated Rate)</p>
<div class="bbc marginpading mympd1">
<!--Evaluation md start-->
<div class="row">
<div class="col-md-8">
Evaluation (MD)
</div>
<div class="col-md-4">
<span class="spana">$105</span>
<span class="spanb">$175</span>
</div>
</div>
<!--Evaluation md end-->

<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="spana">$102</span>
<span class="spanb">$170</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--EKG (Technician) start-->
<div class="row">
<div class="col-md-8">
EKG (Technician)
</div>
<div class="col-md-4">
<span class="spana">$165</span>
<span class="spanb">$275</span>
</div>
</div>
<!--BEKG (Technician) end-->

<!--UCC Coordinates (MD).$ start-->
<div class="row">
<div class="col-md-8">
UCC Coordinates (MD)
</div>
<div class="col-md-4">
<span class="spana">$112.8</span>
<span class="spanb">$188</span>
</div>
</div>
<!--UCC Coordinates (MD).$ end-->

<!--Ambulance drives to ER start-->
<div class="row">
<div class="col-md-8">
Ambulance drives to ER
</div>
<div class="col-md-4">
<span class="spana">$298.5</span>
<span class="spanb">$497.5</span>
</div>
</div>
<!--Ambulance drives to ER end-->

<!--Assigned room (Nurse) start-->
<div class="row">
<div class="col-md-8">
Assigned room (Nurse)
</div>
<div class="col-md-4">
<span class="spana">$239.7</span>
<span class="spanb">$399.5</span>
</div>
</div>
<!--Assigned room (Nurse) end-->

<!--Evaluation (ER MD) start-->
<div class="row">
<div class="col-md-8">
Evaluation (ER MD)
</div>
<div class="col-md-4">
<span class="spana">$168.97</span>
<span class="spanb">$281.62</span>
</div>
</div>
<!--Evaluation (ER MD) end-->

<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="spana">$102</span>
<span class="spanb">$170</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--X-ray (Technician) start-->
<div class="row">
<div class="col-md-8">
X-ray (Technician)
</div>
<div class="col-md-4">
<span class="spana">$130.5</span>
<span class="spanb">$217.5</span>
</div>
</div>
<!--X-ray (Technician) end-->


<!--Blood for labs (Nurse and Technician) start-->
<div class="row">
<div class="col-md-8">
Blood for labs (Nurse and Technician)
</div>
<div class="col-md-4">
<span class="spana">$123</span>
<span class="spanb">$4205</span>
</div>
</div>
<!--Blood for labs (Nurse and Technician) end-->


<!--EKG (Technician) start-->
<div class="row">
<div class="col-md-8">
EKG (Technician)
</div>
<div class="col-md-4">
<span class="spana">$165</span>
<span class="spanb">$275</span>
</div>
</div>
<!--EKG (Technician) end-->



<!--Chest CT (Technician) start-->
<div class="row">
<div class="col-md-8">
Chest CT (Technician)
</div>
<div class="col-md-4">
<span class="spana">$921</span>
<span class="spanb">$1535</span>
</div>
</div>
<!--Chest CT (Technician) end-->


<!--Breathing Tx (Nurse) start-->
<div class="row">
<div class="col-md-8">
Breathing Tx (Nurse)
</div>
<div class="col-md-4">
<span class="spana">$102</span>
<span class="spanb">$170</span>
</div>
</div>
<!--Breathing Tx (Nurse) end-->


<!--IV steroid (Nurse) start-->
<div class="row">
<div class="col-md-8">
IV steroid (Nurse)
</div>
<div class="col-md-4">
<span class="spana">$128.1</span>
<span class="spanb">$213.5</span>
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
<span class="spana">$107.4</span>
<span class="spanb">$179</span>
</div>
</div>
<!--Discharge and education
(Nurse) end-->

</div>

<p class="bbc" style="padding:25px 5px;margin:5px;">All charges from chargemaster<br/>
Total  <span class="totala" style="float:right;">$3000</span>
       <span class="totalb" style="float:right;">$5000</span>
</p>
</div>

<div class="col-md-3 col-sm-9 col-xs-9">
<p class="rbc" style="padding:25px 0;text-align:center;margin:5px;">TDABC</p>
<div class="rbc marginpading mympd1">
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

<p class="rbc" style="padding:25px 5px;margin:5px;margin:5px;">All charges from chargemaster<br/>
Total  <span class="total3" style="float:right;">$9900</span>
</p>
<p class="rbc calc" style="padding:25px 0;text-align:center;cursor:pointer;margin:5px;">Calculate</p>

</div>

<div class="col-md-1 col-sm-2 col-xs-2">
<p class="bbc" style="padding:14px 0;text-align:center;width:100px;margin:5px;">See cost breakdown</p>
<div class="marginpading mympd1">
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

</div>
 <div class="col-md-12" style="margin-top:20px;">
 <div class="col-md-7" id="buttoncalc"></div>
 <button class="showallspan btn btn-default" style="padding:10px 40px;border:2px solid black;color:#0097B0;font-weight:bold;">
 Quick add all costs
 </button>
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
<p> Total ($65 * 0.33) + ($6.40 * .33) + ($0.03 * .33) + $4.47 = $28.04 </p>
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
<p> Total ($44 * 0.25) + ($6.40 * .25) + ($0.60 * .25) + ($5.30 *10) = $65.75 </p>
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
<p> Total ($155 * 0.16) = $25 </p>
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
<p> Total ($65 * 0.33) + ($10.73 * .33) + ($0.03 * .33) + $4.47 = $29.47 </p>
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
<p> Total ($43 * 0.5) + ($273 * 1) + ($11.64 * 0.5) + ($1.60 * .5) = $301.12 </p>
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
<p> Total ($60 * 0.33) + ($10.73 * .33) + ($0.03 * .33) + $4.47 = $27.82</p>
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
<p> Total ($65 * 0.33) + ($10.73 * .33) + $17.95 + $5.47 + $5.00 = $53.41 </p>
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
  
<p> Total ($65 * 0.33) = $21.45 </p>
     </div>
      </div>
    </div>
  </div>
  
<!-- Modal 15 end -->







<!-- Mcq start -->

<div class="container-full m3s6mcq m3s6b4">    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators"> 
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>            
            <li data-target="#myCarousel" data-slide-to="2" ></li>            
            <li data-target="#myCarousel" data-slide-to="3" ></li>            
            <li data-target="#myCarousel" data-slide-to="4" ></li>            
            <li data-target="#myCarousel" data-slide-to="5" ></li>            
            <li data-target="#myCarousel" data-slide-to="6" ></li>                                 
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active" id="0">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount a hospital pays directly for a unit of packed red blood cells (for a transfusion)</p></f>
                                <div class="row">
                                <div class="col-sm-12" >
                                    <div class="row eq-h">
                                      <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('COST', 'CHARGE', 'PRICE', 'REIMBURSEMENT');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "COST" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    </div>
                                </div>                               
                            </div>
                            <div class="row">
                                <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                             <div class="row pageCount">
                                <div class="col-sm-12 " >
                                    <f><p class="text-muted">Question 1 of 7</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Correct!</h3></f>
                                    <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                             <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" id="1">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount an insurance company pays to a hospital for a patient’s hospitalization</p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('REIMBURSEMENT', 'CHARGE', 'PRICE', 'COST');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "REIMBURSEMENT" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    </div>
                                </div>                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 2 of 7</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>

               <div class="item" id="2">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount a laboratory pays for pipettes to process patient specimens</p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('COST', 'CHARGE', 'PRICE', 'REIMBURSEMENT');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "COST" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    </div>
                                </div>                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 3 of 7</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>


               <div class="item" id="3">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount shown on a bill an uninsured patient receives for a visit to an outpatient clinic</p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('CHARGE', 'COST', 'PRICE', 'REIMBURSEMENT');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "CHARGE" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    </div>
                                </div>                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 4 of 7</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>



               <div class="item" id="4">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The portion a patient pays for a procedure at a local clinic</p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('PRICE', 'CHARGE', 'COST', 'REIMBURSEMENT');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "PRICE" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    </div>
                                </div>                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 5 of 7</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>


               <div class="item" id="5">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount an insurance company pays to a hospital group for a diagnosis of Severe Sepsis (DRG 870)</p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('REIMBURSEMENT', 'CHARGE', 'PRICE', 'COST');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "REIMBURSEMENT" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    </div>
                                </div>                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 6 of 7</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>



               <div class="item" id="6">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount a clinic asks for a flu vaccination at a local pharmacy</p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('CHARGE', 'COST', 'PRICE', 'REIMBURSEMENT');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "CHARGE" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    </div>
                                </div>                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 7 of 7</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <!-- <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question</div></center> -->
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>


                  <a class="left  carousel-control m3s6b7" href="#myCarousel" role="button" data-slide="prev" style="display:none;">
                    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                  </a>
                  <a class="right  carousel-control m3s6b7" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                  </a>
            </div>
    </div>
</div>
<!-- Mcq end -->
<br>





  <div class="container m3s6b12">
        <div class="row">    
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <hr>
            <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;">REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
            <br>        
          <div id="demo" class="collapse">
            <ol>
              <f><li><p>Reinhardt UE. The pricing of U.S. hospital services: chaos behind a veil of secrecy. Health Affairs. 2006;25(1):57-69. doi: <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1377/hlthaff.25.1.57">10.1377/hlthaff.25.1.57</a></p></li></f>
              <f><li><p>Health Care Cost Institute. Some states pay twice the price for health care, finds new report. April 27, 2016. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://www.healthcostinstitute.org/states-pay-twice-price-health-care-finds-new-report/">http://www.healthcostinstitute.org/states-pay-twice-price-health-care-finds-new-report/</a> Accessed January 3, 2017. </p></li></f>
              <f><li><p>Dobson A, DaVanzo J, Doherty J, Tanamor M . A study of hospital charge setting practices. The Lewin Group. December 2005; No. 05-4. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://67.59.137.244/documents/Dec05_Charge_setting.pdf">http://67.59.137.244/documents/Dec05_Charge_setting.pdf</a> Accessed March 24, 2017.</p></li></f>              
            </ol>
          </div>  
          </div>
        <div class="col-sm-1"></div>        
   </div>
  </div>


<footer class="container-fluid">         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="?id=m3/m3s5p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <label class="ssp1">MODULE 3 | Section 5</label>
                <label class="sp1"><strong>Toward More Transparency</strong></label></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="?id=m3/m3s7p1"><label class="ssp2">MODULE 3 | Section 7</label>
                <label class="sp2"><strong>Conclusion: Understanding Costs of Care</strong></label>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="row">            
            <div class="col-sm-12"><a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="img/CC.png"  width="auto" height="auto"></a></div>            
          </div>
          
</footer> 
  

<?php

    function randomArray($array, $numRandoms) {
        $final = array();

        $count = count($array);

        if ($count >= $numRandoms) {

            while (count($final) < $numRandoms) {

                $random = $array[rand(0, $count - 1)];

                if (!in_array($random, $final)) {

                    array_push($final, $random);
                }
            }
        }

        return ($final);
    }
    ?>

<script>

$('.carousel').on('slid.bs.carousel', function (e) {
       $('.item .ans').removeClass('Dis');
       var id = parseInt(e.relatedTarget.id);
         
          if(id == 0){
              $('.left').hide();              
              $('.right').show();
          }else if(id == 6){
            $('.left').show();
            $('.right').hide();
          } else {
            $('.left').show();
            $('.right').show();
          }

      });

function TryA(){
      $('.item.active div').removeClass("incorrect").removeClass("selectedAns");
      $('.item .ans').removeClass('Dis');
    }


    function checkAnswer(obj, f) {
            //console.log($(obj).parents(".row-eq-height"));
            $('.item .ans').addClass('Dis');
            $('.item.active div').removeClass("incorrect").removeClass("selectedAns");
            $(obj).parents(".eq-h").find(".ans")
            $(obj).parents(".white").removeClass("correct incorrect");
            if (f === 1) {
                $(obj).addClass('selectedAns').parents('.white').addClass('correct');
            } else if (f === 0) {
                $(obj).addClass('selectedAns').parents('.white').addClass('incorrect');
            } else {
                $(obj).addClass('selectedAns').parents('.white').addClass('correct bothCorrect');
                //alert(f);
                $(".5401, .2497").addClass("hide");
                $("." + f).removeClass("hide");
            }
        }
        

</script>

<script>
var chk=0;
var ctr=0;
$(".span1show").click(function(){
$(".span1").css("display","block");
return false;
});

$(".span2show").click(function(){
$(".span2").css("display","block");
return false;
});

$(".span3show").click(function(){
$(".span3").css("display","block");
return false;
});

$(".span4show").click(function(){
$(".span4").css("display","block");
return false;
});

$(".span5show").click(function(){
$(".span5").css("display","block");
return false;
});

$(".span6show").click(function(){
$(".span6").css("display","block");
return false;
});

$(".span7show").click(function(){
$(".span7").css("display","block");
return false;
});

$(".span8show").click(function(){
$(".span8").css("display","block");
return false;
});

$(".span9show").click(function(){
$(".span9").css("display","block");
return false;
});

$(".span10show").click(function(){
$(".span10").css("display","block");
return false;
});

$(".span11show").click(function(){
$(".span11").css("display","block");
return false;
});

$(".span12show").click(function(){
$(".span12").css("display","block");
return false;
});

$(".span13show").click(function(){
$(".span13").css("display","block");
return false;
});

$(".span14show").click(function(){
$(".span14").css("display","block");
return false;
});

$(".span15show").click(function(){
$(".span15").css("display","block");
return false;
});

$(".showainc").click(function(){
$("#buttoncalc").removeClass("col-md-7");
$("#buttoncalc").addClass("col-md-5");
$("#mytextop").removeClass("col-md-5");
$("#calcfirst").addClass("col-md-offset-1");
$("#mytextop").addClass("col-md-12");
$("#insurance").css("display","block");
$(".spana").css("display","block");
$(".spanb").css("display","none");
$(".spantmp").css("display","none");
$(".totala").css("display","none");
$(".totalb").css("display","none");
chk = 1;
});
$(".showbinc").click(function(){
$("#buttoncalc").removeClass("col-md-7");
$("#buttoncalc").addClass("col-md-5");
$("#mytextop").removeClass("col-md-5");
$("#calcfirst").addClass("col-md-offset-1");
$("#mytextop").addClass("col-md-12");
$("#insurance").css("display","block");
$(".spanb").css("display","block");
$(".spana").css("display","none");
$(".spantmp").css("display","none");
$(".totala").css("display","none");
$(".totalb").css("display","none");
chk = 2;
});

$("#clcarrow").click(function(){
$("#buttoncalc").addClass("col-md-7");
$("#buttoncalc").removeClass("col-md-5");
$("#mytextop").addClass("col-md-5");
$("#calcfirst").removeClass("col-md-offset-1");
$("#mytextop").removeClass("col-md-12");
$("#insurance").css("display","none");
$(".spanb").css("display","none");
$(".spana").css("display","none");
$(".spantmp").css("display","none");
chk = 2;
});


$(".calc").click(function(){
var chkdisp1 = $(".m3s6p1 .span1").css("display");
var chkdisp2 = $(".m3s6p1 .span2").css("display");
var chkdisp3 = $(".m3s6p1 .span3").css("display");
var chkdisp4 = $(".m3s6p1 .span4").css("display");
var chkdisp5 = $(".m3s6p1 .span5").css("display");
var chkdisp6 = $(".m3s6p1 .span6").css("display");
var chkdisp7 = $(".m3s6p1 .span7").css("display");
var chkdisp8 = $(".m3s6p1 .span8").css("display");
var chkdisp9 = $(".m3s6p1 .span9").css("display");
var chkdisp10 = $(".m3s6p1 .span10").css("display");
var chkdisp11 = $(".m3s6p1 .span11").css("display");
var chkdisp12 = $(".m3s6p1 .span12").css("display");
var chkdisp13 = $(".m3s6p1 .span13").css("display");
var chkdisp14 = $(".m3s6p1 .span14").css("display");
var chkdisp15 = $(".m3s6p1 .span15").css("display");
if(chkdisp1=="block" && chkdisp2=="block" && chkdisp3=="block" && chkdisp4=="block" && chkdisp5=="block" && chkdisp6=="block" && chkdisp7=="block" && chkdisp8=="block" && chkdisp9=="block" && chkdisp10=="block" && chkdisp11=="block" && chkdisp12=="block" && chkdisp13=="block" && chkdisp14=="block" && chkdisp15=="block")
{
ctr = 15;
}

if(ctr==15)
{
$(".total1").css("display","block");
$(".total3").css("display","block");
}
if(chk==1)
{
$(".totala").css("display","block");
$(".totalb").css("display","none");
}
if(chk==2)
{
$(".totalb").css("display","block");
$(".totala").css("display","none");
}
});

$(".fa-eye-slash").click(function(e){
$(this).removeClass("fa-eye-slash");
$(this).addClass("fa-eye");
});
$(".showallspan").click(function(){
ctr=15;
$(".m3s6p1 .span1,.m3s6p1 .span2,.m3s6p1 .span3,.m3s6p1 .span4,.m3s6p1 .span5,.m3s6p1 .span6,.m3s6p1 .span7,.m3s6p1 .span7,.m3s6p1 .span8,.m3s6p1 .span9,.m3s6p1 .span10,.m3s6p1 .span11,.m3s6p1 .span12,.m3s6p1 .span13,.m3s6p1 .span14,.m3s6p1 .span15").css("display","block");
});

</script>
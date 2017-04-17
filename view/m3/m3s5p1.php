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


<link rel="stylesheet" type="text/css" href="jqcloud/jqcloud.css" />
<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>

<link rel="stylesheet" href="css/m3s5p1.css">
<div class="m3s5p1">
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 3 | <span style="color:#f68121">Section 5</a></p></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>Toward More Transparency</h2></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
              <a  class="wow fadeInDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
            </div>
         </div>
      </div>
   </div>
   <br><br>   

  <div class="Step1 container m2s5b1">
     <div class="row">        
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <f><h3 class="text-uppercase text-center boldT">value-based health care vs. volume-based health care </h3></f>
      <br> 
      <f><p>To combat the harmful effects of opaque pricing and payment mechanisms, health care providers are increasingly looking for more accurate ways of accounting costs and refocusing payment models around value over volume. These efforts are related, as more transparent costs allow for a clearer alignment of costs to outcomes that matter to patients and a better picture of “value” in the context of providing care.</p></f>
      <f><p>Recall key aspects of volume vs. value-based health care as discussed in Module 1:</p></f>
      </div>
      <div class="col-sm-1"></div>
     
    </div>
  </div>
<br>


     <div class="container m3s5b2">
              <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-6">
                            <div class="padding-well">
                              <f><h4>The Current System:<br>Volume-Based Health Care</h4></f>
                            </div>  
                          </div>
                          <div class="col-sm-6">
                                <div class='well'>                                  
                                <f><h4>The Goal:<br>Value-Based Health Care</h4></f>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-6">
                            <div class="padding-well">
                              <f><p>Individual care interactions organized around the clinician’s medical expertise (e.g. an orthopedic surgeon)</p></f>
                            </div>  
                          </div>
                          <div class="col-sm-6">
                                <div class='well'>                                  
                                <f><p>Team-based care interactions organized around patient medical needs and conditions (e.g. “musculoskeletal pain”)</p></f>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-6">
                            <div class="padding-well">
                              <f><p>Fragmented care that is organized at the level of individual units or facilities</p></f>
                            </div>  
                          </div>
                          <div class="col-sm-6">
                                <div class='well'>                                  
                                <f><p>Integrated care across units and facilities, such as in an integrated practice unit (IPU)</p></f>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-6">
                            <div class="padding-well">
                              <f><p>Measurement largely based on process measures and “billable activities”</p></f>
                            </div>  
                          </div>
                          <div class="col-sm-6">
                                <div class='well'>                                  
                                <f><p>Measurement focused on patient health outcomes</p></f>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-6">
                            <div class="padding-well">
                              <f><p>Costs are poorly captured and often are estimated by using poor proxies such as charges and reimbursements</p></f>
                            </div>  
                          </div>
                          <div class="col-sm-6">
                                <div class='well'>                                  
                                <f><p>The actual costs of providing patient care are measured and captured</p></f>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-6">
                            <div class="padding-well">
                              <f><p>Providers – physicians and health systems – are reimbursed based on individual services provided</p></f>
                            </div>  
                          </div>
                          <div class="col-sm-6">
                                <div class='well'>                                  
                                <f><p>Providers are reimbursed based on value of care provided across a full care cycle for medical conditions</p></f>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-6">
                            <div class="padding-well">
                              <f><p>Health information technology maximized for capturing billing processes and reporting necessary metrics</p></f>
                            </div>  
                          </div>
                          <div class="col-sm-6">
                                <div class='well'>                                  
                                <f><p>Health information technology is leveraged to help restructure care delivery and accurately measure results</p></f>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>            
     </div>
 
 <br>
 <br>

      <div class="container m3s5b2">
      <div class="row">    
        <div class="col-sm-1"></div>    
        <div class="col-sm-10"><f><p>This section will detail two new methods that are gaining ground in the movement toward value-based health care, one for better aligning payment mechanisms to value, and another for more accurately calculating costs. </p></f> </div>
        <div class="col-sm-1"></div>  
      </div> 
     </div> 
   <br>
    <br>    


<div class="container-full m3s5b3">
    <div class="container">
      <div class="row"> 
      <div class="col-sm-1"></div>
      <div class="col-sm-10"><f><h3 class="text-uppercase text-center boldT">Time-Driven Activity-Based Costing (TDABC) </h3></f>
        <br>
        <f><p>New methods for determining more accurate measurements of actual costs are now increasingly being applied in healthcare. For example, Michael Porter and Robert Kaplan from Harvard Business School have advocated for the use of <em>time-driven activity-based costing</em> (TDABC).<sup>1</sup></p></f>
      </div>
      <div class="col-sm-1"></div>
      </div>
      <br>
      </div>
      <div class="container bgT">
      <div class="row">        
        <div class="col-sm-12"><img src="img/m3s5img4.png" class="center-block img-responsive" height="auto" width="70%"></div>
      </div>
      </div>
      <br>
      <br>
      <div class="container">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <!-- <hr style="border-color:#dddddd"> -->
          <f><p>With TDABC, the costs of space, non-consumable equipment, and administrative overhead are all assigned minute-to-minute cost rates that are relevant to specific processes of care. The care that is delivered over an entire episode of care is broken down into discrete activities or process steps, such as check-in, vitals and intake, physician evaluation, nursing care, and so on. A cost is assigned to each step by tracking who is doing the activity, what resources they use, which space they are in, and how long it takes them. Each item (personnel, resources, and space) is assigned a per-minute cost rate by bundling together all costs (fixed and variable) and then dividing by the total amount available for patient care.</p></f>
        </div>
        <div class="col-sm-1"></div>
        </div>
      </div>
      <br>
      <br>
      <div class="container bgT">
        <div class="row">        
        <div class="col-sm-12"><img src="img/m3s5img7.png" class="center-block img-responsive"></div>
        </div>
      </div>
      <br>
      <br>
      <div class="container">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <!-- <hr style="border-color:#dddddd"> -->
          <f><p>TDABC requires providers to estimate only two parameters at each process step: the cost of each of the resources used in the process and the quantity of time the patient spends with each resource. </p></f>
        </div>
        <div class="col-sm-1"></div>
        </div>
      </div>

     </div> 

<div class="container">
     <div class="row">        
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <f><h3 class="text-uppercase text-center boldT">Value-Based Bundled Payments</h3></f>
      <br> 
      <f><p>One alternative payment mechanism that has been proposed is <span class="boldT">value-based bundled payments.</span><sup>2</sup> Value-based bundled payments cover all required care for a medical condition and are not based on singular procedures or visits. These bundled payments reimburse providers for all that may be required to treat a medical condition, including procedures, medications, tests, supplies, facility costs and services for a specified period of time. </p></f>
      </div>
      <div class="col-sm-1"></div> 
    </div>
 </div>
      <br>
      <br>

 <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><img src="img/m3s5img6.png" class="center-block img-responsive"  height="auto" width="70%"></div>
      </div>
      <br>
     </div> 
</div>
<br>

<div class="container">
     <div class="row">        
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <f><p>Payment is provided for care of a medical condition like prostate cancer, childbirth, or diabetes for a specified period of time, known as the cycle of care. This includes the initial visit for the condition, followed by treatment, recovery and rehabilitation. For chronic conditions, this cycle may continue throughout the course of a patient's life. For a condition like childbirth, a typical time span can be specified.</p></f>

       <f><p>Implementing value-based bundled payments requires providers to achieve a set of outcome measures that matter to patients to ensure optimal quality of care. Charges for care are based on more accurate and detailed costs of delivering care and not based on FFS charges. Emergency episodes or care unrelated to the original medical condition that occurs during the cycle of care would be excluded and paid for separately using different bundled payments.</p></f>

        <f><p>These alternative payment models focus on more accurate costs assignment and paying for care in a way that awards true recovery and improved health. We will discuss a model implementation of this payment model, via Integrated Practice Units (IPUs), in a future module. </p></f>
      </div>
      <div class="col-sm-1"></div> 
    </div>
 </div>

<br>
   <div class="container m3s5b8">
    <div class="row">
      <div class="col-sm-1"></div> 
      <div class="col-sm-10">
      <hr>
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;" >REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>        
      <div id="demo" class="collapse">
        <ol>
          <f><li><p>Kaplan RS and Anderson SR. Time-Driven Activity Based Costing. Harvard Business Review. November 2004.<br><a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="https://hbr.org/2004/11/time-driven-activity-based-costing">https://hbr.org/2004/11/time-driven-activity-based-costing</a></p></li></f>
          <f><li><p>Kaplan RS and Porter M. How to pay for health care. Harvard Business Review, 2016.<br><a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1002/lt.20262">https://hbr.org/2016/07/how-to-pay-for-health-care</a></p></li></f>
        </ol>        
      </div>  
      </div>
      
      <div class="col-sm-1"></div> 
    </div>   
   </div>

   


<div id="mc1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <f><p></p></f>
      </div>
      <div class="modal-footer">
      <div class="row">
         <div class="col-sm-8 text-left">
          <i class="fa fa-user-circle fa-3x" style="color: #8e9091;" aria-hidden="true"></i>
          <span id="name" class="text-uppercase" style="color:#000;"></span>
         </div>
      </div>
      </div>
    </div>

  </div>
</div>

</div>


<footer class="container-fluid">
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="?id=m3/m3s4p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 3 | Section 4</span>
                <span class="sp1"><strong>The Cost of Care: Different Approaches</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="?id=m3/m3s6p1"><span class="ssp2">MODULE 3 | Section 6</span>
                <span class="sp2"><strong>Focusing on Outcomes</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="row">            
            <div class="col-sm-12"><a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="img/CC.png"  width="auto" height="auto"></a></div>            
          </div>
          
      </footer>
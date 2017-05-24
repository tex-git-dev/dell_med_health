
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
<link rel="stylesheet" href="css/m3s3p1.css">

<div class="m3s3p1">
       <div class="jumbotron b1">
         <div class="container text-center bg-2">
            <br>
         <br>         
         <div class="row">
            <div class="col-sm-12"> 
             <f><p data-duration="1.5s">MODULE 3 | <span style="color:#f68121">Section 3</span></p></f>
            </div>
         </div>
          <div class="row">
            <div class="col-sm-12"> 
              <f><h2>Speaking the Same Language: Health Care Cost Terms</h2></f></div>
            </div>
          <div class="row">
            <div class="col-sm-12">  
               <a  class="" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
            </div>
         </div>
         </div>
      </div>
      <br>
    <br>
    

      <div class="Step1 container m3s3b2">
        <div class="row">
            <!-- <div class="col-sm-2"></div> -->
              <div class="col-sm-12">
                <f><h3 class="text-uppercase text-center">Unraveling the Veil: Introduction to Health Care Cost Terms</h3></f>
                <br>
                 <f><p>Remember when Ms. Jones asked her doctor what the stress test from her cardiologist was likely to cost, and he could only shrug and say he wasn’t sure? This may have seemed like a brush off, and certainly left Ms. Jones feeling frustrated and unsatisfied, but in reality it can be very difficult for a provider to know or even estimate the costs of service. The costs of delivering health care in America are often obscured behind layers of jargon and complex accounting methods, and are often different based on each individual patient.</p></f>
                 <f><p>Notable health economist Uwe Reinhardt famously referred to pricing in US hospitals as “chaos behind a veil of secrecy.”<sup>1</sup> While pushes toward transparency exist, there is still wild and unexplained variation in pricing between institutions, cities in the same state, and between states, and there is no universal willingness to share pricing data.<sup>2</sup></p></f>                                  
                 <f><p>Beyond this variation, the relationship between “cost” and “price” in health care is often not clear, and the definitions of each vary based on perspective. The addition of various payers (insurance companies) and differing coverage depending on the patient further complicates the equation. The portion that patients will be required to pay and the answer to the question, “How much is this going to cost me, doc?” is thus very difficult for physicians to answer or even predict.</p></f>
                 <f><p>Recent media coverage and the development of websites and tools providing information directly to patients about potential health care charges have led to a national movement towards price transparency. And while physicians may not be expected to know the ins and outs of all potential costs to patients, they still have an ethical obligation to help patients navigate the substantial barriers and financial “side-effects” of their care.</p></f>
               </div>
            <!-- <div class="col-sm-2"></div> -->
         </div>
      </div>      
<br> <br>


<div class="jumbotron m3s3b3">
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-2"></div> -->
              <div class="col-sm-12">
                 <f><h3 class="text-uppercase text-center">Review of Health Care Waste</h3></f>
                 <br>
                 <f><p>In Module 1, we explored the sheer volume and impact of medical spending and health care waste in the US. Let’s review that now. Then, we will look more closely at how the costs that comprise this spending are determined.</p></f>
              </div>
            <!-- <div class="col-sm-2"></div> -->
         </div>
    </div>
</div> 




<!-- Mcq start -->

<div class="container-full m3s3mcq m3s3b4" id="my-Carousel1">    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>            
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner additem" role="listbox">
            <div class="item active" id="0">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">What percentage of the gross domestic product (GDP) does health care represent? </p></f>

                                <div class="row">
                               <!-- <div class="col-sm-12" >
                                    <div class="row eq-h">-->
                                      <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('20%', '10%', '1%');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "20%" ? 1 : 0;
                                                echo '<div class="col-sm-4">
                                                    <div class="ans" onclick="checkAnswerA(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                   <!-- </div>
                                </div>  -->                             
                            </div>
                            <div class="row">
                                <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                             <div class="row pageCount">
                                <div class="col-sm-12 " >
                                    <f><p class="text-muted">Question 1 of 2</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryAB();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Correct!</h3></f>
                                    <f><p>Approximately $3 trillion is spent annually in the US on health care, equaling nearly 20% of the GDP.</p></f>
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
                                <f><p class="ques">What percentage of health care spending is waste (i.e., does not improve health)? </p></f>
                                <div class="row row-eq-height">
                                <!--<div class="col-sm-12">
                                    <div class="row eq-h"> -->
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('30%', '10%', '50%');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "30%" ? 1 : 0;
                                                echo '<div class="col-sm-4">
                                                    <div class="ans" onclick="checkAnswerA(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                  <!--  </div>
                                </div> -->                             
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 2 of 2</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn" onclick="TryAB();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>                                    
                                    <f><p>Approximately 30%, or $750 billion, of health care spending in the US is considered waste and does not improve health.</p></f>
                                  <!--   <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <i class="fa fa-arrow-right" aria-hidden="true"></i></div></center> -->
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>
            
			<a class="left left_a carousel-control m3s3b7" href="#myCarousel" role="button" data-slide="prev" style="display:none;">
                    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                  </a>
                  <a class="right right_a carousel-control m3s3b7" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                  </a>
            </div>
    </div>
</div>

<!-- Mcq end -->

<div class="container m3s3b5">
        <div class="row">
            <div class="col-sm-1"></div>
              <div class="col-sm-10">
                 <f><h3 class="text-uppercase text-center">Learning The Lingo</h3></f>
                 <br>
                 <f><p>The first step in understanding health care costs is to distinguish between the terms used to discuss health care fees—“cost,” “charge,” “price,” and “reimbursement.”</p></f>
              </div>
            <div class="col-sm-1"></div>
         </div>
         <br><br>
         <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h4 class="text-center" style="color:#ee5f4e">COST</h4>
                <f><p class="text-center">the dollar amount that it costs for a provider to deliver a health care service. This could include direct costs, like provider time in diagnosing a disease, or indirect costs, like the use of an OR during surgery.</p></f>
            </div>
            <div class="col-sm-2"></div>
         </div>        
        <div class="row">
            <div class="col-sm-1"></div>
              <div class="col-sm-10"><hr></div>
            <div class="col-sm-1"></div> 
         </div> 
         <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h4 class="text-center" style="color:#01aef0">CHARGE</h4>
                <f><p class="text-center">the dollar amount a health care provider asks for a service. (This is often much higher than cost and reimbursement.)</p></f>
            </div>
            <div class="col-sm-2"></div>
         </div>        
        <div class="row">
            <div class="col-sm-1"></div>
              <div class="col-sm-10"><hr></div>
            <div class="col-sm-1"></div> 
         </div>
         <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h4 class="text-center" style="color:#27b096">PRICE</h4>
                <f><p class="text-center">the dollar amount a patient pays out of pocket for a service.</p></f>
            </div>
            <div class="col-sm-2"></div>
         </div>        
        <div class="row">
            <div class="col-sm-1"></div>
              <div class="col-sm-10"><hr></div>
            <div class="col-sm-1"></div> 
         </div>
         <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h4 class="text-center" style="color:#566f8e">REIMBURSEMENT</h4>
                <f><p class="text-center">the dollar amount a third-party payer (i.e., insurance) negotiates as payment to the provider for direct and indirect costs.</p></f>
            </div>
            <div class="col-sm-2"></div>
         </div>        
         <br><br>
         <div class="row">
            <div class="col-sm-1"></div>
              <div class="col-sm-10">
                 <f><p>Though using four different terms to discuss financials may seem like overkill, the complexity of health care transactions makes this nuance necessary. This is because the American health care system relies on several different participating parties: the patient and her physician, the provider organization (such as a clinic or hospital), the third-party payer (insurer), and sometimes the patient’s employer (often referred to as the “purchaser”) if insurance is provided as a benefit of employment. Understanding this terminology and the perspective of the party to whom each applies (i.e., payer, patient, provider, or purchaser) will help those in the health care system provide information to their patients that can ease frustration and lower financial stress as much as possible.</p></f>
              </div>
            <div class="col-sm-1"></div>
         </div>
    </div>


<br><br><br>
<div class="jumbotron m3s3b6">
  <div class="container m3s3b11">

            <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-3">
                              <img src="https://s3.amazonaws.com/dell-med/img/s7img7.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <p class="text-uppercase"><f>article</f></p>
                                 <p><f><a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://journalofethics.ama-assn.org/2015/11/stas1-1511.html">The Challenge of Understanding Health Care Costs and Charges.</a></f></p>
                                 <p><f>This article explores the difference between the terms cost, charge, and, reimbursement and describes what physicians can do to impact price transparency.</f></p>
                                 <p><f>Arora V, Moriates C, Shah N. AMA Journal of Ethics. 2015; 17(11): 1046-1052.</f></p>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>
  </div>

   <!--  <div class="container m3s3b8">
        <div class="row">
            <div class="col-sm-1"></div>
              <div class="col-sm-10">
                 <f><h3 class="text-uppercase text-center">Additional Resources</h3></f>                 
                 <hr>                 
              </div>
            <div class="col-sm-1"></div>
         </div>
         <div class="row">
            <div class="col-sm-3"></div>
              <div class="col-sm-6">
                 <f><p class="text-center">Arora V, Moriates C, Shah N. The challenge of understanding health care costs and charges. AMA Journal of Ethics. 2015; 17(11): 1046-1052.</p></f>
              </div>
            <div class="col-sm-3"></div>
         </div>
         <br>
           <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"><f><a target="_blank" style="color:#000;" href="http://journalofethics.ama-assn.org/2015/11/stas1-1511.html"><div class="driveS2">Read Artical</div></a></f></div>
            <div class="col-sm-4"></div>
           </div>
    </div> -->
</div>
<br><br>



<div class="container m3s3b9">
      <div class="row">
          <div class="col-sm-1"></div>
            <div class="col-sm-10">
               <f><h3 class="text-uppercase text-center">Let’s Check Our Understanding</h3></f>
               <br>
               <f><p class="text-center">Practice applying the above terms to the following descriptions.</p></f>
                <br>               
              <hr> 
            </div>
          <div class="col-sm-1"></div>
       </div>
</div> 
<br>


<!-- Mcq start -->

<div class="container-full m3s3mcq m3s3b4" id="my-Carousel2">    
    <div id="myCarousel_a" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators"> 
            <li data-target="#myCarousel_a" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel_a" data-slide-to="1" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="2" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="3" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="4" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="5" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="6" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="7" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="8" ></li>            
            <li data-target="#myCarousel_a" data-slide-to="9" ></li>                        
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner additem" role="listbox">

              <div class="item active" id="2">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount a hospital pays directly for a unit of packed red blood cells (for a transfusion)</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12" >
                                    <div class="row eq-h">-->
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
                                    <!--</div>
                                </div>   -->                            
                            </div>
                            <div class="row">
                                <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                             <div class="row pageCount">
                                <div class="col-sm-12 " >
                                    <f><p class="text-muted">Question 1 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">The amount an insurance company pays to a hospital for a patient’s hospitalization</p></f>
                                <div class="row row-eq-height">
                                  <!-- <div class="col-sm-12" >
                                    <div class="row eq-h">-->
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
                                    <!--</div>
                                </div> -->                             
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 2 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">The amount a laboratory pays for pipettes to process patient specimens</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12" >
                                    <div class="row eq-h">-->
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
                                   <!-- </div>
                                </div>-->                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 3 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">The amount shown on a bill an uninsured patient receives for a visit to an outpatient clinic</p></f>
                                <div class="row row-eq-height">
                              <!--  <div class="col-sm-12">
                                    <div class="row eq-h">-->
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
                                  <!--  </div>
                                </div>-->                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 4 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">The portion a patient pays for a procedure at a local clinic</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12">
                                    <div class="row eq-h">-->
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
                                  <!--  </div>
                                </div> -->                             
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 5 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>

               <div class="item" id="7">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount an insurance company pays to a hospital group for a diagnosis of Severe Sepsis (DRG 870)</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12">
                                    <div class="row eq-h">-->
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
                                    <!-- </div>
                                </div> -->                             
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 6 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>

               <div class="item" id="8">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount a clinic asks for a flu vaccination at a local pharmacy</p></f>
                                <div class="row row-eq-height">
                                <!--<div class="col-sm-12">
                                    <div class="row eq-h">-->
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
                                   <!-- </div>
                                </div>  -->                            
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 7 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>

               <div class="item" id="9">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount a patient pays for their copay for a routine visit with their doctor</p></f>
                                <div class="row  row-eq-height">
                              <!--  <div class="col-sm-12">
                                    <div class="row eq-h">-->
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
                                   <!-- </div>
                                </div> -->                             
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 8 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>

               <div class="item" id="10">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The amount an infectious disease physician asks for after consulting on a complex case</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12">
                                    <div class="row eq-h">-->
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
                                 <!--   </div>
                                </div>  -->                            
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 9 of 10</p></f>
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
                                    <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>

                 <div class="item" id="11">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">The portion of a medical bill paid to a provider by a patient’s insurance</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12">
                                    <div class="row eq-h">-->
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
                                   <!-- </div>
                                </div>-->                              
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 10 of 10</p></f>
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
                                    <!-- <center><div class="msgBtn" href="#myCarousel_a" data-slide="next">Next Question</div></center> -->
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>

                  <a class="left left_b carousel-control m3s3b7" href="#myCarousel_a" role="button" data-slide="prev" style="display:none;">
                    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                  </a>
                  <a class="right right_b carousel-control m3s3b7" href="#myCarousel_a" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                  </a>
            </div>
    </div>
</div>
<!-- Mcq end -->
<br>


<!-- <a target="_blank" style="color:#000;" href=""></a> -->
<div class="jumbotron m3s3b10"> 
       <f><h2 class="text-center">Learn More</h2></f>
       <br>
          <div class="container m3s3b11">
            
              <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-3">
                              <img src="https://s3.amazonaws.com/dell-med/img/s7img9.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <p class="text-uppercase"><f>webpage</f></p>
                                 <p><f><a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://blogs.hospitalmedicine.org/Blog/meet-the-villain-of-hospital-costs-the-chargemaster/">Meet The Villain of Hospital Costs: The Chargemaster</a></f></p>
                                 <p><f>Read more about the infamous Chargemaster in this article from the author of <em>Understanding Value-Based Health Care</em>.</f></p>
                                 <p><f>Moriates C. Society of Hospital Medicine. July 30, 2015.<br>Accessed March 24,<br>2017.</f></p>
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
                          <div class="col-sm-3">
                              <img src="https://s3.amazonaws.com/dell-med/img/s7img7.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <p class="text-uppercase"><f>pdf</f></p>
                                 <p><f><a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://www.uta.edu/faculty/story/2311/Misc/2013,2,26,MedicalCostsDemandAndGreed.pdf">Why Medical Bills are Killing Us</a></f></p>                                
                                 <p><f>Explore the story of real patients and their experiences with the complexity and absurdity of health care costs.</f></p>
                                 <p><f>Brill S. Bitter pill: TIME. April 4, 2013.<br>Accessed March 24,<br> 2014.</f></p>
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
                          <div class="col-sm-3">
                              <img src="https://s3.amazonaws.com/dell-med/img/s7img7.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <p class="text-uppercase"><f>article</f></p>
                                 <p><f><a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://dx.doi.org/10.1377/hlthaff.2016.0093">US Hospitals are Still using Chargemaster Markups to Maximize Revenues</a></f></p>
                                 <p><f>Using Medicare data from 2013, this article discusses the chargemaster and an analysis of cost-to-charge ratios that indicates the prices on chargemasters are used to enhance hospital revenue. </f></p>
                                 <p><f>Bai G, Anderson GF. Health Aff. 2016: 35(9): 1658-1664.</f></p>
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
                          <div class="col-sm-3">
                              <img src="https://s3.amazonaws.com/dell-med/img/s7img9.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <p class="text-uppercase"><f>webpage</f></p>
                                <p><f><a target="_blank" style="overflow-wrap: break-word; color:#000;" href="https://www.hcup-us.ahrq.gov/db/state/costtocharge.jsp">Cost-to-Charge Ratio Files</a></f></p>
                                <p><f>Explore what data are available for ratio of costs to charges from the Healthcare Cost and Utilization Project (HCUP),  sponsored by the Agency for Healthcare Research and Quality (AHRQ).</f></p>
                                <p><f>Healthcare Cost and Utilization Project (HCUP) website. Published November 2016.<br>Accessed March 24,<br> 2017.</f></p>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>


            <!-- <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-3">
                              <img src="https://s3.amazonaws.com/dell-med/img/s7img7.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <p class="text-uppercase"><f>article</f></p>
                                 <p><f><a target="_blank" style="overflow-wrap: break-word; color:#000;" href="">Moriates C. Meet the villain of hospital costs: The chargemaster.</a></f></p>
                                 <p><f>http://blogs.hospitalmedicine.org/Blog/meet-the-villain-of-hospital-costs-the-chargemaster/</f></p>
                                 <p><f>Accessed March<br>24, 2017.</f></p>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div> -->

  

        </div>
    </div>        




      <div class="container m3s3b12">
        <div class="row">    
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <hr>
            <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;">REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
            <br>        
          <div id="demo" class="collapse">
            <ol>
              <!-- <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href=""> -->
              <f><li><p>Reinhardt UE. The pricing of U.S. hospital services: chaos behind a veil of secrecy. Health Affairs. 2006;25(1):57-69. doi: <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1377/hlthaff.25.1.57">10.1377/hlthaff.25.1.57</a></p></li></f>              
              <f><li><p>Health Care Cost Institute. Some states pay twice the price for health care, finds new report. Published April 27, 2016. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://www.healthcostinstitute.org/states-pay-twice-price-health-care-finds-new-report/">http://www.healthcostinstitute.org/states-pay-twice-price-health-care-finds-new-report/</a> Accessed January 3, 2017.</p></li></f>
              <f><li><p>Dobson A, DaVanzo J, Doherty J, Tanamor M. A study of hospital charge setting practices. The Lewin Group. December 2005; No. 05-4. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://67.59.137.244/documents/Dec05_Charge_setting.pdf">http://67.59.137.244/documents/Dec05_Charge_setting.pdf</a> Accessed March 24, 2017.</p></li></f>
              <f><li><p>National Nurses United Press Release.  New data – some hospitals set charges at 10 times their costs. National Nurses United website. Published January 6, 2014. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://www.nationalnursesunited.org/press/entry/new-data-some-hospitals-set-charges-at-10-times-their-costs/">http://www.nationalnursesunited.org/press/entry/new-data-some-hospitals-set-charges-at-10-times-their-costs/</a>  Accessed March 24, 2017.</p></li></f>
              <f><li><p>Umbdenstock R. Hospital billing too complex: Another view. USA Today. May 15 2013. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://www.usatoday.com/story/opinion/2013/05/15/billing-american-hospital-association-editorials-debates/2163741/">http://www.usatoday.com/story/opinion/2013/05/15/billing-american-hospital-association-editorials-debates/2163741/</a> Accessed March 24, 2017.</p></li></f>
            </ol>
          </div>  
          </div>
        <div class="col-sm-1"></div>        
   </div>

</div>

<!-- <footer class="container-fluid" style="background:#f4f4f4;">
      <div class="row">
          <div class="col-sm-3 text-left NextBtn">
              <a href="?id=m3/m3s2p2"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 3 | Section 2 | Dive Deeper</span>
                <span class="sp1"><strong>Basics of Health Care Financing in the US</strong></span></a>
            </div>
          <div class="col-sm-6"></div>
      </div>
</footer> -->



<footer class="container-fluid">         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="#" onclick="window.location='?id=m3/m3s2p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 3 | Section 2</span>
                <span class="sp1"><strong>Story From the Frontlines</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="#" onclick="window.location='?id=m3/m3s4p1'"><span class="ssp2">MODULE 3 | Section 4</span>
                <span class="sp2"><strong>The Cost of Care: Different Approaches</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>

 <div class="col-md-12 col-sm-12 col-xs-12">            
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
              <div class="col-md-2 col-sm-4 col-xs-4">
                <a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="https://s3.amazonaws.com/dell-med/img/CC.png" width="auto" height="auto"></a>
              </div>
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
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

        $(function () {
                setMsgBoxHeight();
        });
        function setMsgBoxHeight() {
		var f_height = 0;
            var msgboxHeight = $(".carousel .active .row-eq-height").height();
			 var l = $(".carousel .active .ans").length;
			  for(var i=1;i<=l;i++)
			  {
			  var h =  $(".carousel .active .row-eq-height div:nth-child("+i+") .ans").css("height");
			  var h1 = h.split('p');
			 if(f_height < Number(h1[0]))
			 {
			    f_height = h1[0];
			 }
			}
           $(".carousel .active .ans").css("height",f_height+"px");	   
    }

$('.carousel').on('slid.bs.carousel', function (e) {
       $('.item .ans').removeClass('Dis');
       $('.item .ans').removeClass('DisB');
       var id = parseInt(e.relatedTarget.id);
          if(id == 0){
              $('.left_a').hide();
              $('.right_a').show();
          }else if(id == 1){
            $('.left_a').show();
            $('.right_a').hide();
          }


          if(id == 2){
              $('.left_b').hide();  
              $('.right_b').show();            
          }else if(id == 11){
            $('.left_b').show();
            $('.right_b').hide();
          } else {
            $('.left_b').show();
            $('.right_b').show();
          }
            setMsgBoxHeight();
      });


function TryA(){
      $('#myCarousel_a .item.active div').removeClass("incorrect").removeClass("selectedAns");
      $('#myCarousel_a .item .ans').removeClass('Dis');      
    }


    function checkAnswer(obj, f) {
            //console.log($(obj).parents(".row-eq-height"));
            $('#myCarousel_a .item .ans').addClass('Dis');
            $('#myCarousel_a .item.active div').removeClass("incorrect").removeClass("selectedAns");
            $(obj).parents(".eq-h").find(".ans")
            $(obj).parents(".white").removeClass("correct incorrect");
            if (f === 1) {
                $(obj).addClass('selectedAns').parents('#myCarousel_a .white').addClass('correct');
            } else if (f === 0) {
                $(obj).addClass('selectedAns').parents('#myCarousel_a .white').addClass('incorrect');
            } else {
                $(obj).addClass('selectedAns').parents('#myCarousel_a .white').addClass('correct bothCorrect');
                //alert(f);
                $(".5401, .2497").addClass("hide");
                $("." + f).removeClass("hide");
            }
        }

    
    function TryAB() {
      $('#myCarousel .item.active div').removeClass("incorrect").removeClass("selectedAns");
      $('#myCarousel .item .ans').removeClass('DisB');
    }        
        
        function checkAnswerA(obj, f) {
            //console.log($(obj).parents(".row-eq-height"));
            $('#myCarousel .item .ans').addClass('DisB');
            $('#myCarousel .item.active div').removeClass("incorrect").removeClass("selectedAns");
            $(obj).parents(".eq-h").find(".ans")
            $(obj).parents("#myCarousel .white").removeClass("correct incorrect");
            if (f === 1) {
                $(obj).addClass('selectedAns').parents('#myCarousel .white').addClass('correct');
            } else if (f === 0) {
                $(obj).addClass('selectedAns').parents('#myCarousel .white').addClass('incorrect');
            } else {
                $(obj).addClass('selectedAns').parents('#myCarousel .white').addClass('correct bothCorrect');
                //alert(f);
                $(".5401, .2497").addClass("hide");
                $("." + f).removeClass("hide");
            }
        }

</script>



<script>

  $("#my-Carousel1 .additem").on("swipeleft",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel1 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==l)
	 {
	    $("#my-Carousel1 .carousel-indicators li:nth-child(1)").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child(1)").addClass("active");
	 }
	 else{
	     i++;
		 $("#my-Carousel1 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child("+i+")").addClass("active");
	 }
	 setMsgBoxHeight();
  });
  $("#my-Carousel1 .additem").on("swiperight",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel1 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==1)
	 {
	    $("#my-Carousel1 .carousel-indicators li:nth-child("+l+")").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child("+l+")").addClass("active");
	 }
	 else{
	     i--;
		 $("#my-Carousel1 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child("+i+")").addClass("active");
	 }
	 setMsgBoxHeight();
  });

</script>

<script>

  $("#my-Carousel2 .additem").on("swipeleft",function(e){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel2 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==l)
	 {
	    $("#my-Carousel2 .carousel-indicators li:nth-child(1)").addClass("active");
	    $("#my-Carousel2 .additem div.item:nth-child(1)").addClass("active");
	 }
	 else{
	     i++;
		 $("#my-Carousel2 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel2 .additem div.item:nth-child("+i+")").addClass("active");
	 }
	 setMsgBoxHeight();
  });
  
  $("#my-Carousel2 .additem").on("swiperight",function(e){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel2 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==1)
	 {
	    $("#my-Carousel2 .carousel-indicators li:nth-child("+l+")").addClass("active");
	    $("#my-Carousel2 .additem div.item:nth-child("+l+")").addClass("active");
	 }
	 else{
	     i--;
		 $("#my-Carousel2 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel2 .additem div.item:nth-child("+i+")").addClass("active");
	 }
	 setMsgBoxHeight();
  });

</script>




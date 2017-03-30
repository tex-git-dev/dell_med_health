<?php
if (!$_SESSION['username']) {
    ?>
    <script>
        window.location.href = "<?php echo pathUrl(); ?>";
    </script>

    <?php
}
include("view/cjs.php");
?>

<link rel="stylesheet" href="css/m1s8p1.css"> 
<div class="m1s8p1">
    <div class="jumbotron s8b1">
        <div class="container text-center bg-2">
            <br>
            <br>
            <div class="row">
                <div class="col-sm-12"> 
                    <f><p data--duration="1.5s">MODULE 1 | Section 8</p></f>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12"> 
                    <f><h2>Using Data to Identify Opportunities for Improving Care for Patients</h2></f>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">  
                     <a  class="wow fadeInDownBig dArowh" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>


    <br>
    <div  id="b2" class="Step1 container bg-3 text-center">
        <f><h3 class="boldT text-uppercase">Value Opportunities Tool (VOT)</h3></f>
        <br>
        <div class="row text-left">
            <div class="col-sm-4 col-sm-offset-2">
                <f><p   class="">You will now have an opportunity to interact with a mock up of the value driven outcomes (VDO) tool. This Value Opportunities Tool (VOT) is an interactive data representation scatterplot that illustrates the opportunity for value improvement among patients with a particular diagnosis. The activity below presents you with the coefficient of variance (CoV) in cost for patients with a particular diagnosis (y axis) and the mean cost among each particular diagnosis (x axis). The size of each   
                </p></f>
            </div>
            <div class="col-sm-4 ">
                <f><p class="">bubble represents the opportunity index of a particular diagnosis, which is the CoV x total cost for all patients with the diagnosis. If a diagnosis has a large bubble, representing high total cost and high variance in cost, then there might be an opportunity to look closer at the reasons for this variance. Conversely, if diagnosis has a low total cost and variance and thus a smaller bubble, chances are the opportunity for improvement is lower. </p></f> 

            </div>
        </div>
    </div>
    <br><br>
    <br>
    <!--    <div class="container s81">
            <div class="row">
                <div class="col-sm-4 " style="visibility: visible; animation-name: flipInX;">
                    <div class="panel">
                        <div>
                            <img src="img/8-01.jpg" class="img-responsive" style="width:100%" alt="Image">
                        </div>
                        <div class="panel-footer">
                            <h2>Coefficient of variance <span style="text-transform: none;">(CoV)</span></h2>
                            <center><span class="separator"></span></center>
                            <f><p>How variable are the costs?</p></f>
                            <f><p>How dispersed is your data?</p></f> 
                            <f><p>Mean is the average cost.</p></f>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4  " style="visibility: visible; animation-name: flipInX;">
                    <div class="panel">
                        <div>
                            <img src="img/8-02.jpg" class="img-responsive" style="width:100%" alt="Image">
                        </div>
                        <div class="panel-footer">
                            <h2>Opportunity index</h2>
                            <center><span class="separator"></span></center>
                            <f><p>How large is the opportunity to impact costs?</p></f>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 " style="visibility: visible; animation-name: flipInX;">
                    <div class="panel">
                        <div>
                            <img src="img/8-03.jpg" class="img-responsive" style="width:100%" alt="Image">
                        </div>
                        <div class="panel-footer">
                            <h2>Mean cost</h2>
                            <center><span class="separator"></span></center>
                            <f><p>What is the average cost?</p></f>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!--    <div class=" container text-center" >
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    
                </div>
            </div>
        </div>-->

    <div class="jumbotron m6b2 s81">        
        <div class="container"> 
            <div class="row m6col">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 text-center">
                    <div class="well">              
                        <f><h4>Below, you will have an opportunity to explore a simplified version of a tool similar to the VDO tool used at The University of Utah Health Care system to determine how focusing on data can provide important insights in areas where value may be improved.<br><br>If you would like to learn more about how to read the chart, click  <a data-toggle="modal" data-target=".bs-example-modal-lg">here</a>.</h4></f>
                    </div> 
                </div> 
            </div>  
            <div class="col-sm-2"></div>           
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1;"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="panel">
                                <div>
                                    <img src="img/8-01.jpg" class="img-responsive" style="width:100%" alt="Image">
                                </div>
                                <div class="panel-footer">
                                    <f><h2>Coefficient of variance <span style="text-transform: none;">(CoV)</span></h2></f>
                                    <center><span class="separator"></span></center>
                                    <f><p>How variable are the costs?<br>How dispersed is your data?<br>Mean is the average cost.</p></f>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4  ">
                            <div class="panel">
                                <div>
                                    <img src="img/8-02.jpg" class="img-responsive" style="width:100%" alt="Image">
                                </div>
                                <div class="panel-footer">
                                    <h2>Opportunity index</h2>
                                    <center><span class="separator"></span></center>
                                    <f><p>How large is the opportunity to impact costs?</p></f>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="panel">
                                <div>
                                    <img src="img/8-03.jpg" class="img-responsive" style="width:100%" alt="Image">
                                </div>
                                <div class="panel-footer">
                                    <h2>Mean cost</h2>
                                    <center><span class="separator"></span></center>
                                    <f><p>What is the average cost?</p></f>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron scatterplot">

        <div class="container text-center scatter">
            <f><h3 class="boldT text-uppercase">OPPORTUNITY INDEX SCATTERPLOT (DIAGNOSIS)</h3></f>
<!--            <f><p>Hover or tap the Diagnosis Opportunity Index Scatterplot to examine the data to answer the questions below. </p></f>-->
            <f><p>Explore the graph. Then answer the questions below.</p></f>
            <div class="container">    
                <div class="row">
                    <div class="col-sm-12 ploatArea" >
                        <div id="scatter1" ></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center scatter fixedPos">
            <!--            <h3 class="boldT text-uppercase">OPPORTUNITY INDEX SCATTERPLOT (PHYSICIAN; UNSPECIFIED SEPTICEMIA)</h3>
                        <f><p>Hover or tap the Physician Opportunity Index Scatterplot to examine the data to answer the questions below. </p></f>-->
            <f><h3 class="boldT text-uppercase">OPPORTUNITY INDEX SCATTERPLOT (PHYSICIAN; UNSPECIFIED SEPTICEMIA)</h3></f>
            <f><p>Explore the graph. Then answer the questions below. </p></f>
            <div class="container">    
                <div class="row">
                    <div class="col-sm-12 ploatArea" >
                        <div id="scatter2" ></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center scatter fixedPos">
            <f><h3 class="boldT text-uppercase">Patient Stories Bar Graph</h3></f>
            <f><p>Detailing health care costs and reviewing data on cost variance at various levels is a method to identify areas to start tackling high costs. </p></f>
            <f><p>Select each bar to read more about the patient's story. Where do you think there might be room for improvement?
            </p></f>
            <div class="container">    
                <div class="row">
                    <div class="col-sm-12 ploatArea" >
                        <div id="scatter3" ></div>
                    </div>
                </div>
            </div>

            <!-- Barchart popup's-->
            <div id="dialog0" class="hide popup">
                <div class="close_popup" onclick="$(this).parent().addClass('hide');
                        $('.overlayBG').hide();">X</div>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/8-05.jpg" class="img-responsive" style="width:99%" alt="Image">
                    </div>
                    <div class="col-sm-9">
                        <f><p class="header">Middle cost</p></f>
                        <f><p class="slogan">Patient 25472 : Mervin</p></f>
                        <div class="patient_desc">
                            <f><p class="paddB10">Mervin is a 52-year-old man with a history of substance abuse who arrives at the emergency room after having a fever for a couple days, along with shortness of breath. He complains that his heart feels like it is racing and he has trouble breathing, feeling like he just can’t get enough oxygen into his lungs. His blood is drawn, and within a few hours he is admitted to the hospital with presumed sepsis resulting from community-acquired pneumonia. He is started on antibiotics but continues to have intermittent fevers, tachycardia, and shortness of breath, requiring oxygen after two days. Due to consistently low levels of potassium and magnesium, his blood work needs to be monitored at least twice daily, and nurses have trouble finding a vein each time. Because of this, he has a peripherally-inserted central venous catheter (“PICC” line) inserted, allowing him to not be ‘stuck’ anymore. After a few days of antibiotics, IV fluids, and supplemental oxygen, he starts to improve and is discharged after six nights in the hospital. </p></f>
                            <f><p><span class="bolds8">Our take:</span> Mervin’s course was a little complicated by factors that are likely largely outside of the control of his clinicians. His costs may be higher than expected for community acquired pneumonia, but many would argue this is warranted since he requires more frequent lab monitoring and had abnormal vitals beyond 48 hours. Common potential sources of variation in costs for a hospitalization like Marvin’s could be whether physicians decide to “broaden” his antibiotics (which could be much more expensive), the frequency of his lab draws, his level of care (ICU versus acute care) and any additional testing.</p></f>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dialog1" class="hide popup">
                <div class="close_popup" onclick="$(this).parent().addClass('hide');
                        $('.overlayBG').hide();">X</div>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/8-04.jpg" class="img-responsive" style="width:98%" alt="Image">
                    </div>
                    <div class="col-sm-9">
                        <f><p class="header">Highest cost</p></f>
                        <f><p class="slogan">Patient 61852 : Joshua</p></f>
                        <div class="patient_desc">
                            <f><p>Joshua, a 63-year-old man with chronic unmanaged diabetes, obesity, and high blood pressure, arrives at the hospital after discharging himself from a long-term care facility about a week ago. He has been living off-and-on with family members, on the street, and in care facilities for years, rarely taking his prescribed medications. He has also been complaining about tingling and burning pain in his left foot that lately has become numb and with ulcerated skin.  He was admitted to the hospital due to abnormal lab work, high fever, low blood pressure, and a severely infected foot. He underwent an MRI that showed he has osteomyelitis (a bone infection) of his right metatarsal. The vascular surgeon evaluated the patient and decided he needed an operation but could not schedule him until Tuesday (5 days after admission). </p></f>
                            <f><p class="paddB10">Joshua remained on the hospital medicine service and continued on IV vancomycin and zosyn for 5 days. He then went to surgery and had a transmetatarsal amputation. He was continued on IV antibiotics for two more days after the surgery and then was discharged to a rehabilitation facility. </p></f>
                            <f><p><span class="bolds8">Our take:</span> Joshua is a complex patient with multiple comorbidities. However, his care was even more expensive than it needed to be, mostly related to the delay in obtaining his needed foot surgery. If this is a common finding, the hospital may want to target this opportunity area to improve efficiency with surgical scheduling and availability, potentially decreasing costs while improving quality of care and patient experience. </p></f>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dialog2" class="hide popup">
                <div class="close_popup" onclick="$(this).parent().addClass('hide');
                        $('.overlayBG').hide();">X</div>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/8-06.jpg" class="img-responsive" style="width:98%" alt="Image">
                    </div>
                    <div class="col-sm-9">
                        <f><p class="header">Lowest cost</p></f>
                        <f><p class="slogan">Patient 64013 : Jane</p></f>
                        <div class="patient_desc">
                            <f><p class="paddB10">Jane is a 27-year-old woman who has been feeling generally unwell for about 3 or 4 days with symptoms of a urinary tract infection. She visits an urgent care center near her house when she suddenly feels worse and her temperature spikes. At the urgent care clinic, she seems to have left “CVA tenderness” (tenderness at her back at the location of her underlying left kidney), and her blood is drawn. An abnormal CBC lab test, her spiking fever, and tachycardia (increased heart rate) results in her physician sending her to the emergency room immediately. There she is admitted and quickly receives IV antibiotics and some IV fluids. She feels better after about 24 hours and continues to improve. She is released two days later with oral antibiotics and she continues to rest at home.</p></f>
                            <f><p><span class="bolds8">Our take:</span> Jane’s case is straightforward. She is young, healthy and will likely recover quickly after finishing her oral antibiotics. The biggest source of potential variation in a hospitalization for a patient like Jane would be the length of stay. The physicians here presumably did a good job by discharging her from the hospital as soon as clinically safe and providing an outpatient management plan for her infection.</p></f>
                        </div>
                    </div>
                </div>
            </div>

<!--            <div id="ansTrack" class="hide popup">
                <div class="close_popup" onclick="$(this).parent().addClass('hide');">X</div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Ready to try answering these questions?</h3><br><br>
                        <a class="btn btn-info" data-target="#myCarousel" data-slide-to='0' onclick='$("#ansTrack").addClass("hide");'>Take me to the first question for this chart</a>
                        <br><br><a class="btn btn-info" onclick='$("#ansTrack").addClass("hide");'>Not right now. Continue on.</a>
                    </div>
                </div>
            </div>-->

        </div>




        <div id="myCarousel" class="carousel slide carousel-sync" data-interval="false">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container text-center white">
                        <div class="container">
                            <div class="quesBox">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" >
                                        <f><p class="ques">Of the below listed diagnoses, which represents the diagnosis with the largest opportunity index?</p></f>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" >
                                        <div class="row row-eq-height">
                                            <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('Unspecified Septicemia', 'Diabetes with ketoacidosis type 1 [juvenile type]', 'Acute kidney failure');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "Unspecified Septicemia" ? 1 : 0;
                                                echo '<div class="col-sm-4">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');trackAns(1,' . $ans . ');"">' . $value . ' </div>
                                                  </div>';
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <!--                                    <div class="col-sm-12 sign">
                                                                            <i class="fa fa-times fa-4x hide" aria-hidden="true"></i>
                                                                            <i class="fa fa-check fa-4x hide" aria-hidden="true"></i>
                                                                        </div>-->
                                </div>
                            </div>
                            <!--                                <div class="row pageCount">
                                                                <div class="col-sm-10 col-sm-offset-1" >
                                                                    <f><p class="text-muted">Question 1 of 3</p></f>
                                                                </div>
                                                            </div>-->
                            <div class="container">
                                <div class="row msg incorrectMsg ">
                                    <div class="col-sm-9 col-md-10" >
                                        <h3><i class="fa fa-times fa-2" aria-hidden="true"></i> Incorrect.</h3>
                                        <f><p>How is opportunity index represented in the graph?</p></f>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <center><div class="msgBtn" onclick="$(this).parents('.white').removeClass('incorrect');">Try again</div></center>
                                    </div>
                                </div>
                                <div class="row msg correctMsg ">
                                    <div class="col-sm-9 col-md-10" >
                                        <h3><i class="fa fa-check fa-2" aria-hidden="true"></i>Correct!</h3>
                                        <f><p>This is the correct answer because the diagnosis (ICD9 code) with the largest bubble, and thus the largest opportunity cost, is Sepsis.</p></f>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <center><div class="msgBtn" style="margin-top: 28px;" href="#myCarousel" data-slide="next">Next Question</div></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!--                    <div class="container text-center">
                                            <h3 class="boldT text-uppercase">Opportunity index scatterplot</h3>
                                            <f><p>Hover or tap the Diagnosis Opportunity Index Scatterplot to examine the data to answer the questions below. </p></f>
                                            <div class="container">    
                                                <div class="row">
                                                    <div class="col-sm-12" >
                                                        <div id="scatter2" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div class="container text-center white">
                        <div class="container">   
                            <div class="quesBox">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" >
                                        <f><p class="ques">Which diagnosis has the lowest mean, or average, cost?</p></f>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" >
                                        <div class="row row-eq-height">
                                            <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('Other chest pain', 'Single liveborn', 'Acute appendicitis without mention of peritonitis');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "Single liveborn" ? 1 : 0;
                                                //$func = $ans == 1 ? "redrowChart('scatter1', 13);" : "";
                                                echo '<div class="col-sm-4">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');trackAns(2,' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <!--                                    <div class="col-sm-12 sign">
                                                                            <i class="fa fa-times fa-4x hide" aria-hidden="true"></i>
                                                                            <i class="fa fa-check fa-4x hide" aria-hidden="true"></i>
                                                                        </div>-->
                                </div>
                            </div>
                            <!--                                <div class="row pageCount">
                                                                <div class="col-sm-10 col-sm-offset-1" >
                                                                    <f><p class="text-muted">Question 2 of 3</p></f>
                                                                </div>
                                                            </div>-->
                            <div class="container">
                                <div class="row msg incorrectMsg ">
                                    <div class="col-sm-9 col-md-10" >
                                        <h3><i class="fa fa-times fa-2" aria-hidden="true"></i> Incorrect.</h3>
                                        <f><p>Where is mean cost found on the graph?</p></f>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <center><div class="msgBtn" onclick="$(this).parents('.white').removeClass('incorrect');">Try again</div></center>
                                    </div>
                                </div>
                                <div class="row msg correctMsg ">
                                    <div class="col-sm-9 col-md-10" >
                                        <h3><i class="fa fa-check fa-2" aria-hidden="true"></i>Correct!</h3>
                                        <f><p>This is the correct answer because this diagnosis (ICD9 code) has the lowest mean cost, represented as the smallest value on the x-axis.</p></f>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <center><div class="msgBtn" style="margin-top: 28px;" href="#myCarousel" data-slide="next">Next Question</div></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!--                      <div class="container text-center">
                                            <h3 class="boldT text-uppercase">Opportunity index scatterplot</h3>
                                            <f><p>Hover or tap the Diagnosis Opportunity Index Scatterplot to examine the data to answer the questions below. </p></f>
                                            <div class="container">    
                                                <div class="row">
                                                    <div class="col-sm-12" >
                                                        <div id="scatter3" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div class="container text-center white">
                        <div class="container">    

                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1" >
                                    <f><p class="ques paddB15">Now, select the diagnosis bubble for unspecified septicemia. This will take you to a different scatterplot, the <b>Physician Opportunity Index Scatterplot for Unspecified Septicemia</b>, where the bubbles represent physicians that treated patients with unspecified septicemia. </p></f>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <!--                    <div class="container text-center">
                                            <h3 class="boldT text-uppercase">Physician Opportunity Index Scatterplot for Unspecified Septicemia</h3>
                                            <f><p>Hover or tap the Physician Opportunity Index Scatterplot to examine the data to answer the questions below. </p></f>
                                            <div class="container">    
                                                <div class="row">
                                                    <div class="col-sm-12" >
                                                        <div id="scatter4" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div class="container text-center white">
                        <div class="container">    
                            <div class="quesBox">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" >
                                        <f><p class="ques">Each bubble represents physicians that treated patients with unspecified septicemia. How many physicians have treated patients with unspecified septicemia, according to the graph?</p></f>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" >
                                        <div class="row row-eq-height">
                                            <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array(8, 5, 9);

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == 9 ? 1 : 0;
                                                //$func = $ans == 1 ? "redrowChart('scatter2', 2);" : "";
                                                echo '<div class="col-sm-4">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');trackAns(3,' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <!--                                    <div class="col-sm-12 sign">
                                                                            <i class="fa fa-times fa-4x hide" aria-hidden="true"></i>
                                                                            <i class="fa fa-check fa-4x hide" aria-hidden="true"></i>
                                                                        </div>-->
                                </div>
                            </div>
                            <!--                                <div class="row pageCount">
                                                                <div class="col-sm-10 col-sm-offset-1" >
                                                                    <f><p class="text-muted">Question 3 of 3</p></f>
                                                                </div>
                                                            </div>-->
                            <div class="container">
                                <div class="row msg incorrectMsg ">
                                    <div class="col-sm-9 col-md-10" >
                                        <h3><i class="fa fa-times fa-2" aria-hidden="true"></i> Incorrect.</h3>
                                        <f><p>How are physicians represented on the graph?</p></f>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <center><div class="msgBtn" onclick="$(this).parents('.white').removeClass('incorrect');">Try again</div></center>
                                    </div>
                                </div>
                                <div class="row msg correctMsg ">
                                    <div class="col-sm-9 col-md-10" >
                                        <h3><i class="fa fa-check fa-2" aria-hidden="true"></i>Correct!</h3>
                                        <f><p>This is the correct answer because there are a total of nine bubbles on the chart, each representing one physician. </p></f>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <center><div class="msgBtn" style="margin-top: 28px;" href="#myCarousel" data-slide="next">Next Question</div></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <!--                    <div class="container text-center">
                                            <h3 class="boldT text-uppercase">Physician Opportunity Index Scatterplot for Unspecified Septicemia</h3>
                                            <f><p>Hover or tap the Physician Opportunity Index Scatterplot to examine the data to answer the questions below. </p></f>
                                            <div class="container">    
                                                <div class="row">
                                                    <div class="col-sm-12" >
                                                        <div id="scatter6" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div class="container text-center white">
                        <div class="container">    
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1" >
                                    <f><p class="ques paddB15">Why is the opportunity index for one physician so much larger? Select the bubble for the physician with the largest opportunity index. This will take you to the <b>Patient Stories Bar Graph</b>, showing individual patients this physician treated. Select each patient story to learn more about that particular patient case study and shed light on why physician 3320's opportunity index was high.  </p></f>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container text-center white">
                        <div class="container">    
                            <div class="row">
                                <div class="col-sm-12" >
                                    <f><p>Remember that these data represent real patients and real patient experiences and must be contextualized appropriately. </p></f>
                                    <div class="curser text-left" onclick="$('#dSource').slideToggle();"> <b>REFERENCES <i style="color:#000; font-size:18px;" class="fa fa-angle-down" aria-hidden="true"></i></b></div>

                                    <f><p id="dSource" class="text-left" style="text-indent: -12px; margin-left:12px;">1. <span class="bolds8">Data source:</span> Texas Hospital Inpatient Discharge Public Use Data File, [Quarters 1-4 2014 and quarters 1-2 2015]. Texas Department of State. Health Services, Center for Health Statistics, Austin, Texas. Note that the data from this source have been further masked to prevent identification of individual patients or physicians.
                                    </p></f>
<!--                                    <f><p class="fontS13" >Click on each bar to read more about the patients and their experience at the hospital for septicemia. Detailing health care costs and reviewing data on cost variance at various levels is a method to identify areas to start tackling high costs. Remember that these data represent real patients and real patient experiences and must be contextualized appropriately. 
                                        For example, this physician may have a higher mean cost and variance in cost for treating septicemia when compared to her peers because she happened to treat more patients like Joshua. Complexity and severity adjustments can be made to reduce this variation, but it is essential to understand the population of patients and data when making cost comparisons.
                                    </p></f>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <a class="prevBtn" style="display: none;" data-target="#myCarousel" data-slide="prev"><i class="fa fa-angle-left fa-2" aria-hidden="true"></i></a>
                    <a class="nextBtn" data-target="#myCarousel" data-slide='next'><i class="fa fa-angle-right fa-2" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- Left and right controls -->
            <!--                      <a class="left" href="#myCarousel" role="button" data-slide="prev" style="display: none;">
                                        <i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
                                    </a>-->
            <!-- Indicators -->
            <div style="background: #fff;">
                <center>
                    <table class="carousel-table">
                        <tr>
<!--                            <td><a class="prevBtn" style="display: none;" data-target="#myCarousel" data-slide="prev"><i class="fa fa-angle-left fa-2" aria-hidden="true"></i></a></td>-->
                            <td>
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" class="active" data-slide-to='0'></li>
                                    <li data-target="#myCarousel" data-slide-to='1'></li>
                                    <li data-target="#myCarousel" data-slide-to='2'></li>
                                    <li data-target="#myCarousel" data-slide-to='3'></li>
                                    <li data-target="#myCarousel" data-slide-to='4'></li>
                                    <li data-target="#myCarousel" data-slide-to='5'></li>

                                </ol>
                            </td>
<!--                            <td><a class="nextBtn" data-target="#myCarousel" data-slide='next'><i class="fa fa-angle-right fa-2" aria-hidden="true"></i></a></td>-->
                        </tr>
                    </table>
                </center>
            </div>
            <!--                        <a class="right" href="#myCarousel" role="button" data-slide="next">
                                        <i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
                                    </a>-->


        </div>
    </div>
    <div class="overlayBG"></div>
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
        function checkAnswer(obj, f) {
            //console.log($(obj).parents(".row-eq-height"));
            $(obj).parents(".row-eq-height").find(".ans").removeClass("selectedAns");
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

        var xDiagnosis = [
            10915,
            11996,
            14340,
            7787,
            8621,
            15583,
            3958,
            12030,
            5371,
            7930,
            4221,
            1504,
            3033,
            22372,
            8839
        ];
        var yDiagnosis = [
            0.55,
            1.65,
            1.12,
            0.89,
            0.67,
            0.99,
            1.71,
            2.88,
            0.62,
            0.79,
            0.47,
            2.67,
            1.91,
            1.65,
            0.88
        ];

        var trace = {
            y: yDiagnosis,
            x: xDiagnosis,
            text: [
                'Diagnosis:Acute appendicitis<br>X= $10915, Y=0.55<br>Opportunity Index (size): $474270',
                'Diagnosis:Acute kidney failure<br>X= $11996, Y=1.65<br>Opportunity Index (size): $2256383',
                'Diagnosis:Acute pancreatitis<br>X= $14340, Y=1.12<br>Opportunity Index (size): $1493637',
                'Diagnosis:Alcohol withdrawal<br>X= $7787, Y=0.89<br>Opportunity Index (size): $609903',
                'Diagnosis:Cellulitis and abscess of leg<br>X= $8621, Y=0.67<br>Opportunity Index (size): $675813',
                'Diagnosis:Cerebral artery occlusion<br>X= $15583, Y=0.99<br>Opportunity Index (size): $2206151',
                'Diagnosis:Condition of mother<br>X= $3958, Y=1.71<br>Opportunity Index (size): $615878',
                'Diagnosis:Diabetes with ketoacidosis<br>X= $12030, Y=2.88<br>Opportunity Index (size): $3395270',
                'Diagnosis:Other chest pain<br>X= $5371, Y=0.62<br>Opportunity Index (size): $352979',
                'Diagnosis:Pneumonia<br>X= $7930, Y=0.79<br>Opportunity Index (size): $645245',
                'Diagnosis:Post term pregnancy<br>X= $4221, Y=0.47<br>Opportunity Index (size): $359115',
                'Diagnosis:Single liveborn<br>X= $1504, Y=2.67<br>Opportunity Index (size): $3192578',
                'Diagnosis:Single liveborn, c-section<br>X= $3033, Y=1.91<br>Opportunity Index (size): $1141213',
                'Diagnosis:Unspecified septicemia<br>X= $22372, Y=1.65<br>Opportunity Index (size): $12624520',
                'Diagnosis:Urinary tract infection<br>X= $8839, Y=0.88<br>Opportunity Index (size): $614486'
            ],
            mode: 'markers',
            hoverinfo: "text",
            marker: {
                color: [
                    'rgb(166,206,227)',
                    'rgb(72,138,190)',
                    'rgb(133,177,159)',
                    'rgb(137,201,105)',
                    'rgb(93,162,62)',
                    'rgb(239,156,146)',
                    'rgb(237,76,64)',
                    'rgb(244,124,68)',
                    'rgb(255,173,86)',
                    'rgb(254,131,33)',
                    'rgb(216,171,188)',
                    'rgb(141,102,175)',
                    'rgb(176,141,158)',
                    'rgb(241,219,127)',
                    'rgb(177,89,40)'
                ],
                size: [
                    10.8895533169,
                    23.959645329,
                    18.3656339493,
                    11.8842914676,
                    12.3676781914,
                    23.5912417194,
                    11.9281123699,
                    32.3122906895,
                    10,
                    12.1434911883,
                    10.0450016832,
                    30.8257390005,
                    15.7809414482,
                    100,
                    11.9179033831
                ],
                opacity: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
                sizemode: ['area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area'],
            },
            type: 'scatter',
            xaxis: 'x',
            yaxis: 'y'
        };

        var data = [trace];

        layout = {
            hovermode: 'closest',
            plot_bgcolor: "#EEEEEE",
            paper_bgcolor: "#EEEEEE",
            margin: {
                r: 10,
                t: 0,
                b: 60,
                l: 60
            },
            showlegend: false,
            //title: 'Diagnosis Opportunity Index Scatterplot',
            xaxis: {
                domain: [0, 1],
                title: 'Mean Cost of Diagnosis',
                fixedrange: true
            },
            yaxis: {
                domain: [0, 1],
                title: 'Coefficient of Variance (SD/Mean)',
                fixedrange: true
            }
        };



        //for physician
        var xPhysician = [
            14228,
            19245,
            23870,
            18938,
            22683,
            17220,
            14598,
            19572,
            15147
        ];
        var yPhysician = [
            1,
            0.75,
            1.76,
            1.08,
            0.88,
            0.82,
            0.61,
            0.78,
            1.29
        ];

        var trace1 = {
            y: yPhysician,
            x: xPhysician,
            text: [
                'Physician ID:2497<br>X= $14228, Y=1<br>Opportunity Index (size): $256109',
                'Physician ID:3228<br>X= $19245, Y=0.75<br>Opportunity Index (size): $245379',
                'Physician ID:3320<br>X= $23870, Y=1.76<br>Opportunity Index (size): $714199',
                'Physician ID:3745<br>X= $18938, Y=1.08<br>Opportunity Index (size): $409065',
                'Physician ID:4162<br>X= $22683, Y=0.88<br>Opportunity Index (size): $359307',
                'Physician ID:4406<br>X= $17220, Y=0.82<br>Opportunity Index (size): $211805',
                'Physician ID:4926<br>X= $14598, Y=0.61<br>Opportunity Index (size): $186998',
                'Physician ID:5401<br>X= $19572, Y=0.78<br>Opportunity Index (size): $290052',
                'Physician ID:5842<br>X= $15147, Y=1.29<br>Opportunity Index (size): $449424'
            ],
            mode: 'markers',
            hoverinfo: "text",
            marker: {
                color: [
                    'rgb(166,206,227)',
                    'rgb(109,157,167)',
                    'rgb(88,176,68)',
                    'rgb(250,141,137)',
                    'rgb(244,124,68)',
                    'rgb(255,135,26)',
                    'rgb(178,148,199)',
                    'rgb(204,179,158)',
                    'rgb(177,89,40)'
                ],
                size: [
                    21.7981377122,
                    19.9663885311,
                    100,
                    47.9096966812,
                    39.4153652971,
                    14.2348743648,
                    10,
                    27.5926449305,
                    54.7994977248
                ],
                opacity: [1, 1, 1, 1, 1, 1, 1, 1, 1],
                sizemode: ['area', 'area', 'area', 'area', 'area', 'area', 'area', 'area', 'area']
            },
            type: 'scatter',
            xaxis: 'x',
            yaxis: 'y'
        };

        var data1 = [trace1];

        Phy_layout = {
            hovermode: 'closest',
            plot_bgcolor: "#EEEEEE",
            paper_bgcolor: "#EEEEEE",
            margin: {
                r: 10,
                t: 0,
                b: 60,
                l: 60
            },
            showlegend: false,
            //title: 'Physician Opportunity Index Scatterplot for Unspecified septicemia',
            xaxis: {
                domain: [0, 1],
                title: 'Mean Cost of Diagnosis',
                fixedrange: true
            },
            yaxis: {
                domain: [0, 1],
                title: 'Coefficient of Variance (SD/Mean)',
                fixedrange: true
            }
        };

        //Bar chart
        var xValue = ['Patient ID 25472', 'Patient ID 61852', 'Patient ID 64013'];
        var yValue = [20463, 46457, 6323];


        var databar = [
            {
                x: xValue,
                y: yValue,
                hoverinfo: "none",
                //text: ['Text A', 'Text B', 'Text C'], //tooltip
                marker: {
                    color: ['rgba(7,55,99,1)', 'rgba(31,119,180,1)', 'rgba(44,182,157,1)'],
                    line: {color: 'transparent'}
                },
                type: 'bar',
                xaxis: 'x',
                yaxis: 'y'
            }
        ];
        var annotationContent = [];
        function getLayoutBar() {
            //alert($("#scatter7").width());
//            if ($("#scatter7").width() < 940) {
//                var title = 'Total Encounter Cost for Patients Diagnosed <br>with Unspecified septicemia By Physician: 3320';
//                var t = 40;
//            } else {
//                var title = 'Total Encounter Cost for Patients Diagnosed with Unspecified septicemia By Physician: 3320';
//                var t = 25;
//            }

            var layoutbar = {
                plot_bgcolor: "#EEEEEE",
                paper_bgcolor: "#EEEEEE",
                annotations: annotationContent,
                hovermode: "closest",
                margin: {
                    r: 10,
                    t: 0,
                    b: 30,
                    l: 60
                },
                //title: title,
                xaxis: {
                    categoryarray: ['25472', '61852', '64013'],
                    categoryorder: 'array',
                    domain: [0, 1],
                    //title: 'Deidentified Patient ID',
                    type: 'category',
                    fixedrange: true
                },
                yaxis: {
                    domain: [0, 1],
                    title: 'Total Cost of Encounter, In Dollars',
                    fixedrange: true
                }
            };
            return layoutbar;
        }



        for (var i = 0; i < xValue.length; i++) {
            var result = {
                x: xValue[i],
                y: yValue[i],
                text: "$" + yValue[i].toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ","),
                xanchor: 'center',
                yanchor: 'top',
                font: {
                    color: '#ffffff'
                },
                showarrow: false
            };
            annotationContent.push(result);
        }

        $("#myCarousel").on('slid.bs.carousel', function (i) {
            updateChart();

            $(".popup").addClass("hide");
            $(".overlayBG").hide();

            if (isSafari) {
                setMsgBoxHeight();
            }
        });

        drawChart();
        function drawChart() {
            //alert(1);
            Plotly.newPlot('scatter1', data, layout);
            Plotly.newPlot('scatter2', data1, Phy_layout);
            layoutbar = getLayoutBar();
            Plotly.newPlot('scatter3', databar, layoutbar);
        }


        if (/(iPhone|iPod|iPad)/i.test(navigator.userAgent)) {
            var chart_Event = 'plotly_hover';
        } else {
            var chart_Event = "plotly_click";
        }

        function updateChart() {
            //console.log($('.carousel-inner .active').index());
            var indexNo = $('.carousel-inner .active').index();
            // $("#scatter1").parents(".scatter").removeClass("fixedPos");
            if (indexNo == 0 || indexNo == 1 || indexNo == 2) {
                if ($("#scatter1").parents(".scatter").hasClass("fixedPos")) {
                    $(".scatter").addClass("fixedPos");
                    $("#scatter1").parents(".scatter").hide().removeClass("fixedPos").fadeIn("slow");
                    Plotly.newPlot('scatter2', data1, Phy_layout);
                }
            } else if (indexNo == 3 || indexNo == 4) {
                if ($("#scatter2").parents(".scatter").hasClass("fixedPos")) {
                    $(".scatter").addClass("fixedPos");
                    $("#scatter2").parents(".scatter").hide().removeClass("fixedPos").fadeIn("slow");
                    Plotly.newPlot('scatter1', data, layout);
                }
            } else if (indexNo == 5) {
                if ($("#scatter3").parents(".scatter").hasClass("fixedPos")) {
                    $(".scatter").addClass("fixedPos");
                    $("#scatter3").parents(".scatter").hide().removeClass("fixedPos").fadeIn("slow");
                    Plotly.newPlot('scatter1', data, layout);
                    Plotly.newPlot('scatter2', data1, Phy_layout);
                }
            }

            //Click and hover events
            if (indexNo === 2) {
                redrowChart("scatter1", 13);
            } else if (indexNo === 4) {
                redrowChart("scatter2", 2);
            } else if (indexNo === 5) {
                var myPlot2 = document.getElementById('scatter3');
                myPlot2.on(chart_Event, function (data) {
                    //console.log(data.points[0].pointNumber);
                    $("#ansTrack").addClass("hide");
                    $("#dialog" + data.points[0].pointNumber).removeClass("hide");
                    $(".overlayBG").show();
                });
            }
        }

        function redrowChart(id, no) {
            var myPlot = document.getElementById(id);
            myPlot.on(chart_Event, function (data) {
                //console.log(data.points[0].pointNumber);
                if (data.points[0].pointNumber == no) {
                    $('#myCarousel').carousel('next');
                }
            });
        }

        var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
        //alert(isSafari);
        $(function () {
            if (isSafari) {
                setMsgBoxHeight();
            }
        });
        function setMsgBoxHeight() {
            var msgboxHeight = $(".scatterplot .active .row-eq-height").height() - 13;
            //alert(msgboxHeight);
            $(".scatterplot .active .ans").height(msgboxHeight);
        }


        $(document).ready(function () {
            window.onresize = function () {
                $(".fixedPos").addClass("initialPos");
                drawChart();
                $(".fixedPos").removeClass("initialPos");
                updateChart();
            };
            $(".overlayBG").click(function () {
                $(".popup:not(.hide)").addClass("hide");
                $(this).hide();
            });
            $("#25472,#61852,#64013").mouseleave(function () {
                $(this).addClass("hide");
                $(".overlayBG").hide();
            });
        });

        //Track answers
        var ans = [0, 0, 0];
        function trackAns(i, val) {
            ans[i - 1] = val;
            //alert(ans);
        }

        //hide carousel controls on first and last items
        $('.carousel-sync').carousel('cycle');
        $('.carousel-sync').on('click', '.carousel-control[data-slide]', function (ev) {
            ev.preventDefault();
            $('.carousel-sync').carousel($(this).data('slide'));
        });
        $('.carousel-sync').on('mouseover', function (ev) {
            ev.preventDefault();
            $('.carousel-sync').carousel('pause');
        });
        $('.carousel-sync').on('mouseleave', function (ev) {
            ev.preventDefault();
            $('.carousel-sync').carousel('cycle');
        });

        $('#myCarousel').bind('slid.bs.carousel', function (e)
        {
            //var $this = $(this);
            //alert(navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i));
            if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i) == null){
                $('.prevBtn, .nextBtn').show();
            }

            if ($('.carousel-inner .item:last').hasClass('active'))
            {
                $('#myCarousel').carousel('pause');
                $('.nextBtn').hide();

                //for track answer
                var ansTrack = true;
                $.each(ans, function () {
                    //alert(this);
                    if (parseInt(this) === 0) {
                        //$("#ansTrack").removeClass("hide");
                        //$(".overlayBG").show();
                        ansTrack = false;
                    }
                });
                //if (ansTrack)
                    //$("#ansTrack").addClass("hide");

            } else if ($('.carousel-inner .item:first').hasClass('active'))
            {
                $('.prevBtn').hide();
            }
        });

    </script>

    <footer class="container-fluid">

        <div class="row">
            <div class="col-sm-4 text-left NextBtn">
                <a href="?id=m1/m1s7p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
                    <span class="ssp1">MODULE 1 | Section 7</span>
                    <span class="sp1"><strong>Value-Driven Outcomes at University of Utah Health Care</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="?id=m1/m1s9p1"><span class="ssp2">MODULE 1 | Section 9</span>
                    <span class="sp2"><strong>Conclusion: Value-Based Health Care</strong></span>
                    <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
        </div>


          <div class="row">            
            <div class="col-sm-12"><a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="img/CC.png"  width="auto" height="auto"></a></div>            
          </div>

    </footer> 

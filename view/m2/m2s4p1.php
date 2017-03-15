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
<link rel="stylesheet" href="css/m2s4p1.css">
<div class="m2s4p1">
       <div class="jumbotron b1">
        <div class="container text-center bg-2">
          <br>
          <br>
         <div class="row">
            <div class="col-sm-12"> 
             <f><p data--duration="1.5s">MODULE 2 | Section 4</p></f>
            </div>
         </div>
          <div class="row">
            <div class="col-sm-12"> 
              <f><h2>Patient Outcomes</h2></f>
            </div>
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

      <div class="Step1 container m2s4b2">
         <f><h3 class="text-center">PROMs</h3></f>
         <br>
           <f><p>Now that we have explored the importance and impact of asking, “What matters to you?” let’s delve into strategies for measuring patient-reported outcomes that address the question of “How are you?” One way to ensure that we improve patient outcomes is to ask our patients about their priorities and states of being. An important subset of outcomes are patient-reported outcome measures, sometimes referred to as “PROMs” or “PRMs.” PROMs attempt to capture whether the services provided actually improved a patient’s health and sense of well-being from the perspective of the patient. For example, patients might be asked to assess their general health, ability to complete various activities (dress themselves, read, climb a flight of stairs, go to work, etc), mood, level of fatigue, and pain.</p></f>
           <f><p class="small">Watch the video to learn more about the benefits of PROMs.</p></f>
      </div>
      <br>      


<div id="b1" class="container text-center">
         <div class="row text-left">
           <div class="col-sm-2"></div>
            <div class="col-sm-8">
               <div class="videocontent">
               <video id="myVideo" class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="media/M2_4.png" data-setup='{"fluid": true}'>
               <source src="media/M2_4.mp4" type="video/mp4"></source>
                 <source src="media/M2_4.webm" type="video/webm"></source>
                 <source src="media/M2_4.ogv" type="video/ogv"></source>
                  <track kind="subtitles" src="" srclang="en" label="English"  default/>
               </video>

        <!-- <div class="row text-center myDiv0">
          <div class="col-sm-12">            
              <f><h4 id="myDiv1"></h4></f>
              <div id="myDiv2"></div>
              <f><h5 id="myDiv3"></h5></f>            
          </div>
        </div> -->

               </div>
              </div> 
            <div class="col-sm-2"></div>          
         </div>
      </div>    

    <br><br>


<!-- <a target="_blank" style="color:#3b4053;" href="https://www.unos.org/"></a> -->

<div class="jumbotron m2s4b1 text-center">  
  <f><h3 class="text-uppercase">additional resources</h3></f>
    <br>
      <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
              <div class="col-sm-8"><f><p>If you want to learn more about PROMs, the <a target="_blank" style="color:#073763;" href="https://eprovide.mapi-trust.org/">eProvide</a> and <a target="_blank" style="color:#073763;" href="http://www.healthmeasures.net/explore-measurement-systems/promis">HealthMeasures</a> websites provide great resources.</p></f></div>
            <div class="col-sm-2"></div>
          </div>
      </div>
</div>


 <div class="container m2s4b2">
    <f><h3 class="text-uppercase text-center">Resources for Measuring Patient Outcomes</h3></f>
    <br>
    <f><h5>The International Consortium of Health Outcomes Measurement (ICHOM)</h5></f>
    <f><p class="small">A common concern is how to identify a reasonably small set of validated measures to use for improvement efforts and against which to benchmark. If you want to learn more about PROMs, These two websites provide great resources:</p></f>    
    <f><p>The International Consortium of Health Outcomes Measurement (ICHOM) is a not-for-profit  organization founded by The Institute for Strategy and Competitiveness at the Harvard Business School, the Boston Consulting Group, and the Karolinska Institute to accelerate use of patient outcome measurement in health care. ICHOM convenes an international panel of patients and physicians to develop standard patient outcome measurement sets from previously validated instruments across the spectrum of patient conditions.<sup>1</sup> This collaborative process allows for the identification of measure sets that can be used for improvement efforts and for benchmarking without getting lost in too many potential measures.</p></f>
    <f><p>ICHOM aims to create “Standard Sets” of outcome measurement for over 50% of the global disease burden by 2017. As of October 2016, they had completed 20 Standard Sets, which they calculate to account for approximately 47% of the global disease burden.<sup>2</sup></p></f>
    <f><p>For example, consider heart disease, from which Ms. Jones has recently been suffering. </p></f>
    <f><p> “The ICHOM Standard Set for Coronary Artery Disease is the result of hard work by a group of leading physicians, measurement experts and patients. It is [their] recommendation of the outcomes that matter most to persons diagnosed with Coronary Artery Disease.”<sup>3</sup></p></f>
</div>
<br>
<br>
<div class="jumbotron">
      <img src="img/m2s4img2.png" class="img-responsive center-block">
      <br>
      <br>
  <div class="container m2s4b3">
      <ol>
        <f><li><p>Includes occurrence of strokes, acute renal failure, prolonged ventilation, deep sternal wound infection, and other causes of reoperations.</p></li></f>
        <f><li><p>Includes occurrence of strokes, acute renal failure, significant dissection, perforation, vascular complications requiring intervention, bleeding event within 72 hours, and emergent CABG for failed PCI.</p></li></f>
        <f><li><p>Tracked via the Seattle Angina Questionnaire (SAQ-7)</p></li></f>
        <f><li><p>Tracked via the Rose Dyspnea Scale</p></li></f>
        <f><li><p>Tracked via the Patient Health Questionnaire (PHQ-2)</p><p>&copy; 2015 ICHOM. <a target="_blank" style="color:#000;" href="http://www.ichom.org/medical-conditions/coronary-artery-disease/">http://www.ichom.org/medical-conditions/coronary-artery-disease/</a></p></li></f>
      </ol>
  </div>
</div>


    <div class="container m2s4b2">
          <f><h4 class="text-uppercase text-center">Challenges</h4></f> 
          <f><p>PROMs and other types of patient experience data are not easy to obtain. The need to collect and track individual patient data can be burdensome and time consuming, requiring much longer periods of contact post-treatment. Including PROMs in clinical workflow, perhaps through integration into electronic health record (EHR) systems, will be key to making them pragmatic and promote widespread use. </p></f>
          <f><p>An additional challenge will be creating PROMs that are meaningful for all of the conditions that we as clinicians treat, and interpreting PROMs in the context of the multiple simultaneous conditions that so many of our patients have. The coming sections will discuss the steps being taken to meet this challenge. </p></f>
    </div>

  <div class="container bg-3">
        <hr>
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-left"  style="cursor:pointer;" >REFERENCES <i  style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>
      <div id="demo" class="collapse">
      <f><p class="text-uppercase">Manuscript</p></f>
        <ol>
          <f><li><p>ICHOM - International Consortium for Health Outcomes Measurement. ICHOM website. <a target="_blank" style="color:#f4821f;" href="http://www.ichom.org/">http://www.ichom.org/</a>. Accessed December 4, 2016.</p></li></f>
          <f><li><p>Our standard sets. ICHOM website. <a target="_blank" style="color:#f4821f;" href="http://www.ichom.org/medical-conditions/">http://www.ichom.org/medical-conditions/</a>. Accessed December 4, 2016. </p></li></f>
          <f><li><p>Coronary artery disease. ICHOM website. <a target="_blank" style="color:#f4821f;" href="http://www.ichom.org/medical-conditions/coronary-artery-disease/">http://www.ichom.org/medical-conditions/coronary-artery-disease/</a>. Accessed December 4, 2016.</p></li></f>
        </ol>
        <f><p class="text-uppercase">Animation</p></f>
        <ol>
          <f><li><p>Teisberg E, Wallace S. <em>Capability, Comfort and Calm: Designing Health Care Services for Excellence and Empathy</em> [presentation]. Cleveland, OH: Patient Experience, Empathy Innovation Summit, May 16, 2016.</p></li></f>
          <f><li><p>Lavallee DC, Chenok KE, Love RM... Incorporating patient-reported outcomes into health care to engage patients and enhance care. <em>Health Aff</em>. 2016. 35:575-582. <a target="_blank" style="color:#000;" href="http://www.ncbi.nlm.nih.gov/pubmed/?term=PMID%3A+27044954">doi:10.1377/hlthaff.2015.1362</a>.</p></li></f>
          <f><li><p>Lazar K. Timing knee and hip replacements. <em>Boston Globe</em>. June 30, 2014. <a target="_blank" style="color:#f4821f;" href="https://www.bostonglobe.com/lifestyle/health-wellness/2014/06/29/knee-and-hip-surgery-registries-yield-clues-for-more-successful-treatments/Fd48ealbP1QZHckhLMhY9L/story.html">https://www.bostonglobe.com/lifestyle/health-wellness/2014/06/29/knee-and-hip-surgery-registries-yield-clues-for-more-successful-treatments/Fd48ealbP1QZHckhLMhY9L/story.html</a>. Accessed December 11, 2016.</p></li></f>
        </ol>
      </div>        
   </div> 
<br>
<br>




    <div class="jumbotron m2s4b6"> 
       <f><h2 class="text-center">Learn More</h2></f>
       <br>
          <div class="container m2s4b7">
              <div class="row eq-h">
                <div class="col-sm-4">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-3" >
                              <img src="img/s7img7.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <f><p class="text-uppercase">article</p></f>
                                 <f><p><a target="_blank" style="color:#000;" href="http://link.springer.com/article/10.1007%2Fs11999-013-3143-z">Integrating Patient-Reported Outcomes into Orthopedic Clinical Practice: Proof of Concept from FORCE-TJR</a></p></f>
                                 <p><f>Read more about the work being done to develop and research PROMs for patients undergoing total joint replacement (TJR). The federally funded FORCE-TJR Project, led by Dr. David Ayers from the University of Massachusetts, is prospectively tracking PRMs for 30,000 patients who have undergone joint replacement surgery over the course of several years.</f></p>
                                 <p><f>Ayers, DC, Zheng, H, Franklin, PD<br>Clinical Orthopaedics and Related Research.<br>2013;471:3419-3425.</f></p> 
                            </div>
                          </div>
                       </div>
                  </div>


                </div>
                <div class="col-sm-4">
                   <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-3">
                              <img src="img/s7img7.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <f><p class="text-uppercase ">article</p></f>
                                 <f><p><a target="_blank" style="color:#000;" href="http://www.nejm.org/doi/10.1056/NEJMp1611252">Patient-Reported Outcomes—Harnessing Patients’ Voices to Improve Clinical Care</a></p></f>
                                 <p><f>Dr. Ethan Basch describes the barriers and benefits of PROMs that can be electronically reported by patients and directly fed into Electronic Health Records (EHRs) for better management of patient vitals and issues like pain management and post-surgical recovery.</f></p>
                                 <p><f>Basch, E<br>New England Journal of Medicine<br>2017;376;2:105-108</f></p>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class='well1'>
                        <div class='row vertical-align'>
                          <div class="col-sm-3">
                              <img src="img/s7img9.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                            <div class='well'>
                                <f><p class="text-uppercase ">website</p></f>
                                 <f><p><a target="_blank" style="color:#000;" href="http://www.ichom.org/files/ICHOM_Erasmus_MC_Case_Study.pdf">Implementing ICHOM’s Standard Sets of Outcomes: Cleft Lip and Palate at Erasmus University Medical Centre in the Netherlands</a></p></f>
                                 <p><f>Read about implementation of ICHOM’s Standard Sets of Outcomes through a case study conducted on cleft lip and palate in the Netherlands. They compile their study, data, and key lessons learned in their research.</f></p>
                                 <p><f>Arora J, Haj M.<br>London, UK International Consortium for Health Outcomes Measurement (ICHOM)<br>December 2016.</f></p> 
                            </div>
                               
                          </div>
                       </div>
                  </div>
                </div>
              </div>      
          </div> 
                                     
    </div>


<script> 
/*

var vid = document.getElementById("myVideo"); 
//vid.timeupdate = function() {myFunction()};
//$('#myVideo_html5_api').on('timeupdate',myFunction);
videojs('#myVideo').ready(function(){
  vid=$('#myVideo_html5_api')[0];
    $('#myVideo_html5_api').on('timeupdate',myFunction);
});
window.onload=function(){
 //vid.play(); 
 //myVideo_html5_api
//setTimeout(pauseVid, 2000);
//setTimeout(loadContent, 2020);
//vid.ontimeupdate = function() {myFunction()};

}
var palyDuration=[10,20];
var questions = new Array();
questions[0] = 'WHICH DATA POINT DO YOU THINK REPRESENTS THE UNITED STATES?';
questions[1] = 'WHAT PERCENTAGE OF THE GROSS DOMESTIC PRODUCT (GDP) DO YOU THINK HEALTH CARE REPRESENTS?';
//questions[2] = 'What is the second largest country (in size) in the world?';

var choices = new Array();
choices[0] = ['1%', '10%', '20%'];
choices[1] = ['1%', '10%', '20%'];
//choices[2] = ['USA', 'China', 'Canada', 'Russia'];

var answers = new Array();
answers[0] = ['20%'];
answers[1] = ['20%'];
//answers[2] = ['Canada'];
var IsShow=false;
var score = -1;
i= 0;

function myFunction()
{
  var currentTime=vid.currentTime;
  if(parseInt(currentTime)>= palyDuration[0] && parseInt(currentTime)< palyDuration[0]+1)
  {
  score=0;
  pauseVid();
    listQuestion(0);
  return false;
  }
  if(parseInt(currentTime)>= palyDuration[1] && parseInt(currentTime)< palyDuration[1]+1)
  { 
  
  score=1;
  pauseVid();
    listQuestion(1);
  return false;
  }
}
         
var listQuestion = function(J){  
    if(J<questions.length){
  //setTimeout(pauseVid, 1000);
  pauseVid();
        document.getElementById("myDiv1").innerHTML = questions[J];
        var choicesOutput=[];//new Array()

        for (var k=0; k<choices[J].length; k++){
            choicesOutput.push(
              '<button style="font-size:15px; font-family: GothamHTF-Medium; color:#000;" type="button" class="btn btn-success btn-sm">'+choices[J][k]+'</button>');
        }
        document.getElementById("myDiv2").innerHTML = choicesOutput.join("");

        $('button').bind( "click", btnClick);


         $('.myDiv0').show();
         //setTimeout(clear_question, 2000);        
     //setTimeout(playVid, 2020);
     i++;
     //score++;
      //setTimeout(listQuestion, 4020);            
    }
};
 
 
function btnClick(){
      var dd = this.innerHTML;
      if(dd == answers[score]) {
        $('#myDiv3').html('Correct!');
          setTimeout(playVid, 2020);
          setTimeout(listQuestion, 4020);
      } else {
          $('#myDiv3').html('Try again.');
      }
  }

function clear_question(){
      document.getElementById("myDiv1").innerHTML="";
      document.getElementById("myDiv2").innerHTML="";
      document.getElementById("myDiv3").innerHTML="";
      $('.myDiv0').hide();
}
function playVid() {      
     clear_question();
   vid.currentTime=palyDuration[score]+1;
     vid.play(); 
     
} 
function pauseVid() { 
    vid.pause(); 
} 

function vidiv(){
    if ($(window).width() > 1000) {
        $("#myVideo").each(function () {
            // $(this).find("div[class^=col-]").css("height", "auto");
            // var h = 0;
             // $(this).find("div[class^=col-]").each(function () {
             //     if (h < $(this).height()) {
             //         h = $(this).height();
             //     }
             // });
            // $(this).find("div[#myVideo]").height(h);
        });
        console.log();
}
}

*/
</script>


<footer class="container-fluid">
         
          <div class="row">
            <div class="col-sm-3 text-left NextBtn">
              <a href="?id=m2/m2s2p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 2 | Section 3</span>
                <span class="sp1"><strong>Patient Outcomes</strong></span></a>
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3  text-right NextBtn">
                <a href="?id=m2/m2s5p1"><span class="ssp2">MODULE 2 | Section 5</span>
                <span class="sp2"><strong>Using Measures Frameworks to Improve Outcomes that Matter to Patients</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>
      </footer> 
  
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
<link rel="stylesheet" href="css/m1s3p1.css">
<div class="m1s3p1">
       <div class="jumbotron b1">
         <div class="container text-center bg-2">
            <br>
         <br>         
         <div class="row">
            <div class="col-sm-12"> 
             <f><p data--duration="1.5s">MODULE 1 | Section 3</p></f>
            </div>
         </div>
          <div class="row">
            <div class="col-sm-12"> 
              <f><h2>Providing Value for Patients</h2></f></div>
            </div>
          <div class="row">
            <div class="col-sm-12">  
               <a  class="" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
            </div>
         </div>
         </div>
      </div>
      <br>
      <div class="Step1 container bg-3 text-center">
         <f><h3 class="boldT">WHAT IS VALUE FOR PATIENTS?</h3></f>
         <br>
         <f><p  class="text-left">There is general agreement among health care providers that when high-value care is consistently considered from the perspective of our patients, we can achieve the goal of delivering the best care for patients. That means focusing on outcomes that matter to patients.</p></f>
      </div>
      <br>
      <br>


  <!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content s3n1">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><f>For Example</f></h4>
        </div>
        <div class="modal-body">
          <p><f>Introducing a standardized hand-off tool and educational program to improve patient hand-offs at 9 pediatric residency programs was associated with a 23% relative reduction in the rate of all medical errors and a 30% relative reduction in the rate of preventable adverse events.</f></p>
          <p class="small"><f>Stammer AJ, Spector ND, Srivastava R, et al. <a target="_blank"  href="http://www.nejm.org/doi/full/10.1056/NEJMsa1405556#t=article">Changes in medical errors after implementation of a handoff program</a>. N Engl J Med 2014; 371:1803-1812</f></p>
        </div>
      </div>      
    </div>
  </div>



  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog"> 
      <div class="modal-content s3n2">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><f>For Example</f></h4>
        </div>
        <div class="modal-body">
          <p><f>At UCSF, a surgeon “scorecard” that provided peer-comparison feedback on surgical supply costs was associated with significantly reduced surgical supply costs, without negatively affecting patient outcomes.</f></p>
          <p class="small"><f>Zygourakis CC, Valencia V, Moriates C, et al. <a target="_blank" href="http://jamanetwork.com/journals/jamasurgery/article-abstract/2589764">Association between surgeon scorecard use and operating room costs</a>. JAMA Surg. Published online December 07, 2016.</f></p>
        </div>
      </div>      
    </div>
  </div>


  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content s3n3">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><f>For Example</f></h4>
        </div>
        <div class="modal-body">
          <p><f>In the 1970s, in-hospital mortality from acute myocardial infarction (a “heart attack”) was approximately 15%. With medical advances over the years, including coronary angioplasty and stenting, and more potent medications (such as clopidgrel (Plavix)), in-hospital mortality has been reduced to below 7%.</f></p>
          <p class="small"><f>Nabel EG and Braunwald E. <a target="_blank" href="http://www.nejm.org/doi/full/10.1056/NEJMra1112570#t=article">A tale of coronary artery disease and myocardial infarction</a>. N Enlg J Med 2012; 366:54-63.</f></p>
        </div>
      </div>      
    </div>
  </div>


  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content s3n4">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><f>For Example</f></h4>
        </div>
        <div class="modal-body">
          <p><f>A program at Stanford that reduced red blood cell transfusions by 24% saved approximately $1.6 million annually in purchasing costs alone and was associated with significantly improved patient mortality, average length of stay, and 30-day readmissions.</f></p>
          <p class="small"><f>Anthes E. <a target="_blank" href="http://www.nature.com/news/evidence-based-medicine-save-blood-save-lives-1.17224">Evidence-based medicine: save blood, save lives</a>. Nature 520, 24–26, 2015.</f></p>
        </div>
      </div>      
    </div>
  </div>


      <div class="jumbotron b2">
               <!-- <div class="tint"></div> -->
               <div class="container">                 
                    <img src="img/s3img3.png" class="img-responsive center-block img1">
                <hr>
                <f><h4 class="text-center">WE CAN IMPROVE VALUE BY:</h4></f>
                <div class="row">
                  
                  <div class="col-sm-3 text-center">
                    <div class="panel-footer text-center" data-toggle="modal" data-target="#myModal1" style="cursor:pointer;">
				        	<img class="imagBot" src="img/Mod1Sec3_1.png" style="width: 50%;"/>
                      <!-- <f><div class="numberCircle s3n1 center-block" data-toggle="modal" data-target="#myModal1"><span>1</span></div></f> -->
                        <f><p>Improving outcomes for patients without raising costs</p></f>
                    </div>
                  </div>

                  <div class="col-sm-3 text-center">
                    <div class="panel-footer" data-toggle="modal" data-target="#myModal2" style="cursor:pointer;">
					<img  class="imagBot" src="img/Mod1Sec3_2.png" style="width: 50%;"/>
                       <!-- <f><div class="numberCircle s3n2  center-block"  data-toggle="modal" data-target="#myModal2"><span>2</span></div></f> -->
                        <f><p>Maintaining good outcomes while decreasing costs</p></f>
                    </div>                         
                  </div>
                  <div class="col-sm-3 text-center">   
                    <div class="panel-footer" data-toggle="modal" data-target="#myModal3" style="cursor:pointer;">   
                     <img  class="imagBot" src="img/Mod1Sec3_3.png" style="width: 50%;"/>					
                     <!-- <f><div class="numberCircle s3n3  center-block"  data-toggle="modal" data-target="#myModal3"><span>3</span></div></f>  -->
                      <f><p>Improving outcomes dramatically for a smaller increase in costs</p></f> 
                    </div>                       
                  </div>
                   <div class="col-sm-3 text-center">
                      <div class="panel-footer" data-toggle="modal" data-target="#myModal4" style="cursor:pointer;">   
                      <img class="imagBot" src="img/Mod1Sec3_4.png" style="width: 50%;" />					  
                       <!-- <f><div class="numberCircle s3n4  center-block"  data-toggle="modal" data-target="#myModal4"><span>4</span></div></f>  -->
                        <f><p>Improving outcomes for patients AND decreasing costs simultaneously</p></f>                      
                      </div>  
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    <f><p style="color:#2cb69d;">Click on each strategy to see an example.</p></f>
                  </div>
                </div>
                <hr>
              <div class="bg-4">
              <f><p>This requires us to be dedicated to measurement and to achieving outcomes that matter to our patients. And yes, it means we also must consider and address costs.</p></f> 
                <f><p>Each of these goals is complicated, and there are many intricacies involved in considering these measures for health care. We will delve into this topic in much more detail in the following modules.</p></f>
                <br>
                <br>
            </div>
            </div>
            <br>
     </div>
     <br><br>
     <br>
     <div class="container bg-3 text-center">
         <f><h3 class="boldT">A LOT OF BUCKS, NOT A LOT OF BANG:<br> THE HEALTH CARE COST AND QUALITY CRISIS</h3></f>
      </div>
      <br>
      <br>


<div id="b1" class="container">
         <div class="row">
           <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <style type="text/css">
			  
              .video-point{
                width: 20px;
                height: :30px;
                background-color: transprant;
                z-index: 2;
                position: absolute;
                 border-radius: 60px;
         cursor:pointer;
              }
              #skp1{
                  top: 37%;
text-align: center;
position: relative;
color: white;
/*left: 35px;*/
font-size: 13px;
              }
              #skid2{
                top: 44%;
text-align: center;
position: relative;
color: white;
font-weight: bold;
font-size: 24px;
              }
              #skp3
              {
                top: 26.5%;
                left: 35.5%;
              }
              #skp4{
                  top: 30%;
                  left: 34.5%;
              }
              #skp5
              {
             top: 26%;
left: 53.5%;
              }
              #skp6
              {
               top: 43%;
left: 37%;
              }
              #skp7
              {
                top: 44.5%;
left: 46.5%;
              }
              #skp8{
                  top: 47%;
left: 45.5%;
              }
              #skp9{
                top: 54%;
left: 35.5%;
              }
              #skp10{
             top: 69%;
left: 77%;
              }
			  
			  #myDiv3, #vsk1{
			  margin-top:18px;
			  }
			 
			  @media(max-width:483px){
			  	  #myDiv1{
			  margin-top:5px;
			  font-size:9px;
			  }
			  #vsk1{
			  margin-top:0px;
			  }
			  #myDiv3
			  {
			  font-size:15px !important;
			  margin-top:-8px;
			  }
			  }
              </style>

               <div class="videocontent">
          <div class="col-md-12 col-sm-12 col-xs-12" id="skdiv" style="background-color:transprant;height:100%;position:absolute;margin-top:0px;margin-left:0px;z-index:1;display:none;">
                <p id="skp1">WHICH DATA POINT DO YOU THINK REPRESENTS<br> THE UNITED STATES?</p>

                <p onclick="checkPlay2()" id="skid2"></p>
                 <p onclick="checkPlay2()" id="skp3" class="video-point" data-toggle="popover" data-placement="top" title="JAPAN">&nbsp;</p>
                 <p onclick="checkPlay2()" id="skp4" class="video-point" data-toggle="popover" data-placement="bottom" title="SPAIN">&nbsp;</p>
                 <p onclick="checkPlay2()" id="skp5" class="video-point" data-toggle="popover" data-placement="right" title="SWITZERLAND">&nbsp;</p>
                 <p onclick="checkPlay2()" id="skp6" class="video-point" data-toggle="popover" data-placement="left" title="UNITED KINGDOM">&nbsp;</p>
                 <p onclick="checkPlay2()" id="skp7" class="video-point" data-toggle="popover" data-placement="top" title="CANADA">&nbsp;</p>
                 <p onclick="checkPlay2()" id="skp8" class="video-point" data-toggle="popover" data-placement="bottom" title="GERMANY">&nbsp;</p>
                 <p onclick="checkPlay2()" id="skp9" class="video-point" data-toggle="popover" data-placement="bottom" title="OECD AVERAGE">&nbsp;</p>
                 <p class="video-point" id="skp10" onclick="checkPlay()" data-toggle="popover" data-placement="top" title="UNITED STATES">&nbsp;</p>
           </div>
         
               <video id="myVideo" class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264"  poster="https://s3.amazonaws.com/dell-med/Mod1_Sec3.jpg" controls data-setup='{"fluid": true}'>
                <source src="https://s3.amazonaws.com/dell-med/Mod1_Sec3.mp4" type="video/mp4"></source>
                 <source src="https://s3.amazonaws.com/dell-med/Mod1_Sec3.webm" type="video/webm"></source>
                 <source src="https://s3.amazonaws.com/dell-med/Mod1_Sec3.ogv" type="video/ogv"></source>  
                 <track label="English" kind="subtitles" srclang="en" src="VTT/Mod1_Sec3.vtt" default>
               </video>
               
        <div class="row  myDiv0 vertical-align">
          <div class="col-sm-12">
           <div class="row">
                <div id="myDiv1" class="col-sm-12 text-center"></div>
            </div>
            <div class="row">
                <div id="myDiv2" class="col-sm-12 text-center"></div>
            </div>
             <div class="row">
                <div id="myDiv3" class="col-sm-12 text-center">&nbsp;</div>
            </div>
          </div>
        </div> 
      </div>  

            </div> 
            <div class="col-sm-2"></div>          
         </div>
      </div>
        <br>
        <br>
        <br>

       <div class="container bg-3 text-center">
        <f><p class="text-left">In that statement (2011), Dr. Berwick makes the strongest argument for the goal of improving value for patients. Improving value requires us to attend to <em>both</em> outcomes and costs. Efforts based on the primary goal of improving efficiency have not achieved enough. Health care costs are still too high in 2017, and it is ever-clearer that value for patients, that is, outcomes achieved for the money spent, needs to define the true north of clinicians’ efforts.</p></f>
        <f><p class="text-left">Better outcomes reduce costs. Whenever we prevent or slow disease progression, get the right diagnosis (the first time), improve outcomes in ways that reduce the need for repeated care, reduce disability, improve effectiveness of treatments, reduce invasiveness of treatments, or reduce wasteful and redundant treatments, we are reducing the costs associated with health care. Health care waste is anything that does not add value for the patient. This includes tests, medications, and procedures that are not making people healthier.</p></f>
        <f><p class="text-left">Remember our obligation to “First, Do No Harm”!</p></f>
        <br>
        <hr>        
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;">REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>
        <ol id="demo" class="collapse">
            <f><li class="text-left"><p>Porter ME and Teisberg EO. <em>Redefining Health Care: Creating Value-Based Competition on Results</em>. Boston, MA: Harvard Business Press; 2006.</p></li></f>
            <f><li class="text-left"><p>High value care. American College of Physicians website. <a style="color:#f4821f;" target="_blank" href="https://www.acponline.org/clinical-information/high-value-care?utm_medium=referral&utm_source=r360">https://www.acponline.org/clinical-information/high-value-care?utm_medium=referral&utm_source=r360</a>. Accessed November 30, 2016.</p></li></f>

            <f><li class="text-left"><p>Committee on the Learning Health Care System in America; Institute of Medicine. Achieving and rewarding high-value care. In: Smith M, Saunders R, Stuckhardt L, et al., eds. <em>Best Care at Lower Cost: The Path to Continuously Learning Health Care in America</em>. Washington,DC: National Academies Press (US); 2013. <a class="dont-break-out" style="color:#f4821f; overflow-wrap: break-word;word-wrap: break-word;" target="_blank" href="https://www.ncbi.nlm.nih.gov/books/NBK207237/?utm_medium=referral&utm_source=r360">https://www.ncbi.nlm.nih.gov/books/NBK207237/?utm_medium=referral&utm_source=r360</a>. Accessed November 30, 2016    </p></li></f>

            <f><li class="text-left"><p>Moriates C, Arora V, Shah N. <em>Understanding Value-Based Healthcare</em>. Columbus, OH: McGraw-Hill Education; 2015.</p></li></f>
            <f><li class="text-left"><p>Institute for Healthcare Improvement. “<a target="_blank" style="color:#f4821f;" href="http://app.ihi.org/tv/#video=476a0a6f-a9fa-490d-b335-b09dffa94b14">Picker Award Presentation to Donald Berwick, MD, MPP</a>.” 23rd Annual National Forum on Quality Improvement in Health Care, December 2011.</p></li></f>
        </ol>
   </div>   
</div>

<script> 



var vid = document.getElementById("myVideo"); 
//vid.timeupdate = function() {myFunction()};
//$('#myVideo_html5_api').on('timeupdate',myFunction);
videojs('#myVideo').ready(function(){
  vid=$('#myVideo_html5_api')[0];
    $('#myVideo_html5_api').on('timeupdate',myFunction);
});

var palyDuration = [10,20];
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
  var CT=parseInt(vid.currentTime);
  if(CT>= 24 && CT < 25 && IsShow == false)
  {
      score=0;
      IsShow=true;
      pauseVid();
      listQuestion(0);
  }
  if(CT== 46 && IsShow == false)
  { 
      score=1;
      IsShow=true;
      pauseVid();
      listQuestion(1);
  }
}
         
var listQuestion = function(J){  
    if(J<questions.length){
        pauseVid();
        document.getElementById("myDiv1").innerHTML = questions[J];
        var choicesOutput='<div class="row" id="vsk1">';//new Array()
        var loc1 = shuffleArray(choices[J]);
        for (var k=0; k<loc1.length; k++){
            choicesOutput+=
              '<div class="col-sm-4"><button style="font-family: GothamHTF-Medium; color:#000;" type="button" class="btn btn-success btn-sm btSize">'+choices[J][k]+'</button></div>';
        }
        choicesOutput+='</div>';
    if(score==0)
    {
      $('.myDiv0').css({'display':'block','z-index':'-1'});
         $('#skdiv').css({'display':'block'});
    }
      if(score==1)
    {
        document.getElementById("myDiv2").innerHTML = choicesOutput;
      $('.myDiv0').css({'display':'block','z-index':'1'});
    }
    
        $('button').bind( "click", btnClick);
        $('.myDiv0').css({'display':'inline-flex'});
        i++;            
    }
};
 
 
function btnClick(){
      var dd = this.innerHTML;
      if(dd == answers[score]) {
        $('#myDiv3').html('Correct!');
          setTimeout(playVid, 2020);
      } else {
          $('#myDiv3').html('Try again.');
      }
  }

function clear_question(){
      document.getElementById("myDiv1").innerHTML="";
      document.getElementById("myDiv2").innerHTML="";
      document.getElementById("myDiv3").innerHTML="&nbsp;";
      $('.myDiv0').css({'display':'none'});
}
function playVid() {      
    clear_question();
    IsShow=true;
    vid.play(); 
    setTimeout(function(){IsShow=false;}, 2000);
} 
function pauseVid() { 
    vid.pause(); 
} 

function checkPlay()
{
         $('#skid2').html('Correct!');
         setTimeout(checkPlay1, 2020);
}
function checkPlay2()
{
  $('#skid2').html('Try Again!');
}
function checkPlay1()
{
          playVid();
          $('#skdiv').css({'display':'none'});
		  $(".video-point").css("background-color","transprant");
		  $('#skid2').html('');
		  $('.video-point').popover('hide');
}
$(".video-point").click(function(){
$('.video-point').popover('hide');
$(".video-point").css("background-color","transprant");
if($(this).attr("id")=="skp10")
{
$(this).css("background-color","green");
}
else
{
$(this).css("background-color","red");
}
});
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


<footer class="container-fluid">         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="#" onclick="window.location='?id=m1/m1s2p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 1 | Section 2</span>
                <span class="sp1"><strong>Story from the Frontlines</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
               <a href="#" onclick="window.location='?id=m1/m1s4p1'"><span class="ssp2">MODULE 1 | Section 4</span>
                <span class="sp2"><strong>How Big of a Problem is Healthcare Waste?</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>

 <div class="col-md-12 col-sm-12 col-xs-12">            
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
              <div class="col-md-2 col-sm-4 col-xs-4">
                <a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="img/CC.png" width="auto" height="auto"></a>
              </div>
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
          </div>
          
      </footer> 

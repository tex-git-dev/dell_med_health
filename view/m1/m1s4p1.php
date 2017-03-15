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


<link rel="stylesheet" href="css/m1s4p1.css">
<div class="m1s4p1">
       <div class="jumbotron s4b1">
         <div class="container text-center bg-2">         
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12"> 
             <f><p data--duration="1.5s">MODULE 1 | Section 4</p></f>
            </div>
         </div>
          <div class="row">
            <div class="col-sm-12"> 
              <f><h2>How Big of a Problem is Health Care Waste?</h2></f></div>
            </div>
          <div class="row">
            <div class="col-sm-12">  
               <a  class="wow fadeInDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a>
            </div>
         </div>
         </div>
      </div>
      
      <div class="Step1 jumbotron bg-3 text-center">
         <f><p><span class="text-uppercase">Health care waste</span> is anything we do in health care that does not make people healthier.</p></f>
     </div>

            <div class="jumbotron m4b2 text-center">
              <div class="container">                                          
                <div class="row">
                    <div class="col-sm-12"><f><p>When people have to decide between gas in the car, food on the table, and a prescription, they will skip the prescription.</p></f><br><br></div>
                    <f><div class="col-sm-12" style="font-family: GothamHTF-Medium;">– Anita, Austin TX</div></f>
                 </div>
              </div>
            </div>                        

            <div class="jumbotron m4b3 text-left">
               <div class="container">  
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10"><f><p>Health care in the United States is fraught with complexity, fragmentation, inefficiency, unexplained variation, and waste. The sobering reality is that more than one-third of health care delivered today may not make people healthier, and a substantial portion of that unnecessary care may in and of itself cause harm.</p></f></div>
                  <div class="col-sm-1"></div>
                </div>
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10"><f><p>This may paint a bleak picture of the current state of affairs in health care and the resultant “value shortfall.” Indeed, the system may be sick, but it is not yet terminal. We can do better. We must do better. In order to make care more affordable, safer, and more convenient, we will need to understand the root causes of our system shortfalls, recognize waste, and learn new methods of care delivery.</p></f></div>
                  <div class="col-sm-1"></div>
                </div>
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10"><f><p>Warren Buffett, the famous American businessman, investor, and philanthropist, has likened health care costs to “a tapeworm eating at our economic body” because national health care expenditures, particularly those that are considered waste, divert major resources from other important domestic priorities, such as education, infrastructure (roads, railroads, and bridges), basic research, and other public goods. It drags down our global competitiveness in business, and thwarts social programs to support small businesses.</p></f></div>
                  <div class="col-sm-1"></div>
                </div>
               </div>
           </div>
<br>
    <div class="container videoF">
         <div class="row">           
         <div class="col-sm-2"></div> 
            <div class="col-sm-8">
               <div class="videocontent">
                <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="media/M1_41.png" preload="auto" data-setup='{"fluid": true}'>
                  <source src="media/M1_41.mp4" type="video/mp4"></source>
                  <source src="media/M1_41.webm" type="video/webm"></source>
                  <source src="media/M1_41.ogv" type="video/ogg"></source>
                  <track kind="subtitles" src="" srclang="en" label="English"  default/>
               </video>
               </div>  
            </div>
             <div class="col-sm-2"></div>
         </div>
      </div>


<!-- fro MCQ -->
   <div class="container-full s4scatterplot">    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>
            <li data-target="#myCarousel" data-slide-to="2" ></li>    
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">Approximately what percentage of total health care dollars spent are wasted every year?</p></f>

                                <div class="row">
                                <div class="col-sm-12" >
                                    <div class="row eq-h">
                                        <div class="col-sm-4">
                                            <f><div class="ans" onclick="checkAnswer(this, false);">5%</div></f>
                                        </div>
                                        <div class="col-sm-4">
                                            <f><div class="ans" onclick="checkAnswer(this, false);">15%</div></f>
                                        </div>
                                        <div class="col-sm-4">
                                            <f><div class="ans" onclick="checkAnswer(this, true);">30%</div></f>
                                        </div>
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
                                    <f><p class="text-muted">Question 1 of 3</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn">Try again</div></center>
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

            <div class="item">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-1" ></div>
                            <div class="col-sm-10" >
                                <f><p class="ques">Health care costs directly affect...</p></f>

                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                        <div class="col-sm-3">
                                            <f><div class="ans"  onclick="checkAnswer(this, false);">individuals</div></f>
                                        </div>
                                        <div class="col-sm-3">
                                            <f><div class="ans" onclick="checkAnswer(this, false);">employers</div></f>
                                        </div>
                                        <div class="col-sm-3">
                                            <f><div class="ans" onclick="checkAnswer(this, false);">national budgets</div></f>
                                        </div>
                                        <div class="col-sm-3">
                                            <f><div class="ans" onclick="checkAnswer(this, true);">all of the above</div></f>
                                        </div>
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
                                    <f><p class="text-muted">Question 2 of 3</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <f><p><!-- This is the correct answer because this diagnosis (ICD9 code) has the lowest mean cost, represented as the smallest value on the x-axis. --></p></f>
                                    <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
                                </div>
                            </div>

                            </div>
                            <div class="col-sm-1" ></div>
                            


                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-1" ></div>
                            <div class="col-sm-10" >
                                <f><p class="ques">The next section will discuss causes of health care waste. Based on your experience and what you have learned thus far, what do you think is the largest contributor to health care waste?</p></f>
                                <div class="row ">
                                <div class="col-sm-12" >
                                    <div class="row eq-h">
                                        <div class="col-sm-3">
                                            <f><div class="ans" onclick="checkAnswer(this, false);">fraud</div></f>
                                        </div>
                                        <div class="col-sm-3">
                                            <f><div class="ans" onclick="checkAnswer(this, true);">unnecessary services</div></f>
                                        </div>
                                        <div class="col-sm-3">
                                            <f><div class="ans" onclick="checkAnswer(this, false);">exorbitant prices</div></f>
                                        </div>
                                        <div class="col-sm-3">
                                            <f><div class="ans" onclick="checkAnswer(this, false);">executive and physician salaries</div></f>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 sign" >
                                     
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                
                                </div>
                            </div>
                             <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 3 of 3</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                    <center><div class="msgBtn">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Correct!</h3></f>
                                    <f><p><!-- This is the correct answer because there are a total of nine bubbles on the chart, each representing one physician. --></p></f>
                                    <!-- <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question  <i class="fa fa-arrow-right" aria-hidden="true"></i> </div></center> -->
                                </div>
                            </div>





                            </div>
                            <div class="col-sm-1" ></div>
                           
                        </div>
                    </div>
                </div>
            </div>


              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                      </a>

        </div>
    </div>
</div>


<!-- fro MCQ -->
  <br><br>
  <hr>

   <div class="container text-left">               
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-uppercase">Animation References <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>
        <ol id="demo" class="collapse">
            <f><li><p>Kliff S. We spend $750 billion on unnecessary health care. Two charts explain why. <i>The Washington Post</i>. September 7, 2012. <a target="_blank" style="color:#f4821f;" href="https://www.washingtonpost.com/news/wonk/wp/2012/09/07/we-spend-750-billion-on-unnecessary-health-care-two-charts-explain-why/?utm_term=.e5adb91a0346">https://www.washingtonpost.com/news/wonk/wp/2012/09/07/we-spend-750-billion-on-unnecessary-health-care-two-charts-explain-why/?utm_term=.e5adb91a0346</a>. Accessed November 30, 2016.</p></li></f>
	    <f><li><p>Institute of Medicine. Committee on the Learning Health Care System in America. <i>Best Care at Lower Cost : The Path to Continuously Learning Health Care in America</i>. Washington, D.C.: National Academies Press; 2012.</p></li></f>
            <f><li><p>The National Academies of Science, Engineering, and Medicine. What's possible for healthcare? Infographic. National Academies website. Revised March 13, 2013. Accessed February 15, 2017</p></li></f>
        </ol>
   </div> 




     </div>

     
<footer class="container-fluid">
         
          <div class="row">
            <div class="col-sm-3 text-left NextBtn">
              <a href="?id=m1/m1s3p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 1 | Section 3</span>
                <span class="sp1"><strong>Providing Value for Patients</strong></span></a>
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3  text-right NextBtn">
                <a href="?id=m1/m1s5p1"><span class="ssp2">MODULE 1 | Section 5</span>
                <span class="sp2"><strong>Unnecessary Waste</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>
      </footer> 

<script>


function checkAnswer(obj, f) {
        $(".ans").removeClass("selectedAns");
        $(".white").removeClass("correct incorrect");
        if (f === true) {
            $(obj).addClass('selectedAns').parents('.white').addClass('correct');
        } else {
            $(obj).addClass('selectedAns').parents('.white').addClass('incorrect');
        }
    }

$(document).ready(function(){
     $('.video-js').inview({
        'onEnter': function($object) {
            $('video').trigger('play');
          },
          'onLeave': function($object) {
            $('video').trigger('pause');
          }

      });
  });






</script>
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
<link rel="stylesheet" href="css/m2s6p1.css">
<div class="m2s6p1">
       <div class="jumbotron b1">
         <div class="container text-center bg-2">
            <br>
         <br>         
         <div class="row">
            <div class="col-sm-12"> 
             <f><p data--duration="1.5s">MODULE 2 | Section 6</p></f>
            </div>
         </div>
          <div class="row">
            <div class="col-sm-12"> 
              <f><h2>Comparing Outcomes of Different Treatment Strategies</h2></f></div>
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

      <div class="Step1 container m2s6b2 ">
          <f><h3 class="text-uppercase text-center">Making Decisions Using Data From Different Outcomes</h3></f>
          <br>
          <f><p>Radar charts allow multiple health care stakeholders, most notably physicians and their patients, to compare possible strategies across multiple relevant dimensions including cost and outcomes. Watch the video to learn more.</p></f>
      </div>      
      
<div class="container-full m2s6b2">          
      <div  class="container text-center m2s6bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="https://s3.amazonaws.com/dell-med/Mod2_Sec6.jpg" preload="auto" data-setup='{"fluid": true}'>
                  <source src="https://s3.amazonaws.com/dell-med/Mod2_Sec6.mp4" type="video/mp4"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod2_Sec6.webm" type="video/webm"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod2_Sec6.ogv" type="video/ogg"></source>
                   <track kind="subtitles" src="" srclang="en" label="English"  default/>
               </video>
            </div>
         </div>
         <div class="col-sm-2"></div>
      </div>
    </div>
</div>
<br>




<!-- Mcq start -->

<div class="container-full s6scatterplot m2s6b4">    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>            
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" id="0">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">How does the size of a ring in a radar chart correspond to the performance of a treatment in achieving patient outcomes?<!-- <br><img src="img/m2s6q1.png" class="img-responsive center-block"> --></p></f>


                                <div class="row">
                                <div class="col-sm-12" >
                                    <div class="row eq-h">

                                      <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('Smaller rings indicate higher performance.', 'Larger rings indicate higher performance.', 'Ring size does not correlate to performance.');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(false, false, true);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "Larger rings indicate higher performance." ? 1 : 0;
                                                echo '<div class="col-sm-4">
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
                                    <f><p class="text-muted">Question 1 of 2</p></f>
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
                        <div class="col-sm-1" ></div>
                            <div class="col-sm-10" >
                                <f><p class="ques">Select the thumbnail to expand. According to this radar chart, if Ms. Jones stated that minimizing cost was her biggest priority, would you more likely recommend a PCI+OMT or OMT-only treatment plan?<br><img src="img/m2s6q1.png" class="img-responsive center-block" style="width:15%; cursor:pointer;" data-toggle="modal" data-target="#myModal"></p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">

                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('PCI+OMT', 'OMT only', 'Neither treatment significantly reduces cost.');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(false, false, false, true);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "OMT only" ? 1 : 0;
                                                echo '<div class="col-sm-4">
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
                                    <f><p class="text-muted">Question 2 of 2</p></f>
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
                                    <f><p><!-- This is the correct answer because this diagnosis (ICD9 code) has the lowest mean cost, represented as the smallest value on the x-axis. --></p></f>
                                  <!--   <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <i class="fa fa-arrow-right" aria-hidden="true"></i></div></center> -->
                                </div>
                            </div>

                            </div>
                            <div class="col-sm-1" ></div>
                        </div>
                    </div>
                </div>
              </div>

                  <a class="left carousel-control m2s6b7" href="#myCarousel" role="button" data-slide="prev" style="display:none;">
                    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                  </a>
                  <a class="right carousel-control m2s6b7" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                  </a>

        </div>
    </div>
</div>



  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">          
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select the thumbnail to expand. According to this radar chart, if Ms. Jones stated that minimizing cost was her<br> biggest priority, would you more likely recommend a PCI+OMT or OMT-only treatment plan?</h4>
        </div>
        <div class="modal-body">
          <img src="img/m2s6q1.png" class="img-responsive center-block">
        </div>       
      </div>
      
    </div>
  </div>

<!-- Mcq end -->

<br>

<div class="jumbotron m2s6b3">
      <f><h3 class="text-uppercase text-center">Additional Resources</h3></f>
      <br>
      <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10"><f><p><!--  Radar charts allow multiple health care stakeholders, most notably physicians and their patients, to compare possible strategies across multiple relevant dimensions including cost and outcomes. --> Explore the method and impact of using radar charts further and consider their practical application and implications for patient care. Kaplan, RS, Blackston, RP, Haas, DA, et al. Measuring and communicating health care value with charts. Harvard Bus Rev. 2015. <a target="blanck" style="color:#f4821f;" href="https://hbr.org/2015/10/measuring-and-communicating-health-care-value-with-charts">https://hbr.org/2015/10/measuring-and-communicating-health-care-value-with-charts</a>. Accessed December 4, 2016.</p></f></div>
          <div class="col-sm-1"></div>
      </div>
</div>
<br>
      <div class="container m2s6b5">
        <hr>
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;">REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>        
      <div id="demo" class="collapse">
        <ol>
          <f><li><p>Kaplan, RS, Blackston, RP, Haas, DA, et al. Measuring and communicating health care value with charts. <em>Harvard Bus Rev</em>. 2015. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="https://hbr.org/2015/10/measuring-and-communicating-health-care-value-with-charts">https://hbr.org/2015/10/measuring-and-communicating-health-care-value-with-charts</a>. Accessed December 4, 2016.</p></li></f>
          <f><li><p>Boden WE, O’Rourke RA, Teo KK, et al. Optimal medical therapy with or without PCI for stable coronary Disease. <em>New Engl J Med</em>. 2007;365(15):1503-1516. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1056/NEJMoa070829">10.1056/NEJMoa070829</a>.</p></li></f>
          <f><li><p>Weintraub WS, Spertus JA, Kolm PK, et al. Effect of PCI on quality of life in patients with stable coronary disease. <em>New Engl J Med</em>. 2008;359(7):677-687. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1056/NEJMoa072771">10.1056/NEJMoa072771</a>.</p></li></f>
          <f><li><p>Sedlis, SP, Jurkovitz, CT, Hartigan, PM, et al. Health status and quality of life in patients with stable coronary artery disease and chronic kidney disease treated with optimal medical therapy or percutaneous coronary intervention (Post Hoc Findings from the COURAGE Trial). <em>Am J Cardiol</em>. 2013;112(11):1703-1708. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1016/j.amjcard.2013.07.034">10.1016/j.amjcard.2013.07.034</a>.</p></li></f>
          <f><li><p>Weintraub, WS, Boden, WE, Zhang, Z, et al. Cost-effectiveness of percutaneous coronary intervention in optimally treated stable coronary patients. <em>Circ Cardiovasc Qual Outcomes</em>. 2008;1(1):12-20. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1161/CIRCOUTCOMES.108.798462">10.1161/CIRCOUTCOMES.108.798462</a>.</p></li></f>
          <f><li><p>Acharjee S, Teo KK, Jacobs, AK, et al. Optimal medical therapy with or without percutaneous coronary intervention in women with stable coronary disease: A pre-specified subset analysis of the Clinical Outcomes Utilizing Revascularization and Aggressive druG Evaluation (COURAGE) trial. <em>Am Heart J</em>. 2016;173:108-17. March 2016. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1016/j.ahj.2015.07.020">10.1016/j.ahj.2015.07.020</a>.</p></li></f>
        </ol>
      </div>        
   </div>


</div>

<footer class="container-fluid">         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="?id=m2/m2s5p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 2 | Section 5</span>
                <span class="sp1"><strong>Using Measures Frameworks to Improve Outcomes</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="?id=m2/m2s7p1"><span class="ssp2">MODULE 2 | Section 7</span>
                <span class="sp2"><strong>Care Redesign Case: UNOS</strong></span>
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
          }else if(id == 1){
            $('.left').show();
            $('.right').hide();
          } 
      });

function TryA(){
      $('.item.active div').removeClass("incorrect").removeClass("selectedAns");
      $('.item .ans').removeClass('Dis')

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
        

$(document).ready(function(){
  var flagvd = false;
     $('.video-js').inview({
        'onEnter': function($object) {
          if(flagvd == false){
            $('video').trigger('play');
            flagvd=true;
          }           

          },
          'onLeave': function($object) {
            //$('video').trigger('pause');
          }

      });
  });

</script>
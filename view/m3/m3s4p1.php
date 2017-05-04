<?php
   if(!$_SESSION['username']){
    ?>
<script>
   window.location.href="<?php echo pathUrl();?>";
</script>
<?php
   }
include("db.php");
include("view/cjs.php");
$c5 = "select * from records WHERE email NOT IN ('".$_SESSION['username']."')";
$retval1=mysqli_query($dbcon,$c5);
while($row = mysqli_fetch_row($retval1)) {
    $s2data = json_decode($row[7],true);
    $dataT1 = $s2data['m2']['sections']['s2']['response1'];
    $dataN1 = $row[2]." ". $row[3];
    $dataT = $s2data['m2']['sections']['s2']['response2'];
    $dataN = $row[2]." ". $row[3];
    if ($dataT) {
?>
<script type="text/javascript">
    app.cArrayT.push("<?php echo $dataT;?>");
    app.cArrayN.push("<?php echo $dataN;?>");
</script>
<?php } 
if ($dataT1) {
?>
<script type="text/javascript">
    app.cArrayT1.push("<?php echo $dataT1;?>");
    app.cArrayN1.push("<?php echo $dataN1;?>");
</script>
 
<?php }}?>
<script type="text/javascript">
$(document).ready(function() {
      var section = 's'+app.qs["id"][6];
      var loc0 = app.MData[app.SelecteM].sections[section];
      if (loc0.response1) {
        app.response1();
      }
    
      if (loc0.response2) {
        app.response2();
      }

      $('#myCarousel2').bind('slid.bs.carousel', function (e) {
        app.showRM();
      });
});
window.onresize = function(){app.showRM();};
  app.addOpt=function(id,len){
  var sizeC = Math.ceil(len/3); 
  if (sizeC>1) {
    var circleList='<li data-target="#'+id+'" data-slide-to="0" class="active"></li>';
    for (var i = 1; i <sizeC; i++) {
      circleList+='<li data-target="#'+id+'" data-slide-to="'+i+'"></li>';
    }
    $('#'+id+' .carousel-indicators').append(circleList);
  }else{
     $('#'+id+' .left').hide();
    $('#'+id+' .right').hide();
  }
}

   app.response1 = function(){
      var loc = $("#response1Text").val();
        var section = 's'+app.qs["id"][6];
      if (loc) {
        app.MData[app.SelecteM].sections[section]['response1'] = loc;
        var data = JSON.stringify(app.MData);
        var loc_1 = {email:"<?php echo $_SESSION['username'];?>",MData:data};
        app.DataSave(loc_1);
        app.cArrayT1.unshift(loc);
        app.cArrayN1.unshift('<?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?>');
      }else{
        loc =app.MData[app.SelecteM].sections[section]['response1'];
        app.cArrayT1.unshift(loc);
        app.cArrayN1.unshift('<?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?>');
      }

      if (loc == "") {
        alert("Please write the response.")
       }else{
         app.addOpt('myCarousel1',app.cArrayT1.length);
        $(".act1").hide();
        $(".carouselC1").css({"visibility":"visible","height":"auto"});
         var items="";
         var t =0;
          var sizeC = Math.ceil(app.cArrayT1.length/3); 

          if(sizeC > 6)
          {
            sizeC=6;
          }
          
        for (var i = 1; i < sizeC+1; i++) {
            var f = "";
            if(i == 1){
              f = "active";
            }else{
              f = "";
            }
           items += '<div class="item '+f+'"><div class="row">';
             for (var j = 1; j < 4; j++) {
                  var T0 = app.cArrayT1[t];
                  var N0 = app.cArrayN1[t];
                  console.log(T0)
                  t++;
                    if(T0 != undefined){
                      items += '<div class="col-sm-4"><div class="well text-left small"><div class="iHeight"><span>';
                      items += T0;
                      items += '</span></div><a href="javascript:app.pup1('+t+');">Read more<br></a><br><span>';
                      items += '<i class="fa fa-user-circle fa-3x" aria-hidden="true"></i> ';
                      items += '<span class="text-uppercase" style="color:#000;"> '+N0+'</span>';
                      items += '</span>';
                      items += '</div></div>';
                    }
             }
           items += '</div></div>';
        } 
        $(".carouselC1 .additem").append(items);
        app.showRM();
      }
   }
app.doneResizing= function(e){
  $('.jqcloud').html('');
   var lo1 = JSON.parse(JSON.stringify(app.WCList1));
 app.WordC(lo1,'my_favorite_latin_words');
 $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});
}
app.pup1= function(v){
  var loc =  $(".carouselC1 .iHeight").eq(v-1).text();
   var name =  $(".carouselC1 .iHeight").eq(v-1).next().next().next().text();
    $('.m3s4p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m3s4p1 #mc1 .modal-content #name').html(name);
}
app.pup2= function(v){
  var loc =  $(".carouselC .iHeight").eq(v-1).text();
   var name =  $(".carouselC .iHeight").eq(v-1).next().next().next().text();
    $('.m3s4p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m3s4p1 #mc1 .modal-content #name').html(name);
}

app.response2 = function(){
     var loc = $("#response2Text").val();
      var section = 's'+app.qs["id"][6];
      if (loc) {
          app.MData[app.SelecteM].sections[section]['response2'] = loc;
          var data = JSON.stringify(app.MData);
          var loc_1 = {email:"<?php echo $_SESSION['username'];?>",MData:data};
          app.DataSave(loc_1);
          app.cArrayT.unshift(loc);
          app.cArrayN.unshift('<?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?>');
      }else{
        loc =app.MData[app.SelecteM].sections[section]['response2'];
        app.cArrayT.unshift(loc);
        app.cArrayN.unshift('<?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?>');
      }
      if (loc == "") {
        alert("Please write the response.")
       }else{
         app.addOpt('myCarousel2',app.cArrayT.length);
        $(".act2").hide();
        $(".carouselC").css({"visibility":"visible","height":"auto"});
         var items="";
         var t =0;
          var sizeC = Math.ceil(app.cArrayT.length/3); 
        for (var i = 1; i < sizeC+1; i++) {
            var f = "";
            if(i == 1){
              f = "active";
            }else{
              f = "";
            }
           items += '<div class="item '+f+'"><div class="row">';
             for (var j = 1; j < 4; j++) {
                  var T0 = app.cArrayT[t];
                  var N0 = app.cArrayN[t];
                  t++;
                    if(T0 != undefined){
                      console.log(t)
                      items += '<div class="col-sm-4"><div class="well text-left small"><div class="iHeight"><span>';
                      items += T0;
                      items += '</span></div><a href="javascript:app.pup2('+t+');">Read more<br></a><br><span>';
                      items += '<i class="fa fa-user-circle fa-3x" aria-hidden="true"></i> ';
                      items += '<span class="text-uppercase" style="color:#000;"> '+N0+'</span>';
                      items += '</span>';
                      items += '</div></div>';
                    }
             }
           items += '</div></div>';
        } 
        $(".carouselC .additem").append(items);
        app.showRM();
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

<link rel="stylesheet" type="text/css" href="jqcloud/jqcloud.css" />
<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>

<link rel="stylesheet" href="css/m3s4p1.css">
<div class="m3s4p1">
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 3 | <span style="color:#f68121">Section 4</span></p></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>The Cost of Care: Different Approaches</h2></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
                <a  class="" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
            </div>
         </div>
      </div>
   </div>
   <br><br>
   
          <div class="container m3s4b1">
              <f><h3 class="text-center text-uppercase">Reimbursement Mechanisms and Terms</h3></f>
                <br>
                <div class="row">                    
                    <div class="col-sm-12">
                      <f><p>We have discussed the distinction between costs, prices, charges, and reimbursements. As we’ve seen, the difference between a hospital’s operating costs and its charges can be quite substantial. Hospitals employ a number of practices to arrive at final charges from their costs. These practices primarily revolve around different methods for reimbursing health care providers for services rendered, but also depend on sound methods of accounting costs. It’s important to become familiar with these practices, how they affect patients, and how they may change. </p></f>
                      <f><p>Below you will find a table identifying and describing the most common reimbursement mechanisms in use today. </p></f>
                    </div>                   
                 </div>
             </div>          
             <br><br>

          <div class="container m3s4b2">
            <div class="row">
              <div class="col-sm-1"></div>
                  <div class="col-sm-10 text-center">
                  <f><h4 class="">Common Reimbursement Mechanisms</h4></f>
                    <br>
                  <f><h4 class="text-uppercase" style="color:#ee5d4a;">Capitation</h4></f>
                  <f><p>The payment of a fee to a health care provider providing services to a number of people, such that the amount paid is determined by the number of total patients. A specific fee is paid “per head” for the provision of a defined package of service for a specified time period.</p></f>
                    <hr style="border-color: #cacaca currentcolor currentcolor;">
                  <f><h4 class="text-uppercase" style="color:#00aeef;">Fee-for-Service (FFS)</h4></f>
                  <f><p>A payment system where health care services are unbundled and paid for separately. A specific price is set for each service.</p></f>
                    <hr style="border-color: #cacaca currentcolor currentcolor;">
                  <f><h4 class="text-uppercase" style="color:#28ad98;">Global Payment</h4></f>
                  <f><p>A fixed payment is made for all services for a specified period of time (usually one year). The Veterans Health Administration, Department of Defense, and Kaiser Permanente hospitals are paid via global budgets, where every service performed on every patient during a year is aggregated into a single payment.</p></f>
                     <hr style="border-color: #cacaca currentcolor currentcolor;">
                   <f><h4 class="text-uppercase" style="color:#566f8e;">Payment by Episode of Illness</h4></f>
                  <f><p>The physician or hospital is paid one sum for all service delivered during one illness. Medicare’s Diagnosis Related Group (DRG) system for hospital reimbursement is an example of payment by episode of illness, with the amount of reimbursement based on the patient’s diagnosis.</p></f>
                  <hr style="border-color: #cacaca currentcolor currentcolor;">
                  <f><h4 class="text-uppercase" style="color:#f1c530;">Per Diem Payment (bundled payment)</h4></f>
                  <f><p>A hospital is paid a bundled fee for all services delivered to a patient during a single day.</p></f>
                    <hr style="border-color: #cacaca currentcolor currentcolor;">
                  <f><h4 class="text-uppercase" style="color:#b163a2;">Salary</h4></f>
                  <f><p>Clinicians or other health personnel are paid a fixed amount for predetermined hours of work or responsibilities.</p></f>
                  </div>
            </div>            
            <div class="col-sm-1"></div>
          </div>    

          <br><br><br>
          <div class="jumbotron m3s4b3">
            <div class="row">
              <div class="col-sm-2"></div>
                  <div class="col-sm-8 text-center">
                    <f><h4>Let’s look at two of these mechanisms more closely.</h4></f>
                  </div>
              <div class="col-sm-2"></div>    
             </div>
          </div> 

            <div class="container m3s4b1">
              <f><h3 class="text-center text-uppercase">Fee-for-Service</h3></f>
                <br>
                <div class="row">
                    
                    <div class="col-sm-12">
                      <f><p>Currently, the most common reimbursement method used in the US is fee-for-service (FFS). Fee-for-service (FFS) describes a payment structure in which each health care service is billed and paid for separately. The physician or hospital is paid for each office visit, hospitalization, intravenous medication, x-ray, EKG, or other services delivered. The price of all of these services is located in the hospital’s chargemaster.  The chargemaster is a master list of all potential charges that can show up on a patient’s bill. Watch the video for more on how chargemasters are used to determine provider reimbursements and the pitfalls of this process.</p></f>
                    </div>
                    
                 </div>
             </div>


  <div id="b1" class="Step1 container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="https://s3.amazonaws.com/dell-med/Mod3_Sec4.png" preload="auto" data-setup='{"fluid": true}'>
                  <source src="https://s3.amazonaws.com/dell-med/Mod3_Sec4.mp4" type="video/mp4"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod3_Sec4.webm" type="video/webm"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod3_Sec4.ogv"  type="video/ogv"></source>
                  <track label="English" kind="subtitles" srclang="en" src="VTT/Mod3_Sec4.vtt" default>
               </video>
            </div>
         </div>
        <div class="col-sm-2"></div>
      </div>
   </div>
        <br><br>

            <div class="container m3s4b1">
              <f><h3 class="text-center text-uppercase">Bundled Payments</h3></f>
                <br>
                <div class="row">                    
                    <div class="col-sm-12">
                      <f><p>Unlike with FFS payment, in which each service rendered is itemized and charged individually, bundled payment involves paying hospitals or providers a single sum for all services rendered during a specific episode. One extreme of bundled payments is “global payments,” which generally provide a single lump sum annually to a hospital system or provider for all services.</p></f>
                      <f><p>Under traditional FFS payment, individual physicians and health care systems are financially rewarded for providing more care.</p></f>
                      <f><p>The goal of global or bundled payments is to combine payments across different providers and settings. Doing this well requires coordinating care, and this method therefore encourages providers to focus on the outcomes that matter to patients, rather than simply providing more services.</p></f>
                    </div>                    
                 </div>
             </div>
             <br><br>

        <div class="jumbotron m3s4b4">
            <div class="container">
            <div class="row">              
                  <div class="col-sm-12">
                    <f><h4 class="text-center">Fee-for-Service <span style="color:#26af95;">versus</span> Global Payments</h4></f>
                    <br>                    
                  </div>              
             </div>                
             <div class="row">
                  <div class="col-sm-6">                      
                      <f><p class="bText">Current Fee-for-Service Payment System</p></f>
                      <f><p>Care is fragmented instead of coordinated. each provider is payed separately for work completed in isolation of other providers. No one is responsible for coordinating care. This results in little accountability to overall quality and cost.</p></f>
                  </div>
                  <div class="col-sm-6">                    
                      <img src="img/m3s4img2.png" class="img-responsive" width="50%">
                  </div>
              </div>
              <br><br>
              <div class="row">
                  <div class="col-sm-6">
                      <img src="img/m3s4img3.png" class="img-responsive" width="60%">
                  </div>
                  <div class="col-sm-6">
                    <f><p class="bText">Patient-Centered Global Payment System</p></f>                
                      <f><p>Global payments made to a group of different types of providers for all types of care. This rewards providers for providing appropriate care instead of more care to meet the patients needs.</p></f>                      
                  </div>
              </div>
          </div>
        </div> 

        <br>
    <div class="container">
       <div class="row">                    
          <div class="col-sm-12">
          <f><p>The movement from FFS toward global payments can be seen as a spectrum of options between volume and value. There are benefits and drawbacks to each of these payment mechanisms, and it is likely that there ultimately needs to be some mix of different mechanisms in place to find the right balance.</p></f>
        </div>
      </div> 
    </div> 
    <br>
    <br>

    <div class="jumbotron m3s4b5">
         <div class="container">
            <div class="row">                    
              <div class="col-sm-12">
                <f><h4 class="text-center">Moving from Fee-for-Service to Global Payments</h4></f>
                <br><br><br>
                <img src="img/m3s4img4.png" class="img-responsive">
                <br>
              </div>  
            </div>
         </div>
    </div>     
<br>
  <div class="container m3s4b6">
       <div class="row text-center">                    
          <div class="col-sm-12">
          <f><h3 class="text-uppercase">Let’s Check Our Understanding</h3></f>
          <br>
          <f><p>Below are scenarios that demonstrate potential effects of various payment mechanisms. Select the mechanism that likely resulted in each scenario. Then, reflect on how the scenario demonstrates a “pro” or a “con” of that mechanism.</p></f>
          <br>
          <hr>
        </div>
      </div> 
    </div>


<!-- Mcq start -->

<div class="container-full m3s4mcq m3s4b7" id="my-Carousel1">    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>
            <li data-target="#myCarousel" data-slide-to="2" ></li>
            <li data-target="#myCarousel" data-slide-to="3" ></li>
            <li data-target="#myCarousel" data-slide-to="4" ></li>
            <li data-target="#myCarousel" data-slide-to="5" ></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner additem" role="listbox">
            <div class="item active" id="0">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">Physicians tend to only accept patients that are healthier to minimize time spent and services rendered and to maximize the amount they receive per patient. (con)</p></f>

                                <div class="row row-eq-height">
                                <!--<div class="col-sm-12" >
                                    <div class="row eq-h">--->
                                      <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('CAPITATION', 'FEE-FOR-SERVICE', 'GLOBAL&nbsp;PAYMENT');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "CAPITATION" ? 1 : 0;
                                                echo '<div class="col-sm-4">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                    <!--</div>
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
                                    <f><p class="text-muted">Question 1 of 6</p></f>
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
                                <f><p class="ques">Appropriate and timely patient care improves along with provider communication because all provider groups receive one payment and are encouraged to work together. (pro)</p></f>
                                <div class="row row-eq-height">
                                <!--<div class="col-sm-12">
                                    <div class="row eq-h">-->
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('GLOBAL&nbsp;PAYMENT', 'FEE-FOR-SERVICE', 'CAPITATION');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "GLOBAL&nbsp;PAYMENT" ? 1 : 0;
                                                echo '<div class="col-sm-4">
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
                                    <f><p class="text-muted">Question 2 of 6</p></f>
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
                                   <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question<!--  <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">A provider group notices smaller payments after a provider known for poor documentation of procedures and diagnoses works for the clinic. (con)</p></f>
                                <div class="row row-eq-height">
                                <!--<div class="col-sm-12">
                                    <div class="row eq-h">-->
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('FEE-FOR-SERVICE', 'CAPITATION', 'GLOBAL&nbsp;PAYMENT');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "FEE-FOR-SERVICE" ? 1 : 0;
                                                echo '<div class="col-sm-4">
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
                                    <f><p class="text-muted">Question 3 of 6</p></f>
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
                                   <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question<!--  <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">With an unchanging amount of payments, this mechanism makes costs more predictable for insurance companies and represents a more steady monthly cash flow for providers. (pro)</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12">
                                    <div class="row eq-h">-->
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('GLOBAL&nbsp;PAYMENT', 'CAPITATION', 'FEE-FOR-SERVICE');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "GLOBAL&nbsp;PAYMENT" ? 1 : 0;
                                                echo '<div class="col-sm-4">
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
                                    <f><p class="text-muted">Question 4 of 6</p></f>
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
                                   <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question<!--  <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">Providers tend to order more CT scans even when they may not meet guideline-based clinical indications due to larger reimbursement payments. (con)</p></f>
                                <div class="row row-eq-height">
                                <!--<div class="col-sm-12">
                                    <div class="row eq-h">-->
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('FEE-FOR-SERVICE', 'CAPITATION', 'GLOBAL&nbsp;PAYMENT');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "FEE-FOR-SERVICE" ? 1 : 0;
                                                echo '<div class="col-sm-4">
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
                                    <f><p class="text-muted">Question 5 of 6</p></f>
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
                                   <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question<!--  <i class="fa fa-arrow-right" aria-hidden="true"></i> --></div></center>
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
                                <f><p class="ques">A provider network is encouraged to maximize the adherence to best practices and the amount of care providers can give from their once-yearly payment. (pro)</p></f>
                                <div class="row row-eq-height">
                               <!-- <div class="col-sm-12">
                                    <div class="row eq-h">-->
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('GLOBAL&nbsp;PAYMENT', 'CAPITATION', 'FEE-FOR-SERVICE');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "GLOBAL&nbsp;PAYMENT" ? 1 : 0;
                                                echo '<div class="col-sm-4">
                                                    <div class="ans" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
                                                  </div>';
                                            }
                                        ?>
                                   <!-- </div>
                                </div> --->                             
                            </div> 
                            <div class="row">
                                  <div class="col-sm-12 sign">
                                    <i class="fa fa-times fa-5x hide" aria-hidden="true"></i>
                                    <i class="fa fa-check fa-5x hide" aria-hidden="true"></i>
                                </div>
                            </div>
                              <div class="row pageCount">
                                <div class="col-sm-12" >
                                    <f><p class="text-muted">Question 6 of 6</p></f>
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
                                   <!-- <center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question  <i class="fa fa-arrow-right" aria-hidden="true"></i> </div></center> -->
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>


                  <a class="left carousel-control m3s4b8" href="#myCarousel" role="button" data-slide="prev" style="display:none;">
                    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                  </a>
                  <a class="right carousel-control m3s4b8" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                  </a>
            </div>
    </div>
</div>
<!-- Mcq end -->

    

   <div class="container text-center s1bgcol">
      <div class="row" id="my-Carousel2">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
               <div class="carouselC1">
                  <br>                 
                  <f><p>Based on the pros and cons listed above, identify the payment method (or combination of methods) that you think best provides value for the patient. Why do you think so?</p></f>                   
                  <f><p>Scroll through user responses.</p></f>
                  <div class="well">
                  <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="false">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                     </ol>
                     <div class="additem carousel-inner" role="listbox">
                     </div>
                      <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                        <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                        <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                      </a>
                  </div>
                  </div>
               </div>
               
               <div class="act1" >
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>Your Perspective</h2></f>
                           <div class="line4"></div>
                           <f><p>Based on the pros and cons listed above, identify the payment method (or combination of methods) that you think best provides value for the patient. Why do you think so?</p></f>
                            <f><p class="small"><i>Enter your response below to see the response of others like you.</i></p></f>
                           <div class="line4"></div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                      
                     </div>
                     </div>
                  <div class="row">
                     <div class="col-sm-12" >
                        <div  class="navbar-form navbar-center" style="">
                           <div class="input-group" style="width:100%;">
                              <input id="response1Text" type="Search" placeholder="Please enter a brief response here." class="form-control" />
                              <div class="input-group-btn text-right" style="width:3%;">
                                 <button  onclick="app.response1();" class="btn btn-info">
                                 <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> SUBMIT
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-2"></div>
      </div>
      <br>
       <div class="row" id="my-Carousel3">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
                <div class="carouselC">
                  <br>
                  <f><p>Read the responses from your peers. How were they the same or different? Did any answer or proposed combination change your opinion?</p></f>
                  <f><p>Scroll through user responses.</p></f>
                  <div class="well">
                  <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false">
                  
                     <ol class="carousel-indicators">
                     </ol>
                     <div  class="additem carousel-inner" role="listbox">
                     </div>
                      <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                        <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                        <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                      </a>
                  </div>
                  </div>
               </div>

               <div class="act2">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>Reflecting Further</h2></f>
                           <div class="line4"></div>
                           <f><p>Read the responses from your peers. How were they the same or different? Did any answer or proposed combination change your opinion?</p></f>
                            <f><p class="small"><i>Enter your response below to see the response of others like you.</i></p></f>
                           <div class="line4"></div>                           
                        </div>
                     </div>
                  </div>
                <div class="row">
                     <div class="col-sm-12">                      
                     </div>
                     </div>
               <div class="row">
                  <div class="col-sm-12" >
                     <div  class="navbar-form navbar-center" style="">
                        <div class="input-group" style="width:100%;">
                           <input type="Search" id="response2Text" placeholder="Please enter a brief response here." class=" form-control" />
                           <div class="input-group-btn text-right" style="width:3%;">
                              <button class="btn btn-info" onclick="app.response2();">
                              <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> SUBMIT
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
         </div>
         <div class="col-sm-2"></div>
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


<br>
<br>
<div class="jumbotron m4s4b21"> 
       <f><h2 class="text-center">Learn More</h2></f>
       <br>
          <div class="container m4s4b22">
            
              <div class="row">
                <div class="col-sm-12">
                  <div class='well1'>
                       <div class='row vertical-align'>
                          <div class="col-sm-3">
                              <img src="img/s7img7.png" class="img-responsive center-block">
                          </div>
                          <div class="col-sm-9">
                                <div class='well'>
                                <p class="text-uppercase"><f>Article</f></p>
                                 <p><f><a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://content.healthaffairs.org/content/36/4/689.abstract?rss=1">Mystery of the Chargemaster: Examining the Role of Hospital List Prices in what Patients Actually Pay.</a></f></p>
                                 <p><f>Read this data-driven article to learn more about how hospital chargemasters affect patients and prices for hospital care.</f></p>
                                 <p><f>Batty M, Ippolito B. Health Aff. April 2017.<br>Accessed April 19, <br>2017.</f></p>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>

</div>            
</div>
<br><br>

   <div class="container m4s4b20">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <hr>
            <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;">REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
            <br>        
          <div id="demo" class="collapse">
            <ol>
              <!-- <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href=""> -->
              <f><li><p>Moriates C, Arora V, Shah N. <em><a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="https://www.amazon.com/Understanding-Value-Healthcare-Christopher-Moriates/dp/0071816984">Understanding Value-Based Healthcare</a></em>. Columbus, OH: McGraw-Hill Education; 2015.</p></li></f>              
              <f><li><p>Dobson A, DaVanzo J, Doherty J, Tanamor M. A study of hospital charge setting practices. Falls Church, VA: Lewin Group, 2005.</p></li></f>
              <f><li><p>Moriates C. Meet the villain of hospital costs: The chargemaster. <em>Society of Hospital Medicine</em>. July 30, 2015. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://blogs.hospitalmedicine.org/Blog/meet-the-villain-of-hospital-costs-the-chargemaster/">http://blogs.hospitalmedicine.org/Blog/meet-the-villain-of-hospital-costs-the-chargemaster/</a> Accessed March 24, 2017.</p></li></f>              
            </ol>
          </div>  
          </div>
        <div class="col-sm-1"></div>        
   </div>
  </div>

</div>



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
       var id = parseInt(e.relatedTarget.id);
          
          if(id == 0){
              $('.left').hide();              
              $('.right').show();
          }else if(id == 5){
            $('.left').show();
            $('.right').hide();
          } else {
            $('.left').show();
            $('.right').show();
          }
         setMsgBoxHeight();

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



<footer class="container-fluid">
         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="#" onclick="window.location='?id=m3/m3s3p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 3 | Section 3</span>
                <span class="sp1"><strong>Speaking the Same Language: Health Care Cost Terms</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="#" onclick="window.location='?id=m3/m3s5p1'"><span class="ssp2">MODULE 3 | Section 5</span>
                <span class="sp2"><strong>Toward More Transparency</strong></span>
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

  $("#my-Carousel2 .additem").on("swipeleft",function(){
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
  });
  $("#my-Carousel2 .additem").on("swiperight",function(){
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

  });

</script>


<script>

  $("#my-Carousel3 .additem").on("swipeleft",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel3 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==l)
	 {
	    $("#my-Carousel3 .carousel-indicators li:nth-child(1)").addClass("active");
	    $("#my-Carousel3 .additem div.item:nth-child(1)").addClass("active");
	 }
	 else{
	     i++;
		 $("#my-Carousel3 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel3 .additem div.item:nth-child("+i+")").addClass("active");
	 }
  });
  $("#my-Carousel3 .additem").on("swiperight",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel3 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==1)
	 {
	    $("#my-Carousel3 .carousel-indicators li:nth-child("+l+")").addClass("active");
	    $("#my-Carousel3 .additem div.item:nth-child("+l+")").addClass("active");
	 }
	 else{
	     i--;
		 $("#my-Carousel3 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel3 .additem div.item:nth-child("+i+")").addClass("active");
	 }

  });

</script>

	  
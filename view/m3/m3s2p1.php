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
    $('.m3s2p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m3s2p1 #mc1 .modal-content #name').html(name);
}
app.pup2= function(v){
  var loc =  $(".carouselC .iHeight").eq(v-1).text();
   var name =  $(".carouselC .iHeight").eq(v-1).next().next().next().text();
    $('.m3s2p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m3s2p1 #mc1 .modal-content #name').html(name);
}

/*
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
*/



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

<link rel="stylesheet" href="css/m3s2p1.css">
<div class="m3s2p1">
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 3 | <span style="color:#f68121">Section 2</span></p></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>Story From the Frontlines</h2></f>
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
<div class="container m3s2s1">
    <h3 class="text-uppercase text-center">...And Then the Bill Comes</h3>
</div>
   


  <div id="b1" class="Step1 container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="https://s3.amazonaws.com/dell-med/Mod2_Sec2.jpg" preload="auto" data-setup='{"fluid": true}'>
                  <source src="https://s3.amazonaws.com/dell-med/Mod3_Sec2.mp4" type="video/mp4"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod3_Sec2.webm" type="video/webm"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod3_Sec2.ogv" type="video/ogv"></source>
                  <track kind="subtitles" src="" srclang="en" label="English"  default/>
               </video>
            </div>
         </div>
        <div class="col-sm-2"></div>
      </div>
   </div>

    

   <div class="container text-center s1bgcol">
      <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
               <div class="carouselC1">
                  <br>                 
                  <f><p>Do you have a story about how you or someone you know has been affected by confusing or unreasonable medical costs? Please briefly share your experience in 100 words or less, remembering to protect the privacy of information pertaining to others.</p></f> 
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
                           <f><p>Do you have a story about how you or someone you know has been affected by confusing or unreasonable medical costs? Please briefly share your experience in 100 words or less, remembering to protect the privacy of information pertaining to others.</p></f>
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

       <!-- <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
                <div class="carouselC">
                  <br>
                  <f><p>Now think about yourself, a friend, or a family member who has had a serious medical condition or chronic disease that significantly affected their life, such as cancer, diabetes, or congestive heart failure. What do you think mattered most to them?</p></f>
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
                           <f><h2 class="text-uppercase">Reflecting Further</h2></f>
                           <div class="line4"></div>
                           <f><p>Now think about yourself, a friend, or a family member who has had a serious medical condition or chronic disease that significantly affected their life, such as cancer, diabetes, or congestive heart failure. What do you think mattered most to them?</p></f>
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
                           <input type="Search" id="response2Text" placeholder="Please enter a brief response (less than 30 words) here." class="limit-input form-control" />
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
      </div> -->


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

<div class="jumbotron m3s2s2">
    <div class="container">
        <div class="row">
          <div class="col-sm-1"></div>
           <div class="col-sm-10"><f><h4 class="text-center">Read the following excerpt from Understanding Value-Based Health Care for an example of another true patient story.</h4></f><hr></div>
          <div class="col-sm-1"></div>
        </div>  

        <div class="row">
          <div class="col-sm-1"></div>
           <div class="col-sm-10">
              <f><p>“In Dr. Linda Burke-Galloway’s own words, ‘it is a unique and humbling experience when a physician becomes the patient.’ Her ophthalmologist (eye doctor) recommended a surgical procedure that would be necessary to preserve her vision. As a public health physician with 23 years of experience, Dr. Burke-Galloway thought she knew what to expect when she went to the hospital. And she did. It’s what happened after the hospital and routine recovery that floored her.</p></f>
              <f><p>One day after work, she opened an envelope containing a medical bill for $13,298.02. After blinking to make sure her vision was indeed working, she went through the individual line items and noticed equally astounding prices. $78 for a $4 antibiotic called gentamycin. $863.20 for a $192 pair of disposable forceps. And on it went.</p></f>
              <f><p>Assuming a mistake occurred, she first verified the discrepant prices and compared them to those listed by medical supply companies. She then contacted the hospital only to find that no one knew how to address her concerns: not the auditing department and not the CEO’s office. Ultimately, she received a jolting final response to her appeal: ‘When you sign consent for a procedure, you’re allowing us to charge anything we want to.’ How could this be right<sup>1</sup>?’”</p></f>
           </div>   
           <div class="col-sm-1"></div>
          </div> 
     </div>
</div>

<div class="jumbotron m3s2s3">
      <div class="container m3s2s4">
        <div class="row">
          <div class="col-sm-1"></div>
           <div class="col-sm-10">            
              <f><h3 class="text-center text-uppercase">DIVE DEEPER:<br>Basics of health care</h3></f>
         <hr>
            <f><p>It is important to understand the basics of health care financing in the US, including private and government insurance. If you are not familiar with the general structure of Medicare, Medicaid, VA/Tricare, and individual and employment-based insurance, then you should review this brief mini-module (“Basics of Health Care Financing in the US”) now and then return to this module—or you can choose to check it out after completing this module.</p></f>
          </div>  
             <div class="col-sm-1"></div>
        </div>     
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"><f><a target="_blank" href="?id=m3/m3s2p2" style="color:#fff;"><div class="driveS2">Dive Deeper</div></a></f></div>
            <div class="col-sm-4"></div>
        </div>
      </div>
</div>
 

<div class="container m3s2s5">
      <div class="row">
          <div class="col-sm-1"></div>
           <div class="col-sm-10">
            <f><p>Medical bills are a leading cause of personal bankruptcy in the United States,<sup>2</sup> and increasingly medical insurance does not necessarily protect patients from the high costs of medical care. More Americans than ever before are now enrolled in high-deductible insurance plans, meaning they have to pay thousands of dollars out-of-pocket prior to their insurance company covering any of the costs of their care. At the same time, many routine health services are arbitrarily expensive, so seemingly simple decisions that physicians make about testing, like ordering name-brand antibiotics, could directly lead to significant costs for patients.</p></f>            
            <f><p>This has been described as the “financial harms” of medical care. In the oncology world, financial harm is increasingly being recognized and measured as “financial toxicity” of chemotherapeutics.<sup>3</sup></p></f>
            <f><p>Part of our goal here is to define and discuss these harms so that you are prepared to address them in your role as a medical professional. In this module, we are building the framework for understanding basics of health care costs. The background provided in this module will provide you with the necessary foundation that we will expound in future modules.</p></f>
           </div>
          <div class="col-sm-1"></div>
       </div>    
</div>


<div class="jumbotron m3s2s6">
      <div class="container m3s2s7">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <f><h3 class="text-center text-uppercase">Additional Resources</h3></f>
              <hr>
              <f><p>Here is an article describing the experience that some patients have had with high-priced medications.</p></f>
              <hr>
              <f><h4 class="text-center text-uppercase">$18 For A Baby Aspirin? Hospitals Hike Costs For Everyday Drugs For Some Patients</h4></f>
              <f><p class="text-center">By <a style="color:#000;" class="boldT" target="_blank" href="http://khn.org/news/author/susan-jaffe/">Susan Jaffe</a><br>April 30, 2012. Kaiser Health News.</p></f>
              <br>
              <f><p>“Excessive drug prices have also surprised seniors in other parts of the country:</p></f>
              <f><p>–In Missouri, several Medicare observation patients were billed $18 for one baby aspirin, said Ruth Dockins, a senior advocate at the Southeast Missouri Area Agency on Aging.</p></f>
              <f><p>–Pearl Beras, 85, of Boca Raton, Fla., said in an interview that her hospital charged $71 for one blood pressure pill for which her neighborhood pharmacy charges 16 cents.</p></f>
              <f><p>–In California, a hospital billed several Medicare observation patients $111 for one pill that reduces nausea; for the same price, they could have bought 95 of the pills at a local pharmacy, said Tamara McKee, program manager for the Health Insurance Counseling and Advocacy Program at the Alliance on Aging in Monterey County, Calif., who handled at least 20 complaints last year from Medicare beneficiaries about excessive hospital drug bills.”<sup>4</sup></p></f> 
          </div>
          <div class="col-sm-1"></div>
        </div>
         <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"><f><a style="color:#000;" target="_blank" href="http://khn.org/news/observational-care/"><div class="driveS3">Read Article</div></a></f></div>
            <div class="col-sm-4"></div>
        </div>
      </div> 
</div>
<br><br>

<div class="container m3s2s8">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <hr>
              <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;">REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
              <br>
              <ol id="demo" class="collapse"> 
                <f><li class="text-left"><p>Moriates C, Arora V, Shah N. <em><a style="color:#f4821f;" target="_blank" href="https://www.amazon.com/Understanding-Value-Healthcare-Christopher-Moriates/dp/0071816984">Understanding Value-Based Healthcare</a></em>. Columbus, OH: McGraw-Hill Education; 2015.</p></li></f>
                <f><li class="text-left"><p>Himmelstein DU, Thorne D, Warren E, Woolhandler S. Medical bankruptcy in the United States, 2007: Results of a national study. <em>Am J Med. 2009;22(8): 741-746. doi:<a style="color:#f4821f;" target="_blank" href="http://dx.doi.org/10.1016/j.amjmed.2009.04.012">10.1016/j.amjmed.2009.04.012</a></em></p></li></f>
                <f><li class="text-left"><p>Financial toxicity and cancer treatment (PDQ)&ndash;health professional version. National Cancer Institute website. <a style="color:#f4821f;" target="_blank" href="https://www.cancer.gov/about-cancer/managing-care/financial-toxicity-hp-pdq">https://www.cancer.gov/about-cancer/managing-care/financial-toxicity-hp-pdq</a>. Update: December 14, 2016. Accessed March 23, 2017.</p></f></li>
                <f><li class="text-left"><p><p>Jaffe S. $18 dollars for a baby aspirin? Hospitals hike costs for everyday drugs for some patients. Kaiser Health News and USA Today. April 30, 2012. <a style="color:#f4821f;" target="_blank" href="http://khn.org/news/observational-care/">http://khn.org/news/observational-care/</a>. Accessed December 7, 2016.</p></li></f>
              </ol>
        </div>        
        <div class="col-sm-10"></div>
    </div>
  </div> 
   
</div>

<!-- <footer class="container-fluid" style="background:#f4f4f4;">
      <div class="row">
        <div class="col-sm-6"></div>
          <div class="col-sm-6  text-right NextBtn1">
                <a href="?id=m3/m3s2p2"><span class="ssp2">MODULE 3 | Section 2 | Dive Deeper</span>
                <span class="sp2"><strong>Basics of Health Care Financing in the US</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
      </div>
</footer> -->

    <footer class="container-fluid">         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="?id=m3/m3s1p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 3 | Section 1</span>
                <span class="sp1"><strong>Understanding Costs In Health Care</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="?id=m3/m3s3p1"><span class="ssp2">MODULE 3 | Section 3</span>
                <span class="sp2"><strong>Speaking the Same Language: Health Care Cost Terms</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="row">            
            <div class="col-sm-5"></div>
              <div class="col-sm-2">
                <a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="img/CC.png" width="auto" height="auto"></a>
              </div>
            <div class="col-sm-5"></div>
          </div>

      </footer>      
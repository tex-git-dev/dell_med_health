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
$yq = "select * from records where email='".$_SESSION['username']."'";
$retvalY=mysqli_query($dbcon,$yq);
$AllWordResY='';
while($row = mysqli_fetch_row($retvalY)) {
    $s2data = json_decode($row[7],true); 
    $AllWordResY .=$s2data['m1']['sections']['s2']['response1'];
}

$c4 = "select * from records";
$retval=mysqli_query($dbcon,$c4);
$AllWordRes1='';
while($row = mysqli_fetch_row($retval)) {
    $s2data = json_decode($row[7],true); 
    $AllWordRes1 .=$s2data['m1']['sections']['s2']['response1'];
}

$c5 = "select * from records WHERE email NOT IN ('".$_SESSION['username']."')";
$retval1=mysqli_query($dbcon,$c5);
while($row = mysqli_fetch_row($retval1)) {
    $s2data = json_decode($row[7],true);
    $dataT = $s2data['m1']['sections']['s2']['response2'];
    $dataN = $row[2]." ". $row[3];
    if ($dataT) {
?>
<script type="text/javascript">
    app.cArrayT.push("<?php echo $dataT;?>");
    app.cArrayN.push("<?php echo $dataN;?>");
</script>
 
<?php }} ?>
<script src="js/jqcloud-1.0.4.js"></script>
<script type="text/javascript">
$(document).ready(function() {
      var section = 's'+app.qs["id"][6];
      var loc0 = app.MData[app.SelecteM].sections[section];

      if (loc0.response1){
        app.response1();
      }

      if (loc0.response2) {
        app.response2();
      }

      $('.carousel').bind('slid.bs.carousel', function (e) {
        app.showRM();
      });

});
 var regex = /\s+/gi;
window.onresize = function(){app.showRM();};

   app.response1 = function(){/*
       var loc = $("#response1Text").val();
      var section = 's'+app.qs["id"][6];
      if (loc) {
          app.MData[app.SelecteM].sections[section]['response1'] = loc;
          var data = JSON.stringify(app.MData);
          var loc_1 = {email:"<?php echo $_SESSION['username'];?>",MData:data};
          app.DataSave(loc_1);
          app.cArrayT.unshift(loc);
          app.cArrayN.unshift('<?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?>');
      }else{
        loc =app.MData[app.SelecteM].sections[section]['response1'];
        app.cArrayT.unshift(loc);
        app.cArrayN.unshift('<?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?>');
      }
      if (loc == "") {
        alert("Please write the response.")
       }else{
         app.addOpt('myCarousel1',app.cArrayT.length);
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
                    //  console.log(t)
                      items += '<div class="col-sm-4"><div class="well text-left small"><div class="iHeight"><span>';
                      items += T0;
                      items += '</span></div><a href="javascript:app.pup('+t+');">Read more<br></a><br><span>';
                      items += '<i class="fa fa-user-circle fa-3x" aria-hidden="true"></i> ';
                      items += '<span class="text-uppercase" style="color:#000;"> '+N0+'</span>';
                      items += '</span>';
                      items += '</div></div>';
                    }
             }
           items += '</div></div>';
        } 
        $("#additem").append(items);
        app.showRM();
        $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});
      }*/
   }
app.doneResizing= function(e){
  $('.jqcloud').html('');
 var lo1 = JSON.parse(JSON.stringify(app.WCList1));
 app.WordC(lo1,'my_favorite_latin_words');
 $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});
}
app.pup= function(v){
  var loc =  $(".iHeight").eq(v-1).text();
   var name =  $(".iHeight").eq(v-1).next().next().next().text();
    $('.m1s2p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m1s2p1 #mc1 .modal-content #name').html(name);
}

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
                      items += '</span></div><a href="javascript:app.pup('+t+');">Read more<br></a><br><span>';
                      items += '<i class="fa fa-user-circle fa-3x" aria-hidden="true"></i> ';
                      items += '<span class="text-uppercase" style="color:#000;"> '+N0+'</span>';
                      items += '</span>';
                      items += '</div></div>';
                    }
             }
           items += '</div></div>';
        } 
        $("#additem").append(items);
        app.showRM();
        $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});
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
<link rel="stylesheet" type="text/css" href="jqcloud/jqcloud.css" />
<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>
<link rel="stylesheet" href="css/m1s2p1.css">
<div class="m1s2p1">
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 1 | Section 2</p></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>Story from the Frontlines: The Human Cost of Inefficiency and Waste in Healthcare</h2></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <a  class="wow fadeInDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div id="b1" class="Step1 container bg-3 text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="media/Module1Final.jpg" preload="auto" data-setup='{"fluid": true}'>
                  <source src="media/Module 1 Final.mp4" type="video/mp4"></source>
                  <source src="media/Module 1 Final.webm" type="video/webm"></source>
                  <source src="media/Module 1 Final.ogv" type="video/ogg"></source>
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
               <div class="wordClouds">
                  <br>
                  <f><p>Your response: <strong><span class="f1"></span></strong></p></f>
                  <div id="my_favorite_latin_words" style="width: 100%; background: #33a0cb; color: #fff; height: 350px; border: 1px solid #ccc;"></div>
               </div>
               <div class="act1" >
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>YOUR PERSPECTIVE</h2></f>
                           <div class="line4"></div>
                           <f><p>As you watched the video, what problems did you see in the health care Ms. Jones received? </p></f>
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
                              <input id="response1Text" type="Search" placeholder="Please enter a brief response (less than 20 words) here." class=" limit-input form-control" />
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
      <br>
      <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
               <div class="carouselC">
                  <br>
                  <f><p>Scroll through answers provided by the class.</p></f>
                  <div class="well">
                  <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                     </ol>
                     <div id="additem" class="carousel-inner" role="listbox">
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
                           <f><h2>OTHERS LIKE YOU...</h2></f>
                           <div class="line4"></div>
                           <f><p>As a health care provider, how would you handle some of the inefficiency and waste problems Ms. Jones faced?</p></f>
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
                           <input type="Search" id="response2Text" placeholder="Your response to the question..." class="form-control" />
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
   <br>
   <br>
   <div class="container text-center s1bgcol2">
      <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response3">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="well">
                        <f><h2>Why Does This Matter?</h2></f>
                        <div class="well text-left">
                           <f><p>As health care providers, we are here to help patients. Improving health for patients – quality of life and dignity of death—is the central purpose of health care. Thus, we want to take the best possible care of our patients. If we do not focus on the results we achieve with our patients, then we will often fail at this responsibility, no matter how hard each of us tries to do a good job with the patient sitting in front of us. </p></f>
                           <f><p>High-value care is a growing movement in the U.S. While there are many initiatives from clinical leaders, providers, professional societies, policy makers, and medical institutions, there is also a lot of momentum coming from trainees, young physicians, and nurses “on the ground.” Understanding value-based health care is becoming a key component of being a good doctor or nurse, and it can be a driving force in making you an amazing caregiver. Patients are increasingly hearing about and experiencing the harms of health care, including that it is not safe enough and that it is too expensive. The present system is scary – for valid reasons.</p></f>
                           <f><p>What is so exciting about the current climate is that the goal of providing high-value health care is something that patients, physicians, nurses, administrators, payers, employers and government actors all can agree on. Value for patients is a goal that aligns interests, rather than pitting participants against each other.</p></f>
                        </div>
                        <div class="line9"></div>
                        <f><h4>Remember, the medical profession is built on four central pillars of ethics:</h4></f>
                     </div>
                  </div>
               </div>
               <div class="row text-center">
                  <div class="well">
                     <div class="col-sm-3 ">
                        <div class="row">
                           <div class="col-sm-12 ">
                              <img src="img/module_1_section_2_4.png" class="img-responsive" style=" width: 100%;">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 ">
                              <f><div class="well">Do no harm (maleficence)</div></f>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3 ">
                        <div class="row">
                           <div class="col-sm-12 ">
                              <img src="img/module_1_section_2_5.png" class="img-responsive" style=" width: 100%;">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 ">
                              <f><div class="well">Do good for patients (beneficence)</div></f>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3 ">
                        <div class="row">
                           <div class="col-sm-12 ">
                              <img src="img/module_1_section_2_6.png" class="img-responsive" style=" width: 100%;">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 ">
                              <f><div class="well">Patient autonomy</div></f>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3 ">
                        <div class="row">
                           <div class="col-sm-12 ">
                              <img src="img/module_1_section_2_7.png" class="img-responsive" style=" width: 100%;">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 ">
                              <f><div class="well">Justice</div></f>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="line9"></div>
               <div class="row text-center">
                  <div class="well">
                     <f><div class="well">As we will learn together throughout these courses, providing high-value care speaks to each of these tenets.</div></f>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-2"></div>
      </div>
   </div>
   <div class="container text-center s1bgcol3">
      <div class="row vertical-align">
         <div class="col-sm-4">
            <img src="img/module_1_section_2_8.png" class="img-responsive" style=" width: 100%;">
         </div>
         <div class="col-sm-8 text-left">
            <div class="well">
               <div class="well">
                  <f><p>“Our north star – where we are headed – is trying to deliver Value to our patients, as defined by optimizing the health of our patients in a way that reduces cost. No matter where we sit in the health care system, we can all agree that is why we, the health care system, exists.”</p></f>
                   <br>
                  <f><h6>Kevin Bozic MD MBA,</h6></f>
                  <f><h6>Chair of Surgery and Perioperative Care,</h6></f>
                  <f><h6>Dell Medical School, 2016</h6></f>
                  
               </div>
            </div>
         </div>
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
            <div class="col-sm-3 text-left NextBtn">
              <a href="?id=m1/m1s1p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 1 | Section 1</span>
                <span class="sp1"><strong>There's a Better Way</strong></span></a>
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3  text-right NextBtn">
                <a href="?id=m1/m1s3p1"><span class="ssp2">MODULE 1 | Section 3</span>
                <span class="sp2"><strong>Providing Value for Patients</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>
      </footer> 
      

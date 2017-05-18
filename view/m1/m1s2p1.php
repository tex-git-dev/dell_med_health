<?php
   if(!$_SESSION['username']){
    ?>
<script>
   window.location.href="<?php echo pathUrl();?>";
 
</script>
<?php
   }
require_once 'db.php';
include("view/cjs.php");
$dbcon =  Connect_Open();
$c5 = "select * from records WHERE email NOT IN ('".$_SESSION['username']."')";
$retval1=mysqli_query($dbcon,$c5);
while($row = $retval1->fetch_object()) {
    $s2data = json_decode($row->module_data,true);
    $dataT1 = $s2data['m1']['sections']['s2']['response1'];
    $dataN1 = $row->fname." ". $row->lname;
    $dataT = $s2data['m1']['sections']['s2']['response2'];
    $dataN = $row->fname." ". $row->lname;
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

      if (loc0.response1){
        app.response1();
      }
      $('.carousel').bind('slid.bs.carousel', function (e) {
        app.showRM();
      });

});
 var regex = /\s+/gi;
window.onresize = function(){app.showRM();};

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
	   var l = app.cArrayT1.length;
	   if(l>18)
	   {
	   l = 18;
	   }
         app.addOpt('myCarousel1',l);
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
                      items += '</span></div><a href="javascript:app.pup('+t+');">Read more<br></a><br><span>';
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

   
/* $(document).ready(function(){
  var flagvd = false;
     $('.video-js').inview({
        'onEnter': function($object) {
          if(flagvd == false){
            $('video').trigger('play');
            flagvd=true;
          }           

          },
          'onLeave': function($object) {
          }

      });
  });*/
   
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
               <a  class="" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div id="b1" class="Step1 container bg-3 text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="https://s3.amazonaws.com/dell-med/Mod1_Sec2.jpg" preload="auto" data-setup='{"fluid": true}'>
                  <source src="https://s3.amazonaws.com/dell-med/Mod1_Sec2.mp4" type="video/mp4"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod1_Sec2.webm" type="video/webm"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod1_Sec2.ogv" type="video/ogv"></source>
                <track label="English" kind="subtitles" srclang="en" src="VTT/MsJonesM1.vtt" >
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
                  <f><p>As you watched the video, what problems did you see in the health care Ms. Jones received?</p></f>
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
                           <f><h2 class="boldT">Your Perspective</h2></f>
                           <div class="line4"></div>
                           <f><p>As you watched the video, what problems did you see in the health care Ms. Jones received?</p></f>
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
                              <input id="response1Text" type="Search" placeholder="Please enter a brief response here." class=" form-control" />
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
  </div>   
   <br>
   <div class="container text-center s1bgcol2">
      <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response3">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="well">
                        <f><h2 class="boldT text-uppercase">Why Does This Matter?</h2></f>
                        <div class="well text-left">
                           <f><p>As health care providers, we are here to help patients. Improving health for patients – quality of life and dignity of death—is the central purpose of health care. Thus, we want to take the best possible care of our patients. If we do not focus on the results we achieve with our patients, then we will often fail at this responsibility, no matter how hard each of us tries to do a good job with the patient sitting in front of us. </p></f>
                           <f><p>High-value care is a growing movement in the U.S. While there are many initiatives from clinical leaders, providers, professional societies, policy makers, and medical institutions, there is also a lot of momentum coming from trainees, young physicians, and nurses “on the ground.” Understanding value-based health care is becoming a key component of being a good doctor or nurse, and it can be a driving force in making you an amazing caregiver. Patients are increasingly hearing about and experiencing the harms of health care, including that it is not safe enough and that it is too expensive. The present system is scary – for valid reasons.</p></f>
                           <f><p>What is so exciting about the current climate is that the goal of providing high-value health care is something that patients, physicians, nurses, administrators, payers, employers and government actors all can agree on. Value for patients is a goal that aligns interests, rather than pitting participants against each other.</p></f>
                        </div>
                        <div class="line9"></div>
                        <f><h4 class="text-uppercase" style="font-family: 'GothamHTF-Medium' !important;">Remember, the medical profession is built on four central pillars of ethics:</h4></f>
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
                              <f><div class="well text-uppercase" style="font-family: 'GothamHTF-Medium' !important;">Do no harm <span style="font-family: 'GothamHTF-BookItalic' !important;">(maleficence)</span></div></f>
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
                              <f><div class="well text-uppercase" style="font-family: 'GothamHTF-Medium' !important;">Do good for patients <span style="font-family: 'GothamHTF-BookItalic' !important;">(beneficence)</span></div></f>
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
                              <f><div class="well text-uppercase" style="font-family: 'GothamHTF-Medium' !important;">Patient autonomy</div></f>
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
                              <f><div class="well text-uppercase" style="font-family: 'GothamHTF-Medium' !important;">Justice</div></f>
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
            <img src="img/module_1_section_2_8.png" class="img-responsive center-block" >
         </div>
         <div class="col-sm-8 text-left">
            <div class="well">
               <div class="well">
                  <f><p>“Our north star – where we are headed – is trying to deliver value to our patients, as defined by optimizing the health of our patients in a way that reduces cost. No matter where we sit in the health care system, we can all agree that is why we, the health care system, exists.”</p></f>
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
            <div class="col-sm-4 text-left NextBtn">
              <a href="#" onclick="window.location='?id=m1/m1s1p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 1 | Section 1</span>
                <span class="sp1"><strong>There's a Better Way</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="#" onclick="window.location='?id=m1/m1s3p1'"><span class="ssp2">MODULE 1 | Section 3</span>
                <span class="sp2"><strong>Providing Value for Patients</strong></span>
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

  $(".additem").on("swipeleft",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $(".carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==l)
	 {
	    $(".carousel-indicators li:nth-child(1)").addClass("active");
	    $(".additem div.item:nth-child(1)").addClass("active");
	 }
	 else{
	     i++;
		 $(".carousel-indicators li:nth-child("+i+")").addClass("active");
	    $(".additem div.item:nth-child("+i+")").addClass("active");
	 }
  });
  $(".additem").on("swiperight",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $(".carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==1)
	 {
	    $(".carousel-indicators li:nth-child("+l+")").addClass("active");
	    $(".additem div.item:nth-child("+l+")").addClass("active");
	 }
	 else{
	     i--;
		 $(".carousel-indicators li:nth-child("+i+")").addClass("active");
	    $(".additem div.item:nth-child("+i+")").addClass("active");
	 }

  });

</script>
      

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
    $dataT1 = $s2data['m2']['sections']['s2']['response1'];
    $dataN1 = $row->fname." ". $row->lname;
    $dataT = $s2data['m2']['sections']['s2']['response2'];
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
    $('.m2s2p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m2s2p1 #mc1 .modal-content #name').html(name);
}
app.pup2= function(v){
  var loc =  $(".carouselC .iHeight").eq(v-1).text();
   var name =  $(".carouselC .iHeight").eq(v-1).next().next().next().text();
    $('.m2s2p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m2s2p1 #mc1 .modal-content #name').html(name);
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
 /*  $(document).ready(function(){
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
  });*/
</script>

<link rel="stylesheet" type="text/css" href="jqcloud/jqcloud.css" />
<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>
<link rel="stylesheet" href="css/m2s2p1.css">
<div class="m2s2p1">
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 2 | <span style="color:#f68121">Section 2</span></p></f>
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

  <div id="b1" class="Step1 container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="https://s3.amazonaws.com/dell-med/Mod2_Sec2.jpg" preload="auto" data-setup='{"fluid": true}'>
                  <source src="https://s3.amazonaws.com/dell-med/Mod2_Sec2.mp4" type="video/mp4"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod2_Sec2.webm" type="video/webm"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Mod2_Sec2.ogv" type="video/ogv"></source>
                  <track label="English" kind="subtitles" srclang="en" src="VTT/MsJonesM2.vtt" >
               </video>
            </div>
         </div>
        <div class="col-sm-2"></div>
      </div>
   </div>

    

   <div class="container text-center s1bgcol">
      <div class="row" id="my-Carousel1">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
               <div class="carouselC1">
                  <br>                 
                  <f><p>After watching this video, what do you think matters to Ms. Jones when it comes to health care?</p></f> 
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
                           <f><p>After watching this video, what do you think matters to Ms. Jones when it comes to health care?</p></f>
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
       <div class="row" id="my-Carousel2">
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
                           <f><h2>Reflecting Further</h2></f>
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
                           <input type="Search" id="response2Text" placeholder="Please enter a brief response here." class="form-control" />
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
  
   
</div>


<footer class="container-fluid">
         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="#" onclick="window.location='?id=m2/m2s1p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 2 | Section 1</span>
                <span class="sp1"><strong>Measuring What Matters</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="#" onclick="window.location='?id=m2/m2s3p1'"><span class="ssp2">MODULE 2 | Section 3</span>
                <span class="sp2"><strong>Measuring Outcomes</strong></span>
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
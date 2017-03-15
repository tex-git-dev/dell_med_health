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
    $AllWordResY .=$s2data['m2']['sections']['s2']['response1'];
}

$c4 = "select * from records";
$retval=mysqli_query($dbcon,$c4);
$AllWordRes1='';
while($row = mysqli_fetch_row($retval)) {
    $s2data = json_decode($row[7],true); 
    $AllWordRes1 .=$s2data['m2']['sections']['s2']['response1'];
}

$c5 = "select * from records WHERE email NOT IN ('".$_SESSION['username']."')";
$retval1=mysqli_query($dbcon,$c5);
while($row = mysqli_fetch_row($retval1)) {
    $s2data = json_decode($row[7],true);
    $dataT = $s2data['m2']['sections']['s2']['response2'];
    $dataN = $row[2]." ". $row[3];
    if ($dataT) {
?>
<script type="text/javascript">
    app.cArrayT.push("<?php echo $dataT;?>");
    app.cArrayN.push("<?php echo $dataN;?>");
</script>
 
<?php }} ?>
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
  
   app.response1 = function(){
      var val = $("#response1Text").val();
      var section = 's'+app.qs["id"][6];
      var loc = '';
       if (val){
          loc = val.concat('<?php echo addslashes($AllWordRes1);?>');
        }else{
          loc = val.concat('<?php echo addslashes($AllWordRes1);?>');
          val = '<?php echo addslashes($AllWordResY);?>';
        }
     var regex = /\s+/gi;
      if (val == "") {
          alert("Please write the response.");
       }else{
          app.MData[app.SelecteM].sections[section]['response1'] = val;
          var data = JSON.stringify(app.MData);
          var loc_1 = {email:"<?php echo $_SESSION['username'];?>",MData:data};
          app.DataSave(loc_1);
        //  var allDataY = app.sortWord(val);
          var allData1 = app.sortWord(loc);
          $(".f1").html(val);
        //  $(".f2").html(allDataY.top2);
          //console.log(JSON.stringify(allDataY))
          $(".wordClouds").css({"visibility":"visible","height":"auto"});
      
          app.WCList1 = JSON.parse(JSON.stringify(allData1.list));
          app.WordC(allData1.list,'my_favorite_latin_words');
          $(".act1").hide();
          $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});
        
        }
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
      }else{
        loc =app.MData[app.SelecteM].sections[section]['response2'];
      }
      if (loc == "") {
       alert("Please write the response.")
       }else{
        $(".act2").hide();
        $(".carouselC").css({"visibility":"visible","height":"auto"});
         var items="";
         var t =0;
        for (var i = 1; i < 10; i++) {
          var f = "";
            if(i == 1){
              f = "active";
            }else{
              f = "";
            }
           items += '<div class="item '+f+'"><div class="row">';
             for (var j = 1; j < 4; j++) {
                t++;
                  var T0 = app.cArrayT[t-2];
                  var N0 = app.cArrayN[t-2];
                if(t == 1){

                    items += '<div class="col-sm-4"><div class="well text-left small"><div class="iHeight"><span>';
                    items += loc;
                    items += '</span></div><a href="javascript:app.pup('+t+');">Read more<br></a><br><span>';
                    items += '<i class="fa fa-user-circle fa-3x" aria-hidden="true"></i> ';
                    items += '<span class="text-uppercase" style="color:#000;"> <?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?></span>';
                    items += '</span>';
                    items += '</div></div>';
                }else{
                  
                    if(T0 != undefined ){
                      items += '<div class="col-sm-4"><div class="well text-left small"><div class="iHeight"><span>';
                      items += T0;
                      items += '</span></div><a href="javascript:app.pup('+t+');">Read more<br></a><br><span>';
                      items += '<i class="fa fa-user-circle fa-3x" aria-hidden="true"></i> ';
                      items += '<span class="text-uppercase" style="color:#000;"> '+N0+'</span>';
                      items += '</span>';
                      items += '</div></div>';
                    }
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
                <a  class="wow fadeInDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
            </div>
         </div>
      </div>
   </div>
   <br><br>   

  <div id="b1" class="Step1 container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="media/Module1Final.jpg" preload="auto" data-setup='{"fluid": true}'>
                  <source src="media/M2_2.mp4" type="video/mp4"></source>
                  <source src="media/M2_2.webm" type="video/webm"></source>
                  <source src="media/M2_2.ogv" type="video/ogv"></source>
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
                  <f><p>Your response: <strong><span class="f1"></span></span></strong></p></f>
                  <div id="my_favorite_latin_words" style="width: 100%; background: #33a0cb; color: #fff; height: 350px; border: 1px solid #ccc;"></div>
               </div>
               <div class="act1" >
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>YOUR PERSPECTIVE</h2></f>
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
                              <input id="response1Text" type="Search" placeholder="Please enter a brief response (less than 20 words) here." class="limit-input form-control" />
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
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                        <li data-target="#myCarousel2" data-slide-to="3"></li>
                        <li data-target="#myCarousel2" data-slide-to="4"></li>
                        <li data-target="#myCarousel2" data-slide-to="5"></li>
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
              <a href="?id=m2/m2s1p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 2 | Section 1</span>
                <span class="sp1"><strong>Measuring What Matters</strong></span></a>
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3  text-right NextBtn">
                <a href="?id=m2/m2s3p1"><span class="ssp2">MODULE 2 | Section 3</span>
                <span class="sp2"><strong>Measuring What Matters</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>
      </footer>      
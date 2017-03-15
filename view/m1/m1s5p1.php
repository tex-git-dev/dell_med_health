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
    $AllWordResY .=$s2data['m1']['sections']['s5']['response1'];
}

$c4 = "select * from records";
$retval=mysqli_query($dbcon,$c4);
$AllWordRes1='';
while($row = mysqli_fetch_row($retval)) {
    $s2data = json_decode($row[7],true); 
    $AllWordRes1 .=$s2data['m1']['sections']['s5']['response1'];
}

$c5 = "select * from records WHERE email NOT IN ('".$_SESSION['username']."')";
$retval1=mysqli_query($dbcon,$c5);
while($row = mysqli_fetch_row($retval1)) {
    $s2data = json_decode($row[7],true);
    $dataT = $s2data['m1']['sections']['s5']['response2'];
    $dataN = $row[2]." ". $row[3];
    if ($dataT) {
?>
<script type="text/javascript">
    app.cArrayT.push("<?php echo $dataT;?>");
    app.cArrayN.push("<?php echo $dataN;?>");
</script>
 
<?php }} ?>

<script src="js/Canvas.js"></script>
<script type="text/javascript">
$(document).ready(function() {
      var section = 's'+app.qs["id"][6];
      var loc0 = app.MData[app.SelecteM].sections[section];
      console.log(loc0)
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
    $('.m1s5p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m1s5p1 #mc1 .modal-content #name').html(name);
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
</script>
<link rel="stylesheet" type="text/css" href="jqcloud/jqcloud.css" />
<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>

<link rel="stylesheet" href="css/m1s5p1.css">
<div class="m1s5p1">
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
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 1 | Section 5</p></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>Unnecessary Care</h2></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
                <a  class="wow fadeInDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
   </div>
    
      <div class="Step1 container s5b2">
      <br>
		<f><h3 class="text-center text-uppercase">Top Contributors to Health Care Waste</h3></f>
		
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8"><f><p>There are multiple contributors to health care waste. Select each of the categories of waste (as defined by the Institute of Medicine) to find out more about them.</p></f></div>
			<div class="col-sm-2"></div>
		</div>
    <br>
	  </div>
	  
    <div class="jumbotron  s5b3">
  <div class="container">

    <div class="row">  
    <div class="col-sm-2"> </div>
      <div class="col-sm-8">
        <canvas id="myCanvas" width="1150" height="700"></canvas>
      </div>
      <div class="col-sm-2"></div>
    </div>

  </div>
</div>
	  
   <!-- Modal -->
  <div class="modal fade" id="myMd1" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content" style="background:#209bcb;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <f><h4 class="modal-title text-uppercase">Unnecessary services</h4></f>
        </div>
        <div class="modal-body">
          <f><p>Services that add to expenses without improving health.</p></f>
          <ul>
            <f><li>Prescribing antibiotics for nonbacterial infections: 70% of patients with acute bronchitis are prescribed antibiotics, a rate that has been increasing over time.</li></f>
            <f><li>Imaging for routine low back pain: an estimated 3.8 million Americans receive routine imaging for low back pain each year.</li></f>
          </ul>
        </div>        
      </div>      
    </div>
  </div>
  <div class="modal fade" id="myMd2" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content"  style="background:#d6ba28;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <f><h4 class="modal-title text-uppercase">Excess Administrative Costs</h4></f>
        </div>
        <div class="modal-body">          
          <ul>
            <f><li>American medical providers spend four times as much time interacting with insurance companies compared to Canadians, who have a single payer system.</li></f>
          </ul>
        </div>        
      </div>      
    </div>
  </div>
  <div class="modal fade" id="myMd3" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content" style="background:#053c29;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <f><h4 class="modal-title text-uppercase">Inefficiently Delivered Services</h4></f>
        </div>
        <div class="modal-body">   
          <f><p>Inefficient care due to systems errors and failures of coordination.</p></f>       
          <ul>
            <f><li>Excessive operating room turnover times</li></f>
            <f><li>Lack of interoperability between electronic health records, resulting in missing information</li></f>
          </ul>
        </div>        
      </div>      
    </div>
  </div>
  <div class="modal fade" id="myMd4" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content" style="background:#c01072;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <f><h4 class="modal-title text-uppercase">Prices That Are Too High</h4></f>
        </div>
        <div class="modal-body">   
          <f><p>Excessive costs of supplies, equipment, and services, which are then passed on to the patient.</p></f>
          <ul>
            <f><li>MRIs cost approximately $1,080 in the U.S. and $280 in France, mostly due to differences in price setting.</li></f>
          </ul>
        </div>        
      </div>      
    </div>
  </div>
<div class="modal fade" id="myMd5" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content"  style="background:#e05946;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <f><h4 class="modal-title text-uppercase">Fraud</h4></f>
        </div>
        <div class="modal-body">   
          <f><p>Billing for services that were not rendered.</p></f>
          <ul>
            <f><li>“Upcoding” for a procedure or diagnosis that is more complex than the actual procedure or diagnosis</li></f>
          </ul>
        </div>        
      </div>      
    </div>
  </div>

  <div class="modal fade" id="myMd6" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content" style="background:#24a48d;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <f><h4 class="modal-title text-uppercase">Missed Prevention Opportunities</h4></f>
        </div>
        <div class="modal-body">   
          <f><p>Failing to provide services to a patient that will prevent future medical need.</p></f>
          <ul>
            <f><li>Failing to provide appropriate immunizations or counseling</li></f>
          </ul>
        </div>        
      </div>      
    </div>
  </div>



<script>
var canvas = document.getElementById('myCanvas');
var ctx  = canvas.getContext('2d');
var imageObj = new Image();

imageObj.onload = function() {
  ctx.drawImage(imageObj, 69, 50);
};    
imageObj.src = 'img/s5img2.png';


drawRectangle(ctx, 800, 20, 290, 100, "2", "");
drawRectangle(ctx, 800, 130, 290, 100, "2", "red");
drawRectangle(ctx, 800, 250, 290, 100, "2", "red");
drawRectangle(ctx, 800, 375, 290, 80, "2", "red");
drawRectangle(ctx, 800, 480, 290, 80, "2", "red");
drawRectangle(ctx, 800, 570, 290, 80, "2", "red");

canvas.addEventListener("mousedown", doMouseDown, false);
//canvas.addEventListener("touchstart", doMouseDown, false);
function   doMouseDown(event)
{
  var CW=$("#myCanvas").width();
  var CH=$("#myCanvas").height();
  var xx = event.pageX - this.offsetLeft - $("#myCanvas").offset().left;
  var yy = event.pageY - this.offsetTop - $("#myCanvas").offset().top;
  var clickedX = (xx*100/CW).toFixed(0);
  var clickedY = (yy*100/CH).toFixed(0);
  console.log(clickedX+" - "+clickedY)
  
    if (clickedX < 94 && clickedX > 68 && clickedY > 3 && clickedY < 17) {
      //alert ('Rectangle number 1');
      $('#myMd1').modal();
    }
    else if (clickedX < 94 && clickedX > 68 && clickedY > 17 && clickedY < 32) {
      //alert ('Rectangle number 2');
       $('#myMd2').modal();
    }
    else if (clickedX < 94 && clickedX > 68 && clickedY > 36 && clickedY < 50) {
      //alert ('Rectangle number 3');
      $('#myMd3').modal();
    }
     else if (clickedX < 94 && clickedX > 68 && clickedY > 54 && clickedY < 66) {
      //alert ('Rectangle number 4');
      $('#myMd4').modal();
    }
    else if (clickedX < 94 && clickedX > 68 && clickedY > 69 && clickedY < 80) {
      //alert ('Rectangle number 5');
      $('#myMd5').modal();
    }
    else if (clickedX < 94 && clickedX > 68 && clickedY > 81 && clickedY < 93) {
      //alert ('Rectangle number 6');
      $('#myMd6').modal();
    } 
}

</script>



	  <br><br>
	<div class="container s5b4">
		<div class="row">
			<div class="col-sm-4 bg-4">
				<f><h5>ADDITIONAL RESOURCES</h5></f>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<f><h4>Too Much Medical Care</h4></f>
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-12"><f><p>We will explore various contributors to health care waste throughout these modules, but first let’s focus on “unnecessary services.” According to a survey of physicians published in JAMA, <strong>nearly half of primary care physicians in the U.S. believe patients in their own practices receive too much medical care</strong>.<sup>2</sup></p></f></div> 
				</div>
				<div class="row">
					<div class="col-sm-12"><f><p>One common source of overuse is antibiotic prescriptions. Unnecessary antibiotics place patients at risk for dangerous infections, such as Clostridium difficile (C. diff). Nevertheless, nearly three quarters of patients with acute bronchitis– a condition that does not routinely warrant antibiotics–are prescribed them anyway.</p></f></div>
				</div>	
				<div class="row">
					<div class="col-sm-12"><f><p class="orng text-uppercase">&gt; <a target="_blank" style="color:#f68122" href="http://jamanetwork.com/journals/jama/fullarticle/1872806">Link to PDF</a></p></f></div>
				</div>
			</div>
			<div class="col-sm-8"><img src="img/s5img3.png" class="img-responsive"></div>
		</div>
	</div>
	  <br><br>
	  
<div class="container-full s1bgcol2">   
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
                           <f><p>List some examples of inefficient or wasteful...</p></f>
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
                           <f><p>How do you think such problems could be fixed?</p></f>
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
   </div>
   <br>
   <br>
   
   <div class="container text-left">               
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-uppercase" style="cursor:pointer;">References  <i style="color:#000; font-size:18px;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>
        <ol id="demo" class="collapse">
            <f><li><p>Institute of Medicine, Committee on the Learning Health Care System in America, Smith M, Saunders R, Stuckhardt L, McGinnis JM, eds. Best Care at Lower Cost: The Path to Continuously Learning Health Care in America. Washington, DC: The National Academies Press; 2013</p></li></f>
            <f><li><p>Sirovich BE, Woloshin S, Schwartz LM. Too little? Too much? Primary care physicians’ views on US health care. Arch Intern Med. 2011;171(17):1582-1585. doi:<a target="_blank" style="color:#f4821f;" href="https://dx.doi.org/10.1001%2Farchinternmed.2011.437">10.1001/archinternmed.2011.437</a></p></li></f>
	    <f><li><p>Barnett ML, Linder JA. Antibiotic prescribing for adults with acute bronchitis in the United States, 1996-2010. JAMA. 2014;311(19):2020-2022.  doi:<a target="_blank" style="color:#f4821f;" href="http://dx.doi.org/10.1001/jama.2013.286141">10.1001/jama.2013.286141</a>.</p></li></f>
        </ol>
   </div> 
   
</div>


<footer class="container-fluid">
         
          <div class="row">
            <div class="col-sm-3 text-left NextBtn">
              <a href="?id=m1/m1s4p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 1 | Section 4</span>
                <span class="sp1"><strong>How Big of a Problem is Healthcare Waste?</strong></span></a>
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3  text-right NextBtn">
                <a href="?id=m1/m1s6p1"><span class="ssp2">MODULE 1 | Section 6</span>
                <span class="sp2"><strong>Understanding Measures</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>
      </footer> 

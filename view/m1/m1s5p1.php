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
    $dataT1 = $s2data['m1']['sections']['s5']['response1'];
    $dataN1 = $row[2]." ". $row[3];
    $dataT = $s2data['m1']['sections']['s5']['response2'];
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

<script src="js/Canvas.js"></script>
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
    $('.m1s5p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m1s5p1 #mc1 .modal-content #name').html(name);
}
app.pup2= function(v){
  var loc =  $(".carouselC .iHeight").eq(v-1).text();
   var name =  $(".carouselC .iHeight").eq(v-1).next().next().next().text();
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
                <a  class="wow InDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
   </div>
    
      <div class="Step1 container s5b2">
      <br>
		<f><h3 class="text-center text-uppercase">Top Contributors to Health Care Waste</h3></f>
	  </div>

    <br>
	  
    <div class="jumbotron  s5b3">
  <div class="container">

    <div class="row">  
    <div class="col-sm-2"> </div>
      <div class="col-sm-8 cHW">
	  <div class="col-md-12 col-sm-12 col-xs-12" style="height:100%;position:absolute;">
	   <div class="row" style="height:16%;">
	   <div class="col-md-7 col-sm-7 col-xs-7"></div> 
	  <div class="col-md-3 col-sm-3 col-xs-3" style="height:100%;cursor:pointer;z-index:2;" id="canvas1">
	  </div>
	  </div>
	  	   <div class="row" style="height:16%;">
	   <div class="col-md-7 col-sm-7 col-xs-7"></div> 
	  <div class="col-md-3 col-sm-3 col-xs-3" style="height:100%;cursor:pointer;z-index: 2;" id="canvas2">
	  </div>
	  </div>
	  
	  <div class="row" style="height:16%;">
	   <div class="col-md-7 col-sm-7 col-xs-7"></div> 
	  <div class="col-md-3 col-sm-3 col-xs-3" style="height:100%;cursor:pointer;z-index: 2;" id="canvas3">
	  </div>
	  </div>
	  
	  <div class="row" style="height:16%;">
	   <div class="col-md-7 col-sm-7 col-xs-7"></div> 
	  <div class="col-md-3 col-sm-3 col-xs-3" style="height:100%;cursor:pointer;z-index: 2;" id="canvas4">
	  </div>
	  </div>
	  
	  	 <div class="row" style="height:16%;">
	   <div class="col-md-7 col-sm-7 col-xs-7"></div> 
	  <div class="col-md-3 col-sm-3 col-xs-3" style="height:100%;cursor:pointer;z-index: 2;" id="canvas5">
	  </div>
	  </div>
	  
	  <div class="row" style="height:16%;">
	   <div class="col-md-7 col-sm-7 col-xs-7"></div> 
	  <div class="col-md-3 col-sm-3 col-xs-3" style="height:100%;cursor:pointer;z-index: 2;" id="canvas6">
	  </div>
	  </div>
	  </div>
     <canvas id="myCanvas" >
	 </canvas> 
      </div>
      <div class="col-sm-2"></div>
    </div>

  </div>
  
    <div class="container">  
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8" style='center;padding-bottom:20px;'>
	  <f><span>There are multiple contributors to health care waste. Select each of the categories of waste (as defined by the Institute of Medicine) to find out more about them.</span></f>
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
            <f><li>American medical providers spend four times as much time interacting with insurance companies compared to Canadians.</li></f>
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

$("#canvas1").click(function(){
 $('#myMd1').modal();
});
$("#canvas2").click(function(){
 $('#myMd2').modal();
});
$("#canvas3").click(function(){
 $('#myMd3').modal();
});
$("#canvas4").click(function(){
 $('#myMd4').modal();
});
$("#canvas5").click(function(){
 $('#myMd5').modal();
});
$("#canvas6").click(function(){
 $('#myMd6').modal();
});

</script>

  <div class="container" style='text-align:center;'>  
	  <f><h3 style="text-transform: uppercase;font-family: 'GothamHTF-Bold';">Antibiotic Prescribing Rates by Different Specialty Groups</h3></f>
   </div> 



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
          <div class="col-sm-12"><f><p>One common source of overuse is antibiotic prescriptions. Unnecessary antibiotics place patients at risk for dangerous infections, such as Clostridium difficile (C. diff). Nevertheless, nearly three quarters of patients with acute bronchitis– a condition that does not routinely warrant antibiotics–are prescribed them anyway (see plot at right).</p></f></div>         
				</div>	
				<div class="row">
					<div class="col-sm-12"><f><p>To learn more about the data in the chart, click <a target="_blank" style="color:#f68122" href="http://jamanetwork.com/journals/jama/fullarticle/1872806">here</a>.</p></f></div>
				</div>
			</div>
			<div class="col-sm-8"><img src="img/s5img3.png" class="img-responsive"></div>
		</div>
	</div>

	  <br><br>
	  
<div class="container-full s1bgcol2">   
   <div class="container text-center s1bgcol">
      <div class="row" id="my-Carousel1">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
      
               <div class="carouselC1">
                  <br>
                   <f><p>Give an example of inefficient or wasteful practices you've personally experienced within the health care system.</p></f>                           
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
                           <f><p>Give an example of inefficient or wasteful practices you've personally experienced within the health care system.</p></f>                           
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
      <br>  

     <div class="row" id="my-Carousel2">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
               <div class="carouselC">
                  <br>
                  <f><p>How do you think such problems could be fixed?</p></f>
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
   </div>   
   <br>
   
   <div class="container text-left  s1bgcol6">               
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
            <div class="col-sm-4 text-left NextBtn">
              <a href="#" onclick="window.location='?id=m1/m1s4p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 1 | Section 4</span>
                <span class="sp1"><strong>How Big of a Problem is Healthcare Waste?</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="#" onclick="window.location='?id=m1/m1s6p1'"><span class="ssp2">MODULE 1 | Section 6</span>
                <span class="sp2"><strong>Focusing on Outcomes</strong></span>
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






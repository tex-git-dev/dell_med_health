
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



<style>
#clcthird
{
padding:0 50px;
}
.customeye
{
display:none;
}
#calcfirst b
{
font-weight:400;
}
.modal-title
{
font-weight:bolder;
}
#clcthird,#clcforth
{
z-index:2;
}
#incsurenceab td ,#incsurenceab th{
border:5px solid #0097B0;;
}
 .bordershow {
    border:1px solid #F58220;
}
 .bordershow1{
    border:1px solid #3B4254;
}
.bordernone
{
 border:1px solid #FFFFFF;
 border-color:!important;
}
.modal-header button
{
color:white!important;
}

.vb1,.vb2,.vb3,.vb4,.vb5,.vb6,.vb7,.vb8,.vb9,.vb10,.vb11,.vb12,.vb13,.vb14,.vb15
{
visibility:hidden;
}
#insurance
{
display:none;
}
.spana,.spanb
{
display:none;
}
.m3s7p1 .bbc
{
background-color:#3B4254;
color:white;
}
.m3s7p1 .rbc
{
background-color:#F58220;
color:white;
}
.m3s7p1 .marginpading{
padding:10px 0px;
margin:5px;
}
.m3s7p1 .mympd1 .row
{
padding:0px 7px;
}
.fa-eye-slash,.fa-eye{
color:#F58220;
cursor:pointer;
}

.m3s7p1 .myportion span {
  display:none;
}

.modal-body, .modal-header {
  background-color:#F58220!important;
  color:white;
}
.modal-title
{
text-align:center;
}
 @media only screen and (max-device-width:480px){
.customeye
{
display:block!important;
}
.customeye1
{
display:none!important;
}
#incsurenceab
{
margin-left:-50px;
 font-size: 10px;
}
#clcthird1
{
}
#clcthird
{
padding:0px !important;
}

}
 @media only screen and (max-device-width:480px){
.bordernone
{
 border:1px solid whitesmoke;
}
}


</style>

<link rel="stylesheet" href="css/m3s7p1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="m3s7p1">
       <div class="jumbotron b1">
         <div class="container text-center bg-2">
            <br>
         <br>         
         <div class="row">
            <div class="col-sm-12"> 
             <f><p data--duration="1.5s">MODULE 3 | Section 7</p></f>
            </div>
         </div>
          <div class="row">
            <div class="col-sm-12"> 
              <f><h2>Applying TDABC to Compare Cost Calculations</h2></f></div>
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

    <div class="Step1 container m3s7b2">
        <div class="row">
            <!-- <div class="col-sm-2"></div> -->
              <div class="col-sm-12">
                <f><h3 class="text-uppercase text-center">ACTIVITY: CALCULATING COSTS</h3></f>
                <br>
                 <f><p>You will recall from Section 4 that utilizing fee-for-service as a basis for costing and reimbursement is not an accurate portrayal of the true costs of care. You will now have the opportunity to compare cost calculation methods for the services provided to a patient during the course of treatment using chargemaster and TDABC calculations. </p></f>
                 <f><p>Read the vignette about Ms. Chen’s visit to an urgent care clinic for an asthma exacerbation episode. Select all of the terms that represent components of care. These will be tallied in a calculator based on the hospital’s chargemaster fees. You can also compare hospital reimbursement based on two different insurance rates. Then, compare these costs to TDABC-costing calculations meant to more accurately reflect the true costs of the services rendered.</p></f>
               </div>
            <!-- <div class="col-sm-2"></div> -->
         </div>
      </div>      
<br>

<br>

<div class="jumbotron m3s7b9"> 

<div class="jumbotron col-md-12" style="padding-top:0px;padding-bottom:0px;">   

<div class="col-md-12 myportion" style="z-index: 1;">
  <!-- <hr style="border-color: #cacaca currentcolor currentcolor;"> -->

<div class="row">
<div class="col-md-4" id="mytextop">
<p style="color:black;">
Ms. Grace Chen knows to avoid the perfume section in the department store. At
53-years-old, she has lived with asthma her entire life. Scented perfumes and other
“triggers” can suddenly cause her airways to spasm, sending her into a fit of
wheezing. Today, she is not entirely sure what set off her symptoms, but she could
feel her chest tightening up as it became more and more difficult to catch her
breath, a sensation that she has experienced many times before. She reached into
her purse to take out her inhaler and took a few puffs. She still felt like she was
trying to breathe through a snorkel to get the air down to her lungs. Realizing that
she may need help, she asked her son to drive her to a nearby urgent care clinic.<br><br>
At the urgent care clinic, Ms. Chen is <a href="" class="span1show">evaluated by a physician</a>, <a href="" class="span2show">given a breathing treatment</a>, and <a href="" class="span3show">undergoes an electrocardiogram (EKG)</a>. Following the breathing treatment, she continues to have significant wheezing and shortness of breath, so
the <a href="" class="span4show">urgent care clinic physician coordinates</a> for an <a href="" class="span5show">ambulance to take her to an emergency room across town</a>. Ms. Chen has had to visit the ER for her asthma
before, but it has been a number of years since the last episode that was this bad.<br><br>
In the ER, <a href="" class="span6show">she is promptly placed in a room</a> and <a href="" class="span7show">evaluated by an emergency medicine physician</a>. Ms. Chen <a href="" class="span8show">undergoes further breathing treatments</a>. A <a href="" class="span9show">chest x-ray is taken</a>, <a href="" class="span10show">blood is drawn for labs</a>, and <a href="" class="span11show">another EKG done</a>. Her labs are ok, her chest x-ray is clear, and her EKG remains normal. The <a href="" class="span12show">physician then decides to
obtain a chest CT (computed tomography) scan</a> “just to be sure nothing was
missed.” The CT scan does not reveal any significant abnormalities. <a href="" class="span13show">Following
more breathing treatments</a> and an <a href="" class="span14show">intravenous administration of solumedrol (a
steroid)</a>, she improves. She ultimately is <a href="" class="span15show">discharged home with self-care
instructions</a>, including directions for using her home inhalers and a prescription for
oral steroids.
</p>
</div>

<div class="col-md-4 col-sm-12 col-xs-12" id="calcfirst">
<p class="bbc" style="padding:36px 0;text-align:center;margin:5px 5px 18px 5px;">Chargemaster</p>
<div class="bbc marginpading mympd1">
<!--Evaluation md start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb1">Evaluation (MD)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span1 spn1">350</span></b>
</div>
</div>
<!--Evaluation md end-->
<!--<p class="vb8">Breathing Tx (Technician) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb2">Breathing Tx (Nurse)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span2 spn2">340.00</span></b>
</div>
</div>
<!--<p class="vb8">Breathing Tx (Technician) </p> end-->
<!--<p class="vb11">EKG (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb3">EKG (Technician)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span3 spn3">550.00</span></b>
</div>
</div>
<!--B<p class="vb11">EKG (Technician)</p> end-->
<!--<p class="vb3">UCC Coordinates (MD)</p>.$ start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb4">UCC Coordinates (MD)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span4 spn4">376.00</span></b>
</div>
</div>
<!--<p class="vb3">UCC Coordinates (MD)</p>.$ end-->
<!--<p class="vb5">Ambulance drives to ER</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb5">Ambulance drives to ER</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span5 spn5">995</span></b>
</div>
</div>
<!--<p class="vb5">Ambulance drives to ER</p> end-->
<!--<p class="vb6">Assigned room (Nurse)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb6">Assigned room (Nurse)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span6 spn6">799</span></b>
</div>
</div>
<!--<p class="vb6">Assigned room (Nurse)</p> end-->
<!--<p class="vb7">Evaluation (ER MD) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb7">Evaluation (ER MD) </p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span7 spn7">536.24</span></b>
</div>
</div>
<!--<p class="vb7">Evaluation (ER MD) </p> end-->
<!--<p class="vb8">Breathing Tx (Technician) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb8">Breathing Tx (Technician) </p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span8 spn8">340.00</span></b>
</div>
</div>
<!--<p class="vb8">Breathing Tx (Technician) </p> end-->
<!--<p class="vb8">X-ray (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb9">X-ray (Technician)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span9 spn9">435</span></b>
</div>
</div>
<!--<p class="vb8">X-ray (Technician)</p> end-->
<!--<p class="vb10">Blood for labs (Nurse and Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb10">Blood for labs (Nurse and Technician)</b>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span10 spn10">410.00</span></b>
</div>
</div>
<!--<p class="vb10">Blood for labs (Nurse and Technician)</p> end-->
<!--<p class="vb11">EKG (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb11">EKG (Technician)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span11 spn11">550</span></b>
</div>
</div>
<!--<p class="vb11">EKG (Technician)</p> end-->
<!--<p class="vb12">Chest CT (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb12">Chest CT (Technician)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span12 spn12">3070</span></b>
</div>
</div>
<!--<p class="vb12">Chest CT (Technician)</p> end-->
<!--<p class="vb8">Breathing Tx (Technician) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb13">Breathing Tx (Technician)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span13 spn13">340</span></b>
</div>
</div>
<!--<p class="vb8">Breathing Tx (Technician) </p> end-->
<!--<p class="vb14">IV steroid (Nurse)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb14">IV steroid (Nurse)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span14 spn14">427</span></b>
</div>
</div>
<!--<p class="vb14">IV steroid (Nurse)</p> end-->
<!--Discharge and education (Nurse) start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p class="vb15">Discharge and education(Nurse)</p>
</div>
<div class="col-md-3">
<b style="display:flex;">$<span class="span15 spn15" >358</span></b>
</div>
</div>
<!--Discharge and education (Nurse) end-->
</div>
<p class="bbc" style="padding:25px 5px;margin:18px 5px 18px 5px;">All charges from chargemaster<br/>
<span style="display:flex;margin-top:20px;">
<span class="text-uppercase" style="display:block;">Total</span> <span class="total1" style="margin-left:68%;">$9900</span>
</span>
</p>
<p class="bbc showainc" style="padding:25px 0;text-align:center;cursor:pointer;margin:5px 5px 18px 5px;display:none;">Show Insurance Rates (A)</p>
<p class="bbc showbinc" style="padding:25px 0;text-align:center;cursor:pointer;margin:5px 5px 18px 5px;display:none;">Show Insurance Rates (B)</p>

<div class="col-sm-12 text-center">
 <p class="btn text-uppercase calc1" style="padding:10px 40px;border:2px solid black;color:#0097B0;font-weight:bold; margin-bottom:10px;background-color:white;">
Calculate
 </p>
 <br/> <br/>
  <p class="showallspan btn" style="padding:10px 40px;border:2px solid black;color:#0097B0;font-weight:bold; margin-bottom: 40px;background-color:white;min-width:220px;">
 Quick add all costs
 </p>
 </div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12" id="insurance">
<div style="position:absolute;top:92%;left: -7px;font-size:20px;cursor:pointer;" id="clcarrow">
	&lt;
</div>
<p class="bbc spantmp ComminsAB" style="padding:36px 0;text-align:center;margin:5px 5px 18px 5px;">Commercial Insurance __ (30% Negotiated Rate)</p>
<p class="bbc spana ComminsAB" style="padding:36px 0;text-align:center;margin:5px 5px 18px 5px;">Commercial Insurance A (30% Negotiated Rate)</p>
<p class="bbc spanb ComminsAB" style="padding:36px 0;text-align:center;margin:5px 5px 18px 5px;">Commercial Insurance B (30% Negotiated Rate)</p>
<div class="bbc marginpading mympd1">
<!--Evaluation md start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Evaluation (MD)</p>
</div>
<div class="col-md-3">
<span class="spana">$105</span>
<span class="spanb">$175</span>
</div>
</div>
<!--Evaluation md end-->

<!--<p class="vb8">Breathing Tx (Technician) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Breathing Tx (Nurse)</p>
</div>
<div class="col-md-3">
<span class="spana">$102</span>
<span class="spanb">$170</span>
</div>
</div>
<!--<p class="vb8">Breathing Tx (Technician) </p> end-->


<!--<p class="vb11">EKG (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>EKG (Technician)</p>
</div>
<div class="col-md-3">
<span class="spana">$165</span>
<span class="spanb">$275</span>
</div>
</div>
<!--B<p class="vb11">EKG (Technician)</p> end-->

<!--<p class="vb3">UCC Coordinates (MD)</p>.$ start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>UCC Coordinates (MD)</p>
</div>
<div class="col-md-3">
<span class="spana">$112.8</span>
<span class="spanb">$188</span>
</div>
</div>
<!--<p class="vb3">UCC Coordinates (MD)</p>.$ end-->

<!--<p class="vb5">Ambulance drives to ER</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Ambulance drives to ER</p>
</div>
<div class="col-md-3">
<span class="spana">$298.5</span>
<span class="spanb">$497.5</span>
</div>
</div>
<!--<p class="vb5">Ambulance drives to ER</p> end-->

<!--<p class="vb6">Assigned room (Nurse)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p >Assigned room (Nurse)</p>
</div>
<div class="col-md-3">
<span class="spana">$239.7</span>
<span class="spanb">$399.5</span>
</div>
</div>
<!--<p class="vb6">Assigned room (Nurse)</p> end-->

<!--<p class="vb7">Evaluation (ER MD) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Evaluation (ER MD) </p>
</div>
<div class="col-md-3">
<span class="spana">$168.97</span>
<span class="spanb">$281.62</span>
</div>
</div>
<!--<p class="vb7">Evaluation (ER MD) </p> end-->

<!--<p class="vb8">Breathing Tx (Technician) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Breathing Tx (Technician) </p>
</div>
<div class="col-md-3">
<span class="spana">$102</span>
<span class="spanb">$170</span>
</div>
</div>
<!--<p class="vb8">Breathing Tx (Technician) </p> end-->


<!--<p class="vb8">X-ray (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>X-ray (Technician)</p>
</div>
<div class="col-md-3">
<span class="spana">$130.5</span>
<span class="spanb">$217.5</span>
</div>
</div>
<!--<p class="vb8">X-ray (Technician)</p> end-->


<!--<p class="vb10">Blood for labs (Nurse and Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Blood for labs (Nurse and Technician)</p>
</div>
<div class="col-md-3">
<span class="spana">$123</span>
<span class="spanb">$205</span>
</div>
</div>
<!--<p class="vb10">Blood for labs (Nurse and Technician)</p> end-->


<!--<p class="vb11">EKG (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>EKG (Technician)</p>
</div>
<div class="col-md-3">
<span class="spana">$165</span>
<span class="spanb">$275</span>
</div>
</div>
<!--<p class="vb11">EKG (Technician)</p> end-->



<!--<p class="vb12">Chest CT (Technician)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Chest CT (Technician)</p>
</div>
<div class="col-md-3">
<span class="spana">$921</span>
<span class="spanb">$1535</span>
</div>
</div>
<!--<p class="vb12">Chest CT (Technician)</p> end-->


<!--<p class="vb8">Breathing Tx (Technician) </p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Breathing Tx (Technician) </p>
</div>
<div class="col-md-3">
<span class="spana">$102</span>
<span class="spanb">$170</span>
</div>
</div>
<!--<p class="vb8">Breathing Tx (Technician) </p> end-->


<!--<p class="vb14">IV steroid (Nurse)</p> start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>IV steroid (Nurse)</p>
</div>
<div class="col-md-3">
<span class="spana">$128.1</span>
<span class="spanb">$213.5</span>
</div>
</div>
<!--<p class="vb14">IV steroid (Nurse)</p> end-->


<!--Discharge and education
(Nurse) start-->
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<p>Discharge and education(Nurse)</p>
</div>
<div class="col-md-3">
<span class="spana">$107.4</span>
<span class="spanb">$179</span>
</div>
</div>
<!--Discharge and education
(Nurse) end-->

</div>

<p class="bbc" style="padding:25px 5px;margin:18px 5px 18px 5px;">All charges from chargemaster<br/>
<span style="margin-top:20px;display:flex;">
<span class="text-uppercase" style="display:block;">Total</span>  <span class="spana" style="margin-left: 68%;">$3000</span>
<span class="spanb" style="margin-left: 68%;">$5000</span>
 </span>
</p>
</div>

</div>



</div>
</div>


<div class="col-md-12" style="background-color:whitesmoke;padding:30px;text-align:center; margin-bottom: 50px">
<p>
Now take a look at using TDABC to calculate the likely <b>actual cost</b> to the hospital for providing these services.
Select the eye icons under ‘See Cost Breakdown’ to see how costs have been calculated.
</p>
</div class="Clearfix"></div>
 <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3" id="clcthird">   
                                                                        
 <table class="table" id="clcthird1">

      <tr>
        <td class="text-center rbc bordernone" colspan="3" style="padding:25px 0px;">TDABC<br/>
		(Estimated actual cost to the hospital)
		</td>
		<td class="bordernone">
		</td>
        <td class="rbc text-center bordernone customeye1" style="padding:35px 0px;">See Cost Breakdown</td>
		<td class="customeye"></td>
     </tr>

	
	<tr>
	<td class="bordernone" colspan="5"></td>
	</tr>
      <tr>
        <td class="rbc bordershow" colspan="2">Evaluation (MD)</td>
        <td class="rbc bordershow">$45.40</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal1"></i>
		</td>
      </tr>
	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal1" ></i>
	  </td>
	  </tr>
      <tr>
        <td class="rbc bordershow" colspan="2">Breathing Tx (Nurse)</td>
        <td class="rbc bordershow">$28.04</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal2"></i>
		</td>
      </tr> 
	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal2" ></i>
	  </td>
	  </tr>
      <tr>
        <td class="rbc bordershow" colspan="2">EKG (Technician)</td>
        <td class="rbc bordershow">$65.75</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal3"></i>
		</td>
      </tr> 
	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal3"></i>
	  </td>
	  </tr>	  

      <tr>
        <td class="rbc bordershow" colspan="2">UCC Coordinates (MD) </td>
        <td class="rbc bordershow">$24.80</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal4"></i>
		</td>
      </tr> 
	  	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal4"></i>
	  </td>
	  </tr>

      <tr>
        <td class="rbc bordershow" colspan="2">Ambulance drives to ER</td>
        <td class="rbc bordershow">$34.69</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal5"></i>
		</td>
      </tr> 
	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal5"></i>
	  </td>
	  </tr>

      <tr>
        <td class="rbc bordershow" colspan="2">Assigned room (Nurse)</td>
        <td class="rbc bordershow">$13.68</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal6" ></i>
		</td>
      </tr>
	  	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal6"></i>
	  </td>
	  </tr>

      <tr>
        <td class="rbc bordershow" colspan="2">Evaluation (ER MD)</td>
        <td class="rbc bordershow">$65.87</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal7"></i>
		</td>
      </tr> 
	  	  	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal7"></i>
	  </td>
	  </tr>

      <tr>
        <td class="rbc bordershow" colspan="2">Breathing Tx (Nurse)</td>
        <td class="rbc bordershow">$29.47</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal8" ></i>
		</td>
      </tr> 
	   <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal8"></i>
	  </td>
	  </tr>

      <tr>
        <td class="rbc bordershow" colspan="2">X-ray (Technician)</td>
        <td class="rbc bordershow">$17.84</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal9"></i>
		</td>
      </tr> 
	  	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal9"></i>
	  </td>
	  </tr>


      <tr>
        <td class="rbc bordershow" colspan="2">Blood for labs (Nurse and Technician)</td>
        <td class="rbc bordershow">$136.27</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal10"></i>
		</td>
      </tr> 
	 <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal10"></i>
	  </td>
	  </tr>
  
       <tr>
        <td class="rbc bordershow" colspan="2">EKG (Technician)</td>
        <td class="rbc bordershow">$65.75</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal3"></i>
		</td>
      </tr>
	  	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal3"></i>
	  </td>
	  </tr>	  

      <tr>
        <td class="rbc bordershow" colspan="2">Chest CT (Technician)</td>
        <td class="rbc bordershow">$301.12</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal12"></i>
		</td>
      </tr>  
	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal12"></i>
	  </td>
	  </tr>
      
	  <tr>
        <td class="rbc bordershow" colspan="2">Breathing Tx (Nurse)</td>
        <td class="rbc bordershow">$27.82</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal13"></i>
		</td>
      </tr>
	    <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal13"></i>
	  </td>
	  </tr>

	  <tr>
        <td class="rbc bordershow" colspan="2">IV steroid (Nurse)</td>
        <td class="rbc bordershow">$53.41</td>
		<td class="bordernone"></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal14"></i>
		</td>
      </tr> 
	  	  	  <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal14"></i>
	  </td>
	  </tr>

	  <tr>
        <td class="rbc bordershow" colspan="2">Discharge and education(Nurse)</td>
        <td class="rbc bordershow">$21.45</td>
		<td></td>
		<td class="bordernone text-center customeye1">
		<i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal15"></i>
		</td>
      </tr>
	   <tr class="customeye">
	  <td>
	  <i class="fa fa-eye-slash" data-toggle="modal" data-target="#myModal15"></i>
	  </td>
	  </tr>
	 <tr>
	<td class="bordernone"></td>
	</tr>
      <tr>
        <td class="rbc bordershow" colspan="3" style="padding:20px 10px;">All charges from chargemaster</td>
		<td class="bordernone"></td>
      </tr>
	  <tr>
        <td class="rbc bordershow" colspan="2" style="padding:0px 5px 20px 5px;">TOTAL</td>
		 <td class="rbc bordershow" style="padding:0px 5px 20px 5px;">$930</td>
		<td class="bordernone"></td>
      </tr>
	    <tr>
	   <td colspan="3" class="bordernone">
	   </td>
       </tr>
       <tr>
	   <td colspan="3" class="text-center" id="comparetocm">
	    <button class="btn" style="padding:10px 40px;border:2px solid black;color:#0097B0;font-weight:bold; margin-bottom: 40px;background-color:white;">
	   Compare to Chargemaster
 </button>
	   </td>
       </tr>	   

  </table>
  </div>
<div class="col-md-4 col-sm-12 col-xs-12" id="clcforth" style="display:none;margin-left:10px;">     
<div style="position:absolute;top:92%;left: -7px;font-size:20px;cursor:pointer;" id="clcarrow2">
	&lt;
</div>                                                                            
 <table class="table">

      <tr>
        <th class="text-center bbc" colspan="3" style="padding:35px 0px;">
		Chargemaster
	    </th>
     </tr>
	<tr>
	<td colspan="5" class="bordernone"></td>
	</tr>
      <tr>
        <td class="bbc bordershow1" colspan="2">Evaluation (MD)</td>
        <td class="bbc bordershow1">$350</td>
      </tr>
      <tr>
        <td class="bbc bordershow1" colspan="2">Breathing Tx (Nurse)</td>
        <td class="bbc bordershow1">$340.00</td>
      </tr> 
      <tr>
        <td class="bbc bordershow1" colspan="2">EKG (Technician)</td>
       <td class="bbc bordershow1">$550.00</td>
      </tr>  

      <tr>
        <td class="bbc bordershow1" colspan="2">UCC Coordinates (MD) </td>
        <td class="bbc bordershow1">$376.00</td>
      </tr> 

      <tr>
        <td class="bbc bordershow1" colspan="2">Ambulance drives to ER</td>
        <td class="bbc bordershow1">$995</td>
      </tr> 

      <tr>
        <td class="bbc bordershow1" colspan="2">Assigned room (Nurse)</td>
        <td class="bbc bordershow1">$799</td>
      </tr>

      <tr>
        <td class="bbc bordershow1" colspan="2">Evaluation (ER MD)</td>
        <td class="bbc bordershow1">$536.24</td>
      </tr> 

      <tr>
        <td class="bbc bordershow1" colspan="2">Breathing Tx (Nurse)</td>
        <td class="bbc bordershow1">$340.00</td>
      </tr> 

      <tr>
        <td class="bbc bordershow1" colspan="2">X-ray (Technician)</td>
        <td class="bbc bordershow1">$435</td>
      </tr> 


      <tr>
        <td class="bbc bordershow1" colspan="2">Blood for labs (Nurse and Technician)</td>
        <td class="bbc bordershow1">$410.00</td>
      </tr> 
  
       <tr>
        <td class="bbc bordershow1" colspan="2">EKG (Technician)</td>
        <td class="bbc bordershow1">$550</td>
      </tr> 

      <tr>
        <td class="bbc bordershow1" colspan="2">Chest CT (Technician)</td>
        <td class="bbc bordershow1">$3070</td>
      </tr>  
      
	  <tr>
        <td class="bbc bordershow1" colspan="2">Breathing Tx (Nurse)</td>
        <td class="bbc bordershow1">$340</td>
      </tr>

	  <tr>
        <td class="bbc bordershow1" colspan="2">IV steroid (Nurse)</td>
        <td class="bbc bordershow1">$427</td>
      </tr> 

	  <tr>
        <td class="bbc bordershow1" colspan="2">Discharge and education(Nurse)</td>
        <td class="bbc bordershow1">$358</td>
      </tr>
	 <tr>
	<td class="bordernone" colspan="3"></td>
	</tr>
      <tr>
        <td class="bbc bordershow1" colspan="3" style="padding:20px 10px;">All charges from chargemaster</td>
		<td class="bordernone"></td>
      </tr>
	  <tr>
        <td class="bbc bordershow1" colspan="2" style="padding:0px 5px 20px 5px;">TOTAL</td>
		 <td class="bbc bordershow1" style="padding:0px 5px 20px 5px;">$9876.24</td>
		<td class="bordernone"></td>
      </tr>  

  </table>
  </div>


  <div class="col-md-12" style="background-color:whitesmoke;padding:30px;">
 <p>
  In our current system, insurance companies attempt to negotiate the hospital’s charges lower. In response, hospital
administrators raise chargemaster prices to keep profit margins high. As a result, chargemaster prices are hugely inflated,
seemingly arbitrary numbers that have very little to do with the true costs of care. In a system that bases hospital
reimbursement and patient costing mechanisms on TDABC-derived calculations or similar, it is likely insurance companies
would negotiate for percentages above the costing total, as hospitals and providers need a margin in order to run.
However, these negotiations would be derived from a realistic and non-arbitrary starting point.
  </p>
  <p>
  The below table shows the difference between these costing mechanisms for Ms. Chen’s asthma exacerbation episode.
  </p>
  
 <div class="col-md-12" style="margin-top:30px;"> 
  <div class="col-md-6  col-md-offset-3" id="incsurenceab1"> 

<table class="table table-bordered" id="incsurenceab">
      <tr>
        <th style="padding:30px;" class="text-center" colspan="4">Insurance Company A</th>
        <th style="padding:30px;" class="text-center" colspan="4">Insurance Company B</th>
      </tr>
      <tr>
        <td colspan="3">Chargemaster - 30%</td>
        <td>$2970</td>
		 <td colspan="3">Chargemaster - 50%</td>
        <td>$4950</td>
      </tr>
      <tr>
        <td colspan="3">TDABC + 30%</td>
        <td>$1211</td>
		 <td colspan="3">TDABC + 50%</td>
        <td>$1397</td>
      </tr>
  </table>
 </div>
 </div>
 </div>


<div class="Step1 container m3s7b2">
        <div class="row">            
              <div class="col-sm-12">
                <f><h3 class="text-uppercase text-center">Let's check our understanding</h3></f>
                               <br>
                 <f><p>Below are questions that will check your understanding of reimbursement mechanisms. If you need a refresher on the terms relating to these mechanisms, refer to<a href="?id=m3/m3s4p1" style=" text-decoration: none;font-weight:bold;color:black;" target="_blank"> Section 4, The Costs of Care: Different Approaches.</a> These questions will help you apply and synthesize the information presented here and over the course of this module. </p></f>
               </div>
         </div>
</div> 
<br>

<!-- Mcq start -->

<div class="container-full m3s7mcq m3s7b4">    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators"> 
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>            
            <li data-target="#myCarousel" data-slide-to="2" ></li>            
            <li data-target="#myCarousel" data-slide-to="3" ></li>                                 
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active" id="0">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques" style="padding-bottom: 0px;">This year Grace is covered by Insurance plan A. This includes:</p></f>
                                <ul class="text-left">
                                  <li>Co-pay: $150 for Emergency Department; $35 for urgent care visits</li>
                                  <li>Deductible: $1000</li>
                                  <li>Co-insurance: 10% (after deductible)</li>
                                </ul> 
                                <f><p class="ques text-center">How much would Grace have to pay for this asthma exacerbation episode if she has not spent anything in health care costs toward her deductible yet this year?</p></f>
                                <div class="row">
                                <div class="col-sm-12" >
                                    <div class="row eq-h">
                                      <?php
                                           
                                            $array = array('$1200+ $185 co-pay = $1385', '$1200', '$185 co-pay', '$300 + $185 co-pay = $485');
                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "$1200+ $185 co-pay = $1385" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans customansclass1" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
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
                                    <f><p class="text-muted">Question 1 of 4</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
                                        <p class="txtincrect1"></p>
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
                                <f><p class="ques" style="padding-bottom: 0px;">In the year following this episode, Grace’s employer changes their insurance package to include coverage from Insurer B only. This plan includes:</p></f>
                                  <ul  class="text-left">
                                      <li>Co-pays: $150 for Emergency Department; $35 for urgent care visits </li>
                                      <li>Deductible= $5000</li>
                                      <li>Co-insurance: 20% (after deductible) </li>                                      
                                  </ul>
                                <f><p class="ques">How much would Grace have to pay for this asthma exacerbation episode if she has not spent anything in health care costs toward her deductible yet this year?</p></f>                                  
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('$5000 + $185 co-pay = $5185', '$5000', '$185 co-pay', '$1000 + $185 co-pay = $1185');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "$5000 + $185 co-pay = $5185" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans customansclass2" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
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
                                    <f><p class="text-muted">Question 2 of 4</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
									<p class="txtincrect2"></p>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
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

            <div class="item" id="2">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques">What if Grace were uninsured&mdash;what price would she have to pay for this episode?</p></f>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('$9900', '$930', '$0', '$3000');

                                            $numRandoms = 4;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "$9900" ? 1 : 0;
                                                echo '<div class="col-sm-3">
                                                    <div class="ans customansclass3" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
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
                                    <f><p class="text-muted">Question 3 of 4</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
									<p class="txtincrect3"></p>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
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

            <div class="item" id="3">
                <div class="container-full text-center white">
                    <div class="container">    
                        <div class="row">
                        <div class="col-sm-2" ></div>
                            <div class="col-sm-8" >
                                <f><p class="ques" style="padding-bottom: 0px;">Consider in the future Grace visits an emergency department at a different hospital where her insurance has negotiated a hospital-based bundled payment for asthma care. In this scenario, the insurance pays a set bundled payment of $1500 for all care related to the acute episode.</p></f>
                                <f><p class="ques" style="padding-bottom: 5px;">Grace’s current insurance plan includes:</p></f>
                                  <ul class="text-left">
                                      <li>Co-pay: $150 for Emergency Department</li>
                                      <li>Deductible: $1000</li>
                                      <li>Co-insurance: 10% (after deductible)</li>
                                  </ul>
                                 <f><p class="ques">How much would Grace have to pay for this asthma exacerbation episode if she has not spent anything in health care costs toward her deductible yet this year?</p></f>   
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="row eq-h">
                                       <?php
                                            //$arr = array(1, 2, 3, 4, 5);
                                            $array = array('$1200', '$1500', '$0');

                                            $numRandoms = 3;

                                            $random = randomArray($array, $numRandoms);
                                            $ans = array(true, false, false, false);
                                            //print_r($random);

                                            foreach ($random as $key => $value) {
                                                $ans = $value == "$1200" ? 1 : 0;
                                                echo '<div class="col-sm-4">
                                                    <div class="ans customansclass4" onclick="checkAnswer(this, ' . $ans . ');">' . $value . ' </div>
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
                                    <f><p class="text-muted">Question 4 of 4</p></f>
                                </div>
                            </div>
                            <div class="row msg incorrectMsg text-center">
                                <div class="col-sm-12" >
                                    <f><h3>Incorrect.</h3></f>
									<p class="txtincrect4"></p>
                                    <center><div class="msgBtn" onclick="TryA();">Try again</div></center>
                                </div>
                            </div>
                            <div class="row msg correctMsg text-center">
                                <div class="col-sm-12 " >
                                    <f><h3>Correct!</h3></f>
                                    <!---<center><div class="msgBtn" href="#myCarousel" data-slide="next">Next Question <!-- <i class="fa fa-arrow-right" aria-hidden="true"></i> </div></center>-->
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-2" ></div>
                        </div>
                    </div>
                </div>
              </div>




                  <a class="left  carousel-control m3s7b7" href="#myCarousel" role="button" data-slide="prev" style="display:none;">
                    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                  </a>
                  <a class="right  carousel-control m3s7b7" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                  </a>
            </div>
    </div>
</div>
<!-- Mcq end -->


<br>

<div class="container text-center s1bgcol" style="background-color:white;">
      <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="response1">
               <div class="carouselC1">
                  <br>                 
                  <f><p>
				  There is a ten-fold difference between the likely TDABC amount and the chargemaster for Ms. Chen's asthma exacerbation episode. Reflect on the reasons for this difference as well as the proposed charging models. Does TDABC solve the problem? Where does it not?
				  </p></f> 
                  <f><p>Scroll through user responses.</p></f>
                  <div class="well">
                  <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="false">
                     <!-- Indicators -->
                     <ol class="carousel-indicators ccl">
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
               
               <div class="act1">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>Your Perspective</h2></f>
                           <div class="line4"></div>
                           <f><p>There is a ten-fold difference between the likely TDABC amount and the chargemaster for Ms. Chen's asthma exacerbation episode. Reflect on the reasons for this difference as well as the proposed charging models. Does TDABC solve the problem? Where does it not?</p></f>
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
   </div>

    

</div>


<footer class="container-fluid">         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="?id=m3/m3s6p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <label class="ssp1">MODULE 3 | Section 6</label>
                <label class="sp1"><strong>Care Redesign Case: MD Anderson (TDABC)</strong></label></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="?id=m3/m3s8p1"><label class="ssp2">MODULE 3 | Section 8</label>
                <label class="sp2"><strong>Conclusion: Understanding Costs of Care</strong></label>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="row">            
            <div class="col-sm-12"><a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="img/CC.png"  width="auto" height="auto"></a></div>            
          </div>
          
</footer> 

<!-- Modal 1 start -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Evaluation: 15 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource 
      </div>
	  
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Urgent Care Physician:
    </div>
   <div class="col-md-2">
   $185,000+
   </div>
   <div class="col-md-2">
   15,000+
   </div>
    
    <div class="col-md-2">
   8,000+
   </div>
   <div class="col-md-2">
    $208,000
   </div>
   <div class="col-md-1">
    $17,333
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $17,333 (Monthly cost of resource) / 112 hours (Monthly available hours)
         = $155/hour
  </div>
  
  
    <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
  $500,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $1000+
   </div>
  <div class="col-md-1">
      $5000=
   </div>
   <div class="col-md-2">
    $56,000
   </div>
   <div class="col-md-1">
    $4667
   </div>
      </div>
  
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $4667 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $6.40/hour
  </div> 
  <br/><br/>
        Total ($155 * 0.25) + ($6.40 * 0.25) = $45.40  
     </div>
      </div>
    </div>
  </div>
<!-- Modal 1 end -->

<!-- Modal 2 start -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Breathing Treatment: 20 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
      </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-1">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-1">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-3">
    Nurse:
    </div>
   <div class="col-md-1">
   $65,000+
   </div>
   <div class="col-md-2">
   9,000+
   </div>
    <div class="col-md-2">
   10,800+
   </div>
    <div class="col-md-1">
    2,560=
   </div> 
  
   <div class="col-md-2">
   $87,360 
   </div>
   <div class="col-md-1">
    $7,280
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
          $7,280(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $65/hour
  </div>
  
  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
    $500,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $1000+ 
   </div>
  <div class="col-md-1">
      $5000= 
   </div>
   <div class="col-md-2">
    $56,000
   </div>
   <div class="col-md-1">
    $4667
   </div>
      </div>

    
      <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $4667 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $6.40/hour
       </div> 
  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-2">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-2">
    Nebulizer:
    </div>
   <div class="col-md-2">
    $200
   </div>
   <div class="col-md-2" style="display:flex;">
   1yr+
  </div>  
  <div class="col-md-2">
      $40=
   </div>
   <div class="col-md-2">
    $240
   </div>
   <div class="col-md-2">
    $20
   </div>
      </div>
    
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $20 (Monthly cost of resource) / 730 hours (Monthly available hours)
        = $0.03/hour
  </div> 
  <p><br/>Albuterol: 5mg/ml: $4.47</p>
<p> Total ($65 * 0.33) + ($6.40 * .33) + ($0.03 * .33) + $4.47 = $28.04 </p>
     </div>
      </div>
    </div>
  </div>
  </div>
<!-- Modal 2 end -->

<!-- Modal 3 start -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">EKG: 20 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource 
     </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-2">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Technician:
    </div>
   <div class="col-md-2">
   $50,000+
   </div>
   <div class="col-md-2">
   7,000+
   </div>
    <div class="col-md-2">
   2,500=
   </div>
   <div class="col-md-2">
   $59,500
   </div>
   <div class="col-md-2">
   $4,958
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $4,958(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $44/hour
  </div>
  
  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
    $500,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $1000+ 
   </div>
  <div class="col-md-1">
      $5000= 
   </div>
   <div class="col-md-2">
    $56,000
   </div>
   <div class="col-md-1">
    $4667
   </div>
      </div>
    
   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $4667 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $6.40/hour
  </div> 

  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Electrocardiogram Machine:
    </div>
   <div class="col-md-2">
    $50,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+ 
  </div>  
  <div class="col-md-2">
      $200=
   </div>
   <div class="col-md-2">
    $5200
   </div>
   <div class="col-md-2">
    $433
   </div>
      </div>
    
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $433 (Monthly cost of resource) / 730 hours (Monthly available hours)
        = $0.60/hour
  </div> 
  <p><br/>Electrodes (10): $5.30 each</p>
<p> Total ($44 * 0.25) + ($6.40 * .25) + ($0.60 * .25) + ($5.30 * 10) = $65.75 </p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 3 end -->


<!-- Modal 4 start -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Ambulance Coordination: 10 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource  
      </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-2">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Technician:
    </div>
   <div class="col-md-2">
   $185,000+
   </div>
   <div class="col-md-2">
   15,000+
   </div>
    <div class="col-md-2">
   8,000=
   </div>
   <div class="col-md-2">
   $339,705
   </div>
   <div class="col-md-2">
   $28309
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $28309(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $155/hour
  </div>
<p> Total ($155 * 0.16) = $25 </p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 4 end -->



<!-- Modal 5 start -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Ambulance Drives to ER: 15 minutes/10 miles</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
  </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-2">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Driver:
    </div>
   <div class="col-md-2">
   $25000+
   </div>
   <div class="col-md-2">
   2,500+
   </div>
    <div class="col-md-2">
   3,000=
   </div>
   <div class="col-md-2">
   $30,500
   </div>
   <div class="col-md-2">
   $2,542
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $2,542(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $22.70/hour

  </div>

  
       <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-2">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    EMT (X2):
    </div>
   <div class="col-md-2">
   $32,000+
   </div>
   <div class="col-md-2">
   3,000+
   </div>
    <div class="col-md-2">
   3,000=
   </div>
   <div class="col-md-2">
   $38,000
   </div>
   <div class="col-md-2">
   $3,167
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $3,167(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $28.27/hour
  </div>
  
  
  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Ambulance:
    </div>
   <div class="col-md-2">
   $125,000
   </div>
   <div class="col-md-1" style="display:flex;">
   4yr+ 
  </div>  
  <div class="col-md-2">
      $24,000=
   </div>
   <div class="col-md-2">
    $55,250
   </div>
   <div class="col-md-1">
    $4,604
   </div>
    </div>
    
   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $4,604 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $6.30/hour
  </div> 

    
  <p>Cost per mile = $1.33</p>
<p>Total ($22.70 * 0.25) + ($28.27 * .25)(2) + ($6.30 * .25) + ($1.33 * 10) =
$34.69 </p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 5 end -->


<!-- Modal 6 start -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Assigned Room: 15 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
      </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-2">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Nurse:
    </div>
   <div class="col-md-2">
   $65,000+
   </div>
   <div class="col-md-2">
   9,000+
   </div>
    <div class="col-md-2">
   10,800=
   </div>
   <div class="col-md-2">
   $87,360
   </div>
   <div class="col-md-2">
   $7,280
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $7,280(Monthly cost of resource) / 112 hours (Monthly available hours)
        = $44/hour
  </div>
  
  
  
       <div class="col-md-12">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
  $850,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $2000+ 
   </div>
  <div class="col-md-1">
      $7000= 
   </div>
   <div class="col-md-2">
    $94,000
   </div>
   <div class="col-md-1">
    $7,833
   </div>
      </div>
  
  <div class="col-md-12" style="margin-top:20px;">
            $7,833 (Monthly cost of resource) / 730 hours (Monthly available hours)

         = $10.73/hour
  </div> 
        
Total ($44 * 0.25) + ($10.73 * .25) = $13.68 
     </div>
      </div>
    </div>
  </div>
<!-- Modal 6 end -->

<!-- Modal 7 start -->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Evaluation: 15 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
      </div>
     <div class="col-md-12">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Urgent Care Physician:
    </div>
   <div class="col-md-2">
   $315,000+
   </div>
   <div class="col-md-2">
   15,000+
   </div>
    
    <div class="col-md-2">
   12,000=
   </div>
   <div class="col-md-2">
   $339,705
   </div>
   <div class="col-md-1">
    $28309
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
        $28309 (Monthly cost of resource) / 112 hours (Monthly available hours)
         = $252.76/hour
  </div>
  
  
       <div class="col-md-12">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
  $850,000 
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $2000+ 
   </div>
  <div class="col-md-1">
      $7000= 
   </div>
   <div class="col-md-2">
    $94,000
   </div>
   <div class="col-md-1">
    $7,833
   </div>
      </div>
  
  <div class="col-md-12" style="margin-top:20px;">
        $7,833 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $10.73/hour
  </div>        
Total ($252.76 * 0.25) + ($10.73 * 0.25) = $65.87 
     </div>
      </div>
    </div>
  </div>
<!-- Modal 7 end -->

<!-- Modal 8 start -->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Breathing Treatment: 20 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
    </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-1">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-1">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-3">
    Nurse:
    </div>
   <div class="col-md-1">
   $65,000+
   </div>
   <div class="col-md-2">
   9,000+
   </div>
    <div class="col-md-2">
   10,800+
   </div>
    <div class="col-md-1">
    2,560=
   </div> 
  
   <div class="col-md-2">
   $87,360 
   </div>
   <div class="col-md-1">
    $7,280
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $7,280(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $65/hour
  </div>
  
  
       <div class="col-md-12">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
  $850,000 
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $2000+ 
   </div>
  <div class="col-md-1">
      $7000= 
   </div>
   <div class="col-md-2">
    $94,000
   </div>
   <div class="col-md-1">
    $7,833
   </div>
      </div>
  
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $7,833 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $10.73/hour
  </div>   

  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-2">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-2">
    Nebulizer:
    </div>
   <div class="col-md-2">
    $200
   </div>
   <div class="col-md-2" style="display:flex;">
   1yr+  
  </div>  
  <div class="col-md-2">
      $40= 
   </div>
   <div class="col-md-2">
    $240
   </div>
   <div class="col-md-2">
    $20
   </div>
      </div>
    
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $20 (Monthly cost of resource) / 730 hours (Monthly available hours)
        = $0.03/hour
  </div> 
  <p>Albuterol: 5mg/ml: $4.47</p>
<p> Total ($65 * 0.33) + ($10.73 * .33) + ($0.03 * .33) + $4.47 = $29.47 </p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 8 end -->

<!-- Modal 9 start -->
  <div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Chest X-Ray: 20 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
Expanses Attribute to resource / Available capacity of resource 
      </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-2">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Technician::
    </div>
   <div class="col-md-2">
   $50,000+
   </div>
   <div class="col-md-2">
   7,000+
   </div>
    <div class="col-md-2">
   2,500=
   </div>
   <div class="col-md-2">
   $59,500
   </div>
   <div class="col-md-2">
   $4,958
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
          $4,958(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $44/hour
     </div>


  
  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-2">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-2">
    Examination Room::
    </div>
   <div class="col-md-2">
   $1,00,000
   </div>
   <div class="col-md-1" style="display:flex;">
  20yr+ 
  </div>  
  <div class="col-md-2">
     $7,000+
   </div>
  <div class="col-md-2">
   15,000=
   </div>
   <div class="col-md-2">
    $72,000
   </div>
   <div class="col-md-1">
    $6,000
   </div>
    </div>
    
   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
       $6,000 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $8.22/hour
  </div> 


  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-2">
    X-ray Machine:
    </div>
   <div class="col-md-2">
   $130,000
   </div>
   <div class="col-md-1">
  10yr+
  </div>  
  <div class="col-md-2">
     $3,000=
   </div>
   <div class="col-md-2">
  $16,00
   </div>
   <div class="col-md-1">
    $1,333
   </div>
    </div>
    
   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">

            $1,333(Monthly cost of resource) / 730 hours (Monthly available hours)
         = $1.83/hour
  </div> 

<p>Total ($44 * 0.33) + ($8.22 * .33) + ($1.83 * .33) = $17.84 </p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 9 end -->

<!-- Modal 10 start -->
  <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Blood Draw and Annualysis: Variable Time</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
    </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-1">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Nurse:
    </div>
   <div class="col-md-2">
   $65,000+
   </div>
   <div class="col-md-2">
   9,000+
   </div>
    <div class="col-md-2">
   10,800+
   </div>
    <div class="col-md-2">
   2,560=
   </div> 
   <div class="col-md-1">
   $87,360
   </div>
   <div class="col-md-1">
   $7,280
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
          $7,280(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $65/hour
     </div>

     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-1">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
   </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Technician (Annualysis)
    </div>
   <div class="col-md-2">
   $45,000+
   </div>
   <div class="col-md-2">
   2,700+
   </div>
    <div class="col-md-2">
   4,000+
   </div>
    <div class="col-md-2">
   5,000=
   </div> 
   <div class="col-md-1">
   $56,700
   </div>
   <div class="col-md-1">
   $4,725
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $4,725(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $42/hour
  </div>

  
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-1">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
   </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Pathologist (Annualysis)
    </div>
   <div class="col-md-2">
   $250,000+
   </div>
    <div class="col-md-2">
   10,000+
   </div>
    <div class="col-md-2">
   7,000=
   </div> 
   <div class="col-md-1">
   $267,000
   </div>
   <div class="col-md-1">
   $22,250
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $22,250(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $199/hour

  </div>

<div class="col-md-12">
  <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
  $850,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $2000+ 
   </div>
  <div class="col-md-1">
      $7000= 
   </div>
   <div class="col-md-2">
    $94,000
   </div>
   <div class="col-md-1">
    $7,833
   </div>
  </div>
  
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $7,833 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $10.73/hour
  </div> 


  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-2">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
     <div class="col-md-2">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-2">
   Annualysis Lab:
    </div>
   <div class="col-md-2">
   $1,000,000
   </div>
   <div class="col-md-2">
  10yr+
  </div>  
  <div class="col-md-2">
     $3,000+
   </div>
   <div class="col-md-2">
  $15,00=
   </div>
   <div class="col-md-1">
    $118,000
   </div>
     <div class="col-md-1">
    $9,833
   </div>
    </div>
    
   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $9,833(Monthly cost of resource) / 730 hours (Monthly available hours)
         = $13.48/hour
     </div>
<p>Vials: $0.35 each</p>
<p>Vacutainer Blood Collection set: $0.93 each </p>

<p>Total ($65 * 0.33) + ($42 * 1) + ($199 * 0.25) + ($10.73 * .33) + ($13.48
* 1.25) + ($0.35 * 5)+ $0.93 = $136.27 </p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 10 end -->

<!-- Modal 12 start -->
  <div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">CT Scan: Variable Time</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
    </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-1">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-2">
    Technician:
    </div>
   <div class="col-md-2">
  $45,000+
   </div>
   <div class="col-md-2">
   3,670+
   </div>
    <div class="col-md-2">
   4,000+
   </div>
   <div class="col-md-2">
   5,000=
   </div>
   <div class="col-md-1">
  $56,760
   </div>
   <div class="col-md-1">
  $4,805
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
             $4,958(Monthly cost of resource) / 112 hours (Monthly available hours)
        = $43/hour
  </div>
  
  
  
       <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Salary
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-2">
   Tech Support
   </div>
   <div class="col-md-1">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
   <div class="col-md-12" >
    <div class="col-md-2">
    Radiologist::
    </div>
   <div class="col-md-2">
  $350,000+
   </div>
    <div class="col-md-2">
   1,000+
   </div>
   <div class="col-md-2">
   7,000=
   </div>
   <div class="col-md-1">
  $367,000
   </div>
   <div class="col-md-1">
  $30,583
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
           $30,583(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $273/hour
  </div>
  
  
  
  
  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
    $900,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $2000+ 
   </div>
  <div class="col-md-1">
      $1000= 
   </div>
   <div class="col-md-2">
   $102,000
   </div>
   <div class="col-md-1">
    $8500
   </div>
      </div>
    
   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $8500 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $11.64/hour
  </div> 

  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    CT Scanner:
    </div>
   <div class="col-md-2">
    $100,000
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $4000= 
   </div>
   <div class="col-md-2">
    $14000
   </div>
   <div class="col-md-2">
   $1,167
   </div>
      </div>
    
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $1,167 (Monthly cost of resource) / 730 hours (Monthly available hours)
        = $1.60/hour
  </div> 
<p> Total ($43 * 0.5) + ($273 * 1) + ($11.64 * 0.5) + ($1.60 * .5) = $301.12 </p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 12 end -->

<!-- Modal 13 start -->
  <div class="modal fade" id="myModal13" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Breathing Treatment: 20 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
   Capacity cost rate for resource =
    Expanses Attribute to resource/
   Available capacity of resource
    </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-1">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-1">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-3">
    Nurse:
    </div>
   <div class="col-md-1">
   $57,900+
   </div>
   <div class="col-md-2">
   9,000+
   </div>
    <div class="col-md-2">
   10,800+
   </div>
    <div class="col-md-1">
    3000=
   </div> 
   <div class="col-md-2">
   $80,700
   </div>
   <div class="col-md-1">
     $6,725
   </div>
    </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $6,725(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $60/hour
  </div>
  
  
       <div class="col-md-12">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
  $850,000 
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $2000 
   </div>
  <div class="col-md-1">
      $7000= 
   </div>
   <div class="col-md-2">
    $94,000
   </div>
   <div class="col-md-1">
    $7,833
   </div>
      </div>
  
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
          $7,833 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $10.73/hour
  </div>   

  
  <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-2"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-2">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-2">
    Nebulizer:
    </div>
   <div class="col-md-2">
    $200
   </div>
   <div class="col-md-2" style="display:flex;">
   1yr+  
  </div>  
  <div class="col-md-2">
      $40= 
   </div>
   <div class="col-md-2">
    $240
   </div>
   <div class="col-md-2">
    $20
   </div>
      </div>
    
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
          $20 (Monthly cost of resource) / 730 hours (Monthly available hours)
        = $0.03/hour
  </div> 
  <p>Albuterol: 5mg/ml: $4.47</p>
<p> Total ($60 * 0.33) + ($10.73 * .33) + ($0.03 * .33) + $4.47 = $27.82</p>
     </div>
      </div>
    </div>
  </div>
<!-- Modal 13 end -->

<!-- Modal 14 start -->
  <div class="modal fade" id="myModal14" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">IV Steroid: 20 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">
    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource
      </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-1">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-1">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-3">
    Nurse:
    </div>
   <div class="col-md-1">
   $65,000+
   </div>
   <div class="col-md-2">
   9,000+
   </div>
    <div class="col-md-2">
   10,800+
   </div>
    <div class="col-md-1">
    2,560=
   </div> 
  
   <div class="col-md-2">
   $87,360 
   </div>
   <div class="col-md-1">
    $7,280
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
            $7,280(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $65/hour
  </div>
  
  
       <div class="col-md-12">
    <div class="col-md-3"></div>
   <div class="col-md-2">
   Purchase Price
   </div>
   <div class="col-md-1">
   Useful Life
   </div>
      <div class="col-md-2">
   Yearly Maintenance
   </div>
    <div class="col-md-1">
   Yearly Utilities
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
    </div>
    
   <div class="col-md-12">
    <div class="col-md-3">
    Examination Room:
    </div>
   <div class="col-md-2">
  $850,000 
   </div>
   <div class="col-md-1" style="display:flex;">
   10yr+  
  </div>  
  <div class="col-md-2">
      $2000+ 
   </div>
  <div class="col-md-1">
      $7000= 
   </div>
   <div class="col-md-2">
    $94,000
   </div>
   <div class="col-md-1">
    $7,833
   </div>
      </div>
  
  <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
         $7,833 (Monthly cost of resource) / 730 hours (Monthly available hours)
         = $10.73/hour
  </div>   

  <p>Soldumedrol: 1 dose @ 125mg = $17.95</p>
  <p>IV Administration Set: $5.47</p>
  <p>IV Bag and needle: $5.00</p>
<p> Total ($65 * 0.33) + ($10.73 * .33) + $17.95 + $5.47 + $5.00 = $53.41 </p>
     </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal 14 end -->

<!-- Modal 15 start -->
  <div class="modal fade" id="myModal15" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="modal-title">Discharge, Education, Px: 20 minutes</h3>
        </div>
        <div class="modal-body">
    <div class="col-md-12">

    Capacity cost rate for resource =
    Expanses Attribute to resource / Available capacity of resource

      </div>
     <div class="col-md-12" style="margin-top:20px;">
    <div class="col-md-3"></div>
   <div class="col-md-1">
   Salary
   </div>
   <div class="col-md-2">
   Supervision
   </div>
   <div class="col-md-2">
   Occupancy
   </div>
    <div class="col-md-1">
   Tech Support
   </div>
   <div class="col-md-2">
    Annual Cost
   </div>
   <div class="col-md-1">
    Monthly Cost
   </div>
      </div>
    
   <div class="col-md-12" >
    <div class="col-md-3">
    Nurse:
    </div>
   <div class="col-md-1">
   $65,000+
   </div>
   <div class="col-md-2">
   9,000+
   </div>
    <div class="col-md-2">
   10,800+
   </div>
    <div class="col-md-1">
    2,560=
   </div> 
  
   <div class="col-md-2">
   $87,360 
   </div>
   <div class="col-md-1">
    $7,280
   </div>
      </div>

   <div class="col-md-12" style="margin-top:20px;border-bottom:1px solid white;padding-bottom:10px;">
       $7,280(Monthly cost of resource) / 112 hours (Monthly available hours)
         = $65/hour
  </div>
  
<p> Total ($65 * 0.33) = $21.45 </p>
     </div>
      </div>
    </div>
  </div>
  
<!-- Modal 15 end -->

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
          }else if(id == 3){
            $('.left').show();
            $('.right').hide();
          } else {
            $('.left').show();
            $('.right').show();
          }

      });

function TryA(){
      $('.item.active div').removeClass("incorrect").removeClass("selectedAns");
      $('.item .ans').removeClass('Dis');
    }


    function checkAnswer(obj, f) {
	          if($(obj).hasClass("customansclass1"))
			  {
				if(obj.innerText=="$300 + $185 co-pay = $485")
				{
				   $(".txtincrect1").html("Grace must first meet her deductible before a coinsurance is applied.");
				}
			    else if(obj.innerText=="$1200")
				{
				   $(".txtincrect1").html("Co-pays generally do NOT count towards a deductible and are paid for separately.");
				}
	            else if(obj.innerText=="$185 co-pay")
				{
				   $(".txtincrect1").html("Grace also has to meet her deductible.");
				}
				else
				{
				$(".txtincrect1").html("");
				}
		      }
			  if($(obj).hasClass("customansclass2"))
			  {
				if(obj.innerText=="$1000 + $185 co-pay = $1185")
				{
				   $(".txtincrect2").html("Grace must first meet her deductible before a coinsurance is applied.");
				}
			    else if(obj.innerText=="$185 co-pay")
				{
				   $(".txtincrect2").html("Grace also has to meet her deductible.");
				}
	            else if(obj.innerText=="$5000")
				{
				   $(".txtincrect2").html("Grace also has co-pays as part of her plan.");
				}
				else
				{
				$(".txtincrect2").html("");
				}
		      }
			  
	         if($(obj).hasClass("customansclass3"))
			  {
				if(obj.innerText=="$3000")
				{
				   $(".txtincrect3").html("This is the amount negotiated by commercial insurance company A; Ms. Chen does not have insurance.");
				}
			    else if(obj.innerText=="$930")
				{
				   $(".txtincrect3").html("This is the total amount these services would cost the hospital under TDABC calculations only.");
				}
	            else if(obj.innerText=="$0")
				{
				   $(".txtincrect3").html("Those without insurance must pay the entire amount.");
				}
				else
				{
				$(".txtincrect3").html("");
				}
		     }
			 
			  if($(obj).hasClass("customansclass4"))
			  {
				if(obj.innerText=="$1500")
				{
				   $(".txtincrect4").html("Grace only pays up to her deductible and then a coinsurance after this is met.");
				}
	            else if(obj.innerText=="$0")
				{
				   $(".txtincrect4").html("Grace has copays and a deductible as part of her plan.");
				}
				else
				{
				$(".txtincrect4").html("");
				}
		     }
			  
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
                $(".5401, .2497").addClass("hide");
                $("." + f).removeClass("hide");
            }
        }
        

</script>
<script>
var chk=0;
var ctr=0;
$(".span1show").click(function(){
$(".span1").css("display","block");
$(".vb1").css("visibility","visible");
return false;
});

$(".span2show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb2").css("visibility","visible");
$(".span2").css("display","block");
return false;
});

$(".span3show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb3").css("visibility","visible");
$(".span3").css("display","block");
return false;
});

$(".span4show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb4").css("visibility","visible");
$(".span4").css("display","block");
return false;
});

$(".span5show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb5").css("visibility","visible");
$(".span5").css("display","block");
return false;
});

$(".span6show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb6").css("visibility","visible");
$(".span6").css("display","block");
return false;
});

$(".span7show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb7").css("visibility","visible");
$(".span7").css("display","block");
return false;
});

$(".span8show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb8").css("visibility","visible");
$(".span8").css("display","block");
return false;
});

$(".span9show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb9").css("visibility","visible");
$(".span9").css("display","block");
return false;
});

$(".span10show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb10").css("visibility","visible");
$(".span10").css("display","block");
return false;
});

$(".span11show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb11").css("visibility","visible");
$(".span11").css("display","block");
return false;
});

$(".span12show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb12").css("visibility","visible");
$(".span12").css("display","block");
return false;
});

$(".span13show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb13").css("visibility","visible");
$(".span13").css("display","block");
return false;
});

$(".span14show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb14").css("visibility","visible");
$(".span14").css("display","block");
return false;
});

$(".span15show").click(function(){
$(".calc1").css({"cursor":"pointer"});
$(".vb15").css("visibility","visible");
$(".span15").css("display","block");
return false;
});

$(".showainc").click(function(){
$(".showainc").css({"background-color":"white","color":"black"});
$(".showbinc").css({"background-color":"#3B4254","color":"white"});
$("#insurance").css("display","block");
$(".spana").css("display","block");
$(".spanb").css("display","none");
$(".spantmp").css("display","none");
$(".totala").css("display","none");
$(".totalb").css("display","none");
chk = 1;
});
$(".showbinc").click(function(){
$(".showbinc").css({"background-color":"white","color":"black"});
$(".showainc").css({"background-color":"#3B4254","color":"white"});
$("#insurance").css("display","block");
$(".spanb").css("display","block");
$(".spana").css("display","none");
$(".spantmp").css("display","none");
$(".totala").css("display","none");
$(".totalb").css("display","none");
chk = 2;
});

$("#clcarrow").click(function(){
$(".showainc").css({"background-color":"#3B4254","color":"white"});
$(".showbinc").css({"background-color":"#3B4254","color":"white"});

$("#insurance").css("display","none");
$(".spanb").css("display","none");
$(".spana").css("display","none");
$(".spantmp").css("display","none");
chk = 2;
});


$(".calc1").click(function(){
var chkdisp1 = $(".m3s7p1 .spn1").css("display");
var chkdisp2 = $(".m3s7p1 .spn2").css("display");
var chkdisp3 = $(".m3s7p1 .spn3").css("display");
var chkdisp4 = $(".m3s7p1 .spn4").css("display");
var chkdisp5 = $(".m3s7p1 .spn5").css("display");
var chkdisp6 = $(".m3s7p1 .spn6").css("display");
var chkdisp7 = $(".m3s7p1 .spn7").css("display");
var chkdisp8 = $(".m3s7p1 .spn8").css("display");
var chkdisp9 = $(".m3s7p1 .spn9").css("display");
var chkdisp10 = $(".m3s7p1 .spn10").css("display");
var chkdisp11 = $(".m3s7p1 .spn11").css("display");
var chkdisp12 = $(".m3s7p1 .spn12").css("display");
var chkdisp13 = $(".m3s7p1 .spn13").css("display");
var chkdisp14 = $(".m3s7p1 .spn14").css("display");
var chkdisp15 = $(".m3s7p1 .spn15").css("display");
var total = 0;
if(chkdisp1=="block")
{
total = total +  Number($(".m3s7p1 .spn1").text());
}
if(chkdisp2=="block")
{
total = total +  Number($(".m3s7p1 .spn2").text());
}
if(chkdisp3=="block")
{
total = total +  Number($(".m3s7p1 .spn3").text());
}
if(chkdisp4=="block")
{
total = total +  Number($(".m3s7p1 .spn4").text());
}
if(chkdisp5=="block")
{
total = total +  Number($(".m3s7p1 .spn5").text());
}
if(chkdisp6=="block")
{
total = total +  Number($(".m3s7p1 .spn6").text());
}
if(chkdisp7=="block")
{
total = total +  Number($(".m3s7p1 .spn7").text());
}
if(chkdisp8=="block")
{
total = total +  Number($(".m3s7p1 .spn8").text());
}

if(chkdisp9=="block")
{
total = total +  Number($(".m3s7p1 .spn9").text());
}
if(chkdisp10=="block")
{
total = total +  Number($(".m3s7p1 .spn10").text());
}
if(chkdisp11=="block")
{
total = total +  Number($(".m3s7p1 .spn11").text());
}
if(chkdisp12=="block")
{
total = total +  Number($(".m3s7p1 .spn12").text());
}
if(chkdisp13=="block")
{
total = total +  Number($(".m3s7p1 .spn13").text());
}
if(chkdisp14=="block")
{
total = total +  Number($(".m3s7p1 .spn14").text());
}
if(chkdisp15=="block")
{
total = total +  Number($(".m3s7p1 .spn15").text());
}


$(".calc1").css({"cursor":"default"});
$(".showainc").css("display","block");
$(".showbinc").css("display","block");
$(".total1").css("display","block");
$(".total1").html("$"+total);

});


$(".fa-eye-slash").click(function(e){
$(this).removeClass("fa-eye-slash");
$(this).addClass("fa-eye");
});

$(".showallspan").click(function(e){
$(".calc1").css({"cursor":"pointer"});
var txt = $(this).text();
if(txt.match('Quick add all costs'))
{
$(this).text("Clear  all costs");
$(".m3s7p1 .span1,.m3s7p1 .span2,.m3s7p1 .span3,.m3s7p1 .span4,.m3s7p1 .span5,.m3s7p1 .span6,.m3s7p1 .span7,.m3s7p1 .span8,.m3s7p1 .span9,.m3s7p1 .span10,.m3s7p1 .span11,.m3s7p1 .span12,.m3s7p1 .span13,.m3s7p1 .span14,.m3s7p1 .span15").css("display","block");
$(".m3s7p1 .vb1,.m3s7p1 .vb2,.m3s7p1 .vb3,.m3s7p1 .vb4,.m3s7p1 .vb5,.m3s7p1 .vb6,.m3s7p1 .vb7,.m3s7p1 .vb8,.m3s7p1 .vb9,.m3s7p1 .vb10,.m3s7p1 .vb11,.m3s7p1 .vb12,.m3s7p1 .vb13,.m3s7p1 .vb14,.m3s7p1 .vb15").css("visibility","visible");
}
else
{
$(".total3").css("display","none");
$(".total1").css("display","none");
$("#insurance").css("display","none");
$(".spanb").css("display","none");
$(".spana").css("display","none");
$(".spantmp").css("display","none");
$(".showainc").css({"background-color":"#3B4254","color":"white","display":"none"});
$(".showbinc").css({"background-color":"#3B4254","color":"white","display":"none"});
$(".m3s7p1 .span1,.m3s7p1 .span2,.m3s7p1 .span3,.m3s7p1 .span4,.m3s7p1 .span5,.m3s7p1 .span6,.m3s7p1 .span7,.m3s7p1 .span8,.m3s7p1 .span9,.m3s7p1 .span10,.m3s7p1 .span11,.m3s7p1 .span12,.m3s7p1 .span13,.m3s7p1 .span14,.m3s7p1 .span15").css("display","none");
$(".m3s7p1 .vb1,.m3s7p1 .vb2,.m3s7p1 .vb3,.m3s7p1 .vb4,.m3s7p1 .vb5,.m3s7p1 .vb6,.m3s7p1 .vb7,.m3s7p1 .vb8,.m3s7p1 .vb9,.m3s7p1 .vb10,.m3s7p1 .vb11,.m3s7p1 .vb12,.m3s7p1 .vb13,.m3s7p1 .vb14,.m3s7p1 .vb15").css("visibility","hidden");
$(this).text("Quick add all costs");
}
});
$("#comparetocm").click(function(){
$("#clcthird").addClass("col-md-offset-1");
$("#clcthird").removeClass("col-md-offset-3");

$("#clcforth").css("display","block");
$("#comparetocm").css("visibility","hidden");
});

$("#clcarrow2").click(function(){
$("#clcthird").removeClass("col-md-offset-1");
$("#clcthird").addClass("col-md-offset-3");
$("#clcforth").css("display","none");
$("#comparetocm").css("visibility","visible");
});


</script>
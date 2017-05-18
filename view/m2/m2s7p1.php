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
    $dataT1 = $s2data['m2']['sections']['s7']['response1'];
    $dataN1 = $row->fname." ". $row->lname;
    $dataT = $s2data['m2']['sections']['s7']['response2'];
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
<script src="js/jqcloud-1.0.4.js"></script>
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
   var valC1 = '';
    var valC2 = '';
     var regex = /\s+/gi;

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

app.pup1= function(v){
  var loc =  $(".carouselC1 .iHeight").eq(v-1).text();
   var name =  $(".carouselC1 .iHeight").eq(v-1).next().next().next().text();
    $('.m2s7p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m2s7p1 #mc1 .modal-content #name').html(name);
}
app.pup2= function(v){
  var loc =  $(".carouselC .iHeight").eq(v-1).text();
   var name =  $(".carouselC .iHeight").eq(v-1).next().next().next().text();
    $('.m2s7p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m2s7p1 #mc1 .modal-content #name').html(name);
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

<link rel="stylesheet" href="css/m2s7p1.css">
<div class="m2s7p1">
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 2 | Section 7</p></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>Care Redesign Case: UNOS</h2></f>
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

  <div class="Step1 container m2s7b1">
      <f><h3 class="text-uppercase text-center">Case Study: United Network for Organ Sharing (UNOS)</h3></f> 
      <br> 
      <f><p ><img style="margin: auto;"src="img/m2s7img2.png" class="img-responsive"></p></f>
      <br> 
      <f><p>Outcome measurement is usually used to drive clinical improvement by medical teams. This case considers a different use &#x2013; national policy for allocating a scarce supply of organs across patients.  Who  should be included in the liver transplant population? How can we take a more global view that considers both those who receive a transplant as well as those who continue to wait for one?  The following is a story from the frontlines of health policy illustrating the power and importance of measuring and reporting outcomes that matter most to patients. Dr. Richard Freeman, a world-renowned transplant surgeon and expert in transplant medicine and allocation research, is the Vice Dean for Clinical Affairs at Dell Medical School at The University of Texas at Austin. To aid in your understanding, the story you are about to explore is supplemented with the frontline perspective of Dr. Freeman.</p></f>
      <f><p>The United Network for Organ Sharing (UNOS) is a national nonprofit organization under contract with the Federal government that oversees the Organ Procurement and Transplant Network (OPTN).  Prior to 2002, the OPTN’s  system of determining transplant was based largely on subjective clinical criteria and time waiting on the national transplant list. In conversation with Dr. Richard Freeman (October 2016), the feeling at the time was that too many people were dying while on the wait list while others were getting priority who had stable liver disease for a long time. Since time on the wait list was the primary measure, the incentive was  to get patients registered on the wait list as soon as they were diagnosed with end-stage liver disease–often before they actually needed a transplant. This allowed the patient to “bank” time while they were still reasonably healthy.</p></f>
      <f><p>The irony of the situation was the very people who could wait the longest, who were the least sick, were the ones who received the most priority for a transplant.</p></f>
      <f><h5 class="text-uppercase">A Better Way…</h5></f>
      <f><p>In 1999, Dr. Freeman’s team and the Institute of Medicine (now called the National Academy of Medicine) in separate research studies both reached the same conclusion and suggested that instituting a continuous disease severity score that de-emphasized wait time could help improve the allocation of livers for transplantation.<sup>1</sup> In response, in 2002, a new algorithm was introduced that prioritized patients on the national liver transplant list by their score based on objective, patient-specific values from laboratory tests called MELD (Measure of End-Stage Liver Disease).<sup>2</sup></p></f>      
      <f><p>A high MELD score indicates a patient is severely ill with a high probability of dying from their liver disease in the next 90 days. Under the new system, donor livers are first offered to those with the highest MELD score. Wait time is only used to determine liver allocation if two patients have the same MELD score. Additional consideration is given to patients with hepatocellular carcinoma (HCC) and to those with complex cases, as reviewed by a regional review board.</p></f>
        <hr>
          <blockquote class="blockquote">
            <f><p style="font-family: GothamHTF-Bold;">MELD SCORE</p></f>
            <f><p>3.78 &times; log<sub>e</sub> serum bilirubin (mg/dL) +</p></f>
            <f><p>11.20 &times; log<sub>e</sub> INR +</p></f>
            <f><p>9.57 &times; log<sub>e</sub> serum creatinine (mg/dL)</p></f>            
            <f><p>INR= International normalized ratio, a measure of how long it takes for blood to clot</p></f>
          </blockquote>
        <hr> 
      <f><p>Dr. Richard Freeman was the lead researcher in implementing and evaluating the MELD-based allocation program in the early 2000s.  When describing the transition from a goal of allocating organs to those who had waited longest, to a goal of allocating organs to those most likely to die without a transplant (as measured by their MELD score), Dr. Freeman described:</p></f>
      <f><p><em>“You have to define a motivational outcome measure that people will rally around. It should be something that nobody can really argue with, because no intrinsic individual bias could overcome the principle.”</em> (Conversation with R Freeman, MD, October 2016)</p></f>
      <f><p>Changing the focus of the criteria for liver allocation to account for the likelihood of death, reduced mortality during the waiting time, an outcome that both patients and their physicians want.</p></f>
      <f><p>But defining this motivational outcome metric was not all that it took to convince people that using the MELD criteria was a better way to allocate livers and define the population that needed them most. As Dr. Freeman reflects:</p></f>
      <f><p><em>“One of the critical things was data[…] We had, and still have, a data system that enabled us to do that, measure the effects of the policy change, report the results, and write influential peer-reviewed research papers to provide transparency to all stakeholders regarding how the system was functioning.”</em> (Conversation with R Freeman, MD, October 2016)</p></f>
      <f><p>The MELD based allocation system was deployed in 2002, and by 2004, data summarizing the preliminary results of this new liver allocation plan were published. In the first year of its implementation, the MELD-based allocation plan decreased the overall number of new registries by 12% (since doctors had no reason to register their patients on the wait list early), and reduced the number of people dying while on the wait list by 3.5%&ndash;this is around 150 people each year.<sup>3</sup></p></f>
      <f><p>The OPTN continues to collect pre- and post-transplant data on every transplant patient in the United States as part of the Scientific Registry of Transplant Patients (SRTR). These data demonstrate that the mortality rate among patients on the liver transplant wait list has continued to decline after the first year of MELD’s implementation, and, 10 years later, more people with higher MELD scores were receiving transplants (see plots below).<sup>4</sup></p></f>      
  </div>
<br>
<br>

<div class="container-full m2s7b2">
    <div class="container">
      <div class="row">        
        <div class="col-sm-12"><img src="img/m2s7img3.png" class="center-block img-responsive"  height="auto" width="55%"></div>
      </div>  
      <br>
      <div class="row">        
        <div class="col-sm-12">
          <!-- <hr style="border-color:#dddddd"> -->
          <f><p><span class="boldT">Pre-transplant mortality rates among adult patients waitlisted for a liver transplant.<sup>5</sup></span> Notice that the mortality rate has decreased since 2002 for all age groups. Data from Scientific Registry of Transplant Recipients (SRTR).</p></f>
          <!-- <br><br>
          <f><p class="text-uppercase mdem"><span class="cc1">Age Group</span><br><span class="cc2">18&ndash;34</span><br><span class="cc3">35&ndash;49</span><br><span class="cc4">50&ndash;64</span><br><span class="cc5">65+</span></p></f> -->
        </div>
      </div>
     </div> 
</div>  



<div class="container-full m2s7b3">
    <div class="container">
      <div class="row">        
        <div class="col-sm-12"><img src="img/m2s7img4.png" class="center-block img-responsive" height="auto" width="55%"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <!-- <hr style="border-color:#dddddd"> -->
          <f><p><span class="boldT">Comparison of MELD score distribution among liver transplant recipients in 2002 and 2012.<sup>5</sup></span> Notice that in 2012, more patients with a higher MELD score received liver transplants. Data from Scientific Registry of Transplant Recipients (SRTR).</p></f>
          <!-- <f><p class="text-uppercase mdem"><span class="cc2">unknown</span><br><span class="cc3">meld 35-40</span><br><span class="cc4">meld 30-34</span><br><span class="cc5a">meld 15-29</span><br><span class="cc5">meld 6-14</span><br><span class="cc6">status 1a/1b</span></p></f> -->
        </div>        
      </div>
     </div> 
</div>

<div class="container m2s7b4">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 small"><f><p>*This and the previous chart adapted from data within the OPTN/SRTR 2012 Annual Data Report. HHS/HRSA. The data and analyses reported in the 2012 Annual Data Report of the U.S. Organ Procurement and Transplantation Network and the Scientific Registry of Transplant Recipients have been supplied by the United Network for Organ Sharing and the Minneapolis Medical Research Foundation under contract with HHS/HRSA. The authors alone are responsible for reporting and interpreting these data; the views expressed herein are those of the authors and not necessarily those of the U.S. Government. This report is available at <a target="_blank" style="" href="https://srtr.transplant.hrsa.gov/">srtr.transplant.hrsa.gov</a>. Individual chapters, as well as the report as a whole, may be downloaded.</p></f></div>
        <div class="col-sm-2"></div>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-sm-12"><f><p>Of course, the question then arises of whether operating on the sickest people with the highest MELD scores has a negative impact on the outcomes following liver transplants.</p></f></div>
      </div>
      <div class="row">
        <div class="col-sm-12"><f><p>Because outcome reporting is universally required for every patient who receives an organ, data on outcomes post-transplant are also available and show that the new allocation program did not have a negative impact on patient mortality post-transplant.</p></f></div>
      </div>        

</div>
      <br>
      <br>

      <div class="container-full m2s7b5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><img src="img/m2s7img5.png" class="center-block img-responsive"  height="auto" width="55%"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <!-- <hr style="border-color:#dddddd"> -->
          <f><p>Adapted from Kim et al, 2016. <span class="boldT">Graft failure among adult liver transplant recipients: deceased donor.<sup>6</sup></span> Notice that graft failure, or failure of the new liver to function properly, did not change after the implementation of the MELD allocation system in 2002. Time periods represent time post transplant.</p></f>
          <!-- <br><br>
          <f><p class="mdem"><span class="cc3">&bull; Wait List Criteria</span><br><span class="cc2">&bull; MELD Score Criteria</span></p></f> -->
        </div>
        <!-- <div class="col-sm-1"></div> -->
      </div>
     </div> 
</div>
<br>

<div class="container m2s7b6">
      <f><h5 class="text-uppercase">Moving Forward</h5></f>
      <f><p>There are three key take-away points from this Care Redesign Case regarding approaches to introducing more value into a system.</p></f>
      <f><p class="tBold">1. To understand a problem, you need to first measure the right things.</p></f>
      <f><p>Until wait list mortality became the focus of measurement and researchers found it was a more significant problem than worrying about post-transplant outcomes, the right questions were not asked and the outcomes that mattered to patients were not the focus.</p></f>
      <f><p class="tBold">2. Establishing and measuring patient outcomes is critical.</p></f>
      <f><p>Using the patient specific, objective MELD measures rather than physician-driven or program-defined measures made the process of allocation more objective and more motivational than wait time, which was part of the old system.</p></f>
      <f><p class="tBold">3. Transparency in reporting the effects of a change is important in engendering trust.</p></f>
      <f><p>These principles apply to virtually any situation where we are trying to change the system to improve value.</p></f>
      <f><p>Changing the way things are done in medicine can be difficult, but transparently reporting results from a change in practice and showing improvement goes a long way to increase the willingness to try a new approach.</p></f>
</div>
<br><br>

<div class="jumbotron m2s7b7">
    <div class="container">
        <f><h3 class="text-center text-uppercase">Additional Resources</h3></f>
        <br>
          <div class="row">
            <div class="col-sm-2"></div>
           <div class="col-sm-8"><f><p>Explore more of the data from UNOS on their <a target="_blank" style="color:#3b4053;" href="https://www.unos.org/">website</a>, through their <a target="_blank" style="color:#3b4053;" href="https://www.unos.org/about/annual-report/">annual report</a>, or directly from the <a target="_blank" style="color:#3b4053;" href="http://srtr.transplant.hrsa.gov/annual_reports/2012/Default.aspx">SRTR</a> website.</p></f></div>
            <div class="col-sm-2"></div>
          </div>          
    </div>
</div>




   <div class="container text-center s1bgcol">
      <div class="row" id="my-Carousel1">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
                <div class="carouselC1">
                  <br>
                  <f><p>Reflecting on what you just learned about the experience of UNOS changing their metrics, let’s reflect on a measure that is often used in the inpatient setting.  What do you think would be the benefits and potential pitfalls of a hospital system tracking and reporting the process measure of how many patients are discharged before noon each day?</p></f>
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
                           <f><p>Reflecting on what you just learned about the experience of UNOS changing their metrics, let’s reflect on a measure that is often used in the inpatient setting.  What do you think would be the benefits and potential pitfalls of a hospital system tracking and reporting the process measure of how many patients are discharged before noon each day?</p></f>
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
                                 <button  onclick="app.response1(this);" class="btn btn-info">
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
                  <f><p>As a health care provider, how would you handle some of the inefficiency and waste problems Ms. Jones faced?</p></f>
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
                              <f><p>Reflect on the ideas generated by your peers. Overall, should patient-discharge time be a metric used to track hospital performance?</p></f>
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


<br>
   <div class="container m2s7b8">
        <hr>
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;" >REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>        
      <div id="demo" class="collapse">
        <ol>
          <f><li><p>Freeman, RB, Wiesner, RH, Harper, A, et al. The new liver allocation system: Moving toward evidence-based transplantation policy. <em>Liver Transpl</em>. 2002;8:851–858. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1053/jlts.2002.35927">10.1053/jlts.2002.35927</a>.</p></li></f>
          <f><li><p>Freeman, RB. Overview of the MELD / PELD system of liver allocation indications for liver transplantation in the MELD era: Evidence-based patient selection. <em>Liver Transpl</em>. 2004;10:S2–S3. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1002/lt.20262">10.1002/lt.20262</a>.</p></li></f>
          <f><li><p>Freeman, RB, Wiesner, RH, Edwards, E, et al.  Results of the first year of the new liver allocation plan. <em>Liver Transpl</em>. 2004;10:7–15. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1002/lt.20024">10.1002/lt.20024</a>.</p></li></f>
          <f><li><p>Amin, MG, Wolf, MP, TenBrook, JA, et al. Expanded criteria donor grafts for deceased donor liver transplantation under the MELD system: A decision analysis. <em>Liver Transpl</em>. 2004;10:1468–1475. doi:<a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://dx.doi.org/10.1002/lt.20304">10.1002/lt.20304</a>.</p></li></f>
          <f><li><p>Organ Procurement and Transplantation Network (OPTN) and Scientific Registry of Transplant Recipients (SRTR). OPTN/SRTR 2012 Annual Data Report. Rockville, MD: Department of Health and Human Services, Health Resources and Services Administration; 2014. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://srtr.transplant.hrsa.gov/annual_reports/2012/pdf/2012_SRTR_ADR.pdf">http://srtr.transplant.hrsa.gov/annual_reports/2012/pdf/2012_SRTR_ADR.pdf</a>. Accessed December 4, 2016.</p></li></f>
          <f><li><p>Kim, WR., et al. OPTNSRTR annual data report 2014. Liver. Am J Transpl. 2016;16:(Suppl 2): 69–98. doi: 10.1111/ajt.13668. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://onlinelibrary.wiley.com/doi/10.1111/ajt.13668/full">http://onlinelibrary.wiley.com/doi/10.1111/ajt.13668/full</a></p></li></f>
        </ol>
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
              <a href="#" onclick="window.location='?id=m2/m2s6p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 2 | Section 6</span>
                <span class="sp1"><strong>Comparing Outcomes of Different Treatment Strategies</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="#" onclick="window.location='?id=m2/m2s8p1'"><span class="ssp2">MODULE 2 | Section 8</span>
                <span class="sp2"><strong>Conclusion: Measuring What Matters</strong></span>
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
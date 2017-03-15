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
$AllWordResY1='';
$AllWordResY2='';
while($row = mysqli_fetch_row($retvalY)) {
    $s2data = json_decode($row[7],true); 
    $AllWordResY1 .=$s2data['m2']['sections']['s7']['response1'];
    $AllWordResY2 .=$s2data['m2']['sections']['s7']['response3'];
}

$c4 = "select * from records";
$retval=mysqli_query($dbcon,$c4);
$AllWordRes1='';
$AllWordRes2='';
while($row = mysqli_fetch_row($retval)) {
    $s2data = json_decode($row[7],true); 
    $AllWordRes1 .= $s2data['m2']['sections']['s7']['response1'];
    $AllWordRes2 .= $s2data['m2']['sections']['s7']['response3'];
}

$c5 = "select * from records WHERE email NOT IN ('".$_SESSION['username']."')";
$retval1=mysqli_query($dbcon,$c5);
while($row = mysqli_fetch_row($retval1)) {
    $s2data = json_decode($row[7],true);
    $dataT = $s2data['m2']['sections']['s7']['response2'];
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
app.response0 = function(v){

      valC1 = $("#response1Text").val();
      valC2 = $("#response2Text").val();
      if(valC1  && valC2){
          app.response1();
      }else if(valC1){
          $("#response1Text").attr('disabled','disabled');
          $(v).attr('disabled','disabled');
      }else if(valC2){
         $("#response2Text").attr('disabled','disabled');
          $(v).attr('disabled','disabled');
      }

}
app.response1 = function(){
      var section = 's'+app.qs["id"][6];
      var loc1='';
      var loc2='';
       if (valC1 && valC2) {
          app.MData[app.SelecteM].sections[section]['response1'] = valC1;
          app.MData[app.SelecteM].sections[section]['response3'] = valC2;

          var data = JSON.stringify(app.MData);
          var loc_1 = {email:"<?php echo $_SESSION['username'];?>",MData:data};
          app.DataSave(loc_1);
          loc1 = valC1.concat('<?php echo addslashes($AllWordRes1);?>');
          loc2 = valC2.concat('<?php echo addslashes($AllWordRes2);?>');
      }else{
        loc1 = valC1.concat('<?php echo addslashes($AllWordRes1);?>');
        loc2 = valC2.concat('<?php echo addslashes($AllWordRes2);?>');
        valC1 = '<?php echo addslashes($AllWordResY1);?>';
        valC2 = '<?php echo addslashes($AllWordResY2);?>';
      }

      if (valC1 == "" && valC2 == "" ) {
          alert("Please write the response.");
       }else{
         // var allDataY1 = app.sortWord(valC1);
         // var allDataY2 = app.sortWord(valC2);
          var allData1 = app.sortWord(loc1);
          var allData2 = app.sortWord(loc2);
          $(".f1").html('['+valC1+'], ['+valC2+']');
          //$(".f2").html(allDataY2.top1);
         // console.log(allDataY1)
          $(".act1").hide();
          $(".wordClouds").css({"visibility":"visible","height":"auto"});
          $(".jqcloud, #my_favorite_latin_words1").css({"width":"100%",'height':'350px'});
          $(".jqcloud, #my_favorite_latin_words2").css({"width":"100%",'height':'350px'});
          app.WCList1 = JSON.parse(JSON.stringify(allData1.list));
          app.WCList2 = JSON.parse(JSON.stringify(allData2.list));
          app.WordC(allData1.list,'my_favorite_latin_words1');
          app.WordC(allData2.list,'my_favorite_latin_words2');
        }
   }
app.doneResizing= function(e){
  $('.jqcloud').html('');
  var lo1 = JSON.parse(JSON.stringify(app.WCList1));
  var lo2 = JSON.parse(JSON.stringify(app.WCList2));
  app.WordC(lo1,'my_favorite_latin_words1');
  app.WordC(lo2,'my_favorite_latin_words2');
  $(".jqcloud, #my_favorite_latin_words1").css({"width":"100%",'height':'350px'});
  $(".jqcloud, #my_favorite_latin_words2").css({"width":"100%",'height':'350px'});
}
app.pup= function(v){
  var loc =  $(".iHeight").eq(v-1).text();
   var name =  $(".iHeight").eq(v-1).next().next().next().text();
    $('.m2s7p1 #mc1 .modal-content .modal-body').html(loc);
    $('#mc1').modal({show: 'false'});
    $('.m2s7p1 #mc1 .modal-content #name').html(name);
}

app.response2 = function(){
      var loc = $("#response3Text").val();
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
              <a  class="wow fadeInDownBig" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
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
      <f><p>Outcome measurement is usually used to drive clinical improvement by medical teams. This case considers a different use – national policy for allocating a scarce supply of organs across patients.  Rationing necessarily occurs, but on what basis? What outcome is the process designed to improve: reducing time on the wait list or reducing mortality during the wait for an organ? The following is a story from the frontlines of health policy illustrating the power and importance of measuring and reporting the right outcomes. Dr. Richard Freeman, a world-renowned transplant surgeon and expert in transplant medicine and allocation research, is the Vice Dean for Clinical Affairs at Dell Medical School at The University of Texas at Austin. To aid in your understanding, the story you are about to explore is supplemented with the frontline perspective of Dr. Freeman.</p></f>
      <f><p>The United Network for Organ Sharing (UNOS) is a national nonprofit organization that manages the United States’ organ transplant system and organ transplant list and database under contract with the federal government. Prior to 2002, UNOS had a system of determining the recipient of a liver transplant based largely on objective clinical criteria and waitlist time on the national transplant list. In conversation with Dr. Richard Freeman (October 2016), the problem was that many people were dying while on the wait list. In addition, since time on the wait list was the primary measure, physicians would figure out ways to get their patients listed on the wait list as soon as they were diagnosed with end-stage liver disease–often before they actually needed a transplant. This allowed the patient to “bank” time while they were still reasonably healthy.</p></f>
      <f><p>The biggest dilemma with using wait list time as the primary measure is that it prioritized time on the list over severity. This meant patients who needed transplants the most due to the severity of their liver disease often died waiting, whereas those who were healthy enough to survive for a longer time on the wait list, and who might benefit less from liver transplant, received one.</p></f>
      <f><h5 class="text-uppercase">A Better Way…</h5></f>
      <f><p>In 1999, the Institute of Medicine (now called the National Academy of Medicine) suggested that instituting a continuous disease severity score that de-emphasized wait time could help improve the allocation of livers for transplantation.<sup>1</sup> Thus, in 2002, a new algorithm was introduced that prioritized patients on the national liver transplant list by their score on a calculated clinical and laboratory value measure called MELD (Measure of End-Stage Liver Disease).<sup>2</sup></p></f>
      <f><p>A high MELD score indicates a patient is acutely ill and likely to die from their liver disease in the next 90 days. Livers are first offered to those with the highest MELD score group. Wait time is only used to determine liver allocation if two patient have the same MELD score. Additional consideration is given to patients with hepatocellular carcinoma (HCC) and to those with complex cases, as reviewed by an internal review board.</p></f>
        <hr>
          <blockquote class="blockquote">
            <f><p style="font-family: GothamHTF-Bold;">MELD SCORE</p></f>
            <f><p>3.78 &times; log<sub>e</sub> serum bilirubin (mg/dL) +</p></f>
            <f><p>11.20 &times; log<sub>e</sub> INR +</p></f>
            <f><p>9.57 &times; log<sub>e</sub> serum creatinine (mg/dL) +</p></f>
            <f><p>6.43 (constant for liver disease etiology)</p></f>
            <f><p>INR= International normalized ratio, a measure of how long it takes for blood to clot</p></f>
          </blockquote>
        <hr> 
      <f><p>Dr. Richard Freeman was the lead researcher in implementing and evaluating the MELD-based allocation program in the early 2000s.  When describing the transition from a goal of allocating organs to those who had waited longest, to a goal of allocating organs to those most likely to die without a transplant (as measured by their MELD score), Dr. Freeman described:</p></f>
      <f><p><em>“You have to define a motivational outcome measure that people will rally around. It should be something that nobody can really argue with, because no intrinsic individual bias could overcome the principle. For liver transplant, it was that we wanted livers to go to patients that needed it the most. How can you argue with that?”</em> (Conversation with R Freeman, MD, October 2016)</p></f>
      <f><p>Changing the focus of the criteria for liver allocation to account for the likelihood of death reduced mortality during the waiting time, and improved survival during waiting is an outcome in liver transplant that both patients and their physicians want.</p></f>
      <f><p>But defining this motivational outcome metric was not all that it took to convince people that using the MELD criteria was a better way to allocate livers and define the population that needed them most. As Dr. Freeman reflects:</p></f>
      <f><p><em>“One of the critical things was data[…] We had, and still have, a data system that enabled us to do that, to write influential research papers and show that this really was a better way leading to better outcomes.”</em> (Conversation with R Freeman, MD, October 2016)</p></f>
      <f><p>The MELD criteria was deployed in 2002, and by 2004, data on this new liver allocation plan were published. In the first year of its implementation, the MELD-based allocation plan decreased the overall number of new registries by 12% (since doctors had no reason to list their patients on the wait list prior to them actually needing a transplant), and reduced the number of people dying while on the wait list by 3.5%--this is around 150 people each year.<sup>3</sup></p></f>
      <f><p>UNOS continues to collect pre and post-transplant data on every transplant patient in the United States as part of the Scientific Registry of Transplant Patients (SRTR). These data demonstrate that the mortality rate among patients on the liver transplant wait list continued to decline after the first year of MELD’s implementation, and, 10 years later, more people with higher MELD scores were receiving transplants (see plots below).<sup>4</sup></p></f>      
  </div>
<br>
<br>

<div class="container-full m2s7b2">
    <div class="container">
      <div class="row">        
        <div class="col-sm-8"><img src="img/m2s7img3.png" class="img-responsive"></div>
        <div class="col-sm-4">
          <hr style="border-color:#dddddd">
          <f><p>Pre-transplant mortality rates among adult patients waitlisted for a liver transplant.<sup>5</sup></p></f>
          <f><p>Notice that the mortality rate has decreased since 2002 for all age groups.</p></f>
          <f><p>Data from Scientific Registry of Transplant Recipients (STRT).</p></f>
          <br><br>
          <f><p class="text-uppercase mdem"><span class="cc1">Age Group</span><br><span class="cc2">18&ndash;34</span><br><span class="cc3">35&ndash;49</span><br><span class="cc4">50&ndash;64</span><br><span class="cc5">65+</span></p></f>
        </div>
      </div>
     </div> 
</div>  



<div class="container-full m2s7b3">
    <div class="container">
      <div class="row">        
        <div class="col-sm-7"><img src="img/m2s7img4.png" class="img-responsive"></div>
        <div class="col-sm-4">
          <hr style="border-color:#dddddd">
          <f><p>Comparison of MELD score distribution among liver transplant recipients in 2002 and 2012.<sup>5</sup></p></f>
          <f><p>Notice that in 2012, more patients with a higher MELD score received liver transplants.</p></f>
          <f><p>Data from Scientific Registry of Transplant Recipients (STRT).</p></f>
          <br><br>
          <f><p class="text-uppercase mdem"><span class="cc2">unknown</span><br><span class="cc3">meld 35-40</span><br><span class="cc4">meld 30-34</span><br><span class="cc5a">meld 15-29</span><br><span class="cc5">meld 6-14</span><br><span class="cc6">status 1a/1b</span></p></f>
        </div>
        <div class="col-sm-1"></div>
      </div>
     </div> 
</div>

<div class="container m2s7b4">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 small"><f><p>*This and the previous chart adapted from data within the OPTN/SRTR 2012 Annual Data Report. HHS/HRSA. The data and analyses reported in the 2012 Annual Data Report of the U.S. Organ Procurement and Transplantation Network and the Scientific Registry of Transplant Recipients have been supplied by the United Network for Organ Sharing and the Minneapolis Medical Research Foundation under contract with HHS/HRSA. The authors alone are responsible for reporting and interpreting these data; the views expressed herein are those of the authors and not necessarily those of the U.S. Government. This report is available at srtr.transplant.hrsa.gov. Individual chapters, as well as the report as a whole, may be downloaded.</p></f></div>
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
        <div class="col-sm-7"><img src="img/m2s7img5.png" class="img-responsive"></div>
        <div class="col-sm-4">
          <hr style="border-color:#dddddd">
          <f><p>Patient survival following liver transplant one year prior to and after MELD system implementation.<sup>2</sup></p></f>
          <f><p>Notice that patient survival did not change after the implementation of the MELD criteria.</p></f>
          <br><br>
          <f><p class="mdem"><span class="cc3">&bull; Wait List Criteria</span><br><span class="cc2">&bull; MELD Score Criteria</span></p></f>
        </div>
        <div class="col-sm-1"></div>
      </div>
     </div> 
</div>
<br>

<div class="container m2s7b6">
      <f><h5 class="text-uppercase">Moving Forward</h5></f>
      <f><p>Together with a defined population and a well-defined resource, data like these—representing both process change and outcome measures—illustrate that the current liver allocation program structure is working to save the lives of more people on the wait list and does not negatively affect patient mortality post-transplant.</p></f>
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
      <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
               <div class="wordClouds">
                  <br>
                  <f><p>Your response: <strong><span class="f1"></span></span></strong></p></f>
                  <div class="row ">
                    <div class="col-sm-6 wCcL">
                      <div id="my_favorite_latin_words1" class="wCc" ></div>
                    </div>
                    <div class="col-sm-6 wCcR">
                       <div id="my_favorite_latin_words2" class="wCc" ></div>
                    </div>
                  </div>
                  
                 
               </div>
               <div class="act1" >
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>YOUR PERSPECTIVE</h2></f>
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
                              <input id="response1Text" type="Search" placeholder="Enter potential benefits here...in 10 words or less" class="limit-input1 form-control" style="font-size:11px" />                              
                              <div class="input-group-btn text-left" style="width:8%;">
                                 <button  onclick="app.response0(this);" class="btn btn-info">
                                 <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> SUBMIT
                                 </button>
                              </div>
                              <input id="response2Text" type="Search" placeholder="Enter potential pitfalls here...in 10 words or less" class="limit-input1 form-control"  style="font-size:11px"/>
                              <div class="input-group-btn text-right" style="width:3%;">
                                 <button  onclick="app.response0(this);" class="btn btn-info">
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
                           <input type="Search" id="response3Text" placeholder="Your response to the question..." class="form-control" />
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


<br><br>
   <div class="container m2s7b8">
        <hr>
        <f><h5 data-toggle="collapse" data-target="#demo" class="text-left" style="cursor:pointer;" >REFERENCES <i style="color:#000; font-size:18px; cursor:pointer;" class="fa fa-angle-down" aria-hidden="true"></i></h5></f>
        <br>        
      <div id="demo" class="collapse">
        <ol>
          <f><li><p>Freeman, RB, Wiesner, RH, Harper, A, et al. The new liver allocation system: Moving toward evidence-based transplantation policy. <em>Liver Transpl</em>. 2002;8:851–858. doi:<a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://dx.doi.org/10.1053/jlts.2002.35927">10.1053/jlts.2002.35927</a>.</p></li></f>
          <f><li><p>Freeman, RB. Overview of the MELD / PELD system of liver allocation indications for liver transplantation in the MELD era: Evidence-based patient selection. <em>Liver Transpl</em>. 2004;10:S2–S3. doi:<a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://dx.doi.org/10.1002/lt.20262">10.1002/lt.20262</a>.</p></li></f>
          <f><li><p>Freeman, RB, Wiesner, RH, Edwards, E, et al.  Results of the first year of the new liver allocation plan. <em>Liver Transpl</em>. 2004;10:7–15. doi:<a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://dx.doi.org/10.1002/lt.20024">10.1002/lt.20024</a>.</p></li></f>
          <f><li><p>Amin, MG, Wolf, MP, TenBrook, JA, et al. Expanded criteria donor grafts for deceased donor liver transplantation under the MELD system: A decision analysis. <em>Liver Transpl</em>. 2004;10:1468–1475. doi:<a target="_blank" style="overflow-wrap: break-word; color:#000;" href="http://dx.doi.org/10.1002/lt.20304">10.1002/lt.20304</a>.</p></li></f>
          <f><li><p>Organ Procurement and Transplantation Network (OPTN) and Scientific Registry of Transplant Recipients (SRTR). OPTN/SRTR 2012 Annual Data Report. Rockville, MD: Department of Health and Human Services, Health Resources and Services Administration; 2014. <a target="_blank" style="overflow-wrap: break-word; color:#f4821f;" href="http://srtr.transplant.hrsa.gov/annual_reports/2012/pdf/2012_SRTR_ADR.pdf">http://srtr.transplant.hrsa.gov/annual_reports/2012/pdf/2012_SRTR_ADR.pdf</a>. Accessed December 4, 2016.</p></li></f>
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
            <div class="col-sm-3 text-left NextBtn">
              <a href="?id=m2/m2s6p1"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 2 | Section 6</span>
                <span class="sp1"><strong>Comparing Outcomes of Different Treatment Strategies</strong></span></a>
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3  text-right NextBtn">
                <a href="?id=m2/m2s8p1"><span class="ssp2">MODULE 2 | Section 8</span>
                <span class="sp2"><strong>Conclusion: Measuring What Matters</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>
      </footer>
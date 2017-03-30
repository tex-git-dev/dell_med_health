<?php
   if(!$_SESSION['username']){
    ?>
<script>
   window.location.href="<?php echo pathUrl();?>";
</script>
<?php
   }
   include("view/cjs.php");
   ?>
     <script src="http://d3js.org/d3.v3.min.js"></script>
  <script src="https://rawgit.com/jasondavies/d3-cloud/master/build/d3.layout.cloud.js"></script>
<script type="text/javascript">

   app.response1 = function(){
       var loc = $("#response1Text").val();
      if (loc == "") {
       alert("Please write the response.")
       }else{
        var regex1 = /\./gi;
        var regex2 = /\,/gi;
        var regex3 = /\"/gi;
    var regex4 = /\“/gi;
    var regex5 = /\”/gi;
    var regex6 = /\—|–/gi;
        loc = loc.replace(regex1, '');
         loc = loc.replace(regex2, '');
         loc = loc.replace(regex3, '');
     loc = loc.replace(regex4, '');
     loc = loc.replace(regex5, '');
     loc = loc.replace(regex6, ' ');

        var WordList = ['ABOARD','BEHIND','DURING','ABOUT','BELOW','EXCEPT','ABOVE','BENEATH','FOR','ACROSS','BESIDE','FROM','AFTER','BESIDES','IN','AGAINST','BETWEEN','INSIDE','ALONG','BEYOND','INTO','AMONG','BUT','LIKE','AROUND','BY','NEAR','AT','CONCERNING','OF','BEFORE','DOWN','OFF','ON','THROUGHOUT','UNTIL','OUT','TILL','UP','OVER','TO','UPON','PAST','TOWARD','WITH','SINCE','UNDER','WITHIN','THROUGH','UNDERNEATH','WITHOUT','ACCORDING TO','IN ADDITION TO','ON ACCOUNT OF','AS OF','IN FRONT','OF','OUT OF','ASIDE FROM','IN PLACE OF','OWING TO','BECAUSE OF','IN SPITE OF','PRIOR TO','BY MEANS OF','INSTEAD OF','PRIOR TO','AM','ARE','IS','WAS','WERE','BE','BEING','BEEN','HAVE','HAS','HAD','SHALL','WILL','DO','DOES','DID','MAY','MUST','MIGHT','CAN','COULD','WOULD','SHOULD','ALL','ANOTHER','ANY','ANYBODY','ANYONE','ANYTHING','BOTH','EACH','EITHER','EVERYBODY','EVERYONE','EVERYTHING','FEW','HE','HER','HERS','HERSELF','HIM','HIMSELF','HIS','I','IT','ITS','ITSELF','MANY','ME MINE','MORE','MOST','MUCH','MY','MYSELF','NEITHER','NO ONE','NOBODY','NONE','NOTHING','ONE','OTHER','OTHERS','OUR','OURS','OURSELVES','SEVERAL','SHE','SOME','SOMEBODY','SOMEONE','SOMETHING','THAT','THEIR','THEIRS','THEM','THEMSELVES','THESE','THEY','THIS','THOSE','US','W','WE','WHAT','WHATEVER','WHICH','WHICHEVER','WHO','WHOEVER','WHOM','WHOMEVER','WHOSE','YOU','YOUR','YOURS','YOURSELF','YOURSELVES','AT','A','A','ABLE','ABOUT','ABOVE','ABST','ACCORDANCE','ACCORDING','ACCORDINGLY','ACROSS','ACT','ACTUALLY','ADDED','ADJ','ADOPTED','AFFECTED','AFFECTING','AFFECTS','AFTER','AFTERWARDS','AGAIN','AGAINST','AH','AL','ALL','ALMOST','ALONE','ALONG','ALREADY','ALSO','ALTHOUGH','ALWAYS','AM','AMONG','AMONGST','AN','AND','ANNOUNCE','ANOTHER','ANY','ANYBODY','ANYHOW','ANYMORE','ANYONE','ANYTHING','ANYWAY','ANYWAYS','ANYWHERE','APPARENTLY','APPROXIMATELY','ARE','AREN','ARENT','ARISE','AROUND','AS','ASIDE','ASK','ASKING','AT','AUTH','AVAILABLE','AWAY','AWFULLY','B','BACK','BE','BECAME','BECAUSE','BECOME','BECOMES','BECOMING','BEEN','BEFORE','BEFOREHAND','BEGIN','BEGINNING','BEGINNINGS','BEGINS','BEHIND','BEING','BELIEVE','BELOW','BESIDE','BESIDES','BETWEEN','BEYOND','BIOL','BOTH','BRIEF','BRIEFLY','BUT','BUT','BY','C','CA','CAME','CAN','CANNOT','CAUSE','CAUSES','CERTAIN','CERTAINLY','CO','COM','COME','COMES','CONTAIN','CONTAINING','CONTAINS','COULD','COULDNT','D','DATE','DID','DIDN','DIFFERENT','DO','DOES','DOESN','DOING','DONE','DON','DOWN','DOWNWARDS','DUE','DURING','E','EACH','ED','EDU','EFFECT','EG','EIGHT','EIGHTY','EITHER','ELSE','ELSEWHERE','END','ENDING','ENOUGH','ESPECIALLY','ET','ETC','EVEN','EVER','EVERY','EVERYBODY','EVERYONE','EVERYTHING','EVERYWHERE','EX','EXCEPT','F','FAR','FEW','FF','FIFTH','FIRST','FIVE','FIX','FOLLOWED','FOLLOWING','FOLLOWS','FOR','FORMER','FORMERLY','FORTH','FOUND','FOUR','FROM','FURTHER','FURTHERMORE','G','GAVE','GET','GETS','GETTING','GIVE','GIVEN','GIVES','GIVING','GO','GOES','GONE','GOT','GOTTEN','H','HAD','HAPPENS','HARDLY','HAS','HASN','HAVE','HAVEN','HAVING','HE','HED','HENCE','HER','HERE','HEREAFTER','HEREBY','HEREIN','HERES','HEREUPON','HERS','HERSELF','HES','HI','HID','HIM','HIMSELF','HIS','HITHER','HOME','HOW','HOWBEIT','HOWEVER','HUNDRED','I','ID','IE','IF','IM','IMMEDIATE','IMMEDIATELY','IMPORTANCE','IMPORTANT','IN','IN','INC','INDEED','INDEX','INFORMATION','INSTEAD','INTO','INVENTION','INWARD','IS','ISN','IT','IT','ITD','ITS','ITSELF','J','JUST','K','KEEP','KEEPS','KEPT','KEYS','KG','KM','KNOW','KNOWN','KNOWS','L','LARGELY','LAST','LATELY','LATER','LATTER','LATTERLY','LEAST','LESS','LEST','LET','LETS','LIKE','LIKED','LIKELY','LINE','LITTLE','LOOK','LOOKING','LOOKS','LTD','M','MADE','MAINLY','MAKE','MAKES','MANY','MAY','MAYBE','ME','MEAN','MEANS','MEANTIME','MEANWHILE','MERELY','MG','MIGHT','MILLION','MISS','ML','MORE','MOREOVER','MOST','MOSTLY','MR','MRS','MUCH','MUG','MUST','MY','MYSELF','N','NA','NAME','NAMELY','NAY','ND','NEAR','NEARLY','NECESSARILY','NECESSARY','NEED','NEEDS','NEITHER','NEVER','NEVERTHELESS','NEW','NEXT','NINE','NINETY','NO','NOBODY','NON','NONE','NONETHELESS','NOONE','NOR','NORMALLY','NOS','NOT','NOTED','NOTHING','NOW','NOWHERE','O','OBTAIN','OBTAINED','OBVIOUSLY','OF','OFF','OFTEN','OH','OK','OKAY','OLD','OMITTED','ON','ONCE','ONE','ONES','ONLY','ONTO','OR','ORD','OTHER','OTHERS','OTHERWISE','OUGHT','OUR','OUR','OURS','OURSELVES','OUT','OUTSIDE','OVER','OVERALL','OWING','OWN','P','PAGE','PAGES','PART','PARTICULAR','PARTICULARLY','PAST','PER','PERHAPS','PLACED','PLEASE','PLUS','POORLY','POSSIBLE','POSSIBLY','POTENTIALLY','PP','PREDOMINANTLY','PRESENT','PREVIOUSLY','PRIMARILY','PROBABLY','PROMPTLY','PROUD','PROVIDES','PUT','Q','QUE','QUICKLY','QUITE','QV','R','RAN','RATHER','RD','RE','READILY','REALLY','RECENT','RECENTLY','REF','REFS','REGARDING','REGARDLESS','REGARDS','RELATED','RELATIVELY','RESEARCH','RESPECTIVELY','RESULTED','RESULTING','RESULTS','RIGHT','RUN','S','SAID','SAME','SAW','SAY','SAYING','SAYS','SEC','SECTION','SEE','SEEING','SEEM','SEEMED','SEEMING','SEEMS','SEEN','SELF','SELVES','SENT','SEVEN','SEVERAL','SHALL','SHE','SHED','SHES','SHOULD','SHOULDN','SHOW','SHOWED','SHOWN','SHOWNS','SHOWS','SIGNIFICANT','SIGNIFICANTLY','SIMILAR','SIMILARLY','SINCE','SIX','SLIGHTLY','SO','SO','SOME','SOMEBODY','SOMEHOW','SOMEONE','SOMETHAN','SOMETHING','SOMETIME','SOMETIMES','SOMEWHAT','SOMEWHERE','SOON','SORRY','SPECIFICALLY','SPECIFIED','SPECIFY','SPECIFYING','STATE','STATES','STILL','STOP','STRONGLY','SUB','SUBSTANTIALLY','SUCCESSFULLY','SUCH','SUFFICIENTLY','SUGGEST','SUP','SURE','T','TAKE','TAKEN','TAKING','TELL','TENDS','TH','THAN','THANK','THANKS','THANX','THAT','THATS','THE','THEIR','THEIR','THEIRS','THEM','THEMSELVES','THEN','THENCE','THERE','THERE','THEREAFTER','THEREBY','THERED','THEREFORE','THEREIN','THEREOF','THERERE','THERES','THERETO','THEREUPON','THESE','THEY','THESE','THEY','THEYD','THEYRE','THINK','THIS','THIS','THOSE','THOSE','THOU','THOUGH','THOUGHH','THOUSAND','THROUG','THROUGH','THROUGHOUT','THRU','THUS','TIL','TIP','TO','TOGETHER','TOO','TOOK','TOWARD','TOWARDS','TRIED','TRIES','TRULY','TRY','TRYING','TS','TWICE','TWO','U','UN','UNDER','UNFORTUNATELY','UNLESS','UNLIKE','UNLIKELY','UNTIL','UNTO','UP','UPON','UPS','US','USE','USED','USEFUL','USEFULLY','USEFULNESS','USES','USING','USUALLY','V','VALUE','VARIOUS','VE','VERY','VIA','VIZ','VOL','VOLS','VS','W','WANT','WANTS','WAS','WASN','WAY','WE','WED','WELCOM','WENT','WERE','WEREN','WHAT','WHATEVER','WHATS','WHEN','WHENCE','WHENEVER','WHERE','WHEREAFTER','WHEREAS','WHEREBY','WHEREIN','WHERES','WHEREUPON','WHEREVER','WHETHER','WHICH','WHILE','WHIM','WHITHER','WHO','WHOD','WHOEVER','WHOLE','WHOM','WHOMEVER','WHOS','WHOSE','WHY','WIDELY','WILL','WILLING','WISH','WITH','WITHIN','WITHOUT','WORDS','WORLD','WOULD','WOULDN','WWW','X','Y','YES','YET','YOU','YOUD','YOUR','YOUR','YOURE','YOURS','YOURSELF','YOURSELVES','Z','ZERO','','AS','–',"'",'"',';',',','(',')'];

          var list= [];
          var loc1 = loc.split(' ');
          var word1 =[];
         for (var i = 0; i < loc1.length; ++i) {
            var loc3 = loc1[i];
            var loc4 = WordList.indexOf(loc3.toUpperCase());
            if(loc4 == -1){
              
              word1.push(loc3);
              //
            }
         }
        var CCWord = $.extend({}, cc(word1));
        var temp = [];
        $.each(CCWord, function(key, value) {
            temp.push({v:value, k: key});
        });
        temp.sort(function(a,b){
           if(a.v > b.v){ return -1}
            if(a.v < b.v){ return 1}
              return 0;
        });
        var temp1 =[];
        var temp2 =[];
        $.each(temp,function(k,v){ 
            temp1.push(v['k']);
            temp2.push(v['v']);
        });
         $.each(temp1,function(k,v){ 
     if(k==51)     
      return false;
            var calss = shuffleArray(["vertical",""])[0];
           list.push({'text': v, 'weight': temp2[k], 'html': {"class": calss}});
        });
          $(".f1").html(temp1[0]);
          $(".f2").html(temp1[1]);

         
        
         $(".wordClouds").css({"visibility":"visible","height":"auto"});
         app.WordC(list);
         $(".act1").hide();
          $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});

        }
   }

function cc(arr){
  var obj = { };
    for (var i = 0, j = arr.length; i < j; i++) {
       obj[arr[i]] = (obj[arr[i]] || 0) + 1;
    }
    return obj;
}
    app.response2 = function(){
      var loc = $("#response2Text").val();
      if (loc == "") {
       alert("Please write the response.")
       }else{
        $(".act2").hide();
        $(".carouselC").css({"visibility":"visible","height":"auto"});
         var items="";
        for (var i = 1; i < 10; i++) {
          var f = "";
            if(i == 1){
              f = "active";
            }else{
              f = "";
            }
           items += '<div class="item '+f+'"><div class="row">';
             for (var j = 1; j < 4; j++) {
              items += '<div class="col-sm-4"><div class="well text-left small"><div class="iHeight">';
              items += loc;
              items += '</div><br><span>';
              items += '<img src="img/module_1_section_2_9.png" width="60" /> ';
              items += '<span class="text-uppercase" style="color:#000;"> <?php echo $_SESSION["Fname"]." ".$_SESSION["Lname"];?></span>';
              items += '</span>';
              items += '</div></div>';
             }
           items += '</div></div>';
         
        } 
        $("#additem").append(items);
        $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});
      }
   }
   function shuffleArray(array) {
     for (var i = array.length - 1; i > 0; i--) {
         var j = Math.floor(Math.random() * (i + 1));
         var temp = array[i];
         array[i] = array[j];
         array[j] = temp;
     }
     return array;
   }
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
               <!-- <a  class="wow fadeInDownBig" href="#b1" style="color:#fff;"><i class="fa fa-angle-down fa-4x" aria-hidden="true"></i></a> -->
            </div>
         </div>
      </div>
   </div>
   <br><br>   

  <div id="b1" class="container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
            <div class="videocontent">
               <video class="video-js vjs-default-skin  vjs-big-play-centered" width="640" height="264" controls poster="media/Module1Final.jpg" preload="auto" data-setup='{"fluid": true}'>
                  <source src="https://s3.amazonaws.com/dell-med/Module 1 Final.mp4" type="video/mp4"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Module 1 Final.webm" type="video/webm"></source>
                  <source src="https://s3.amazonaws.com/dell-med/Module 1 Final.ogv" type="video/ogg"></source>
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
                  <f><p>Your response: <strong><span class="f1"></span>, <span class="f2"></span></strong></p></f>
                  <div id="my_favorite_latin_words" style="width: 100%; background: #33a0cb; color: #fff; height: 350px; border: 1px solid #ccc;"></div>
               </div>
               <div class="act1" >
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>YOUR PERSPECTIVE</h2></f>
                           <div class="line4"></div>
                           <f><p>After watching this video, what do you think matters to Ms. Jones when it comes to health care?</p></f>
                           <div class="line4"></div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                       <f><p class="small"><i>Enter your response below to see the response of others like you.</i></p></f>
                     </div>
                     </div>
                  <div class="row">
                     <div class="col-sm-12" >
                        <div  class="navbar-form navbar-center" style="">
                           <div class="input-group" style="width:100%;">
                              <input id="response1Text" type="Search" placeholder="Your response to the question..." class="form-control" />
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
                           <div class="line4"></div>
                           
                        </div>
                     </div>
                  </div>
                <div class="row">
                     <div class="col-sm-12">
                       <f><p class="small"><i>Enter your response below to see the response of others like you.</i></p></f>
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
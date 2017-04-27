<?php
$c1 = "select * from records where email='".$_SESSION['username']."' and status='complete'";
$Crun0=mysqli_query($dbcon,$c1);
$row = $Crun0->fetch_object();
//echo count($row);
if (count($row) != 0) {
  /* $q6="INSERT INTO records (Fname,Lname,email,module_Number,module_data,status) VALUES ('$Fname','$Lname','$Email','m1','$startData','active');";
            $Qrun2=mysqli_query($dbcon,$q6);*/
}
?>
<script type="text/javascript">
window.moduleCompleteCheck = true;
var WordList = ['-','A','A V M','ABLE','ABOARD','ABOUT','ABOVE','ABST','ACCORDANCE','ACCORDING','ACCORDING TO','ACCORDINGLY','ACROSS','ACT','ACTUALLY','ADDED','ADJ','ADMIRAAL','ADMIRAL','ADOPTED','AFFECTED','AFFECTING','AFFECTS','AFTER','AFTERWARDS','AGAIN','AGAINST','AH','AIR CDRE','AIR COMMODORE','AIR MARSHAL','AIR VICE MARSHAL','AL','ALDERMAN','ALHAJI','ALL','ALMOST','ALONE','ALONG','ALREADY','ALSO','ALTHOUGH','ALWAYS','AM','AMBASSADOR','AMID','AMONG','AMONGST','AN','AND','ANNOUNCE','ANOTHER','ANTI','ANY','ANYBODY','ANYHOW','ANYMORE','ANYONE','ANYTHING','ANYWAY','ANYWAYS','ANYWHERE','APPARENTLY','APPROXIMATELY','ARE','AREN','ARENT','ARISE','AROUND','AS','AS OF','ASIDE','ASIDE FROM','ASK','ASKING','AT','AUTH','AVAILABLE','AWAY','AWFULLY','B','BACK','BARON','BARONES','BE','BECAME','BECAUSE','BECAUSE OF','BECOME','BECOMES','BECOMING','BEEN','BEFORE','BEFOREHAND','BEGIN','BEGINNING','BEGINNINGS','BEGINS','BEHIND','BEING','BELIEVE','BELOW','BENEATH','BESIDE','BESIDES','BETWEEN','BEYOND','BIOL','BOTH','BRGDR','BRIEF','BRIEFLY','BRIG','BRIG GEN','BRIG GENERAL','BRIGADIER','BRIGADIER GENERAL','BROTHER','BUT','BY','BY MEANS OF','C','CA','CAME','CAN','CANNOT','CANON','CAPT','CAPTAIN','CARDINAL','CAUSE','CAUSES','CDR','CERTAIN','CERTAINLY','CHIEF','CIK','CMDR','CO','COL','COL DR','COLONEL','COM','COME','COMES','COMMANDANT','COMMANDER','COMMISSIONER','COMMODORE','COMTE','COMTESSA','CONCERNING','CONGRESSMAN','CONSEILLER','CONSIDERING','CONSUL','CONTAIN','CONTAINING','CONTAINS','CONTE','CONTESSA','CORPORAL','COULD','COULDNT','COUNCILLOR','COUNT','COUNTESS','CROWN PRINCE','CROWN PRINCESS','D','DAME','DATE','DATIN','DATO','DATUK','DATUK SERI','DEACON','DEACONESS','DEAN','DESPITE','DHR','DID','DIDN','DIFFERENT','DIPL ING','DO','DOCTOR','DOES','DOESN','DOING','DON','DONE','DOTT','DOTT SA','DOWN','DOWNWARDS','DR','DR ING','DRA','DRS','DUE','DURING','E','EACH','ED','EDU','EFFECT','EG','EIGHT','EIGHTY','EITHER','ELSE','ELSEWHERE','EMBAJADOR','EMBAJADORA','EN','ENCIK','END','ENDING','ENG','ENOUGH','ESPECIALLY','ET','ETC','EUR ING','EVEN','EVER','EVERY','EVERYBODY','EVERYONE','EVERYTHING','EVERYWHERE','EX','EXCEPT','EXCEPTING','EXCLUDING','EXMA SRA','EXMO SR','F','F O','FAR','FATHER','FEW','FF','FIFTH','FIRST','FIRST LIEUTIENT','FIRST OFFICER','FIVE','FIX','FLT LIEUT','FLT LT','FLYING OFFICER','FOLLOWED','FOLLOWING','FOLLOWS','FOR','FORMER','FORMERLY','FORTH','FOUND','FOUR','FR','FRAU','FRAULEIN','FROM','FRU','FURTHER','FURTHERMORE','G','GAVE','GEN','GENERAAL','GENERAL','GET','GETS','GETTING','GIVE','GIVEN','GIVES','GIVING','GO','GOES','GONE','GOT','GOTTEN','GOVERNOR','GRAAF','GRAVIN','GROUP CAPT','GROUP CAPTAIN','GRP CAPT','H','H E DR','H H','H M','H R H','HAD','HAJAH','HAJI','HAJIM','HAPPENS','HARDLY','HAS','HASN','HAVE','HAVEN','HAVING','HE','HED','HENCE','HER','HER HIGHNESS','HER MAJESTY','HERE','HEREAFTER','HEREBY','HEREIN','HERES','HEREUPON','HERR','HERS','HERSELF','HES','HI','HID','HIGH CHIEF','HIM','HIMSELF','HIS','HIS HIGHNESS','HIS HOLINESS','HIS MAJESTY','HITHER','HOME','HON','HOW','HOWBEIT','HOWEVER','HR','HRA','HUNDRED','I','ID','IE','IF','IM','IMMEDIATE','IMMEDIATELY','IMPORTANCE','IMPORTANT','IN','IN ADDITION TO','IN FRONT','IN PLACE OF','IN SPITE OF','INC','INDEED','INDEX','INFORMATION','ING','INSIDE','INSTEAD','INSTEAD OF','INTO','INVENTION','INWARD','IR','IS','ISN','IT','ITD','ITS','ITSELF','J','JONKHEER','JUDGE','JUST','JUSTICE','K','KEEP','KEEPS','KEPT','KEYS','KG','KHUN YING','KM','KNOW','KNOWN','KNOWS','KOLONEL','L','LADY','LARGELY','LAST','LATELY','LATER','LATTER','LATTERLY','LCDA','LEAST','LESS','LEST','LET','LETS','LIC','LIEUT','LIEUT CDR','LIEUT COL','LIEUT GEN','LIKE','LIKED','LIKELY','LINE','LITTLE','LOOK','LOOKING','LOOKS','LORD','LT-CMDR','LT-COL','LTD','M','M L','M R','MADAME','MADE','MADEMOISELLE','MAINLY','MAJ GEN','MAJ-GEN','MAJOR','MAKE','MAKES','MANY','MASTER','MAY','MAYBE','ME','ME MINE','MEAN','MEANS','MEANTIME','MEANWHILE','MERELY','MEVROUW','MG','MIGHT','MILLION','MINUS','MISS','ML','MLLE','MME','MONSIEUR','MONSIGNOR','MORE','MOREOVER','MOST','MOSTLY','MR','MRS','MS','MSTR','MUCH','MUG','MUST','MY','MYSELF','N','NA','NAME','NAMELY','NAY','ND','NEAR','NEARLY','NECESSARILY','NECESSARY','NEED','NEEDS','NEITHER','NEVER','NEVERTHELESS','NEW','NEXT','NINE','NINETY','NO','NO ONE','NOBODY','NON','NONE','NONETHELESS','NOONE','NOR','NORMALLY','NOS','NOT','NOTED','NOTHING','NOW','NOWHERE','NTI','O','OBTAIN','OBTAINED','OBVIOUSLY','OF','OFF','OFTEN','OH','OK','OKAY','OLD','OMITTED','ON','ON ACCOUNT OF','ONCE','ONE','ONES','ONLY','ONTO','OPPOSITE','OR','ORD','OTHER','OTHERS','OTHERWISE','OUGHT','OUR','OURS','OURSELVES','OUT','OUT OF','OUTSIDE','OVER','OVERALL','OWING','OWING TO','OWN','P','PAGE','PAGES','PART','PARTICULAR','PARTICULARLY','PAST','PASTOR','PER','PERHAPS','PLACED','PLEASE','PLUS','POORLY','POSSIBLE','POSSIBLY','POTENTIALLY','PP','PREDOMINANTLY','PRESENT','PRESIDENT','PREVIOUSLY','PRIMARILY','PRINCE','PRINCESS','PRINCESSE','PRINSES','PRIOR TO','PROBABLY','PROF','PROF DR','PROF SIR','PROFESSOR','PROMPTLY','PROUD','PROVIDES','PUAN','PUAN SRI','PUT','Q','QUE','QUICKLY','QUITE','QV','R','RABBI','RAN','RATHER','RD','RE','READILY','REALLY','REAR ADMIRAL','REAR ADMRL','RECENT','RECENTLY','REF','REFS','REGARDING','REGARDLESS','REGARDS','RELATED','RELATIVELY','RESEARCH','RESPECTIVELY','RESULTED','RESULTING','RESULTS','REV','REV CANON','REV DR','REV MOTHER','REVD CANON','REVD FATHER','REVEREND','RIGHT','ROUND','RT HON LORD','RUN','RVA','S','SAID','SAME','SAVE','SAW','SAY','SAYING','SAYS','SEC','SECTION','SEE','SEEING','SEEM','SEEMED','SEEMING','SEEMS','SEEN','SELF','SELVES','SENATOR','SENT','SERGEANT','SEVEN','SEVERAL','SHALL','SHE','SHED','SHEIKH','SHEIKHA','SHES','SHOULD','SHOULDN','SHOW','SHOWED','SHOWN','SHOWNS','SHOWS','SIG','SIG NA','SIG RA','SIGNIFICANT','SIGNIFICANTLY','SIMILAR','SIMILARLY','SINCE','SIR','SISTER','SIX','SLIGHTLY','SO','SOME','SOMEBODY','SOMEHOW','SOMEONE','SOMETHAN','SOMETHING','SOMETIME','SOMETIMES','SOMEWHAT','SOMEWHERE','SOON','SORRY','SPECIFICALLY','SPECIFIED','SPECIFY','SPECIFYING','SQN LDR','SR','SR D','SRA','SRTA','STATE','STATES','STILL','STOP','STRONGLY','SUB','SUBSTANTIALLY','SUCCESSFULLY','SUCH','SUFFICIENTLY','SUGGEST','SULTAN','SUP','SURE','T','TAKE','TAKEN','TAKING','TAN SRI','TAN SRI DATO','TELL','TENDS','TENGKU','TEUKU','TH','THAN','THAN PUYING','THANK','THANKS','THANX','THAT','THATS','THE','THE HON','THE HON DR','THE HON JUSTICE','THE HON MISS','THE HON MR','THE HON MRS','THE HON MS','THE HON SIR','THE VERY REV','THEIR','THEIRS','THEM','THEMSELVES','THEN','THENCE','THERE','THEREAFTER','THEREBY','THERED','THEREFORE','THEREIN','THEREOF','THERERE','THERES','THERETO','THEREUPON','THESE','THEY','THEYD','THEYRE','THINK','THIS','THOSE','THOU','THOUGH','THOUGHH','THOUSAND','THROUG','THROUGH','THROUGHOUT','THRU','THUS','TIL','TILL','TIP','TO','TOGETHER','TOH PUAN','TOO','TOOK','TOWARD','TOWARDS','TRIED','TRIES','TRULY','TRY','TRYING','TS','TUN','TWICE','TWO','U','UN','UNDER','UNDERNEATH','UNFORTUNATELY','UNLESS','UNLIKE','UNLIKELY','UNTIL','UNTO','UP','UPON','UPS','US','USE','USED','USEFUL','USEFULLY','USEFULNESS','USES','USING','USUALLY','V','VALUE','VARIOUS','VE','VERSUS','VERY','VIA','VICE ADMIRAL','VISCOUNT','VISCOUNTESS','VIZ','VOL','VOLS','VS','W','WANT','WANTS','WAS','WASN','WAY','WE','WED','WELCOM','WENT','WERE','WEREN','WG CDR','WHAT','WHATEVER','WHATS','WHEN','WHENCE','WHENEVER','WHERE','WHEREAFTER','WHEREAS','WHEREBY','WHEREIN','WHERES','WHEREUPON','WHEREVER','WHETHER','WHICH','WHICHEVER','WHILE','WHIM','WHITHER','WHO','WHOD','WHOEVER','WHOLE','WHOM','WHOMEVER','WHOS','WHOSE','WHY','WIDELY','WILL','WILLING','WISH','WITH','WITHIN','WITHOUT','WNG CMDR','WORDS','WORLD','WOULD','WOULDN','WWW','X','Y','YES','YET','YOU','YOUD','YOUR','YOURE','YOURS','YOURSELF','YOURSELVES','Z','ZERO','I\'M','YOU\'RE ','HE\'S','SHE\'S','WE\'RE ','IT\'S ','ISN\'T ','AREN\'T ','THEY\'RE','THERE\'S ','WASN\'T ','WEREN\'T','I\'VE ','YOU\'VE','HE\'S','SHE\'S ','IT\'S ','WE\'VE ','THEY\'VE ','THERE\'S','HASN\'T ','HAVEN\'T ','I\'D','YOU\'D','HE\'D ','SHE\'D ','IT\'D ','WE\'D ','THEY\'D ','DOESN\'T ','DON\'T ','DIDN\'T ','I\'LL ','YOU\'LL','HE\'LL','SHE\'LL ','WE\'LL ','THEY\'LL ','THERE\'LL ','I\'D ','YOU\'D ','HE\'D','SHE\'D','IT\'D ','WE\'D','THEY\'D ','THERE\'D ','THERE\'D ','CAN\'T ','COULDN\'T ','DAREN\'T ','HADN\'T ','MIGHTN\'T ','MUSTN\'T ','NEEDN\'T ','OUGHTN\'T ','SHAN\'T ','SHOULDN\'T ','USEDN\'T ','WON\'T ','WOULDN\'T '];

app.sortWord = function(loc){
         var regex1 = /\!|\"|\#|\$|\%|\&|'|\(|\)|\*|\+|\,|\-|\.|\/|\:|\;|\<|\=|\>|\?|\@|\[|\\|\]|\^|\_|\`|\{|\}|\~|\“|\”|\—|\–|\|/gi;            
            var regex2 = /\d/gi;
            loc = loc.replace(regex1, '');
            loc = loc.replace(regex2, '');
            
            var list= [];
            var loc1 = loc.split(' ');
            var word1 =[];
         for (var i = 0; i < loc1.length; ++i) {
            var loc3 = loc1[i];
            var loc4 = WordList.indexOf(loc3.toUpperCase());
            if(loc4 == -1){
              word1.push(loc3);
            }
         }
        var CCWord = $.extend({}, cc(word1));
        var temp = [];
        $.each(CCWord, function(key, value) {
          if (key !='') {
            temp.push({v:value, k: key});
            //console.log(key)
          }
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
           if(k==51){    
            return false;
          }
          var calss = shuffleArray(["vertical",""])[0];
           list.push({'text': v, 'weight': temp2[k], 'html': {"class": calss}});
        });

        return {list:list,top1:temp1[0],top2:temp1[1]};
}
function cc(arr){
  var obj = { };
    for (var i = 0, j = arr.length; i < j; i++) {
       obj[arr[i]] = (obj[arr[i]] || 0) + 1;
    }
    return obj;
}
  app.showRM= function(){
    
          var loc11 = $(".iHeight").length;
          for (var i = 0; i < loc11; ++i) {
            var divheight = $(".iHeight").eq(i).find('span').height(); 
            var lineheight = $(".iHeight").eq(i).find('span').css('line-height').replace("px","");
            var lineCount = Math.round(divheight/parseInt(lineheight));
            if(lineCount > 9){
              $(".iHeight").eq(i).next().css({"visibility":"visible"}); 
            }else{
              $(".iHeight").eq(i).next().css({"visibility":"hidden"});  
            }
           // console.log(lineCount)
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
var pageScroll=null;
$(window).scroll(function() {
  var loc = (($(window).scrollTop() / ($(document).height()-$(window).height())) * 100).toFixed(0);
  //
  pageScroll = parseInt(loc);
  
  if(pageScroll>=app.PageComplete){
    app.PageComplete = pageScroll;
  }


});
$(document).ready(function() {
  var section = 's'+app.qs["id"][6];
  var SelecteM ='m'+app.qs["id"][1];
 
  app.SData = app.MData[SelecteM].sections[section];
  app.MIN = parseInt(app.SData['MIN']);
  app.HR = parseInt(app.SData['HR']);
  var sec = 0;
  setInterval(function(){ 
      sec++;
      if(sec == 59){
        app.MIN = app.MIN+1;
        sec=0;
      }
      if(app.MIN == 59){
        app.HR= app.HR+1;
        app.MIN=0;
      }
     }, 1000);
  app.PageComplete = parseInt(app.SData['complete']);

  //$('html, body').animate({scrollTop: (app.PageComplete/100)*$(document).height()}, 1000);

  setInterval(function(){
     var mHR = 0;
     var mMIN = 0;
     var mComplete = 0;

     $.each(app.MData[SelecteM].sections ,function(k,v){
        var h = parseInt(v['HR']);
        var m = parseInt(v['MIN']);
        var p = parseInt(v['complete']);
        mMIN = mMIN + m;
        mHR = mHR + h;
        mComplete = mComplete + p;
    })
    mHR = parseInt(mHR) + parseInt((mMIN/60).toFixed(0)); 
    mMIN = (parseInt(mMIN)%60);
   
    app.MData[SelecteM]['HR'] = mHR;
    app.MData[SelecteM]['MIN'] = mMIN;
  //  debugger;
    if (SelecteM == 'm1') {
       mComplete = (mComplete*100/900).toFixed(0);
       if(mComplete == 100 ){
        app.MData[SelecteM]['status'] = 'complete';
       }
     }else if (SelecteM == 'm2') {
      mComplete = (mComplete*100/800).toFixed(0);
       if(mComplete == 100 ){
        app.MData[SelecteM]['status'] = 'complete';
       }

     }else if (SelecteM == 'm3') {
      mComplete = (mComplete*100/800).toFixed(0);
       if(mComplete == 100 ){
        app.MData[SelecteM]['status'] = 'complete';
       }
     }
    
    if(mComplete >=100){
      mComplete=100;
    }
	 
    app.MData[SelecteM]['complete'] = mComplete;
    app.MData[SelecteM].sections[section]['HR'] = app.HR;

    app.MData[SelecteM].sections[section]['MIN'] = app.MIN;
    if(app.PageComplete >= 100){
      app.PageComplete = 100;
    }
    app.MData[SelecteM].sections[section]['complete'] = app.PageComplete;
    var data = JSON.stringify(app.MData);
    var loc = {email:"<?php echo $_SESSION['username'];?>",MData:data};
      app.DataSave(loc);

    if(app.MData['m1']['status']=="complete" && app.MData['m2']['status']=="complete" && app.MData['m3']['status']=="complete")
			{
			             var decodedCookie = decodeURIComponent(document.cookie);
						  var ca = decodedCookie.split(';');
							  if(ca.indexOf("notnow=<?php echo $_SESSION['username']; ?>")== -1)
							   {					  
			                    $('#ModuleCompleteModal').modal({show: 'false'}); 
							   }
							

			}
     }, 1000);

});

</script>

  <div class="modal fade" id="ModuleCompleteModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background:url('img/bgLogin.png');color:white;">
        <div class="modal-header text-center">
		  <h4>Congratulations!</h4>
        </div>
        <div class="modal-body">
           You have completed the Introduction to Value-Based Health Care modules. Please follow this link <a href="?id=survey" target="_blank">Click here</a> to complete a survey about these modules. Once you have completed this survey, you will receive your certificate of completion for these modules.
        </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-danger mcmpnotnow" data-dismiss="modal">Not Now</button>
        </div>
      </div> 
    </div>
  </div>
 <script>
$(".mcmpnotnow").click(function(){
   var date = new Date();
    date.setDate(date.getDate() + 1)
    var expires = "expires="+ date.toUTCString();
    document.cookie = "notnow=<?php echo $_SESSION['username']; ?>;"+expires;
});
</script>

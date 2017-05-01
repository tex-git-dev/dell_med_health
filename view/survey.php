<?php
if(!$_SESSION['username']){
  ?>
  <script>
  window.location.href="<?php echo pathUrl();?>";
  </script>
<?php
}
?>

<?php 
include("db.php");
$status = "";
$user_id = $_SESSION['username'];
if($user_id!=null)
{
  $c2 = "select * from tbl_survey where user_id = '".$user_id."'";
  $Crun1 =mysqli_query($dbcon,$c2);
  $row = $Crun1->fetch_object();
  $status =  $row->status;  
 }
?>


<style>
span.form-control
{
display:none;
}
#howdidhearabout-other,#on-an-agreement-other{
display:none;
}
.nav-tabs li
{
pointer-events:none;
}

#msgF label
{
 color:red;
}
</style>
<div class="container">
  <h2>Give us your valuable feedback</h2>
  <p>Complete Survey and get your certificate</p>
  <ul class="nav nav-tabs">
    <li class="<?php if($status=='0'){ echo "active"; }?>"><a>Question 1</a></li>
    <li class="<?php if($status=='1'){ echo "active"; }?>"><a>Question 2</a></li>
    <li class="<?php if($status=='2'){ echo "active"; }?>"><a>Question 3</a></li>
    <li class="<?php if($status=='3'){ echo "active"; }?>"><a>Question 4</a></li>
    <li class="<?php if($status=='4'){ echo "active"; }?>"><a>Question 5</a></li>
    <li class="<?php if($status=='5'){ echo "active"; }?>"><a>Question 6</a></li>
	<li class="<?php if($status=='6'){ echo "active"; }?>"><a>Get Your certificate</a></li>
  </ul>

  <div class="tab-content">
    <div id="Question1" class="tab-pane fade <?php if($status=='0'){ echo "in active"; }?>">
      <h3>Question 1</h3>
      <p>How did you hear about us?</p>
	     <div class="col-md-12">
		  <div class="form-group">
		  <select class="form-control" id="howdidhearabout">
		    <option>From my organization</option>
		    <option>from a colleague</option>
		    <option>online</option>
			<option>from my school</option>
			<option>other</option>
		  </select>
		  </div>
		</div>
		
		<div class="col-md-12" id="howdidhearabout-other">
		  <div class="form-group">
		  <textarea class="form-control" placeholder="How did you hear about us" id="howdidhearabout-text"></textarea>
		  </div>
		</div>
		
		 <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question2" data-toggle="tab" class="btn btn-success" id="howdidhearabout-btn">Next</a>
		  </div>
		</div>

    </div>
    <div id="Question2" class="tab-pane fade <?php if($status=='1'){ echo "in active"; }?>">
       <h3>Question 2</h3>
      <p>Reasons for using these modules.</p>
	  <p>To learn more about health care value, to augment my current education, to help me understand costs of health care in the US, it was assigned as part of a course</p>
	  <div class="col-md-12" >
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="reason-for-using-m" value="Yes" class="reason-for-using" checked>Yes
		  </div>
		  </div>
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="reason-for-using-m" value="No" class="reason-for-using">No
		  </div>
		  </div>
      </div>
	  
	  <div class="col-md-12" id="reason-for-using-yesno">
		  <div class="col-sm-4">
		  <div class="form-group">
		  <label>what course</label>
		  <textarea class="form-control" placeholder="what course" id="reason-for-using-course"></textarea>
		  </div>
		  </div>
		  <div class="col-sm-4">
		  <div class="form-group">
		  <label>for which program</label>
		  <textarea class="form-control" placeholder="for which program" id="reason-for-using-program"></textarea>
		  </div>
		  </div>
      </div> 

		 <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question3" data-toggle="tab" class="btn btn-success" id="reason-for-using-btn">Next</a>
		  </div>
		</div>
		
    </div>
	
    <div id="Question3" class="tab-pane fade <?php if($status=='2'){ echo "in active"; }?>">
      <h3>Question 3</h3>
      <p>Feedback on improvements.</p>
	  
	    <div class="col-md-12">
		  <div class="form-group">
		  <textarea class="form-control" placeholder="Give us your valuable feedback" id="feedback-improvements-text"></textarea>
		  </div>
		</div>
		
	    <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question4" data-toggle="tab" class="btn btn-success" id="feedback-improvements-btn">Next</a>
		  </div>
		</div>
		
	  
	  
    </div>
    <div id="Question4" class="tab-pane fade <?php if($status=='3'){ echo "in active"; }?>">
      <h3>Question 4</h3>
      <p>Did you find the 'Your Perspective' and 'Reflecting further' questions where you entered your test responses and viewed responses from others helpful?</p> 
	  
	  	  <div class="col-md-12" >
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="did-you-find" value="Yes" class="did-you-find" id="did-you-find-yes" checked>Yes
		  </div>
		  </div>
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="did-you-find" value="No" class="dis-you-find" id="did-you-find-no">No
		  </div>
		  </div>
        </div>
		
	    <div class="col-md-12">
		  <div class="form-group">
		  <a href="#Question5" data-toggle="tab" class="btn btn-success" id="did-you-find-btn">Next</a>
		  </div>
		</div>
	  
	 </div>
	 
	 <div id="Question5" class="tab-pane fade <?php if($status=='4'){ echo "in active"; }?>">
      <h3>Question 5</h3>
     <p> On an agreement Likert scale:</p>
	 
		<div class="col-md-12">
		<div class="form-group">
			<select class="form-control" id="on-an-agreement">
			<option>Working through the modules was not too time consuming</option>
			<option>I enjoyed the option to review papers and other materials (Additional Resources) outside of the module content</option>
			<option>The content of the modules covered the module outcomes outlined at the beginning and end of each module</option>
			<option>I enjoyed interacting with data in the activities of each module</option>
			<option>The modules were easy to navigate</option>
			<option>I am confident that I understand what value in health care means for patients</option>
			<option>I can define value in health care and provide examples of low-value care</option>
			<option>other</option>
			</select>
		</div>
		</div>
		
		<div class="col-md-12" id="on-an-agreement-other">
		  <div class="form-group">
		  <textarea class="form-control" placeholder="Give us your valuable feedback" id="on-an-agreement-text"></textarea>
		  </div>
		</div>
		
		<div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question6" data-toggle="tab" class="btn btn-success" id="on-an-agreement-btn">Next</a>
		  </div>
		</div>
		
</div>
	
  <div id="Question6" class="tab-pane fade <?php if($status=='5'){ echo "in active"; }?>">
     <h3>Question 6</h3>
     <p>Share these modules with a friend!</p>
	 <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#ShareWithFriends" data-toggle="modal" class="btn btn-success">Share</a>
		  </div>
	</div>
  </div>

  <div id="getcertificate" class="tab-pane fade <?php if($status=='6'){ echo "in active"; }?>">
     <h3>Get your certificate</h3>
     <p></p>

  </div>  
  
 </div>
</div>

	 <div  class="col-sm-12 text-center">
      <h3>Contact for further questions or comments: Victoria Valencia:  victoria.valencia@austin.utexas.edu</3>
    </div>
	
	
	

	

	
<div class="modal" id="ShareWithFriends" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" aria-labelledby="myModalLabel" aria-hidden="true" style="">
    <div class="modal-dialog">
      <div class="modal-content" style="background:url('img/bgLogin.png');color:white;">
        <div class="modal-header text-center">
		  <h4>Share with your friend</h4>
        </div>
        <div class="modal-body">
		        <div class="col-md-12">
				<div class="form-group">
                <input type="email" class="form-control" id="share-with" placeholder="Your friend email whom you want to share with" />
		       </div>
		       </div>
				  <br/>
				  <div class="col-md-12">
				  <div class="form-group" style="color:black;">
				  <textarea placeholder="Enter message here...." style="width:100%;height:150px;"  id="share-msg">Dear Friend,
                          Please check out value based healthcare modules here:
                          <?php echo pathUrl();?>             
Cheers!
Dell Health
				  </textarea>
				  </div>
				  </div>
				  <a href="#getcertificate" data-toggle="tab" class="btn btn-info" id="share-btn">Send</a>
				  <p id="alertmsg"></p>
        </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-danger mcmpnotnow" data-dismiss="modal">Close</button>
        </div>
      </div> 
    </div>
  </div>
  
  
	
	
	
<script>
$("#howdidhearabout").on("change",function(){
if($(this).val()=="other")
{
$("#howdidhearabout-other").css("display","block");
}
else
{
$("#howdidhearabout-other").css("display","none");
}
});

$("#howdidhearabout-btn").click(function(){
var ans;
  ans = $("#howdidhearabout").val();
  if(ans=="other")
  {
  ans = $("#howdidhearabout-text").val();
  if(ans=="")
  {
    $("#howdidhearabout-text").css("border-color","red");
	return false;
  }
 }
   saveSurvey(ans,"qus1",'1');
  $(".nav-tabs li").removeClass("active");
   $(".nav-tabs li:nth-child(2)").addClass("active");
});


$(".reason-for-using").click(function(){
if($(this).val()=="Yes")
{
$("#reason-for-using-yesno").css("display","block");
}
else
{
$("#reason-for-using-yesno").css("display","none");
}
});


$("#reason-for-using-btn").click(function(){
var ans;
      if($(this).val()=="No")
	  {
	  ans = "No";
	  }
	  else
	  {
	    var course = $("#reason-for-using-course").val();
		var program = $("#reason-for-using-program").val();
		ans = course+"_joint_"+program;
		if(course=="")
		{
		$("#reason-for-using-course").css("border-color","red");
		return false;
		}
	    else if(program=="")
		{
		$("#reason-for-using-program").css("border-color","red");
		return false;
		}
		else
		{
		      saveSurvey(ans,"qus2",'2');
		}
	 }
  $(".nav-tabs li").removeClass("active");
   $(".nav-tabs li:nth-child(3)").addClass("active");
});

$("#feedback-improvements-btn").click(function(){
    var ans;
	 ans = $("#feedback-improvements-text").val();
	 if(ans=="")
	 {
	 $("#feedback-improvements-text").css("border-color","red");
	 return false;
	 }
	 saveSurvey(ans,"qus3",'3');
  $(".nav-tabs li").removeClass("active");
   $(".nav-tabs li:nth-child(4)").addClass("active");
});

$("#did-you-find-btn").click(function(){
     var ans;
      if($("#did-you-find-yes").prop('checked'))
      {
	  ans = "Yes"
      }	
       else
	  {
		ans = "No";
	  }
      saveSurvey(ans,"qus4",'4');	  
  $(".nav-tabs li").removeClass("active");
   $(".nav-tabs li:nth-child(5)").addClass("active");
});

$("#on-an-agreement").on("change",function(){
if($(this).val()=="other")
{
$("#on-an-agreement-other").css("display","block");
}
else
{
$("#on-an-agreement-other").css("display","none");
}
});

$("#on-an-agreement-btn").click(function(){

var ans;
  ans = $("#on-an-agreement").val();
  if(ans=="other")
  {
  ans = $("#on-an-agreement-text").val();
  if(ans=="")
  {
    $("#on-an-agreement-text").css("border-color","red");
	return false;
  }
 }
   saveSurvey(ans,"qus5",'5');

  $(".nav-tabs li").removeClass("active");
   $(".nav-tabs li:nth-child(6)").addClass("active");
});

$("#share-btn").click(function(){
var ans;
var share_with = $("#share-with").val();
if(share_with=="")
{
$("#share-with").css("border-color","red");
return false;
}
var share_msg = $("#share-msg").val();
if(share_msg=="")
{
$("#share-msg").css("border-color","red");
return false;
}
ans = "share with "+ share_with +" and msg is "+share_msg;
saveSurvey(ans,"qus6",'6');
 $.post( "shareWithFriends.php?share_with=" +share_with+ "&msg="+share_msg, function( data ) {
 if(data=="1")
 {
   $("#alertmsg").html("<span style='color:green;'>Email Successfully send..</span>");
 }
 else
 {
  $("#alertmsg").html("<span style='color:red;'>Problem with Email Send..</span>");
}
});

  $(".nav-tabs li").removeClass("active");
   $(".nav-tabs li:nth-child(7)").addClass("active");
});



function saveSurvey(ans,op,s) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

            }
        };
        xmlhttp.open("GET", "updateSurvey.php?ans=" +ans+ "&op="+op+"&status="+s, true);
        xmlhttp.send();
}

</script>



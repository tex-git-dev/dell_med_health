<?php
if(!$_SESSION['username']){
  ?>
  <script>
  window.location.href="<?php echo pathUrl();?>";
  </script>
<?php
}
?>
<style>
span.form-control
{
display:none;
}
#howdidhearabout-other{
display:none;
}
</style>
<div class="container">
  <h2>Give Us your valuable feedback</h2>
  <p>Complete Survey and get your certificate</p>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Question1">Question 1</a></li>
    <li><a data-toggle="tab" href="#Question2">Question 2</a></li>
    <li><a data-toggle="tab" href="#Question3">Question 3</a></li>
    <li><a data-toggle="tab" href="#Question4">Question 4</a></li>
    <li><a data-toggle="tab" href="#Question5">Question 5</a></li>
    <li><a data-toggle="tab" href="#Question6">Question 6</a></li>
  </ul>

  <div class="tab-content">
    <div id="Question1" class="tab-pane fade in active">
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
    <div id="Question2" class="tab-pane fade">
       <h3>Question 2</h3>
      <p>Reasons for using these modules.</p>
	  <p>To learn more about health care value, to augment my current education, to help me understand costs of health care in the US, it was assigned as part of a course</p>
	  <div class="col-md-12" >
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="reason-for-using-m" value="Yes">Yes
		  </div>
		  </div>
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="reason-for-using-m" value="No">No
		  </div>
		  </div>
      </div>
	  
	  <div class="col-md-12">
		  <div class="col-sm-4">
		  <div class="form-group">
		  <label>what course</label>
		  <textarea class="form-control" placeholder="what course"></textarea>
		  </div>
		  </div>
		  <div class="col-sm-4">
		  <div class="form-group">
		  <label>for which program</label>
		  <textarea class="form-control" placeholder="for which program"></textarea>
		  </div>
		  </div>
      </div> 

		 <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question3" data-toggle="tab" class="btn btn-success">Next</a>
		  </div>
		</div>
		
    </div>
	
    <div id="Question3" class="tab-pane fade">
      <h3>Question 3</h3>
      <p>Feedback on improvements.</p>
	  
	    <div class="col-md-12">
		  <div class="form-group">
		  <textarea class="form-control" placeholder="Give us your valuable feedback"></textarea>
		  </div>
		</div>
		
	    <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question4" data-toggle="tab" class="btn btn-success">Next</a>
		  </div>
		</div>
		
	  
	  
    </div>
    <div id="Question4" class="tab-pane fade">
      <h3>Question 4</h3>
      <p>Did you find the 'Your Perspective' and 'Reflecting further' questions where you entered your test responses and viewed responses from others helpful?</p> 
	  
	  	  <div class="col-md-12" >
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="reason-for-using-m" value="Yes">Yes
		  </div>
		  </div>
		  <div class="col-sm-2">
		  <div class="form-group">
		  <input type="radio" name="reason-for-using-m" value="No">No
		  </div>
		  </div>
        </div>
		
			  <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question5" data-toggle="tab" class="btn btn-success">Next</a>
		  </div>
		</div>
	  
	 </div>
	 
	 <div id="Question5" class="tab-pane fade">
      <h3>Question 5</h3>
     <p> On an agreement Likert scale:</p>
	 
		<div class="col-md-12">
		<div class="form-group">
			<select class="form-control">
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
		
		<div class="col-md-12">
		  <div class="form-group">
		  <textarea class="form-control" placeholder="Give us your valuable feedback"></textarea>
		  </div>
		</div>
		
		<div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question6" data-toggle="tab" class="btn btn-success">Next</a>
		  </div>
		</div>
		
</div>
	
  <div id="Question6" class="tab-pane fade">
     <h3>Question 6</h3>
     <p>Share these modules with a friend!</p>
	 <div class="col-md-12" >
		  <div class="form-group">
		  <a href="#Question6" data-toggle="tab" class="btn btn-success">Share</a>
		  </div>
	</div>
  </div>	
 </div>
</div>

	 <div  class="col-sm-12 text-center">
      <h3>Contact for further questions or comments: Victoria Valencia:  victoria.valencia@austin.utexas.edu</3>
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
alert();
});
</script>


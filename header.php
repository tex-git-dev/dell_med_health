<?php  
@session_start();
?>
 <script src="js/bootstrap-session-timeout.js"></script>
<script type="text/javascript">
//Below function used for forgot popup open.
app.Forgot=function(){
  $('#forgot').modal({show: 'false'});
  $('#login').modal('hide');
} 
//Below function used for FAQ popup open.
app.OpenFAQ=function(){
  $(".FAQ").toggle();
  var shows =$(".FAQ").css('display');
    var h = $(document).height()-80;
    $(".disF").css('display',shows).css({"height":h+'px'});
}
//Below function used for the module or section menus popup open.
app.OpenMS=function(){
  var ss= "<?php  echo @$_SESSION['username'];?>";
   if(ss){
    // if session is active then open module or section popup open.
      $(".op").toggle();
      var h = $(document).height()-80;
      var shows =$(".op").css('display');
      $(".disS").css('display',shows).css({"height":h+'px'});
      var hh = $(".op").height();
      $(".r2").css({'min-height':hh+'px'});
   }else{
    // if session is inactive then open login popup open.
        $('#registration').modal('hide');
        $('#login').modal({show: 'false'});
        $('#login').on('shown.bs.modal', function () {
          $('body').addClass('modal-open');
        });
    }
}
//Below function used for registration popup open.
  app.RegiPage=function(){
    $('#login').modal('hide');
    
    $('#registration').modal({show: 'false'});
    $('#registration').on('shown.bs.modal', function () {
    $('body').addClass('modal-open');
    });
   $('#Fname').focus();
}
</script>
<div class="headers">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logoBG" href="<?php echo pathUrl();?>"><img src="img/logo.svg" width="250" />
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar"> 
        <ul id="module" class="nav navbar-nav navbar-right">
        <?php if(@!$_SESSION['username']){ ?>
                <li>
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle">Sign in</a>
                </li>
                <li class='linea'><span>|</span></li>
                <li>
                    <a href="javascript:app.RegiPage()" class="dropdown-toggle">Sign up</a>
                </li>

            <?php }else{ ?>
                  <li>
                    <a href="javascript:void(0)" class="dropdown-toggle">
                    Welcome, <?php echo $_SESSION['Fname'];?></a>
                </li>
                  <li class='linea'><span>|</span></li>
                <li>
                    <a href="Logout.php" class="dropdown-toggle">Logout</a>
                </li>
             <?php  }?>

          <?php if(@!isset($_GET['id'])){?>
           

                <li  class="active mod">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><strong><span class="glyphicon glyphicon-menu-down"></span> MODULES </strong></a>
                </li>
                <li class="faqBtn">
                    <a href="javascript:app.OpenFAQ()" class="dropdown-toggle"> <i style=" vertical-align: middle;" class="fa fa-question-circle-o fa-2x" aria-hidden="true"></i> </a>
                </li>

            </ul>
             <?php }else{?>
            <ul id="section" class="nav navbar-nav navbar-right">
                 <?php 
                $url = pathUrl();
                $uriArray = explode('/', $_GET['id']);
                $m = $uriArray[1];
					if($m == "m1s1p1"){	

				 ?>
                <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 1 </span><span class="s_bottom">There’s a Better Way</span></a>
                </li>
					
					<?php }else if($m == "m1s2p1"){ ?>
					<li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 2 </span><span class="s_bottom">Story from the Frontlines: The Human Cost...</span></a>
                </li>
					<?php }else if($m == "m1s3p1"){ ?>
					<li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 3 </span><span class="s_bottom">Providing Value for Patients</span></a>
                </li>
					<?php }else if($m == "m1s4p1"){ ?>
					<li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 4 </span><span class="s_bottom">How Big of a Problem is Health Care Waste?</span></a>
                </li>
					<?php }else if($m == "m1s5p1"){ ?>
					<li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 5 </span><span class="s_bottom">Unnecessary Care</span></a>
                </li>
					<?php }else if($m == "m1s6p1"){ ?>
					<li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 6 </span><span class="s_bottom">Focusing on Outcomes</span></a>
                </li>
					<?php }else if($m == "m1s7p1"){ ?>
					<li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 7 </span><span class="s_bottom">Care Redesign Case: Value-Driven Outcomes at..</span></a>
                </li>
					<?php }else if($m == "m1s8p1"){ ?>
					<li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 8 </span><span class="s_bottom">Using Data to Identify Opportunities for Improving..</span></a>
                </li>
                <?php }else if($m == "m1s9p1"){ ?>
          <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 1 | Section 9 </span><span class="s_bottom">Conclusion: Value-Based Health Care</span></a>
                </li>
				
           <?php }else if($m == "m2s1p1"){ ?>
              <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 1 </span><span class="s_bottom">Measuring What Matters</span></a>
                </li>
                <?php }else if($m == "m2s2p1"){ ?>
                  <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 2 </span><span class="s_bottom">Story From the Frontlines</span></a>
                </li>
                <?php }else if($m == "m2s3p1"){ ?>
                <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 3 </span><span class="s_bottom">Measuring Outcomes</span></a>
                </li>
                <?php }else if($m == "m2s4p1"){ ?>
                <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 4 </span><span class="s_bottom">Patient Outcomes</span></a>
                </li>
                 <?php }else if($m == "m2s5p1"){ ?>
                <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 5 </span><span class="s_bottom">Using Measures Frameworks to Improve Outcomes</span></a>
                </li>
                  <?php }else if($m == "m2s6p1"){ ?>
                <li  class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 6 </span><span class="s_bottom">Comparing Outcomes of Different Treatment Strategies</span></a>
                </li>
                <?php }else if($m == "m2s7p1"){ ?>
                <li class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 7 </span><span class="s_bottom">Care Redesign Case: UNOS</span></a>
                </li>
                <?php }else if($m == "m2s8p1"){ ?>
                <li class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 2 | Section 8 </span><span class="s_bottom">Conclusion: Measuring What Matters </span></a>
                </li>
                
                 <?php }else if($m == "m3s1p1"){ ?>
                <li class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 3 | Section 1 </span><span class="s_bottom">Understanding Costs In Health Care</span></a>
                </li>
                <?php }else if($m == "m3s2p1"){ ?>
                <li class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 3 | Section 2 </span><span class="s_bottom">Conclusion: Value-Based Health Care</span></a>
                </li>
                <?php }else if($m == "m3s3p1"){ ?>
                <li class="active section">
                    <a href="javascript:app.OpenMS()" class="dropdown-toggle"><span class="s_top"><span class="glyphicon glyphicon-menu-down"></span> MODULE 3 | Section 3 </span><span class="s_bottom">Conclusion: Value-Based Health Care</span></a>
                </li>
                
           
          <?php } ?>


                <li class="faqBtn">
                    <a href="javascript:app.OpenFAQ()" class="dropdown-toggle"> <i style=" vertical-align: middle;" class="fa fa-question-circle-o fa-2x" aria-hidden="true"></i> </a>
                </li>
            </ul>
              <?php }?>
        </div>

    </div>
</nav>

<?php if(@isset($_GET['id'])){?>
<div id="MSection" class="container MSection op">
    <div class="row text-left m">
  
                <?php 
                  $url = pathUrl();
                  $uriArray = explode('/', $_GET['id']);
                  $mnn = $uriArray[0];
                  
                ?>

        <div class="col-sm-6 r1 _m1" style='display: <?php if($mnn =='m1'){ echo 'block';}else{echo 'none';}?>'>
           
                <div class="row ">
                   
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 m1"><strong style="font-size: 19px; line-height: 65px;">SECTIONS</strong></div>
                        <div class="col-sm-2"></div>
                   
                </div>
                <div class="row btnss vertical-align bb bt btnS1 act">
                      <div class="col-sm-2"><strong>01.</strong></div>
                        <div class="col-sm-7"><strong>There’s a Better Way</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                </div>
                <div class="row btnss vertical-align bb btnS2">
                      <div class="col-sm-2 "><strong>02.</strong></div>
                        <div class="col-sm-7"><strong>Story from the Frontlines: The Human Cost of Inefficiency and Waste in Healthcare</strong></div>
                         <div class="col-sm-3">
                           <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                   
                </div>

                <div class="row btnss  vertical-align bb btnS3">
                        <div class="col-sm-2 "><strong>03.</strong></div>
                        <div class="col-sm-7"><strong>Providing Value for Patients</strong></div>
                         <div class="col-sm-3">
                           <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                </div>
                <div class="row btnss  vertical-align bb btnS4">
                        <div class="col-sm-2 "><strong>04.</strong></div>                
                        <div class="col-sm-7"><strong>How Big of a Problem is Health Care Waste?</strong></div>
                         <div class="col-sm-3">
                           <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                      
                </div>
                <div class="row btnss  vertical-align bb btnS5">
                        <div class="col-sm-2 "><strong>05.</strong></div>                
                        <div class="col-sm-7"><strong>Unnecessary Care</strong></div>
                         <div class="col-sm-3">
                           <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS6">
                        <div class="col-sm-2 "><strong>06.</strong></div>                
                        <div class="col-sm-7"><strong>Focusing on Outcomes</strong></div>
                         <div class="col-sm-3">
                           <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS7">
                        <div class="col-sm-2 "><strong>07.</strong></div>                
                        <div class="col-sm-7"><strong>Care Redesign Case: Value-Driven Outcomes at University of Utah Health Care</strong></div>
                         <div class="col-sm-3">
                           <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS8">
                        <div class="col-sm-2 "><strong>08.</strong></div>                
                        <div class="col-sm-7"><strong>Using Data to Identify Opportunities for Improving Care for Patients</strong></div>
                         <div class="col-sm-3">
                           <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                      
                </div>
                <div class="row btnss  vertical-align bb btnS9">
                        <div class="col-sm-2 "><strong>09.</strong></div>                
                        <div class="col-sm-7"><strong>Conclusion: Value-Based Health Care</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                </div>
                <br>
                 <div class="row allModule1">
                    <div class="col-sm-2 "></div>                
                    <div class="col-sm-7">
                      <div class="row text-center">
                          <div class="col-sm-4">
                              <button  type="button" class="btn btn-default center-block">Module 1</button>
                          </div>
                          <div class="col-sm-4">
                            <button  type="button" class="btn btn-default center-block">Module 2</button>
                          </div>
                          <div class="col-sm-4">
                            <button  type="button" class="btn btn-default center-block">Module 3</button>
                          </div>
                      </div>                      
                    </div>
                     <div class="col-sm-3"></div>
                </div>
                 <br>
            
        </div>

        <?php /*}else if($mnn =='m2'){*/?>
          <div class="col-sm-6 r1 _m2" style='display: <?php if($mnn =='m2'){ echo 'block';}else{echo 'none';}?>'>
           
                <div class="row ">
                   
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 m1"><strong style="font-size: 19px; line-height: 65px;">SECTIONS</strong></div>
                        <div class="col-sm-2"></div>
                   
                </div>
                <div class="row btnss vertical-align bb bt btnS1 act">
                      <div class="col-sm-2 "><strong>01.</strong></div>
                        <div class="col-sm-7"><strong>Measuring What Matters</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                 
                </div>
                <div class="row btnss vertical-align bb btnS2">
                      <div class="col-sm-2 "><strong>02.</strong></div>
                        <div class="col-sm-7"><strong>Story From the Frontlines</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                   
                </div>

                <div class="row btnss  vertical-align bb btnS3">
                        <div class="col-sm-2 "><strong>03.</strong></div>
                        <div class="col-sm-7"><strong>Measuring Outcomes</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                </div>
                <div class="row btnss  vertical-align bb btnS4">
                        <div class="col-sm-2 "><strong>04.</strong></div>                
                        <div class="col-sm-7"><strong>Patient Outcomes</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                      
                </div>
                <div class="row btnss  vertical-align bb btnS5">
                        <div class="col-sm-2 "><strong>05.</strong></div>                
                        <div class="col-sm-7"><strong>Using Measures Frameworks to Improve Outcomes</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS6">
                        <div class="col-sm-2 "><strong>06.</strong></div>                
                        <div class="col-sm-7"><strong>Comparing Outcomes of Different Treatment Strategies</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS7">
                        <div class="col-sm-2 "><strong>07.</strong></div>                
                        <div class="col-sm-7"><strong>Care Redesign Case: UNOS</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS8">
                        <div class="col-sm-2 "><strong>08.</strong></div>                
                        <div class="col-sm-7"><strong>Conclusion: Measuring What Matters</strong></div>
                         <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                      
                </div>
             <br>
                 <div class="row allModule2">
                    <div class="col-sm-2 "></div>                
                    <div class="col-sm-7">
                      <div class="row text-center">
                          <div class="col-sm-4">
                              <button  type="button" class="btn btn-default center-block">Module 1</button>
                          </div>
                          <div class="col-sm-4">
                            <button  type="button" class="btn btn-default center-block">Module 2</button>
                          </div>
                          <div class="col-sm-4">
                            <button  type="button" class="btn btn-default center-block">Module 3</button>
                          </div>
                      </div>
                    </div>
                     <div class="col-sm-3"></div>
                </div>
                 <br>
           
        </div>
        <?php /*}else if($mnn =='m3'){*/?>
        <div class="col-sm-6 r1 _m3" style='display: <?php if($mnn =='m3'){ echo 'block';}else{echo 'none';}?>'>
           
                <div class="row ">
                   
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 m1"><strong style="font-size: 19px; line-height: 65px;">SECTIONS</strong></div>
                        <div class="col-sm-2"></div>
                   
                </div>
                <div class="row btnss vertical-align bb bt btnS1 act">
                      <div class="col-sm-2 "><strong>01.</strong></div>
                        <div class="col-sm-7"><strong>Understanding Costs In Health Care</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                 
                </div>
                <div class="row btnss vertical-align bb btnS2">
                      <div class="col-sm-2 "><strong>02.</strong></div>
                        <div class="col-sm-7"><strong>Story from the Frontlines: The Human Cost of Inefficiency and Waste in Healthcare</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                   
                </div>

                <div class="row btnss  vertical-align bb btnS3">
                        <div class="col-sm-2 "><strong>03.</strong></div>
                        <div class="col-sm-7"><strong>Providing Value for Patients</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                        
                </div>
                <div class="row btnss  vertical-align bb btnS4">
                        <div class="col-sm-2 "><strong>04.</strong></div>                
                        <div class="col-sm-7"><strong>How Big of a Problem is Health Care Waste?</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                      
                </div>
                <div class="row btnss  vertical-align bb btnS5">
                        <div class="col-sm-2 "><strong>05.</strong></div>                
                        <div class="col-sm-7"><strong>Unnecessary Care</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS6">
                        <div class="col-sm-2 "><strong>06.</strong></div>                
                        <div class="col-sm-7"><strong>Focusing on Outcomes</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS7">
                        <div class="col-sm-2 "><strong>07.</strong></div>                
                        <div class="col-sm-7"><strong>Care Redesign Case: Value-Driven Outcomes at University of Utah Health Care</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                </div>
                <div class="row btnss  vertical-align bb btnS8">
                        <div class="col-sm-2 "><strong>08.</strong></div>                
                        <div class="col-sm-7"><strong>Using Data to Identify Opportunities for Improving Care for Patients</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                      
                </div>
                <div class="row btnss  vertical-align bb btnS9">
                        <div class="col-sm-2 "><strong>09.</strong></div>                
                        <div class="col-sm-7"><strong>Conclusion: Value-Based Health Care</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                </div>
                <br>
                 <div class="row allModule3">
                    <div class="col-sm-2 "></div>                
                    <div class="col-sm-7">
                      <div class="row text-center">
                          <div class="col-sm-4">
                              <button  type="button" class="btn btn-default center-block">Module 1</button>
                          </div>
                          <div class="col-sm-4">
                            <button  type="button" class="btn btn-default center-block">Module 2</button>
                          </div>
                          <div class="col-sm-4">
                            <button  type="button" class="btn btn-default center-block">Module 3</button>
                          </div>
                      </div>
                    </div>
                     <div class="col-sm-3"></div>
                </div>
                 <br>
           
        </div>
        <?php /*}*/?>

        <div class="col-sm-6 r2">
<br>
        <br>
          <div class="row">
                    <div class="col-sm-4 lG1 ">
                       <div class="row">
                        <div class="col-sm-12 text-center">
                        Estimated Time to Complete
                        </div>
                       </div>
                        <div class="row  text-center">
                            <div class="col-sm-12">
                                <i class="fa fa-clock-o fa-3x iconOutconeTime" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="row  text-center">
                            <div class="col-sm-12">
                                <div class="text"><span class="fontSize HR">00</span> HR <span class="fontSize MIN">15</span> MIN</div>
                            </div>
                        </div>
                        <div class="row"></div>
                    </div>
                     <div class="col-sm-8 lG2 ">
                     <div class="row  text-center vertical-align1">
                            <div class="col-sm-12 text-left">
                                       <span style="margin-left:16px;">Section Progress</span><br>
                                 <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>
                                <span style="margin-left:16px;"><span class="mP">75</span> COMPLETE</span>
                            </div>
                        </div>
                       <div class="row  text-center">
                            <div class="col-sm-12">
                                <form action="" method='post' class=" mSearch navbar-form navbar-center" >
                                    <div class="input-group" style="width:100%; margin-top: 18px;">
                                        <input type="Search" id='inputs' placeholder="Search..." class="form-control" />
                                        <div class="input-group-btn">
                                            <button class="btn btn-info navbar-left" type='submit'>
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                       </div>
                      
                        
                        
                    </div>
                 
                </div>
                <div class="row outc" >
               
                    <div class="row"> 
                    <div class="wellC">
                        <div class="col-sm-12 text-center">
                          <i class="fa fa-bullseye fa-3x iconOutcone" aria-hidden="true"></i>
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                    <div class="wellC">
                        <div class="col-sm-12 text-center">
                           <span><strong>SECTION <span class="mn">1</span> OUTCOMES</strong></span><br>
                              <span><strong>____</strong></span>   
                        </div>
                        </div>
                       
                 
                    </div>
                   
                      <div class='_outm1' style='display: <?php if($mnn =='m1'){ echo 'block';}else{echo 'none';}?>'>
					<div class="row clickS1 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Reflect on the causes of waste and inefficiencies in health care.   
                          </div>
                        </div>
                    </div>
					 </div>
					 <div class="row clickS2 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                            Define ‘value’ for patients
                          </div>
                        </div>
                    </div>
					 </div>
					 <div class="row clickS3 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Define ‘health care waste’   
                          </div>
                        </div>
                    </div>
					 </div>
					 <div class="row clickS4 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Identify the major contributing components of healthcare waste
                          </div>
                        </div>
                    </div>
					 </div>
					 <div class="row clickS5 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Connect how the pursuit of high-value care for patients supports the professionalism of clinicians.   
                          </div>
                        </div>
                    </div>
					 </div>
					 <div class="row clickS6 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                            Introduce the concept of health care outcomes  
                          </div>
                        </div>
                    </div>
					 </div>
					 <div class="row clickS7 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Examine a case that presents strategies and tools for increasing value in health care.  
                          </div>
                        </div>
                    </div>
					 </div>
					 <div class="row clickS8 clickS" >
                     <div class="row">
                       
                          <div class="col-sm-12 text-center"> <div class="well">
                             Explore data to gain understanding and appreciation of the perspectives of patients, individual clinicians, and health systems as it pertains to value-based health care.  
                          </div>
                        </div>
                    </div>
					 </div>
					  <div class="row clickS9 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                           
                          </div>
                        </div>
                    </div>
					 </div>
           </div>
					  <div class='_outm2' style='display: <?php if($mnn =='m2'){ echo 'block';}else{echo 'none';}?>'>
              
                      <div class="row clickS1 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                              
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS2 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                           Appreciate and reflect on outcomes that are meaningful to the patient.
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS3 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Define the measurement of ‘patient outcomes’ as they relate to value-based health care.
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS4 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Define the measurement of ‘patient outcomes’ as they relate to value-based health care.; Examine resources for defining and measuring patient outcomes.
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS5 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Describe different types of measures and when they would be used; Identify the reasons for collecting    ‘patient-reported outcomes.’
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS6 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                            Apply a measures framework to evaluate the success of health care value programs from the perspective of patient outcomes.
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS7 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Examine resources for defining and measuring patient outcomes;<br><br>
                            Apply a measures framework to evaluate the success of health care value programs from the perspective of patient outcomes.<br><br>
                            Appreciate and reflect on how patient outcomes define physicians’ success.

                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS8 clickS" >
                     <div class="row">
                       
                          <div class="col-sm-12 text-center"> <div class="well">
                            
                          </div>
                        </div>
                    </div>
           </div>
            <div class="row clickS9 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                           
                          </div>
                        </div>
                    </div>
           </div>
</div>
                     <div class='_outm3' style='display: <?php if($mnn =='m3'){ echo 'block';}else{echo 'none';}?>'>
                        <div class="row clickS1 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Reflect on the causes of waste and inefficiencies in health care.   
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS2 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                            Define ‘value’ for patients
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS3 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Define ‘health care waste’   
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS4 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Identify the major contributing components of healthcare waste
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS5 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Connect how the pursuit of high-value care for patients supports the professionalism of clinicians.   
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS6 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                            Introduce the concept of health care outcomes  
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS7 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                             Examine a case that presents strategies and tools for increasing value in health care.  
                          </div>
                        </div>
                    </div>
           </div>
           <div class="row clickS8 clickS" >
                     <div class="row">
                       
                          <div class="col-sm-12 text-center"> <div class="well">
                             Explore data to gain understanding and appreciation of the perspectives of patients, individual clinicians, and health systems as it pertains to value-based health care.  
                          </div>
                        </div>
                    </div>
           </div>
            <div class="row clickS9 clickS" >
                     <div class="row">
                        <div class="well">
                          <div class="col-sm-12 text-center">
                           
                          </div>
                        </div>
                    </div>
           </div>
                    </div>
					 

                </div>
                
              
               
                

           
        </div>
    </div>
</div>
 <?php }else{?>



<div id="menus" class="container menus op">
    <div class="row text-left p">
        <div class="col-sm-6 r1">
           
                <div class="row ">
                   
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 m1"><strong style="font-size: 21px; line-height: 65px;">MODULES</strong></div>
                        <div class="col-sm-2"></div>
                   
                </div>
                <div class="row btns vertical-align bb bt btnM1 act">
                   
                        <div class="col-sm-2 text-center small"><span style="color:#a0a0a0;">active</span></div>
                        <div class="col-sm-7"><strong>1 There's a Better Way</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                 
                </div>
                <div class="row btns vertical-align bb btnM2">
                   
                        <div class="col-sm-2 text-center small"><span style="color:#a0a0a0;">active</span></div>
                        <div class="col-sm-7"><strong>2 Measuring What Matters</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                     
                </div>

                <div class="row btns  vertical-align bb btnM3">
                   
                        <div class="col-sm-2 text-center small">complete</div>
                        <div class="col-sm-7"><strong>3 Understanding Costs in Health Care</strong></div>
                        <div class="col-sm-3">
                            <div class="alert1" role="alert">
                               Continue
                              </div>
                      </div>
                       
                   
                </div>
           
        </div>
        <div class="col-sm-6 r2">
        <br>
         <div class="row">
                    <div class="col-sm-4 lG1 ">
                       <div class="row">
                         <div class="col-sm-12 text-center">Estimated Time to Complete</div>
                       </div>
                        <div class="row  text-center">
                            <div class="col-sm-12">
                                <i class="fa fa-clock-o fa-3x iconOutconeTime" aria-hidden="true"></i>

                            </div>
                        </div>
                        <div class="row  text-center">
                            <div class="col-sm-12">
                                <div class="text"><span class="fontSize HR">01</span> HR <span class="fontSize MIN">45</span> MIN</div>
                            </div>
                        </div>
                        <div class="row"></div>
                    </div>
                     <div class="col-sm-8 lG2 ">
                     <div class="row  text-center vertical-align1">
                            <div class="col-sm-12 text-left">
                            <span style="margin-left:16px;">Module Progress</span><br>
                                 <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>
                                <span style="margin-left:16px;"><span class="mP">75</span>% COMPLETE</span>
                            </div>
                        </div>
                       <div class="row  text-center">
                            <div class="col-sm-12">
                                <form action="" method='post' id='' class="mSearch navbar-form navbar-center" >
                                    <div class="input-group" style="width:100%; margin-top: 18px;">
                                        <input type="Search" id='inputs' placeholder="Search..." class="form-control" />
                                        <div class="input-group-btn">
                                            <button class="btn btn-info navbar-left" type='submit'>
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                       </div>
                      
                        
                        
                    </div>
                 
                </div>
                <div class="row">
               
                    <div class="row"> 
                    <div class="wellC">
                        <div class="col-sm-12 text-center">
                        
                          <i class="fa fa-bullseye fa-3x iconOutcone" aria-hidden="true"></i>
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                    <div class="wellC">
                        <div class="col-sm-12 text-center">
                           <span><strong>MODULE <span class="mn">1</span> OUTCOMES</strong></span><br>
                              <span><strong>____</strong></span>   
                        </div>
                        </div>
                       
                 
                    </div>
                   
                </div>
                <br>
                <div class="row clickM1 clickM" >
                    <div class="col-sm-6">
                    <ul>
                      <li>Reflect on the causes of waste and inefficiencies in health care.</li>
                      <li>Define ‘value’ for patients</li>
                      <li>Define ‘health care waste’ </li>
                      <li>Identify the major contributing components of healthcare waste</li>
                      <li>Connect how the pursuit of high-value care for patients supports the professionalism of clinicians.</li>
                    </ul>
                    </div>
                    <div class="col-sm-6">
                       
                         <ul>
                            <li>Introduce the concept of health care outcomes</li>
                            <li>Examine a case that presents strategies and tools for increasing value in health care.</li>
                             <li>Explore data to gain understanding and appreciation of the perspectives of patients, individual clinicians, and health systems as it pertains to value-based health care.</li>
                          </ul> 
                    </div>
                </div>
                <div class="row clickM2 clickM hide" >
                    <div class="col-sm-6">
                    <ul>
                      <li>Define ‘patient-centered outcomes’ as they relate to value-based health care.</li>
                      <li>Appreciate and reflect on outcomes that are meaningful to the patient.</li>
                      <li>Examine resources for defining and measuring patient-centered outcomes.</li>
                     
                    </ul>
                    </div>
                    <div class="col-sm-6">
                         <ul>
                            <li>Apply a measures framework to evaluate the success of health care value programs from the perspective of patient-centered outcomes.</li>
                          </ul> 
                    </div>
                </div>
                <div class="row clickM3 clickM hide" >
                    <div class="col-sm-6">
                    <ul>
                      <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
                      <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
                      <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
                    
                      
                    </ul>
                    </div>
                    <div class="col-sm-6">
                       
                         <ul>
                           <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
                      <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
                     
                          </ul> 
                    </div>
                </div>
        </div>
    </div>
</div>


 <?php }?>






<?php if($firstTimeWel == true){
    $firstTimeWel= false;
    ?>

<div class="container">
 <div class="modal fade" id="wel" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
        </div>

        <div class="modal-body">
        <br> <br> <br>


        <h1 class="form-signin-heading text-center" ><span  style="color:#e2873b ;">WELCOME <?php echo $_SESSION['Fname'].' '.$_SESSION['Lname'];?>! <br> :-)</span></h1>
        
       
        </div>

        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
</div>
<script>
    $('#wel').modal({
            show: 'false'
          }); 
</script>
<?php } ?>
<!-- <div class="dis"></div> -->

<div class="container">
 <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 text-right"><span style="color:#e2873b;">New to Dell Medical? </span><button class="btn btn-default right-block" onclick="app.RegiPage();" type="button">Sign up</button></div>
        </div>
        
         <!--  <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button> -->
        </div>

        <div class="modal-body">
        <form class="form-signin input-sm" id="loginF" action="" method="post">
        <h3 class="form-signin-heading text-center" style="color:#e2873b;">SIGN IN TO DELL MEDICAL VBHC MODULES</h3>
         <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                  <input type="email" name="username" id="username" class="inp form-control text-center" placeholder="E-mail ID" required="" autofocus="">
            </div>
            <div class="col-sm-3"></div>
        </div>
        <br>
         <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                  <input type="password" name="password" id="password" class="inp form-control text-center" placeholder="Password" required="">
            </div>
            <div class="col-sm-3"></div>
        </div>
        <br>
         <div class="row text-center NExists">
           <h4 style="color:#ff0000;"></h4>
         </div>
       <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2"> 
             <input type="hidden" name="login" id="login" value='login'>
             <button class="btn btn-default center-block" type="submit" >Sign in</button>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <br>
        <br>
         <div class="row">
             <div class="col-sm-12 text-center"> <h4 onclick="app.Forgot();" style="color:#e2873b; cursor: pointer;">Forgot password?</h4></div>
        </div>
            
       
      </form>
       
        </div>

        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
</div>
<div class="container">
 <div class="modal fade" id="registration" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 text-right"><span style="color:#e2873b;">Already have an account? </span> <button class="btn btn-default right-block" onclick="app.OpenMS();" type="button" >Sign in</button></div>
        </div>
          <!-- <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button> -->
           
        </div>

        <div class="modal-body">
 <h3 class="form-signin-heading text-center" style="color:#e2873b;">SIGN UP TO ACCESS THE DELL MEDICAL VBHC MODULES</h3>
        <form class="form-signin input-sm" id="registrationF" action="" method="post">
      
         <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
             <div class="row">
                <div class="col-sm-6">
                 <div class="form-group">
                    <input type="text" name="Fname" id="Fname" class="form-control text-center c" placeholder="First Name"  autofocus="">
                    </div>
                </div>
                <div class="col-sm-6">
                 <div class="form-group">
                    <input type="text" name="Lname" id="Lname" class="form-control text-center c" placeholder="Last Name" required="" >
                    </div>
                </div>
             </div>
            
             <div class="row">
                <div class="col-sm-12">
                 <div class="form-group">
                    <input type="email" name="Email" id="Email" class="form-control text-center c" placeholder="Email ID" required="" >
                    </div>
                </div>
             </div>
            
              <div class="row">
                <div class="col-sm-6">
                 <div class="form-group">
                    <input type="password" name="Pass" id="Pass" class="form-control text-center c" placeholder="Password" required="" >
                    </div>
                </div>
                <div class="col-sm-6">
                 <div class="form-group">
                    <input type="password" name="Passc" id="Passc" class="form-control text-center c" placeholder="Confirm Password" required="" >
                    </div>
                </div>
             </div>
             
             <div class="row">
                <div class="col-sm-12">
                 <div class="form-group">
                    <input type="text" name="Org" id="Org" class="form-control text-center c" placeholder="Organization" required="" >
                    </div>
                </div>
             </div>
           
              <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                    <input type="number" name="Age" id="Age" class="form-control text-center c" placeholder="Age in years" required="" >
                     </div>
                </div>
             </div>
             <div class="row vertical-align" style="margin-bottom: 17px;">
            
               <div class="col-sm-12">
               <div class="form-group">
               <label for="sel1">Gender:</label>
                      <select class="form-control text-center c" id="Gender" name="Gender">
                        <option value="">[select from list below]</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Others">Other</option>
                        <option value="RatherNotSay">Rather not say</option>

                      </select>
                
                    </div>
              </div>
            
            </div>
            <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" name="City" id="City" class="form-control text-center c" placeholder="City" required="">
                     </div>
                </div>
             </div>
               <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" name="State" id="State" class="form-control text-center c" placeholder="State" required="" >
                     </div>
                </div>
             </div>
              <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" name="Country" id="Country" class="form-control text-center c" placeholder="Country" required="" >
                     </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                    <!-- <input type="text" name="PPRole" id="PPRole" class="form-control text-center c" placeholder="Country" required="" autofocus=""> -->
                    <label for="sel1">Primary Professional Role:</label>
                      <select class="form-control text-center c" id="PPRole" name="PPRole">
                        <option value="">[select from list below]</option>
                        <option value="1">Practicing Clinical Physician</option>
                        <option value="2">Resident Physician</option>
                        <option value="3">Medical Student</option>
                        <option value="4">Undergraduate Student</option>
                        <option value="5">Nursing Student</option>
                        <option value="6">Pharmacy Student</option>
                        <option value="7">Graduate Student</option>
                        <option value="8">Social Worker</option>
                        <option value="9">Hospital Administrator</option>
                        <option value="10">Researcher</option>
                        <option value="11">Fellow</option>
                        <option value="12">Analyst</option>
                        <option value="13">Administrative Assistant</option>
                        <option value="14">Allied Health Professional</option>
                        <option value="15">Nurse</option>
                        <option value="16">Nurse Practioner</option>
                        <option value="17">Manager/Director</option>
                        <option value="18">Teacher/Professor</option>
                        <option value="19">Office Manager</option>
                        <option value="10">Other</option>

                      </select>
                     </div>
                </div>
             </div>
             <div class="row">
             <div class="col-sm-12 text-center text-sm-center">  
              <div class="form-group">
                <button class="btn btn-default" type="submit" name="registration">Sign up</button>
                </div>
             </div>
             <!--  <div class="col-sm-6  text-right text-sm-center"> 
               <div class="form-group">
                <button class="btn btn-default " onclick="app.OpenMS();" type="button" >LOG IN</button>
                </div>
            </div> -->
            
        </div>
             

            </div>
            <div class="col-sm-3"></div>
        </div>
      
       
      
       
        </div>

        <div class="modal-footer">
            
             
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade alerts" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body text-center ">
      <h3 style="color:#e2873b;"></h3>
      
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>







<div class="container FAQ">
    <div class="row text-left mainFAQ">
        <div class="col-sm-12">
         
           <h1>FAQ</h1> 
           <hr>

<div class="panel-group" id="accordion1">
    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseOne1">
             <h4 class="panel-title">1. Do I need to register to complete these modules? </h4>
        </div>
        <div id="collapseOne1" class="panel-collapse collapse">
            <div class="panel-body">a.  Yes. To complete your registration, simply go to ‘Register’ at the bottom of the login screen. </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseTwo1">
             <h4 class="panel-title">2. Do I need to complete the modules/module sections in order? </h4>
        </div>
        <div id="collapseTwo1" class="panel-collapse collapse">
            <div class="panel-body">a.  No. Though some of the content, particularly our Story from the Frontlines story arc, is written in a linear fashion, you may explore the modules and sections in any order you wish. </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseThree1">
             <h4 class="panel-title">3. How long do I have to complete each section or module? </h4>
        </div>
        <div id="collapseThree1" class="panel-collapse collapse">
            <div class="panel-body">a.  Sections and Modules are not timed. You may leave and come back at your convenience. </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseFour1">
             <h4 class="panel-title">4. How do I contact the instructor? </h4>
        </div>
        <div id="collapseFour1" class="panel-collapse collapse">
            <div class="panel-body">a.  This is a fully online program. Though there is not a formal instructor, you may contact the <a href="mailto:victoria.valencia@austin.utexas.edu">course content manager</a> with any questions, comments, or concerns you have about the material in these modules. For any technical issues, <a href="mailto:eanderson@utx.edu">contact Technical Support</a>. </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseFive1">
             <h4 class="panel-title">5. Will there be an exam at the end of this course? </h4>
        </div>
        <div id="collapseFive1" class="panel-collapse collapse">
            <div class="panel-body">a.  At this time, there are questions to check your understanding and engagement throughout modules and sections, but there is not a comprehensive exam. </div>
        </div>
    </div>
   

    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseSeven1">
             <h4 class="panel-title">6. How much do these modules cost? </h4>
        </div>
        <div id="collapseSeven1" class="panel-collapse collapse">
            <div class="panel-body">a.  These modules are provided to you at no cost. </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseEight1">
             <h4 class="panel-title">7. Will I receive a certificate or continuing education credits for completing these modules? </h4>
        </div>
        <div id="collapseEight1" class="panel-collapse collapse">
            <div class="panel-body">a.  Continuing education credits are not provided at this time (we will likely offer Continuing Medical Education (CME) credits in the near future). You will receive a certificate of completion once you have worked through modules 1-3. The certificate will be provided via email. </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6,#accordion7" data-target="#collapseNine1">
             <h4 class="panel-title">8. How and for what problems should I contact technical support? </h4>
        </div>
        <div id="collapseNine1" class="panel-collapse collapse">
            <div class="panel-body">
            a.  You should <a href="mailto:eanderson@utx.edu">contact Technical Support</a>  for any problem associated with:
            <ul>
              <li>Issues logging in or registering </li>
              <li>Forgotten passwords </li>
              <li>Broken links </li>
              <li>Non-working audio or visual content</li>

            </ul></div>
        </div>
    </div>
</div>

        </div> 
    </div>
</div>

<div class="container saerch">
   <div class="row text-left mainSaerch">
      <div class="col-sm-12">
         <h1>Search result for &#x201C;<span id='WS' style="color:#f58221;"></span>&#x201D;</h1>
         <hr>
         <div class="panel-group">
          <div class="row">
            <div class="col-sm-3 padd0">
              <ul class="nav nav-tabs nav-stacked text-center">
                <li class="active"><a data-toggle="tab" href="#Smodule">Module <span class="Smn"></span> Results</a></li>
                <li><a data-toggle="tab" href="#Sfull" onclick="app.SearchFull();">Full Site Results</a></li>
              </ul>
            </div>
             <div class="col-sm-9 padd0">
                 <div class="tab-content">
                  <div id="Smodule" class="tab-pane fade in active jumpPage">
                      
                  </div>
                  <div id="Sfull" class="tab-pane fade jumpPage" >
                   
                  </div>
                </div>
            </div>

          </div>
            

           
         </div>
      </div>
   </div>
</div>




<div class="container">
 <div class="modal fade" id="forgot" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <div class="row">
            <div class="col-sm-6"></div>
            <!-- <div class="col-sm-6 text-right"><span style="color:#e2873b;">New to Dell Medical? </span><button class="btn btn-default right-block" onclick="app.RegiPage();" type="button">Sign in</button></div> -->
        </div>
        
          <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button> 
        </div>

        <div class="modal-body">
        <form class="form-signin input-sm" id="forgotF" action="" method="post">
        <h3 class="form-signin-heading text-center" style="color:#e2873b;">Enter your E-mail ID.</h3>
         <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                  <input type="email" name="email" id="email" class="inp form-control text-center" placeholder="E-mail ID" required="" autofocus="">
            </div>
            <div class="col-sm-3"></div>
        </div>
        
        <br>
         <div class="row text-center NExists">
           
         </div>
       <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2"> 
             <input type="hidden" name="login" id="login" value='login'>
             <button class="btn btn-default center-block" type="submit" >
              <span class="actS" >Send </span>
             <div class="loader loadS"></div>
             </button>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <br>
        <br>
       
      </form>
       
        </div>

        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
</div>
<div class="container">
 <div class="modal fade" id="passReset" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <div class="row">
            <div class="col-sm-6"></div>
        </div>
        
          <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button> 
        </div>

        <div class="modal-body">
        <form class="form-signin input-sm" id="passResetF" action="" method="post">
        <h3 class=" PRi form-signin-heading text-center" style="color:#e2873b;">Please enter your new password.</h3>
         <br>
        <div class="row PRi ">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                  <input type="password" name="Rpassword" id="Rpassword" class="inp form-control text-center" placeholder="New Password" required="" autofocus="">
            </div>
            <div class="col-sm-3"></div>
        </div>
        <br>
        <div class="row PRi ">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                  <input type="password" name="RpasswordC" id="RpasswordC" class="inp form-control text-center" placeholder="Confirmed Password" required="" >
            </div>
            <div class="col-sm-3"></div>
        </div>
        <br>
         <div class="row text-center NExists">
           
         </div>
       <div class="row PRi ">
            <div class="col-sm-5"></div>
            <div class="col-sm-2"> 
             <input type="hidden" name="login" id="login" value='login'>
             <button id="btns" class="btn btn-default center-block" type="submit" >
              <span class="actS" >Reset Password</span>
             <div class="loader loadS"></div>
             </button>
            </div>
            <div class="col-sm-5"></div>
        </div>
         <div class="row PRL " style="display:none;">
            <div class="col-sm-5"></div>
            <div class="col-sm-2"> 
             <button onclick="$('#passReset').modal('hide'); $('#login').modal();" class="btn btn-default center-block" type="button" >
              <span >Log In</span>
             </button>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <br>
        <br>
       
      </form>
       
        </div>

        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
</div>
<?php
if (isset($_GET['eid']) && !isset($_SESSION['username'])) {
  $email_decoded = base64_decode(strtr($_GET['eid'], '-_', '+/'));
  ?>
<script type="text/javascript">

$('#passReset').modal({show: 'false'}); 
$("#passResetF").validate({
rules: {
  Rpassword: {
        required: true,
        minlength: 8
  },
  RpasswordC: {
      required: true,
      minlength: 8,
      equalTo: "#Rpassword"
  }
},
submitHandler: function(form){
    var password = form.elements["Rpassword"].value;
     var dataSave = {email:"<?php echo $email_decoded;?>",password:password,call:'PReset'};
    $.post( "forgot.php", dataSave, 
        function( data ) {
          if(data == 1){
            $("#passReset .NExists").html('<h3 class="form-signin-heading text-center" style="color:#e2873b;">Your password has been changed successfully!</h3>');
             $("#passReset .PRi").hide();
             $("#passReset .PRL").show();
          }else{
             $("#passReset .NExists").html('<h3 class="form-signin-heading text-center" style="color:#e2873b;">Try again.</h3>');
          }
        }, "json");
 
  
  }
});
</script>
  <?php
}
?>

</div>

<script type="text/javascript" src='js/jquitelight.js'></script>
<script type="text/javascript">
app.SearchFull = function(){
    app.SearchFunction(app.SearchKey,'','Sfull');
}
app.SearchFunction = function(inputs,mn,id){
     var data = {inputs:inputs,mn:"m"+mn};
     if (inputs != "") {
          $.post( "search.php", data, function(d){}, "json")
          .done(function(d) {
             console.log(JSON.stringify(d));
          }).fail(function(d){
              var loc = d.responseText; 
              loc = loc.replace(/dd/);
              $("#"+id).html(loc);
              $("#WS").text(inputs);
              $(".saerch").show();
              $(".MSection, .menus, .FAQ").hide();
              $("#"+id).mark(inputs);
              $(".SCL" ).click(function() {
                var id = $(this).attr('id');
                 if (id != 'home') {
                   window.location="?id=m"+id[1]+"/"+id;
                 }else{
                   window.location="<?php echo pathUrl();?>";
                    console.log(id);
                 }
              });
          }).always(function(d) {});
      }
}


$(".mSearch").validate({
rules: {
  inputs: {
      required: true 
  }
},
  submitHandler: function(form){
    var inputs = form.elements["inputs"].value;
    app.SearchKey = inputs;
    var mn = app.SelecteM[1];
    $(".Smn").text(mn);
    app.SearchFunction(inputs,mn,'Smodule');
      var h = $(document).height()-80;
    $(".disS").toggle().css({"height":h+'px'})

  }
});
$("#forgotF").validate({
rules: {
   
  email: {
      required: true,
      email: true 
  }
},
messages: {
email: "Please enter a valid email address."
},
 
submitHandler: function(form){
   var dataSave = {email:form.elements["email"].value,call:'PForget'};
   $("#forgot .actS").hide();
   $("#forgot .loadS").show();
   $('#forgot .btn').attr('disabled','disabled');
   $("#forgot .NExists").html('');
    $.post( "forgot.php", dataSave, 
        function( data ) {
          if(data == 1){
            $('#forgot .btn').hide();

           $("#forgot .NExists").html('<h3 class="form-signin-heading text-center" style="color:#e2873b;">A password reset link has been sent to your email.</h3>');
          }else{
          $('#forgot .btn').removeAttr('disabled');
          $("#forgot .actS").show();
          $("#forgot .loadS").hide();
          $("#forgot .NExists").html('<h4 style="color:#ff0000;">E-mail ID does not exist.</h4>');
          }
        }, "json");

}
 
});



$("#loginF").validate({
rules: {
   
  email: {
      required: true,
      email: true 
  },
  Pass: {
          required: true,
          minlength: 8
  },

},
messages: {
email: "Please enter a valid email address"
},
 
submitHandler: function(form){
   var dataSave = {email:form.elements["username"].value,password:form.elements["password"].value};
    $.post( "check.php", dataSave, 
        function( data ) {
          if(data == 1){
             $(".NExists h4").text('');
            form.submit();
           //console.log(typeof(data));
          }else{
            $(".NExists h4").text('Incorrect username or password.');
          }
        }, "json");

}
 
});



    $("#registrationF").validate({
//specify the validation rules
rules: {
    Fname: "required",
    Lname: "required",
email: {
    required: true,
    email: true //email is required AND must be in the form of a valid email address
},
Age:{
  required: true,
      range: [18, 110]
},
Pass: {
        required: true,
        minlength: 8
},
Passc: {
    required: true,
    minlength: 8,
    equalTo: "#Pass"
},
Gender: {
    required: true,
}
,
PPRole: {
    required: true,
}
},

PPRole: {
    required: function () {
        return alert();
    }
},
 
//specify validation error messages
messages: {
    Fname: "First Name field cannot be blank!",
    Lname: "Last Name field cannot be blank!",
password: {
    required: "Password field cannot be blank!",
    minlength: "Your password must be at least 6 characters long"
},
email: "Please enter a valid email address"
},
 
submitHandler: function(form){
form.submit();
}
 
});
</script>
<div class="dis disS"></div>
<div class="dis disM"></div>
<div class="dis disF"></div>


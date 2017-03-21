 <?php if(@isset($_GET['id'])){?>
<footer class="container-fluid">
         
          <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3  text-right NextBtn">
                <span>MODULE 1 | Section 1</span>
                <span><strong>Introduction to Value Based Healthcare</strong></span>
                <a><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
        </div>
      </footer> 
       <?php }else{?>
<style>
.footer-bs {
    background-color: #3c3d41;
    padding: 60px 40px;
    color: rgba(255,255,255,1.00);
    margin-bottom: 20px;
    /*border-bottom-right-radius: 6px;*/
    /*border-top-left-radius: 0px;
    border-bottom-left-radius: 6px;*/
}
.footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
.footer-bs .footer-brand h2 { margin:0px 0px 10px; }
.footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }

.footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.pages li { padding:5px 0px;}
.footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; }
.footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
.footer-bs .footer-nav h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
}

.footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.list li { padding:5px 0px;}
.footer-bs .footer-nav ul.list a { color:rgba(240,173,78); }
.footer-bs .footer-nav ul.list a:hover { color:rgba(240,173,78); text-decoration:none; }

.footer-bs .footer-social ul { list-style:none; padding:0px; }
.footer-bs .footer-social h4 {
    font-size: 15px;
    /*text-transform: uppercase;*/
    /*letter-spacing: 3px;*/
    font-family: "GothamHTF-Bold";
}
.footer-bs .footer-social li { padding:5px 4px;}
.footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
.footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }

.footer-bs .footer-ns h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
}
.footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }

@media (min-width: 768px) {
    .footer-bs .footer-social, .footer-bs, .footer-bs .footer-ns { border-left:solid 2px rgba(255,255,255,0.7); }
}
@media (min-width: 768px) {
    .footer-bs { border-left:none; }
}

.footimg{
    z-index: 99999;
    position: relative;
    background-color: #fff;  
    margin-top: -4%;
 }
 .footer-bs ul  li{
   color: #f49951 !important;
 }
 .list a{
    color: #f49951 !important;
 }
/* .form-control{
    border: 2px solid #f0ad4e !important;
    border-radius: 4px;
    box-shadow: 1px rgba(240, 173, 78) inset !important;
 }*/

.footer-bs .row {
    margin-top: 2%;
}

 /*footer end*/
</style>
      <footer class="footer-bs">
        <div class="row text-center">
           <div class="col-sm-3"></div>
           <div class="col-sm-6"><img class="footimg img-responsive center-block" src="img/logo.svg" height="auto" width="100%"></div>
           <div class="col-sm-3"></div>
        </div>

        <div class="row text-left">
          <div class="col-md-2"></div>
           <div class="col-md-4 footer-nav animated fadeInUp">
                    <ul class="list">
                        <li>Questions or comments regarding the Value Based Health Care modules?</li>
                        <li>Contact: <a href="mailto:Victoria.valencia@austin.utexas.edu">Victoria.valencia@austin.utexas.edu</a></li>
                    </ul>
                </div>
          <div class="col-md-4 footer-social animated fadeInDown">
              <h4>Helpful links</h4>
                 <ul>
                  <li><a href="email tech team here at ITL. Edward? Who is our customer services person?">Problems logging in or technical issues? </a></li>
                  <li><a href="http://dellmedschool.utexas.edu/">Dell Medical School </a></li>
                  <li><a href="http://www.utsystem.edu/">University of Texas System</a></li>

                </ul>
            </div>
            <div class="col-md-2"></div>
        </div>
    </footer>
         <?php }?>
     
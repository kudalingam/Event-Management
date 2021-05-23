<?php 
require_once('connect.php');
if(isset($_SESSION['Email'])){
?>
 <!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                <title>Apply job</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                                <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                                
                                <style>
                                * {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
    padding: 5px 30px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #673AB7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative;
    left:-30%;
    width:600px;
}

.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}
#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}
#progressbar #experience:before {
    font-family: FontAwesome;
    content: "\f073";
}
#progressbar #location:before {
    font-family: FontAwesome;
    content: "\f041"
}
#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f15c"
}
#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #673AB7
}

.fit-image {
    width: 100%;
    object-fit: cover
}
.row a{
    text-decoration: none;
    font-size: 20px;
    line-height: 15px;
    color:Red;
}

.row a:hover
{
	cursor: pointer;
    color: green;
}
.container-fluid{
    background: url(wave1.png);
}
.img{
	display: flex;
	justify-content: flex-start;
}
.img img{
	width: 400px;
    height: 800px;
}
.btn a{
        position: relative;
        display: inline-block;
        padding: 7px 14px;
        top:4px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
        font-size: 14px;
        overflow: hidden;
        transition: 0.2s;
        color:#c0c0c0;
    }
  .btn  a:hover{
        color: #fff;
        background: #2196f3;
        box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
        transition-delay: 1s ;

    }
  .btn a span{
        position: absolute;
        display: block;
    }
  .btn a span:nth-child(1){
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg,transparent,#2196f3);
    }
  .btn a:hover span:nth-child(1){
    left: 100%;
    transition: 1s;
    }
  .btn a span:nth-child(3){
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg,transparent,#2196f3);
    }
   .btn a:hover span:nth-child(3){
    right: 100%;
    transition: 1s;
    transition-delay: 0.5s;
    }
    .btn a span:nth-child(2){
        top: -100%;
        right: 0%;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg,transparent,#2196f3);
    }
    .btn a:hover span:nth-child(2){
    top: 100%;
    transition: 1s;
    transition-delay: 0.25s;
    }
    .btn a span:nth-child(4){
        bottom: -100%;
        left: 0%;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg,transparent,#2196f3);
    }
    .btn a:hover span:nth-child(4){
    bottom: 100%;
    transition: 1s;
    transition-delay: 0.75s;
    }
</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
                                <script type='text/javascript'>$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});</script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div style="display: inline; margin-left: -10px;" class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="btn">
            <a class="nav-link" href="Home_.php"><span></span><span></span><span></span><span></span><i class="fa fa-home"></i>Home</a>
          </li>
          <li class="btn">
        <a class="nav-link" href="about.php"><span></span><span></span><span></span><span></span><i class="fa fa-info-circle"></i>ABOUT US</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="services.php"><span></span><span></span><span></span><span></span><i class="fa fa-cogs"></i> SERVICES</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="gallery.php"><span></span><span></span><span></span><span></span><i class="fa fa-image"></i> Portfolio</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="Enquiry.php"><span></span><span></span><span></span><span></span><i class="fa fa-shopping-cart"></i> ORDER</a>
      </li>
      <li class="btn active" style="background: black;">
        <a class="nav-link" href="Form.php"><span></span><span></span><span></span><span></span><i class="fa fa-briefcase"></i> JOBS</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="contact.php"><span></span><span></span><span></span><span></span><i class="fas fa-envelope"></i> CONTACT US</a>
      </li>
      
      
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="btn"><a href="logout.php" style="left: 310px;">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <i class="fas fa-sign-out-alt"></i>Logout
      </a></li>
      <li class="btn">
            <a class="nav-link" href="job.php" style="left: 100px;"><span></span><span></span><span></span><span></span><i class="fas fa-info-circle"></i> INFO</a>
          </li>
    </ul>
      </div>
    </div>
  </nav><br>
                            <div class="container-fluid">
                                <div class="img">
                                    <img src="img/web_developer.svg">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Apply Job</h2>
                <p>Fill all form field to go to next step</p>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="personal"><strong>Personal</strong></li> 
                        <li id="experience"><strong>Experience</strong></li>
                        <li id="location"><strong>Location</strong></li>
                        <li id="payment"><strong>File</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <form id="msform" action="connect.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 5</h2>
                                </div>
                            </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" autocomplete="off" required="" /> 
                            <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" autocomplete="off" required=""/>
                            <label class="fieldlabels">Official Email: *</label> <input type="email" name="email" placeholder="Email Id" autocomplete="off" required=""/> 
                            <label class="fieldlabels">Contact No.: *</label> <input type="tel" name="phno" placeholder="Contact No." autocomplete="off" required=""/>
                            <label class="fieldlabels">D.O.B: *</label> <input type="date" name="dob" placeholder="Enter D.O.B" autocomplete="off" required="">
                              <div><label class="fieldlabels">Gender: *</label><br>
                             <!-- Default inline 1-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="gender" value="Male">
                                <label class="custom-control-label" for="defaultInline1">Male</label>
                            </div>
                            
                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="gender" value="Female">
                                <label class="custom-control-label" for="defaultInline2">Female</label>
                            </div>
                            
                            <!-- Default inline 3-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline3" name="gender" value="Transcender">
                                <label class="custom-control-label" for="defaultInline3">Transcender</label>
                            </div></div>
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Job Experience:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 5</h2>
                                </div>
                            </div> <label class="fieldlabels">Qualification*</label> <input type="text" name="qualification" placeholder="Education" />
                             <label class="fieldlabels">Experience *</label> <input type="text" name="experience" placeholder="Work Experience" /> 
                             <label class="fieldlabels">Language *</label> <input type="text" name="language" placeholder="Known Languages" /> 
                             <label class="fieldlabels">Salary *</label> <input type="number" name="salary" placeholder="Expected salary" />
                             <label for="about" class="fieldlabels">About:</label><textarea name="about" rows="3" cols="33" placeholder="About Yourself"></textarea>
                             <label for="role" class="fieldlabels">Role:</label>
                                <select id="role" name="role">
                                   <option value="All">All</option>
                                    <option value="Technician">Technician</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Corpender">Corpender</option>
                                    <option value="Helper">Helper</option>
                                </select>
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Location:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 5</h2>
                                </div>
                            </div> <label class="fieldlabels">Address*</label> <input type="text" name="address" placeholder="Address" /> 
                            <label class="fieldlabels">City*</label> <input type="text" name="city" placeholder="City" /> 
                            <label class="fieldlabels">District *</label> <input type="text" name="district" placeholder="District" /> 
                            <label class="fieldlabels">State*</label> <input type="text" name="state" placeholder="State" />
                            <label class="fieldlabels">Pincode*</label> <input type="number" name="pincode" placeholder="Pincode" />
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">File Upload:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 5</h2>
                                </div>
                            </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="image"> 
                            <label class="fieldlabels">Upload Id Proof:</label> <input type="file" name="idproof" multiple>
                        </div> <button type="submit" id="Apply" name="Apply" class="next action-button" value="Apply">Apply </button><input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 5 - 5</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center" style="color:red;"><strong > FAILED !</strong></h2> <br>
                            <div class="row justify-content-center">
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center" style="color:red;">Please Fill out the all field</h5>
                                </div>
                            </div>
                        </div><input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="py-5 bg-dark">
    <div style="font-size: 18px; background-color: #343a40; color: white;" class="container">
      <br><p style="color:white;">&copy; 2020 Event Management . All Rights Reserved &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a style="color: #fff;" href="https://www.instagram.com/a_n_a_n_t_h_1_8/"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a style="color: #fff;" href="https://www.facebook.com/ananth.t.vj.9"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a style="color: #fff;" href="https://twitter.com/Ananthvj18"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a style="color: #fff;" href="https://github.com/kudalingam"><i class="fab fa-github"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a style="color: #fff;" href="https://www.linkedin.com/in/kudalingam-r-b08233201/"><i class="fab fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Privacy Policy &middot; Terms &amp; Conditions</p></div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
else{
  require_once('Form1.php');
}

?>
<!--DOCTYPE html>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
<style>
body {
  margin: 0;
  padding: 0;
  height:100%;
}
.loader-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #242f3f;
  display:flex;
  justify-content: center;
  align-items: center;
}
.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 2s infinite ease;
}
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% { transform: rotate(0deg);}
  25% { transform: rotate(180deg);}
  50% { transform: rotate(180deg);}
  75% { transform: rotate(360deg);}
  100% { transform: rotate(360deg);}
}

@keyframes loader-inner {
  0% { height: 0%;}
  25% { height: 0%;}
  50% { height: 100%;}
  75% { height: 100%;}
  100% { height: 0%;}
}
</style>
  <body>
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <!--script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script-->
    <!--script>
$(document).ready(function() {
//Preloader
preloaderFadeOutTime = 4000;
function hidePreloader() {
var preloader = $('.loader-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
</script>
  </body>
</html-->



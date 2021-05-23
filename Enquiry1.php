<?php
require_once('index.php');
if(isset($_SESSION['userData'])){
  ?>
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Order</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <script src="https://kit.fontawesome.com/a81368914c.js"></script>
                                <style>
                                body {
    width: 100%;
    height: 100%;
    background:lightslategray
}
.container {
    flex-wrap: wrap
}

.card {
    border: none;
    border-radius: 10px;
    background-color: #4270C8;
    width: 400px;
    top: -80%;
    margin-top: -300px;
}

p.mb-1 {
    font-size: 30px;
    color: #9FB7FD
}

.btn-primary {
    border: none;
    background: #5777DE;
    margin-bottom: 60px
}

.btn-primary small {
    color: #9FB7FD
}

.btn-primary span {
    font-size: 13px
}

.card.two {
    border-top-right-radius: 60px;
    border-top-left-radius: 0;
}

.form-group {
    position: relative;
    margin-bottom: 2rem
}

.form-control {
    border: none;
    border-radius: 0;
    outline: 0;
    border-bottom: 1.5px solid #E6EBEE
}

.form-control:focus {
    box-shadow: none;
    border-radius: 0;
    border-bottom: 2px solid #8A97A8
}

.form-control-placeholder {
    position: absolute;
    top: 15px;
    left: 10px;
    transition: all 200ms;
    opacity: 0.5;
    font-size: 90%;
    color: black;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.form-control:focus+.form-control-placeholder,
.form-control:valid+.form-control-placeholder {
    font-size: 100%;
    transform: translate3d(0, -90%, 0);
    opacity: 1;
    top: 10px;
    color: black;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.btn-block {
    border: none;
    border-radius: 8px;
    background-color: #506CCF;
    padding: 10px 0 12px
}

.btn-block:focus {
    box-shadow: none
}

.btn-block span {
    font-size: 15px;
    color: #D0E6FF
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
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'>$(document).ready(function(){

var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
stats.begin();
stats.end();
if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
}
requestAnimationFrame(update);
};
requestAnimationFrame(update);


});</script>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
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
      <li class="btn active" style="background: black;">
        <a class="nav-link" href="Enquiry.php"><span></span><span></span><span></span><span></span><i class="fa fa-shopping-cart"></i> ORDER</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="Form.php"><span></span><span></span><span></span><span></span><i class="fa fa-briefcase"></i> JOBS</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="contact.php"><span></span><span></span><span></span><span></span><i class="fas fa-envelope"></i> CONTACT US</a>
      </li>
      
      
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="btn"><a href="logout1.php" style="left: 310px;">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <i class="fas fa-sign-out-alt"></i>Logout
      </a></li>
      <li class="btn">
            <a class="nav-link" href="order.php" style="left: 100px;"><span></span><span></span><span></span><span></span><i class="fas fa-info-circle"></i> INFO</a>
          </li>
    </ul>
      </div>
    </div>
  </nav>
                                <div id="particles-js">
                                    <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436720/particles.js"></script>
                            <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436735/app.js"></script>
                            <div class="container d-flex justify-content-center">
    <div class="d-flex flex-column justify-content-between">
        <div class="card mt-3 p-5">
            <div class="logo mb-3"><img src="https://imgur.com/zydrQCr.png"></div>
            <div>
                <p class="mb-1">Start Share Your</p>
                <h4 class="mb-5 text-white">Company Details With Us!</h4>
            </div> <!--button class="btn btn-primary btn-lg"><small>Already signed up?</small><span>&nbsp;Log in</span> </button-->
        </div>
        <form action="connect.php" method="POST" ><div class="card two bg-white px-5 py-4 mb-3">
        <div class="form-group"><i class="fas fa-cogs"> Service* </i>
                  <input list="services" class="form-control" name="service" id="service" placeholder="Select Service" required>
                  <datalist id="services">
                  <option value="Exhibition">
                  <option value="Sports Events">
                  <option value="Product Launch">
                    <option value="Corporate Events">
                    <option value="Social Events">
                    <option value="Wedding Events">
                    <option value="Artist Management">
                    <option value="Seminor and Conference">
                    <option value="Brand Promotion">
                    <option value="Road Shows">
                  </datalist></div>
            <div class="form-group"><input type="text" class="form-control" id="cname" name="cname" required><label class="form-control-placeholder" for="cname">
                <div class="i"><i class="fas fa-user"></i> Company Name*</label></div></div>
            <div class="form-group"><input type="email" class="form-control" id="email" name="email" required><label class="form-control-placeholder" for="email">
                <div class="i"><i class="fas fa-mail-bulk"></i> Official Email*</label></div></div>
            <div class="form-group"><input type="text" class="form-control" id="website" name="website" required><label class="form-control-placeholder" for="website">
                <div class="i"><i class="fab fa-internet-explorer"></i> Official Website*</label></div></div>
            <div class="form-group"><input type="tel" class="form-control" id="contact" name="contact" required><label class="form-control-placeholder" for="contact">
                <div class="i"><i class="fas fa-phone-square-alt"></i> Contact Info*</label></div></div>
            <div class="form-group"><input type="textarea" class="form-control" id="address" name="address" required><label class="form-control-placeholder" for="caddress">
                <div class="i"><i class="fas fa-address-book"></i> Address*</label></div></div>
            <div class="form-group"><input type="number" class="form-control" id="pincode" name="pincode" autocomplete="off" required=""><label class="form-control-placeholder" for="pincode">
                <div class="i"><i class="fas fa-map-marker-alt"></i> Pincode*</label></div></div>
            <div class="form-group"><textarea  id="about" required name="about" rows="3" cols="40" class="form-control-placeholder" placeholder="About Company"></textarea></div><br><br><br>
            
          <button class="btn btn-primary btn-block btn-lg mt-1 mb-2" name="enquiry" id="enquiry" value="enquiry"><span>Enquiry <i class="fas fa-paper-plane"></i></span></button>
          <p align="center"><i class="fas fa-phone-square-alt"></i> Callback within a Hour*</p>
        </div></form>
    </div>
</div>
</div>
<footer class="py-5 bg-dark">
    <div style="font-size: 18px; background-color: #343a40; color: white;" class="container">
      <br><p>&copy; 2020 Event Management . All Rights Reserved &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
  header("Location: log1.php");
  }
?>
<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Document</title>
</head>
<style>
    html, body {
    width: 100%;
    height: 100%;
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
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

section.wrapper {
  padding: 40px 0;
}

div.spinner {
  -moz-animation: rotate 10s infinite linear;
  -webkit-animation: rotate 10s infinite linear;
  animation: rotate 10s infinite linear;
  position: relative;
  display: block;
  margin: auto;
  width: 142px;
  height: 142px;
}
div.spinner i {
  -moz-animation: rotate 3s infinite cubic-bezier(0.09, 0.6, 0.8, 0.03);
  -webkit-animation: rotate 3s infinite cubic-bezier(0.09, 0.6, 0.8, 0.03);
  animation: rotate 3s infinite cubic-bezier(0.09, 0.6, 0.8, 0.03);
  -moz-transform-origin: 50% 100% 0;
  -webkit-transform-origin: 50% 100% 0;
  transform-origin: 50% 100% 0;
  position: absolute;
  display: inline-block;
  top: 50%;
  left: 50%;
  border: solid 6px transparent;
  border-bottom: none;
}
div.spinner i:nth-child(1) {
  -moz-animation-timing-function: cubic-bezier(0.09, 0.3, 0.12, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 0.3, 0.12, 0.03);
  animation-timing-function: cubic-bezier(0.09, 0.3, 0.12, 0.03);
  width: 44px;
  height: 22px;
  margin-top: -22px;
  margin-left: -22px;
  border-color: #2172b8;
  border-top-left-radius: 36px;
  border-top-right-radius: 36px;
}
div.spinner i:nth-child(2) {
  -moz-animation-timing-function: cubic-bezier(0.09, 0.6, 0.24, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 0.6, 0.24, 0.03);
  animation-timing-function: cubic-bezier(0.09, 0.6, 0.24, 0.03);
  width: 58px;
  height: 29px;
  margin-top: -29px;
  margin-left: -29px;
  border-color: #18a39b;
  border-top-left-radius: 42px;
  border-top-right-radius: 42px;
}
div.spinner i:nth-child(3) {
  -moz-animation-timing-function: cubic-bezier(0.09, 0.9, 0.36, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 0.9, 0.36, 0.03);
  animation-timing-function: cubic-bezier(0.09, 0.9, 0.36, 0.03);
  width: 72px;
  height: 36px;
  margin-top: -36px;
  margin-left: -36px;
  border-color: #82c545;
  border-top-left-radius: 48px;
  border-top-right-radius: 48px;
}
div.spinner i:nth-child(4) {
  -moz-animation-timing-function: cubic-bezier(0.09, 1.2, 0.48, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 1.2, 0.48, 0.03);
  animation-timing-function: cubic-bezier(0.09, 1.2, 0.48, 0.03);
  width: 86px;
  height: 43px;
  margin-top: -43px;
  margin-left: -43px;
  border-color: #f8b739;
  border-top-left-radius: 54px;
  border-top-right-radius: 54px;
}
div.spinner i:nth-child(5) {
  -moz-animation-timing-function: cubic-bezier(0.09, 1.5, 0.6, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 1.5, 0.6, 0.03);
  animation-timing-function: cubic-bezier(0.09, 1.5, 0.6, 0.03);
  width: 100px;
  height: 50px;
  margin-top: -50px;
  margin-left: -50px;
  border-color: #f06045;
  border-top-left-radius: 60px;
  border-top-right-radius: 60px;
}
div.spinner i:nth-child(6) {
  -moz-animation-timing-function: cubic-bezier(0.09, 1.8, 0.72, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 1.8, 0.72, 0.03);
  animation-timing-function: cubic-bezier(0.09, 1.8, 0.72, 0.03);
  width: 114px;
  height: 57px;
  margin-top: -57px;
  margin-left: -57px;
  border-color: #ed2861;
  border-top-left-radius: 66px;
  border-top-right-radius: 66px;
}
div.spinner i:nth-child(7) {
  -moz-animation-timing-function: cubic-bezier(0.09, 2.1, 0.84, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 2.1, 0.84, 0.03);
  animation-timing-function: cubic-bezier(0.09, 2.1, 0.84, 0.03);
  width: 128px;
  height: 64px;
  margin-top: -64px;
  margin-left: -64px;
  border-color: #c12680;
  border-top-left-radius: 72px;
  border-top-right-radius: 72px;
}
div.spinner i:nth-child(8) {
  -moz-animation-timing-function: cubic-bezier(0.09, 2.4, 0.96, 0.03);
  -webkit-animation-timing-function: cubic-bezier(0.09, 2.4, 0.96, 0.03);
  animation-timing-function: cubic-bezier(0.09, 2.4, 0.96, 0.03);
  width: 142px;
  height: 71px;
  margin-top: -71px;
  margin-left: -71px;
  border-color: #5d3191;
  border-top-left-radius: 78px;
  border-top-right-radius: 78px;
}

@-moz-keyframes rotate {
  to {
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes rotate {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotate {
  to {
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
<body>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
        <section class="wrapper">
            <div class="spinner">
              <i></i>
              <i></i>
              <i></i>
              <i></i>
              <i></i>
              <i></i>
              <i></i>
            </div>
          </section>
      </div>
      <script>
$(document).ready(function() {
//Preloader
preloaderFadeOutTime = 7000;
function hidePreloader() {
var preloader = $('.loader-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
</script>
</body>
</html>
<?php 
require_once('connect.php');
if(isset($_SESSION['Email'])){
?>
<?php 
require_once "connect.php";
 ?><!doctype html>
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
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a class="nav-link" href="Home.php"><i class="fa fa-home"></i>Home</a>
              </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.php"><i class="fa fa-info-circle"></i>ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php"><i class="fa fa-cogs"></i> SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php"><i class="fa fa-image"></i> GALLERY</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Enquiry.php"><i class="fa fa-shopping-cart"></i> ORDER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Form.php"><i class="fa fa-briefcase"></i> JOBS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li><li class="nav-item ">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li><li class="nav-item ">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li><li class="nav-item ">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php"><i class="fas fa-info-circle"></i> INFO</a>
          </li>
          <!--li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li-->
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
            <div class="form-group"><input type="website" class="form-control" id="website" name="website" required><label class="form-control-placeholder" for="website">
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
  require_once('Enquiry1.php');
}

?>
<!DOCTYPE html>
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

*,
*:before,
*:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.wrapper {
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -100px;
    width: 200px;
    height: 200px;
    background-color: transparent;
    border: none;
    -webkit-user-select: none;
}

.wrapper .box-wrap {
    width: 70%;
    height: 70%;
    margin: calc((100% - 70%)/2) calc((100% - 70%)/2);
    position: relative;
    transform: rotate(-45deg);
}

.wrapper .box-wrap .box {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    background: rgba(135, 0, 0, 0.6);
    background: linear-gradient(to right, #141562, #486FBC, #EAB5A1, #8DD6FF, #4973C9, #D07CA7, #F4915E, #F5919E, #B46F89, #141562, #486FBC);
    background-position: 0% 50%;
    background-size: 1000% 1000%;
    visibility: hidden;
}

.wrapper .box-wrap .box.one {
    animation: moveGradient 15s infinite, oneMove 3.5s infinite;
}

.wrapper .box-wrap .box.two {
    animation: moveGradient 15s infinite, twoMove 3.5s .15s infinite;
}

.wrapper .box-wrap .box.three {
    animation: moveGradient 15s infinite, threeMove 3.5s .3s infinite;
}

.wrapper .box-wrap .box.four {
    animation: moveGradient 15s infinite, fourMove 3.5s .575s infinite;
}

.wrapper .box-wrap .box.five {
    animation: moveGradient 15s infinite, fiveMove 3.5s .725s infinite;
}

.wrapper .box-wrap .box.six {
    animation: moveGradient 15s infinite, sixMove 3.5s .875s infinite;
}

@keyframes moveGradient {
    to {
        background-position: 100% 50%;
    }
}

@keyframes oneMove {
    0% {
        visibility: visible;
        clip-path: inset(0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    14.2857% {
        clip-path: inset(0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    28.5714% {
        clip-path: inset(35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    42.8571% {
        clip-path: inset(35% 70% 35% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    57.1428% {
        clip-path: inset(35% 70% 35% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    71.4285% {
        clip-path: inset(0% 70% 70% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    85.7142% {
        clip-path: inset(0% 70% 70% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    100% {
        clip-path: inset(0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
}

@keyframes twoMove {
    0% {
        visibility: visible;
        clip-path: inset(0% 70% 70% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    14.2857% {
        clip-path: inset(0% 70% 70% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    28.5714% {
        clip-path: inset(0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    42.8571% {
        clip-path: inset(0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    57.1428% {
        clip-path: inset(35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    71.4285% {
        clip-path: inset(35% 70% 35% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    85.7142% {
        clip-path: inset(35% 70% 35% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    100% {
        clip-path: inset(0% 70% 70% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
}

@keyframes threeMove {
    0% {
        visibility: visible;
        clip-path: inset(35% 70% 35% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    14.2857% {
        clip-path: inset(35% 70% 35% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    28.5714% {
        clip-path: inset(0% 70% 70% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    42.8571% {
        clip-path: inset(0% 70% 70% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    57.1428% {
        clip-path: inset(0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    71.4285% {
        clip-path: inset(0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    85.7142% {
        clip-path: inset(35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    100% {
        clip-path: inset(35% 70% 35% 0 round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
}

@keyframes fourMove {
    0% {
        visibility: visible;
        clip-path: inset(35% 0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    14.2857% {
        clip-path: inset(35% 0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    28.5714% {
        clip-path: inset(35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    42.8571% {
        clip-path: inset(70% 35% 0% 35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    57.1428% {
        clip-path: inset(70% 35% 0% 35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    71.4285% {
        clip-path: inset(70% 0 0 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    85.7142% {
        clip-path: inset(70% 0 0 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    100% {
        clip-path: inset(35% 0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
}

@keyframes fiveMove {
    0% {
        visibility: visible;
        clip-path: inset(70% 0 0 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    14.2857% {
        clip-path: inset(70% 0 0 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    28.5714% {
        clip-path: inset(35% 0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    42.8571% {
        clip-path: inset(35% 0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    57.1428% {
        clip-path: inset(35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    71.4285% {
        clip-path: inset(70% 35% 0% 35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    85.7142% {
        clip-path: inset(70% 35% 0% 35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    100% {
        clip-path: inset(70% 0 0 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
}

@keyframes sixMove {
    0% {
        visibility: visible;
        clip-path: inset(70% 35% 0% 35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    14.2857% {
        clip-path: inset(70% 35% 0% 35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    28.5714% {
        clip-path: inset(70% 0 0 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    42.8571% {
        clip-path: inset(70% 0 0 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    57.1428% {
        clip-path: inset(35% 0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    71.4285% {
        clip-path: inset(35% 0% 35% 70% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    85.7142% {
        clip-path: inset(35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    100% {
        clip-path: inset(70% 35% 0% 35% round 5%);
        animation-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
}
</style>
<body>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
        <div class="wrapper">
            <div class="box-wrap">
                <div class="box one"></div>
                <div class="box two"></div>
                <div class="box three"></div>
                <div class="box four"></div>
                <div class="box five"></div>
                <div class="box six"></div>
            </div>
        </div>
      </div>
      <!--iframe width="560" height="315" src="https://www.youtube.com/embed/UTiXQcrLlv4?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe-->
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
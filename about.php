<?php 
require_once('connect.php');
if(isset($_SESSION['Email'])){
?>
<?php 
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About</title>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/5.10.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<style> .counter-section i {
  display: block;
  margin: 0 0 10px
}

.counter-section span.counter {
  font-size: 40px;
  color: #000;
  line-height: 60px;
  display: block;
  font-family: "Oswald", sans-serif;
  letter-spacing: 2px
}

.counter-title {
  font-size: 12px;
  letter-spacing: 2px;
  text-transform: uppercase
}

.counter-icon {
  top: 25px;
  position: relative
}

.counter-style2 .counter-title {
  letter-spacing: 0.55px;
  float: left
}

.counter-style2 span.counter {
  letter-spacing: 0.55px;
  float: left;
  margin-right: 10px
}

.counter-style2 i {
  float: right;
  line-height: 26px;
  margin: 0 10px 0 0
}

.counter-subheadline span {
  float: right
}

.medium-icon {
  font-size: 40px !important;
  margin-bottom: 15px !important
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
@import url('https://fonts.googleapis.com/css2?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins',sans-serif;
    }
    .contain{
        position: relative;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .contain .cardd{
        position: relative;
        width: 300px;
        height: 400px;
        margin: 40px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .contain .cardd .imgX{
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        height: 400px;
    }
    .contain .cardd .cont{
        position: absolute;
        bottom: -160px;
        width: 100%;
        height: 160px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
        flex-direction: column;
        backdrop-filter: blur(15px);
        box-shadow: 0 -10x 10px rgba(0,0,0,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        transition: bottom 0.5s;
        transition-delay: 0.8s;
    }
    .contain .cardd:hover .cont{
        bottom: -30px;
        transition-delay: 0s;
    }
    .contain .cardd .cont .contX h3{
        color:#fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 500;
        font-size: 18px;
        text-align: center;
        margin: 20px 0 15px;
        line-height: 1.1em;
        transition: 0.5s;
        opacity: 0;
        transform: translateY(-20px);
        transition-delay: 0.6s;
    }
    .contain .cardd:hover .cont .contX h3{
        opacity: 1;
        transform: translateY(0px);
    }
    .contain .cardd .cont .contX h3 span{
        font-size: 12px;
        font-weight: 300;
        text-transform: initial;
    }
    .contain .cardd .cont .sci{
        position: relative;
        bottom: 10px;
        display: flex;
    }
    .contain .cardd .cont .sci li{
        list-style: none;
        margin: 0 10px;
        transform: translateY(40px);
        transition: 0.5s;
        opacity: 0;
        transition-delay: calc(0.2s * var(--i));
    }
    .contain .cardd:hover .cont .sci li{
        transform: translateY(0px);
        opacity: 1;

    }
    .contain .cardd .cont .sci li a{
        color: #000;
        font-size: 24px;
    }
    </style>
                             <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                             <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                             <script type='text/javascript'>$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});</script>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div style="display: inline; margin-left: -30px;" class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="btn">
            <a class="nav-link" href="Home_.php"><span></span><span></span><span></span><span></span><i class="fa fa-home"></i>Home</a>
          </li>
          <li class="btn active" style="background: black;">
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
      <li class="btn">
        <a class="nav-link" href="Form.php"><span></span><span></span><span></span><span></span><i class="fa fa-briefcase"></i> JOBS</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="contact.php"><span></span><span></span><span></span><span></span><i class="fas fa-envelope"></i> CONTACT US</a>
      </li>
      
      
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="btn"><a href="logout.php" style="left: 230px;">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <i class="fas fa-sign-out-alt"></i>Logout
      </a></li>
    </ul>
      </div>
    </div>
  </nav><br>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs >
    <h1 class="mt-4 mb-3">About
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol--><br>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="img1\about.jpg" alt="" width="750" height="450">
      </div>
      <div class="col-lg-6">
        <h2>ABOUT EVENT MANAGEMENT</h2>
        <i><p>We specialize in Audio-Visual, Stall fabrications, Stage/back drop, DJ Sound & lighting, LED Wall Back drop ...etc With a team of young Creation Dynamic & Dedicated Professionals , We have pushed all area of event management to new frontiers.  </p>
        <p>Expectation has always been our top Priority You Can Confirm us a “ ONE STOP  POINT “ for all your Requirement and satisfy our Clients in team of Providing best Services in Competitive Rates ..</p>
        <p>We are the service provider for exhibition stall fabrications. With our dedicated team of skilled man power, we had executed exhibition stall pan India providing top notch quality</p></i>
      </div>
    </div>
    <!-- /.row -->
    <br>

    

  </div-->

    <!-- Team Members -->
    <h2>Our Team</h2>

    <div class="row">
    <section>
        <div class="contain">
            <div class="cardd">
            <div class="imgX">
            <img src="images/f2.jpg" alt="">
        </div>
        <div class="cont">
            <div class="contX">
            <h3>Mr. Alex Benjamin<br><span>General Manager</span> </h3>
            </div>
            <ul class="sci">
                <li style="--i:1;"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li style="--i:2;"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li style="--i:3;"><a href=""><i class="fab fa-facebook"></i></a></li>
                <li style="--i:4;"><a href=""><i class="far fa-envelope"></i></a></li>
            </ul>
        </div>
        </div>
        <div class="cardd">
            <div class="imgX">
            <img src="images/f4.jpg" alt="">
        </div>
        <div class="cont">
            <div class="contX">
            <h3>Shilpa Krish<br><span>HR Manager</span> </h3>
            </div>
            <ul class="sci">
                <li style="--i:1;"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li style="--i:2;"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li style="--i:3;"><a href=""><i class="fab fa-facebook"></i></a></li>
                <li style="--i:4;"><a href=""><i class="far fa-envelope"></i></a></li>
            </ul>
        </div>
        </div>
        <div class="cardd">
            <div class="imgX">
            <img src="images/f5.jpg" alt="">
        </div>
        <div class="cont">
            <div class="contX">
            <h3>S Krish<br><span>Technician</span> </h3>
            </div>
            <ul class="sci">
                <li style="--i:1;"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li style="--i:2;"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li style="--i:3;"><a href=""><i class="fab fa-facebook"></i></a></li>
                <li style="--i:4;"><a href=""><i class="far fa-envelope"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </section>

    </div>
      <!-- Our Customers -->
      <h2>Our Customers</h2>
      <div class="row">
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="images/Adidas.png" alt="" width="500" height="300">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="images/vaio2.0.png" alt="" width="500" height="300">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="images/fed.png" alt="" width="500" height="300">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="images/Samsung-logo-2015-Nobg-1132x670.png" alt="" width="500" height="300">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="images/red20bird20logo.png" alt="" width="500" height="300">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="images/moto.png" alt="" width="500" height="300">
        </div>
      </div>
      <!-- /.row -->
  
    </div>
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Strategy</h2><br>
     <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="fas fa-coffee medium-icon"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000">377</span>
                <p class="counter-title">Meetings</p>
            </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;"> <i class="fa fa-heart medium-icon"></i> <span class="timer counter alt-font appear" data-to="980" data-speed="7000">182</span> <span class="counter-title">Happy Clients</span> </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;"> <i class="fa fa-anchor medium-icon"></i> <span class="timer counter alt-font appear" data-to="810" data-speed="7000">218</span> <span class="counter-title">Projects Completed</span> </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;"> <i class="fa fa-user medium-icon"></i> <span class="timer counter alt-font appear" data-to="600" data-speed="7000">167</span> <span class="counter-title">Clients Served</span> </div> <!-- end counter -->
        </div>
    </div>
</section>
    </div>
  
  <!-- /.container -->

  <!-- Footer -->
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
  require_once('about1.php');
}

?>

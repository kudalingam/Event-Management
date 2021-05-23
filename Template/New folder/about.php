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
}</style>
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
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="Home.php"><i class="fa fa-home"></i>Home</a>
          </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php"><i class="fa fa-info-circle"></i>ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php"><i class="fa fa-cogs"></i> SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php"><i class="fa fa-image"></i> GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Enquiry.php"><i class="fa fa-shopping-cart"></i> ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Form.php"><i class="fa fa-briefcase"></i> JOBS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> CONTACT US</a>
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

    <!-- Team Members -->
    <!--h2>INHOUSE PRODUCTIONS</h2>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/sound.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Audio-Visual</h4>
            </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/exhibition-stall-service.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Stall Fabrications</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/wallback.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Stage/backdrops Design</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/Lighting-A-Guide-For-DJs-Part-1-.jpeg-copy-1204x642.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">DJ Sound & Lightings</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/LED video walls ATX.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">LED Wall Back Drop</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/décor & styling.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Decor & Styling</h4>
          </div>
        </div>
      </div>
    </div><br>
    <h2>SERVICES</h2>
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/expo.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Exhibition</h4>
            </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/corporate-event-production-1-landscape.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Corporate Events</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/roadshows.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Road Shows</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/conference-showcase-SDH.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Conference</h4>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/product.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Product Launch</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/business-events.jpg" alt="" width="250" height="250">
          <div class="card-body">
            <h4 class="card-title">Seminors</h4>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Our Customers >
    <h2>Services</h2>
    <div class="row">
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/expo.jpg" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/product.jpg" alt="" >
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/roadshows.jpg" alt="" >
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/business-events.jpg" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/conference-showcase-SDH.jpg" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/corporate-event-production-1-landscape.jpg" alt="">
      </div>
    </div-->

  </div-->

    <!-- Team Members -->
    <h2>Our Team</h2>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/f2.jpg" alt="" width="300" height="300">
          <div class="card-body">
            <h4 class="card-title">Mr. Alex Benjamin</h4>
            <h6 class="card-subtitle mb-2 text-muted">Genaral Manager</h6>
            <p class="card-text">"There are some things money can't buy. For everything else, there's MasterCard."</p>
          </div>
          <div class="card-footer">
            <a href="#">iamalex1265@example.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/f1.png" alt="" width="300" height="300">
          <div class="card-body">
            <h4 class="card-title">Mrs. Shilpa Krishnamoorthy</h4>
            <h6 class="card-subtitle mb-2 text-muted">HR Manager</h6>
            <p class="card-text">"Creating strong, provocative relationships between good companies and their customers."</p>
          </div>
          <div class="card-footer">
            <a href="#">Shilpakrishnamoorthy_HR@gmail.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/f3.jpg" alt="" width="300" height="300">
          <div class="card-body">
            <h4 class="card-title">Mr. S Krish </h4>
            <h6 class="card-subtitle mb-2 text-muted">Technician</h6>
            <p class="card-text">"Opening a Graphic Design Business can be a very good business opportunity if you have Knowledge about Graphic terms."</p>
          </div>
          <div class="card-footer">
            <a href="#">krish1995@gmail.com</a>
          </div>
        </div>
      </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--script type="text/javascript">
    $(window).on('load',function(){
        $('.preloader').addClass('complete')
    })
    </script-->
    <script>
$(document).ready(function() {
//Preloader
preloaderFadeOutTime = 3500;
function hidePreloader() {
var preloader = $('.preloader');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
</script>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .preloader {
        position: fixed;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: 5s;
        background:black;
    }
    .preloader:before{
        content: '';
        position: absolute;
        left: 0;
        width: 50%;
        height: 100%;
        background-color:#000;
        transition: 5s;
    }
    .preloader.complete:before{
        left: 50%;
    }
    .preloader:after{
        content: '';
        position: absolute;
        right: 0;
        width: 50%;
        height: 100%;
        background-color:#000;
        transition: 5s;
    }
    .preloader.complete:after{
        right: 50%;
    }
    .loader {
    position: relative;
    width: 2.5em;
    height: 2.5em;
    transform: rotate(165deg);
    z-index: 10000;
}

.loader:before, .loader:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: 0.5em;
    height: 0.5em;
    border-radius: 0.25em;
    transform: translate(-50%, -50%);
}

.loader:before {
    animation: before 2s infinite;
}

.loader:after {
    animation: after 2s infinite;
}
.preloader.complete{
    opacity: 0;
    visibility: hidden;
}
@keyframes before {
    0% {
        width: 0.5em;
        box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
    }
    35% {
        width: 3.5em;
        box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);
    }
    70% {
        width: 0.5em;
        box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);
    }
    100% {
        box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
    }
}

@keyframes after {
    0% {
        height: 0.5em;
        box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
    }
    35% {
        height: 3.5em;
        box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);
    }
    70% {
        height: 0.5em;
        box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);
    }
    100% {
        box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
    }
}

/**
 * Attempt to center the whole thing!
 */


.loader {
    position: absolute;
    top: calc(50% - 1.25em);
    left: calc(50% - 1.25em);
}

</style>
<body>
    <div class="preloader">
        <div class="loader"> </div>
    </div>
    <!--script>
         setTimeout(function(){
            window.location.href = 'Home.php';
         }, 10000);
      </script-->
    <!--iframe width="560" height="315" src="https://www.youtube.com/embed/UTiXQcrLlv4?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe-->
    <?php 
    //header('Location: Home.php');
    ?>
    
</body>
</html>
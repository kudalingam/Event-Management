<?php 
require_once('connect.php');
if(isset($_SESSION['Email'])){
?>
<?php 
require_once "connect.php";
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact us</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  
</head>

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
          <li class="nav-item ">
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
          <li class="nav-item active">
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
  <div class="container"><br>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <!--iframe style="width: 100%; height: 400px; border: 0;" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=11.0120145,76.8271463&amp;spn=56.506174,79.013672&amp;t=m&amp;z=10&amp;output=embed"></iframe-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.090373951596!2d77.01659401462497!3d11.031846092148498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8578e89a4e04f%3A0x5f10fc5a43b95850!2sTidel%20Park%2C%20Peelamedu%2C%20B.R.%20Puram%20Industrial%20Estate%2C%20Coimbatore%2C%20Tamil%20Nadu%20641014!5e0!3m2!1sen!2sin!4v1607162142577!5m2!1sen!2sin" style="width: 100%; height: 400px; border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
          Peelamedu, B.R. Puram Industrial Estate 
          <br>Coimbatore, Tamil Nadu 641014
          <br>
        </p>
        <p>
          <h5>Phone:</h5> 0422-768 987 / 9344349244
        </p>
        <p>
          <h5>Email: </h5>
          <a href="https://mail.google.com/">kudalingam18@gmail.com
          </a>
        </p>
        <p>
             <div class="dropdown"><h5>Hours: </h5>
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background: black;">Open 24 Hours</button>
            <ul class="dropdown-menu">
              <li><p>Monday     Open 24 Hours</p></li>
              <li><p>Tuesday    Open 24 Hours</p></li>
              <li><p>Wednesday  Open 24 Hours </p></li>
              <li><p>Thursday   Open 24 Hours</p></li>
              <li><p>Friday     Open 24 Hours</p></li>
              <li><p>Saturday   Open 24 Hours</p></li>
            </ul>
          </div>
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h2>Ask Me</h2>
        <form action="connect.php" method="POST">
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Query:</label>
              <textarea rows="8" cols="100" class="form-control" id="query" name="query" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="Send" name="Send">Send</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

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

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
<?php
}
else{
  require_once('contact1.php');
}

?>
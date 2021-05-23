<?php 
require_once('connect.php');
if(isset($_SESSION['Email'])){
?>
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>services</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<style>
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
            <a class="nav-link" href="t3.php"><i class="fa fa-home"></i>Home</a>
          </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.php"><i class="fa fa-info-circle"></i>ABOUT US</a>
      </li>
      <li class="nav-item active">
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
        <ul class="nav navbar-nav navbar-right navbar-inner">
        <li class="btn"><a href="">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <i class="fas fa-sign-out-alt"></i>Logout
      </a></li>
    </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h2 class="mt-4 mb-3">Our Services</h2>

    <!--ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Portfolio 3</li>
    </ol-->

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="images/CUSTOMIZED STAND PLANNING.jpg" alt="" width="400" height="300"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">CUSTOMIZED STAND PLANNING</a>
            </h4>
            <p class="card-text">If your branding incorporates a color theme, embrace the colors in the visual and in the exhibition stand to make your customers remember your company. Colors are closely connected to emotion.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="images/wall.jpg" alt="" width="400" height="300"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">WALL PAINTING</a>
            </h4>
            <p class="card-text">A mural is any piece of artwork painted or applied directly on a wall, ceiling or other permanent surfaces. A distinguishing characteristic of mural painting is that the architectural elements of the given space are harmoniously incorporated into the picture</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="images/0ff298200e7a37235f71cbe29468faa8.jpg" alt="" width="400" height="300"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">INSTALLATION</a>
            </h4>
            <p class="card-text">Installation art is an artistic genre of three-dimensional works that are often site-specific and designed to transform the perception of a space. Generally, the term is applied to interior spaces, whereas exterior interventions are often called public art, land art or art intervention; however, the boundaries between these terms overlap.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="images/digital-printing.jpg" alt="" width="400" height="300"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">DIGITAL PRINTING</a>
            </h4>
            <p class="card-text">Digital printing is a method of printing from a digital-based image directly to a variety of media.It usually refers to professional printing where small-run jobs from desktop publishing and other digital sources are printed using large-format and/or high-volume laser or inkjet printers. Digital printing has a higher cost per page than more traditional offset printing methods, but this price is usually offset by avoiding the cost of all the technical steps required to make printing plates</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="images/site.jpg" alt="" width="400" height="300"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">SITE MANAGEMENT</a>
            </h4>
            <p class="card-text">Site managers are required to keep within the timescale and budget of a project, and manage any delays or problems encountered on-site during a construction project. Also involved in the role is the managing of quality control, health and safety checks and the inspection of work carried out</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="images/prod.jpg" alt="" width="400" height="300"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">PRODUCTION</a>
            </h4>
            <p class="card-text">Production is a process of combining various material inputs and immaterial inputs (plans, know-how) in order to make something for consumption (output). It is the act of creating an output, a good or service which has value and contributes to the utility of individuals.The area of economics that focuses on production is referred to as production theory, which in many respects is similar to the consumption (or consumer) theory in economics</p>
          </div>
        </div>
      </div>
      
      <!--div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Four</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Five</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Six</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div-->
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="services.php">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="services2.php">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="services3.php">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="services2.php" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

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
  require_once('services_1.php');
}

?>
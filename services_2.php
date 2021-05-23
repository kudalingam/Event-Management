<?php
require_once('index.php');
if(isset($_SESSION['userData'])){
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Services</title>

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
    .box{
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        padding: 30px;
    }
    .box .cards{
        width: 330px;
        position: relative;
        height: 250px;
        background: #fff;
        margin: 30px 10px;
        padding: 20px 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        transition: 0.3s ease-in-out;
    }
    .box .cards:hover{
        height: 325px;
    }
    .box .cards .imgBx{
        position: relative;
        width: 250px;
        height: 250px;
        top: -50px;
        left: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }
    .box .cards .imgBx img{
        width: 250px;
        height: 250px;
        border-radius: 10px;
    }
    .box .cards .contents{
        position: relative;
        margin-top: -140px ;
        padding: 10px 15px;
        text-align: center;
        color: #111;
        visibility: hidden;
        opacity: 0;
        transition: 0.3s ease-in-out;

    }
    .box .cards:hover .contents{
        visibility: visible;
        opacity: 1;
        margin-top: -40px;
        transition-delay: 0.3s;
    }
  </style>
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
          <li class="btn ">
        <a class="nav-link" href="about.php"><span></span><span></span><span></span><span></span><i class="fa fa-info-circle"></i>ABOUT US</a>
      </li>
      <li class="btn active" style="background: black;">
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
        <li class="btn"><a href="logout1.php" style="left: 230px;">
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
<br><br>
    <h2>IN-House Production</h2>
    <div class="box">
        <div class="cards">
            <div class="imgBx">
                <img src="images/sound.jpg" alt="" >
            </div>
            <div class="contents">
            <h2>Audio-Visual</h2>
            </div>
        </div>
        <div class="cards">
            <div class="imgBx">
                <img src="images/exhibition-stall-service.jpg" alt="" >
            </div>
            <div class="contents">
            <h2>Stall Fabrications</h2>
            </div>

        </div>
        <div class="cards">
            <div class="imgBx">
                <img src="images/wallback.jpg" alt="" >
            </div>
            <div class="contents">
            <h2>Stage/Backdrop Designs</h2>
            </div>
        </div>
        <div class="cards">
            <div class="imgBx">
                <img src="images/Lighting-A-Guide-For-DJs-Part-1-.jpeg-copy-1204x642.jpg" alt="" >
            </div>
            <div class="contents">
            <h2>DJ Sound & Lightings</h2>
            </div>
        </div>
        <div class="cards">
            <div class="imgBx">
                <img src="images/LED video walls ATX.jpg" alt="" >
            </div>
            <div class="contents">
            <h2>LED Walls Back Drop</h2>
            </div>

        </div>
        <div class="cards">
            <div class="imgBx">
                <img src="images/décor & styling.jpg" alt="" >
            </div>
            <div class="contents">
            <h2>Decor & Styling</h2>
            </div>
        </div>
    </div>
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="services.php" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="services.php">1</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="services2.php">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="services3.php">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="services3.php" aria-label="Next">
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
  header("Location: log1.php");
  }
?>

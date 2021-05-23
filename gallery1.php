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

  <title>Portfolio</title>

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
    @import url('https://fonts.googleapis.com/css2?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
            * {
                margin: 0;
                padding: 0;
                font-family: 'Poppins', Georgia, 'Times New Roman', Times, serif;
                box-sizing: border-box;
            }
            
            section {
                padding: 20px;
                width: 95%;
                margin: 40px auto;
                background: white;
                background-color:white;
            }
            
            section ul {
                display: flex;
                margin-bottom: 10px;
            }
            
            section ul li {
                list-style: none;
                background: hotpink;
                padding: 8px 20px;
                margin: 5px;
                letter-spacing: 1px;
                cursor: pointer;
            }
            
            section ul li.active {
                background: gold;
                color: black;
            }
            
            .product {
                display: flex;
                flex-wrap: wrap;
            }
            
            .product .itemBox {
                position: relative;
                width: 373px;
                height: 250px;
                margin: 20px;
                padding: 10px 10px;
                background-color: lightblue;
            }
            
            .product .itemBox img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .container{
                width:100%;
                display: inline;
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
      <li class="btn">
        <a class="nav-link" href="about.php"><span></span><span></span><span></span><span></span><i class="fa fa-info-circle"></i>ABOUT US</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="services.php"><span></span><span></span><span></span><span></span><i class="fa fa-cogs"></i> SERVICES</a>
      </li>
      <li class="btn active" style="background: black;">
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
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <section style="margin-top: -25px;">
        <ul>
            <li class="list active" data-filter="All">All</li>
            <li class="list" data-filter="Stall">Stall</li>
            <li class="list" data-filter="Event">Event</li>
            <li class="list" data-filter="Expo">Expo</li>
        </ul>
        <div class="product">
            <div class="itemBox Stall"><img src="images/stall.jpg"></div>
            <div class="itemBox Stall"><img src="images/stall2.jpg"></div>
            <div class="itemBox Stall"><img src="images/stall4.jpg"></div>
            <div class="itemBox Event"><img src="images/event-back.jpg"></div>
            <div class="itemBox Event"><img src="images/business-events.jpg"></div>
            <div class="itemBox Event"><img src="images/corporate-event-production-1-landscape.jpg"></div>
            <div class="itemBox Expo"><img src="images/organic expo.jpg"></div>
            <div class="itemBox Expo"><img src="images/2018-EXPO-Rayburn-Foyer-750.jpg"></div>
            <div class="itemBox Expo"><img src="images/car-expo.jpg"></div>
        </div>
    </section>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.list').click(function() {
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $('.itemBox').show('1000');
                } else {
                    $('.itemBox').not('.' + value).hide('1000');
                    $('.itemBox').filter('.' + value).show('1000');

                }
            })
            $('.list').click(function() {
                $(this).addclass('active').siblings().removeclass('active');
            })
        })
    </script>
    

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div style="font-size: 18px; background-color: #343a40; color: white;" class="container">
      <br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &copy; 2020 Event Management . All Rights Reserved &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

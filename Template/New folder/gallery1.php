<?php
require_once('index.php');
if(isset($_SESSION['userData'])){
  ?>
 <html>

<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="C:/xampp/htdocs/login/fontawesome-free-5.15.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="C:/xampp/htdocs/login/fontawesome-free-5.15.0-web/js/fontawesome.js" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
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
            
.btn a{
            position: absolute;
            width: 120px;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            letter-spacing: 0px;
            text-decoration: none;
            text-align: center;
            /*-webkit-box-reflect: below 1px linear-gradient(transparent,#0004);*/
        }
        .btn a::before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg,#fb0094,#00f,#0f0,#ff0,#f00,#fb0094,#00f,#0f0,#ff0,#f00);
            background-size: 100%;
            opacity: 0;
            transition: 0.5s;
            animation: animate 20s linear infinite;
        }
        .btn a::after{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg,#fb0094,#00f,#0f0,#ff0,#f00,#fb0094,#00f,#0f0,#ff0,#f00);
            background-size: 400%;
            transition: 0.5s;
            filter: blur(20px);
            opacity: 0;
            animation: animate 20s linear infinite;
        }
        .btn a:hover::before,
        .btn a:hover::after{
            opacity: 1;
        }
        @keyframes animate{
            0%
            {
                background-position: 0 0;
            }
            50%
            {
                background-position: 300% 0;
            }
            100%
            {
                background-position: 0 0;
            }
        }   
        .btn a span{
            position: absolute;
            display: block;
            top: 1px;
            left: 1px;
            right: 1px;
            bottom: 1px;
            text-align: center;
            background:#0c0c0c;
            color: rgba(255,255,255,0.5);
            transition: 0.5s;
            z-index: 1;

        }
        .btn a:hover span{
            color: rgba(255,255,255,1);

        }
        .btn a span::before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255,255,255,0.2);
            
        }
        .container{
            width: 1345px;
 }
        </style>
</head>

<body>
      
    <nav style="color:aqua;" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <!--li> <a href="http://localhost/login/index.php"><i style="color:tomato; font-size: 1.5em;"class="fab fa-google-plus-square"></i> Sign In</a></li>
                <li><button style="background:transparent; width:80px; padding-top: 15px;" onclick="document.getElementById('modal-wrapper').style.display='block'"><span class="glyphicon glyphicon-log-in"> Login </span></button></li>
                <li class="dropdown"><a class="active" class="dropdown-toggle" data-toggle="dropdown" href="#"><i style="font-size: 1.5em;"class="far fa-user"> Profile</i></a>
                  <ul class="dropdown-menu" style="margin-top:-30%; min-width:20px;">
                      <li><a href="view.php"><i class="fas fa-eye"></i> View</li>
                      <li><a href="http://localhost/google_login/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</li>
                  </ul>
                  <li style=" border:10px; color:black;" ><a href="http://localhost/login/logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT</li>
                  <li color="white"><button class="btn btn-danger navbar-btn" color="white";><a href="http://localhost/login/logout.php" color="white"><i class="fas fa-sign-out-alt"></i> LOGOUT</button></li>
                  <li class="btn"><a href="http://localhost/login/logout.php"><span><i class="fas fa-sign-out-alt"></i> LOGOUT</span></a></li-->
                    <li><a href="Home.php"><i class="fa fa-home"></i> Home</a></li>

                    <li><a href="about.php"><i class="fa fa-info-circle"></i> ABOUT US</a></li>
                    <li><a href="services.php"><i class="fa fa-cogs"></i> SERVICES</a></li>
                    <li class="active"><a href="gallery.php"><i class="fa fa-image"></i> GALLERY</a></li>
                    <li><a href="Enquiry.php"><i class="fa fa-shopping-cart"></i> ORDER</a></li>
                    <li><a href="Form.php"><i class="fa fa-briefcase"></i> JOBS</a></li>
                    <li><a href="contact.php"><i class="fas fa-envelope"></i> CONTACT US</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
        </div>
        </div>
    </nav>
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
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div style="font-size: 18px; background-color: #343a40; color: white;" class="container">
        <br><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &copy; 2020 Event Management . All Rights Reserved &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://www.instagram.com/a_n_a_n_t_h_1_8/"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a style="color: #fff;" href="https://www.facebook.com/ananth.t.vj.9"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://twitter.com/Ananthvj18"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://github.com/kudalingam"><i class="fab fa-github"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://www.linkedin.com/in/kudalingam-r-b08233201/"><i class="fab fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Privacy Policy &middot; Terms &amp; Conditions</p><br></div>
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

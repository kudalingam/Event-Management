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

  <title>Home</title>

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
    .containers {
            position: relative;
            width: 1300px;
            margin-left: 25px;
            height: 600px;
            background: gray;
        }
        
        .containers .clip {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: 0.5s;
        }
        
        .containers .clip.clip1 {
            background: url(video/resize-1607312594877132912Expo2020DubaiLake.jpg);
            clip-path: polygon(40% 0, 0 0, 0 100%, 30% 100%);
        }
        
        .containers .clip.clip2 {
            background: url(video/resize-16073122541629041289dubai1.jpg);
            clip-path: polygon(82% 0, 40% 0, 30% 100%, 75% 100%);
        }
        
        .containers .clip.clip3 {
            background: url('video/resize-16073132151516118952Expo2020DubaiM2.png');
            clip-path: polygon(100% 0, 82% 0, 75% 100%, 100% 100%);
        }
        
        .containers:hover .clip {
            clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
        }
        
        .containers .clip:hover {
            clip-path: polygon(100% 0, 0 0, 0 100%, 100% 100%);
        }
        .container{
            width: 1345px;
 }
.profile p{
  font-size:17px;
  margin-top:20px;
  text-transform: uppercase;
}

.videobox{
  margin-top:0%;
  border:none;
}
*{
margin: 0;
 padding: 0; 
 background-image: url("images/image\ \(2\)");
  background-attachment: fixed;
}
.background-image{
  filter: brightness(250%);
}
section{
background-blend-mode: lighten;
position: relative;
width: 100%;
height: 100vh;
} 
section video{
position: absolute;
top: 0;
Left: 0;
width: 100%;
height: 100%;
object-fit: cover;
}
section .navigation{
position: absolute;
bottom: 40px;
Left: 50%;
transform: translateX(-50%); 
z-index: 100;
display: flex;
justify-content: center;
align-items: center;
background: transparent;
}
section .navigation li{
List-style: none;
cursor: pointer; 
margin: 0 10px ;
border-radius: 4px; 
background: #fff; 
padding: 3px 3px 0;
opacity:0.7;
transition:0.5s;
}
section .navigation li:hover{
opacity: 1;
}
section .navigation li img{
width: 120px; 
transition: 0.5s;
}
section .navigation li img:hover{

width: 200px;
}
.dropdown .dropdown-menu:before{
  content: "";
  position: absolute;
  top:-30%;
  left:70%;
  transform: translateX(-50%);
  border: 10px solid;
  border-color: transparent transparent white transparent;
}
            .container{
                width:100%;
                display: inline;
            }
            .btn .active li{
                background: black;
            }

  </style>
<body>

   <!-- Navigation -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container" style="margin-left: -10px;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" >
            <li class="btn active" style="background: black;">
            <a class="nav-link" href="Home_.php"><span></span><span></span><span></span><span></span><i class="fa fa-home"></i>Home</a>
          </li>
      <li class="btn ">
        <a class="nav-link" href="about.php"><span></span><span></span><span></span><span></span><i class="fa fa-info-circle"></i>ABOUT US</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="services.php" ><span></span><span></span><span></span><span></span><i class="fa fa-cogs"></i> SERVICES</a>
      </li>
      <li class="btn">
        <a class="nav-link" href="gallery.php"><span></span><span></span><span></span><span></span><i class="fa fa-image"></i> GALLERY</a>
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
        <ul class="navbar-nav ml-auto" style="margin-right: -200px;">
        
      <li class="profile"><i><p style="color:red;"> Hi.. <?php echo ''. $userData['first_name'].' '.$userData['last_name']; ?> </p></i> </li>
      
        <li class="btn"><a href="logout1.php" style="left:50px; top:8px;">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <i class="fas fa-sign-out-alt"></i>Logout
      </a></li>
      
      <li class="btn" ><a href="profile1.php" style="border-radius:100%; left:30px;"><span></span><span></span><span></span><span></span><i class="fas fa-user-circle fa-2x"></i></a></li>
    </ul>
      </div>
    </div>
  </nav><br><br><br>

  <!-- Page Content -->
  <div class="container">

    <div class="containers">
        <div class="clip clip1"></div>
        <div class="clip clip2"></div>
        <div class="clip clip3"></div>
      </div><br><br>



        <div class="videobox">
        <section>    
          
          <!--img src="images/roadshows.jpg" height="650" width="1500"-->         
      
          <video id="slider" autoplay loop>
          
          <source src="video/final_5fcdeb75fc453b0065bc3cd3_189389.mp4">
          
          </video>
          
          <ul class="navigation">
          
          <li onclick="videoUrl('video/y2mate.com - Expo Art & Culture_1080p.mp4')"><img src="video/vlcsnap-2020-12-07-09h30m44s130.png" muted></li>
          <li onclick="videoUrl('video/Be There with DP World.mp4')"><img src="video/vlcsnap-2020-12-07-09h34m19s798.png"></li>
          <li onclick="videoUrl('video/y2mate.com - Expo 2020 Young Innovators_1080p.mp4')"><img src="video/vlcsnap-2020-12-07-10h51m48s139.png"></li>
          <li onclick="videoUrl('video/Expo 2020 _ World Environment Day.mp4')"><img src="video/vlcsnap-2020-12-07-10h17m37s360.png"></li>
          </ul> 
          </section>
        </div>
      
          
          <script type="text/javascript">
          
          function videoUrl(play) {
          
          document.getElementById("slider").src= play;
          
          } </script>
      
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
preloaderFadeOutTime = 4000;
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

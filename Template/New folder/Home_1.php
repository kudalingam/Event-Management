<?php
require_once('index.php');
if(isset($_SESSION['userData'])){
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Event Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="imagehover.html" rel="import" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="C:/xampp/htdocs/login/fontawesome-free-5.15.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="C:/xampp/htdocs/login/fontawesome-free-5.15.0-web/js/fontawesome.js" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>	<div class="loginbox"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
  *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}
  
  /* Full-width input fields */
  input[type=email], input[type=password]{
      border: none;
      border-bottom: 1px solid white;
      background: white;
      border-color:blue;
      outline: none;
      height: 40px;
      color:black;
      font-size: 16px;
  }
  .modal input{
      width: 23%;
      margin-bottom: 15px;
  }
  
  .modal input[type="submit"]
  {
      border: none;
      background: orange;
      outline: none;
      height: 40px;
      width: 200px;
      color: white;
      font-size: 18px;
      border-radius: 20px;
  }
  
  .modal input[type="submit"]:hover
  {
      cursor: pointer;
      background: grey;
      color: lightgreen;
  }
  .modal a{
      text-decoration: none;
      font-size: 12px;
      line-height: 20px;
      color:purple;
  }
  
  .modal a:hover
  {
    cursor: pointer;
      color: yellowgreen;
  }
  .modal tab{ 
              margin-left: 11px; 
          }
  
  
  /* Set a style for all buttons */
  
  a:hover {
      opacity: 0.8;
      cursor: pointer;
  }
  /*button {
      border: none;
      background: orange;
      outline: none;
      height: 40px;
      width: 23%;
      color: white;
      font-size: 18px;
      border-radius: 20px;
  }
  button:hover {
      opacity: 0.8;
      cursor: pointer;
      background: grey;
      color: lightgreen;
  }*/
  /* Center the image and position the close button */
  .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
  }
  .avatar {
      width: 75px;
    height:75px;
      border-radius: 50%;
  }
  
  /* The Modal (background) */
  .modal {
    display:none;
      position: fixed;
      z-index: 1;
    background:white;
      left: 0;
      top: -30%;
      width: 100%;
      height: 135%;
      overflow: auto;
      background-color:transparent;
    color:skyblue;
    position: absolute;
    transform: translate(50px, 50px);
    box-sizing: border-box; 
  }
  
  /* Modal Content Box */
  .modal-content {
  box-sizing: border-box; 
      background-color: grey;
      margin: 0% auto 20% auto;
      border: 5px solid pink;
      width: 25%;	
      top:23%;
    padding:10px 10px;
    padding-bottom:35px;
  }
  
  /* The Close Button (x) */
  .close {
      position: absolute;
      right: -1%;
      top: -20%;
      color:black;
      font-size: 35px;
      font-weight: bold;
  }
  .close:hover,.close:focus {
      color: red;
      cursor: pointer;
  }
  
  /* Add Zoom Animation */
  .animate {
      animation: zoom 0.7s
  }
  @keyframes zoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
  }
  form {margin-top:30px;padding:30px;border:solid 1px #dedede;border-radius:15px;width:60px;margin:25px auto;}
  form fieldset {border:none;position:relative;}
  
  input.btn-primary {background-color:#51A2DA;border-color:#51A2DA;}
  
  form fieldset input {
      padding:30px 6px 6px 12px !important;
      height:50px !important;
    border:none !important;
    box-shadow:none !important;
    border-bottom:solid 1px #dedede !important;
    color: black;
  }
  
  form fieldset label {
    position: absolute;
    top: 13px;
    left: 13px;
    color:black;
      font-weight:60px;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
  }
  
  form fieldset input:valid + label, form fieldset input:focus + label {
    color: #51A2DA;
    font-weight: 50px;
    font-size: 12px;
    -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
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
  .btn a{
              position: absolute;
              width: 120px;
              font-size: 15px;
              font-family: Georgia, 'Times New Roman', Times, serif;
              letter-spacing: 0px;
              text-decoration: none;
              text-align: center;
              margin-top:10px;
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
          @import url('http://fonts.googleapis.com/css2?family=Quicksand:wghs@300;400;500;600;700&display=swap');
          
          body {
              display: flex;
              justify-content: center;
              align-items: center;
              min-height: 100vh;
              background: transparent;
          }
          
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
    font-size:18px;
    margin-top:15px;
    text-transform: uppercase;
    text:bold;
  }
  </style>
  </head>
  <body>
    <nav style="color:aqua;"class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Home.php"><i class="fa fa-home"></i> Home</a></li>     
            <li><a href="about.php"><i class="fa fa-info-circle"></i> ABOUT US</a></li>
            <li><a href="services.php"><i class="fa fa-cogs"></i> SERVICES</a></li>
            <li><a href="gallery.php"><i class="fa fa-image"></i> GALLERY</a></li>
            <li><a href="Enquiry.php"><i class="fa fa-shopping-cart"></i> ORDER</a></li>
            <li><a href="form.php"><i class="fa fa-briefcase"></i> JOBS</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i> CONTACT US</a></li>
          </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php// while($rows=mysqli_fetch_assoc($result)) 
                                              //{ 
                                              ?>
        <li class="profile"><i><p> Hi.. <?php echo ''. $userData['first_name'].' '.$userData['last_name']; ?> </p></i> </li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
      <li class="btn"><a href="logout1.php" style="border-color: white;"><span ><i class="fas fa-sign-out-alt"></i> LOGOUT</span></a>    
      <li><a href="profile1.php">&nbsp;<i class="fas fa-user-circle fa-2x"></i></a></li>
        <!--li ><a style="border-radius:50px" href="profile.php"> <?php //echo '<img class="profile" src="data:image/jpeg/png;base64,'.base64_encode($rows['Image'] ).'" width=30; height=30; />'; ?></a></li-->    
        <?php //} ?>
          </ul>
        </li>
        </ul>
    </div>
  </nav>   <br><br><br><br>
  
  <!--div class="container">
    
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
          <li data-target="#" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol> 
      
        <div class="carousel-inner">
    
          <div class="item active">
            <img src="Event33529415Img.jpg" alt="Los Angeles" style=" width:100%">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>
    
          <div class="item">
            <img src="Expo-2020-Winner-Front-View-1600x800px-Social-Media-Asset-980x490.jpg" alt="Chicago" style="width:100%">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
        
          <div class="item">
            <img src="exim_tradeshows.png" alt="New York" style=" width:100%">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
             
        </div>
    
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div-->
  <!--div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
      <li data-target="#" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
    
        <div class="item active">
  <div class="videobox" >
    <video  width="100%" height="600px" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="vlc-record-2020-10-01-07h56m45s-y2mate.com - Expo 2020 Dubai _ Welcome the Future - Extended_1080p.mp4-.mp4" type="video/mp4">
        <source src="Dubai Expo 2020 Masterplan_1080p.mp4" type="video/ogg">
    </video>
  </div>
  </div>
  <div class="item">
    <div class="videobox" >
      <video  width="100%" height="600px" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="Dubai Expo 2020 Masterplan_1080p.mp4" type="video/mp4">
          <source src="Dubai Expo 2020 Masterplan_1080p.mp4" type="video/ogg">
      </video>
    </div>
    </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a-->
  
    <!--div background="../background1.png">
     
      <div id="modal-wrapper" class="modal">
          
        <form class="modal-content animate" method="POST">    
          <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="1.png" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Login</h1>
            Don't have an Account?<a href="signup.php"> Sign Up</a>
          </div>
      
          <div class="container"><br>
              <fieldset>
                  <input id="email" name="email" type="email" autocomplete="off" required="" class="form-control">
                  <label for="email">Email Address</label>
                </fieldset>
                <fieldset>
                  <input id="pass" name="pass" type="password" autocomplete="off" required="" class="form-control">
                  <label for="pass">Password</label>
                </fieldset>
        <button type="submit" name="login" value="Login">Login</button><br>
        <a href="phone.html" style="text-decoration:none; float:left; margin-right:34px; margin-top:10px;">Forgot Password ?</a>
        </div>
      
        </form>
    
  </div>
  </div-->
  <div class="containers">
    <div class="clip clip1"></div>
    <div class="clip clip2"></div>
    <div class="clip clip3"></div>
  </div><br><br>
    <div class="videobox">
    <section>    
      
      <!--img src="images/roadshows.jpg" height="650" width="1500"-->
      
  
      <video id="slider" autoplay loop>
      
      <source src="video/final_5fcdeb75fc453b0065bc3cd3_189389.mp4" type="video/mp4" autoplay>
      
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
  
     
   
    
      <script>
      // If user clicks anywhere outside of the modal, Modal will close
      
      var modal = document.getElementById('model-wrapper');
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
      <footer class="py-5 bg-dark">
        <div style="font-size: 18px; background-color: #343a40; color: white;" class="container">
          <br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &copy; 2020 Event Management . All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://www.instagram.com/a_n_a_n_t_h_1_8/"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a style="color: #fff;" href="https://www.facebook.com/ananth.t.vj.9"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://twitter.com/Ananthvj18"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://github.com/kudalingam"><i class="fab fa-github"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="color: #fff;" href="https://www.linkedin.com/in/kudalingam-r-b08233201/"><i class="fab fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

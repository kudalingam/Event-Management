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
    .contain{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .card{
        position: relative;
        margin: 20px 0;
        width: 350px;
        height: 300px;
        background: #fff;
        transform-style: preserve-3d;
        transform: perspective(2000px);
        transition: 1s;
        box-shadow: inset 300px 0 50px rgba(0,0,0,0.5);
    }
    .card:hover{
        z-index: 1000;
        transform: perspective(2000px) rotate(-10deg);
        box-shadow: inset 20px 0 50px rgba(0,0,0,0.5);
    }
    .card .imgB{
        position: relative;
        width: 100%;
        height: 100%;
        border: 1px solid #000;
        box-sizing: border-box;
        transform-origin: left;
        z-index: 1;
        transition: 1s;
    }
    .card:hover .imgB{
        transform: rotateY(-135deg);
    }
    .card .imgB .img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .card .details{
        position: absolute;
        top: 0;
        left: 0;
        box-sizing: border-box;
        padding: 20px;
    }
    .card-footer{
        background-color: skyblue;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-style: italic;
        margin-top: -17px;

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

  <h2 class="mt-4 mb-3">Production Services</h2>
      <div class="contain">
          <div>
        <div class="card">
            <div class="imgB">
                <img src="images/CUSTOMIZED STAND PLANNING.jpg" alt="" width="350" height="300">
            </div>
            <div class="details">
                <h6>CUSTOMIZED STAND PLANNING</h6>
                <p>If your branding incorporates a color theme, embrace the colors in the visual and in the exhibition stand to make your customers remember your company. Colors are closely connected to emotion.</p>
            </div>
            </div>
            <div class="card-footer">CUSTOMIZED STAND PLANNING</div>
            </div>
            <div>
            <div class="card">
                <div class="imgB">
                    <img src="images/wall.jpg" alt="" width="350" height="300">
                </div>
                <div class="details">
                    <h6>WALL PAINTING</h6>
                    <p>A mural is any piece of artwork painted or applied directly on a wall, ceiling or other permanent surfaces. A distinguishing characteristic of mural painting is that the architectural elements of the given space are harmoniously incorporated into the picture</p>
                </div>
                </div>
                <div class="card-footer">WALL PAINTING</div>
                </div>
                <div>
                <div class="card">
                    <div class="imgB">
                        <img src="images/0ff298200e7a37235f71cbe29468faa8.jpg" alt="" width="350" height="300">
                    </div>
                    <div class="details">
                        <h6>INSTALLATION</h6>
                        <p>Installation art is an artistic genre of three-dimensional works that are often site-specific and designed to transform the perception of a space. Generally, the term is applied to interior spaces, whereas exterior interventions are often called public art, land art or art intervention; however, the boundaries between these terms overlap.</p>
                    </div>
                    </div>
                    <div class="card-footer">INSTALLATION</div>
                    </div>
                    <div>
                    <div class="card">
                        <div class="imgB">
                            <img src="images/digital-printing.jpg" alt="" width="350" height="300">
                        </div>
                        <div class="details">
                            <h6>DIGITAL PRINTING</h6>
                            <p>Digital printing is a method of printing from a digital-based image directly to a variety of media.It usually refers to professional printing where small-run jobs from desktop publishing and other digital sources are printed using large-format and/or high-volume laser or inkjet printers. </p>
                        </div>
                        </div>
                        <div class="card-footer">DIGITAL PRINTING</div>
                        </div>
                        <div>
                        <div class="card">
                            <div class="imgB">
                                <img src="images/site.jpg" alt="" width="350" height="300">
                            </div>
                            <div class="details">
                                <h6>SITE MANAGEMENT</h6>
                                <p>Site managers are required to keep within the timescale and budget of a project, and manage any delays or problems encountered on-site during a construction project. Also involved in the role is the managing of quality control, health and safety checks and the inspection of work carried out</p>
                            </div>
                            </div>
                            <div class="card-footer">SITE MANAGEMENT</div>
                            </div>
                            <div>
                            <div class="card">
                                <div class="imgB">
                                    <img src="images/prod.jpg" alt="" width="350" height="300">
                                </div>
                                <div class="details">
                                    <h6>PRODUCTION</h6>
                                    <p>Production is a process of combining various material inputs and immaterial inputs (plans, know-how) in order to make something for consumption (output). It is the act of creating an output, a good or service which has value and contributes to the utility of individuals.</p>
                                </div>
                                </div>
                                <div class="card-footer">PRODUCTION</div>
                                </div>
                                <div>
                                    <div class="card">
                                        <div class="imgB">
                                            <img src="images/Graphics Production.jpg" alt="" width="350" height="300">
                                        </div>
                                        <div class="details">
                                            <h6>Graphics Production</h6>
                                            <p>Graphic production artist is a technical job title in the creative industry which includes advertising, film, video and photography, computer games, print and electronic publishing. The department that handles graphic design works in two different areas, creation and production.</p>
                                        </div>
                                        </div>
                                        <div class="card-footer">GRAPHICS PRODUCTION</div>
                                        </div>
                                        <div>
                                        <div class="card">
                                            <div class="imgB">
                                                <img src="images/dis.jpg" alt="" width="350" height="300">
                                            </div>
                                            <div class="details">
                                                <h6>Dismandling</h6>
                                                <p>To take a machine apart or to come apart into separate pieces:
                                                  She dismantled the washing machine to see what the problem was, but couldn't put it back together again.
                                                  The good thing about the bike is that it dismantles if you want to put it in the back of the car.</p>
                                            </div>
                                            </div>
                                            <div class="card-footer">DISMANDLING</div>
                                            </div>
                                            <div>
                                            <div class="card">
                                                <div class="imgB">
                                                    <img src="images/led-star-inflatable-club-nightclub-decoration-prop-stage-light-up-decor-nightclubshop.jpg" alt="" width="350" height="300">
                                                </div>
                                                <div class="details">
                                                    <h6>Stage Decoration</h6>
                                                    <p>To stage is defined as to arrange, present or exhibit something.
                                                      An example of to stage is decorating the inside of a house that's for sale for an open house.</p>
                                                </div>
                                                </div>
                                                <div class="card-footer">STAGE DECORATION</div>
                                                </div>
        </div>
      
      
    </div><br><br>

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
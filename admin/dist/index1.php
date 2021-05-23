<?php 
require_once('connect1.php');
if(isset($_SESSION['Email'])){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Admin Dashboard</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <style>
    .card-counter {
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: transparent;
    height: 50px;
    border-radius: 5px;
    transition: .3s linear all;
}

.card-counter:hover {
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
}

/* .card-counter.primary {
    background-color: #007bff;
    color: #FFF;
} */

/* .card-counter.danger {
    background-color: #ef5350;
    color: #FFF;
}

.card-counter.success {
    background-color: #66bb6a;
    color: #FFF;
}

.card-counter.info {
    background-color: #26c6da;
    color: #FFF;
} */
.card-counter i {
    font-size: 5em;
    opacity: 0.2;
}

.card-counter .count-numbers {
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
    color: #FFF;
}

.card-counter .count-name {
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    /* opacity: 0.5; */
    display: block;
    font-size: 18px;
    color: #FFF;
}
    </style>
 </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Event Management</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <!--div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div-->
                    <div class="my-2"></div>
                  <a href="indexv.php" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">View</span>
                  </a>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="profile.php"><i class="fas fa-info-circle"></i> View Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="signlog.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="users1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                User Profile
                            </a>
                            <a class="nav-link" href="company1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Company Profile
                            </a>
                            <a class="nav-link" href="employee1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                                Employee Profile
                            </a>
                            <a class="nav-link" href="admin1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-cog"></i></div>
                                Admin Profile
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Theme
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="index.php"><i class="fas fa-adjust"> </i> &nbsp;Dark Mode</a>
                                    <a class="nav-link" href="index1.php"><i class="far fa-moon"> </i> &nbsp;Light Mode</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrator
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!--div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><i class="fas fa-user-circle"></i>&nbsp;USERS</div>
                                    <div class="card-counter bg">
                                    <span style="float:right;" class="count-name">No Of Admins</span>
                                    <span style="float:right;" class="count-numbers">
                                    <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT ID FROM sign ORDER BY ID";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="users.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><i class="fas fa-users"></i>&nbsp;COMPANY</div>
                                    <div style="background:transparent;"class="card-counter bg">
                                    <span style="float:right;" class="count-name">No Of Orders</span>
                                    <span style="float:right;" class="count-numbers">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT Order_id FROM enquiry ORDER BY Order_id";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="company.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><i class="fas fa-user-tie"></i>&nbsp;EMPLOYEE</div>
                                    <div class="card-counter bg">
                                    <span class="count-name">No Of Employees</span>
                                    <span style="float:right;" class="count-numbers">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT Job_id FROM employee ORDER BY Job_id";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="employee.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><i class="fas fa-user-cog"></i>&nbsp;QUERIES</div>
                                    <div class="card-counter bg">
                                    <span class="count-name">No Of Admins</span>
                                    <span style="float:right;" class="count-numbers">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT Query_No FROM query ORDER BY Query_No";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="query.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div-->
                        <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
          <span style="font-size:30px; font-style: oblique;" class="count-numbers">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT ID FROM sign ORDER BY ID";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-user fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
    <div style="background:steelblue;" class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="users1.php">Edit <i class="fas fa-pen-square"></i></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Company</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
          <span style="font-size:30px; font-style: oblique;" class="count-numbers">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT Order_id FROM enquiry ORDER BY Order_id";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-users fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
    <div style="background:seagreen;" class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href=company1.php>Edit <i class="fas fa-pen-square"></i></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Employee</div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
              <span style="font-size:30px; font-style: oblique;" class="count-numbers">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT Job_id FROM employee ORDER BY Job_id";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span>
              </div>
            </div>
            <!--div class="col">
              <div class="progress progress-sm mr-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div-->
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-user-tie fa-2x text-gray-300"></i>
        </div>
      </div>
    </div><div style="background:mediumturquoise;" class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="employee1.php">Edit <i class="fas fa-pen-square"></i></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Comments</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <span style="color:black; font-size:30px; font-style: oblique;">
                                        <?php
                                        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
                                        $sql="SELECT Query_No FROM query ORDER BY Query_No";
                                        $id = $conn->query($sql);
                                        $result=mysqli_num_rows($id);
                                        echo($result);
                                        ?>
                                    </span>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-comments fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
    <div style="background:orange;" class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="query1.php">Edit <i class="fas fa-pen-square"></i></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
  </div>
</div>
</div>
            </div>
                        
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Event Management 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
<?php
}
else{
  require_once('signlog.php');
}
?>
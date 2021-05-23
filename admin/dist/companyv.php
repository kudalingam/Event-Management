<?php 
require_once('connect1.php');
if(isset($_SESSION['Email'])){
?>
<?php 
//include_once('.\nav\headerv.php'); 
include_once('connect.php'); 
$sql="select * from enquiry"; 
$result=mysqli_query($conn,$sql); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Company Details</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
       <!--script src="icons.js"></script-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            <?php
session_start();
        $conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
?>
          ['Task', 'Hours per Day'],
          <?php 
			$query = "SELECT * from admin";

			 $exec = mysqli_query($conn,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['Name']."',".$row['Admin_id']."],";
			 }
			 ?> 
        ]);

        var options = {
          title: 'categories'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      } >?
    </script>
    <style>
    .card-counter {
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: transparent;
    height: 100px;
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
            <a class="navbar-brand" href="indexv.php">Event Management</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <!--div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div-->
                    <div class="my-2"></div>
                  <a href="index.php" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-pen-square"></i>
                    </span>
                    <span class="text">Edit</span>
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
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="indexv.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="usersv.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                User Profile
                            </a>
                            <a class="nav-link" href="companyv.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Company Profile
                            </a>
                            <a class="nav-link" href="employeev.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                                Employee Profile
                            </a>
                            <a class="nav-link" href="adminv.php">
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
                                    <a class="nav-link" href="companyv.php"><i class="fas fa-adjust"> </i> &nbsp;Dark Mode</a>
                                    <a class="nav-link" href="companyv1.php"><i class="far fa-moon"> </i> &nbsp;Light Mode</a>
                                </nav>
                            </div>
                            <!--a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a-->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrator
                    </div><br>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

<div class="container-fluid">
                        <h1 class="mt-4">Company Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="indexv.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Company Details</li>
                        </ol>
                        <div class="card mb-4">
                            <!--div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                            </div-->
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" class="display">
                                        <thead>
                                            <tr>
                                            <th> Order_ID </th> 
                                            <th> Service </th>
                                            <th> Company_Name </th> 
                                            <th> Official_Email </th> 
                                            <th> Official_Website </th>
                                            <th> Contact_info </th> 
                                            <th> Address </th>
                                            <th> Pincode </th>
                                            <th> About_Company </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th> Order_ID </th> 
                                            <th> Service </th>
                                            <th> Company_Name </th> 
                                            <th> Official_Email </th> 
                                            <th> Official_Website </th>
                                            <th> Contact_info </th> 
                                            <th> Address </th>
                                            <th> Pincode </th>
                                            <th> About_Company </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php while($rows=mysqli_fetch_assoc($result)) 
                                            { 
                                            ?> 
                                            <tr> <td><?php echo $rows['Order_id']; ?></td> 
                                            <td><?php echo $rows['Service']; ?></td> 
                                            <td><?php echo $rows['Company_Name']; ?></td> 
                                            <td><?php echo $rows['Official_Email']; ?></td> 
                                            <td><?php echo $rows['Offical_Website']; ?></td>
                                            <td><?php echo $rows['Contact_Info']; ?></td> 
                                            <td><?php echo $rows['Address']; ?></td> 
                                            <td><?php echo $rows['Pincode']; ?></td> 
                                            <td><?php echo $rows['About_Company']; ?></td> 
                                            </tr> 
                                        <?php 
                                                    } 
                                                ?> 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include_once('.\nav\footer.php'); ?>
                    <?php
}
else{
  require_once('signlog.php');
}
?>
<?php 
require_once('connect1.php');
if(isset($_SESSION['Email'])){
?>
<?php 
//include_once('.\nav\header.php'); 
include_once('connect.php'); 
$sql="select * from employee"; 
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
        <title>Employee Details</title>
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
            <a class="navbar-brand" href="index1.php">Event Management</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <!--div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div-->
                    <div class="my-2"></div>
                  <a href="indexv1.php" class="btn btn-success btn-icon-split">
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
                                    <a class="nav-link" href="employee.php"><i class="fas fa-adjust"> </i> &nbsp;Dark Mode</a>
                                    <a class="nav-link" href="employee1.php"><i class="far fa-moon"> </i> &nbsp;Light Mode</a>
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
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <?php 
if(isset($_SESSION['sucess'])){
  ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
        <?php
    echo($_SESSION['sucess']);
    unset($_SESSION['sucess']);
    ?>
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
if(isset($_SESSION['message'])){
  ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>
        <?php
    echo($_SESSION['message']);
    unset($_SESSION['message']);
    ?>
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
?>
                    <div class="container-fluid">
                        <h1 class="mt-4">Employee Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index1.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employee Details</li>
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
                                            <th> Job_ID </th> 
                                            <th> First_Name </th> 
                                            <th> Last_Name </th> 
                                            <th> Email_Adress </th> 
                                            <!--th> Phone_Number</th> 
                                            <th> D.O.B </th>
                                            <th> Gender </th> 
                                            <th> Qualification </th> 
                                            <th> Experience </th> 
                                            <th> Language </th> 
                                            <th> Salary </th> 
                                            <th> About </th> 
                                            <th> Role </th> 
                                            <th> Address </th> 
                                            <th> City </th> 
                                            <th> District </th>
                                            <th> State </th> 
                                            <th> Pincode </th> 
                                            <th> Photo </th> 
                                            <th> ID_Proof </th-->  
                                            <th> Edit </th>
                                            <th> Delete </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php while($rows=mysqli_fetch_assoc($result)) 
                                            { 
                                            ?> 
                                            <tr> <td><?php echo $rows['Job_id']; ?></td> 
                                            <td><?php echo $rows['First_Name']; ?></td> 
                                            <td><?php echo $rows['Last_Name']; ?></td> 
                                            <td><?php echo $rows['Email_Address']; ?></td>
                                            <!--td><?php echo $rows['Phone_Number']; ?></td> 
                                            <td><?php echo $rows['DOB']; ?></td> 
                                            <td><?php echo $rows['Gender']; ?></td> 
                                            <td><?php echo $rows['Qualification']; ?></td> 
                                            <td><?php echo $rows['Experience']; ?></td> 
                                            <td><?php echo $rows['Language']; ?></td> 
                                            <td><?php echo $rows['Salary']; ?></td> 
                                            <td><?php echo $rows['About']; ?></td> 
                                            <td><?php echo $rows['Role']; ?></td> 
                                            <td><?php echo $rows['Address']; ?></td> 
                                            <td><?php echo $rows['City']; ?></td> 
                                            <td><?php echo $rows['District']; ?></td> 
                                            <td><?php echo $rows['State']; ?></td> 
                                            <td><?php echo $rows['Pincode']; ?></td> 
                                            <td><?php echo $rows['Photo']; ?></td> 
                                            <td><?php echo $rows['ID_Proof']; ?></td-->
                                            <td>
                                                <form action="employee_edit.php" method="post">
                                                    <input type="hidden" value=<?php echo($rows["Job_id"]);?> name="edit_employeeid"></input>
                                                    <button class="btn btn-secondary" name="edit_employeebtn" value="edit">Edit</button>
                                                </form>

                                            </td>                            <td>
                                                <form action="crud.php" method="post">
                                                    <input type="hidden" value=<?php echo($rows["Job_id"]);?> name="del_employeeid"></input>
                                                    <button class="btn btn-danger" name="del_employeebtn" value="delete">Delete</button>
                                                </form>

                                            </td>
                
            </tr>
                                            </tr> 
                                            
                                        <?php 
                                                    } 
                                                ?> 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="crud.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="exampleInputFName1">First_Name</label>
                        <input type="text" class="form-control" id="exampleInputFName1" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLName1">Last_Name</label>
                        <input type="text" class="form-control" id="exampleInputLName1" name="lname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email_Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone1">Phone_Number</label>
                        <input type="tel" class="form-control" id="exampleInputPhone1" name="phno">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDOB1">DOB</label>
                        <input type="date" class="form-control" id="exampleInputDOB1" name="dob">
                    </div>
                    <div class="form-group"><label class="fieldlabels">Gender: *</label><br>
                             <!-- Default inline 1-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="gender" value="Male">
                                <label class="custom-control-label" for="defaultInline1">Male</label>
                            </div>
                            
                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="gender" value="Female">
                                <label class="custom-control-label" for="defaultInline2">Female</label>
                            </div>
                            
                            <!-- Default inline 3-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline3" name="gender" value="Transcender">
                                <label class="custom-control-label" for="defaultInline3">Transcender</label>
                            </div></div>
                    <div class="form-group">
                        <label for="exampleInputQualification1">Qualification</label>
                        <input type="text" class="form-control" id="exampleInputQualification1" name="qualification">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputExperience1">Experience</label>
                        <input type="text" class="form-control" id="exampleInputExperience1" name="experience">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLanguage1">Language</label>
                        <input type="text" class="form-control" id="exampleInputLanguage1" name="language">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSalary1">Salary</label>
                        <input type="number" class="form-control" id="exampleInputSalary1" name="salary">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAbout1">About</label>
                        <input type="text" class="form-control" id="exampleInputAbout1" name="about">
                    </div>
                    <div class="form-group">
                    <label for="role" class="fieldlabels">Role:</label>
                                <select id="role" name="role">
                                   <option value="All">All</option>
                                    <option value="Technician">Technician</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Corpender">Corpender</option>
                                    <option value="Helper">Helper</option>
                                </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress1">Address</label>
                        <input type="text" class="form-control" id="exampleInputAddress1" name="address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="city">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDIstrict1">District</label>
                        <input type="text" class="form-control" id="exampleInputDistrict1" name="district">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputState1">State</label>
                        <input type="text" class="form-control" id="exampleInputState1" name="state">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPincode1">Pincode</label>
                        <input type="number" class="form-control" id="exampleInputPincode1" name="pincode">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhoto1">Photo</label>
                        <input type="file" class="form-control" id="exampleInputPhoto1" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputID_Proof1">ID_Proof</label>
                        <input type="file" class="form-control" id="exampleInputID_Proof1" name="idproof">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submitemployeebtn" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<div class="row">
    <div class="col text-center">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
            Add Admin
        </button>
    </div>
</div><br><br><br><br><br>
<?php include_once('.\nav\footer.php'); ?>
<?php
}
else{
  require_once('signlog.php');
}
?>
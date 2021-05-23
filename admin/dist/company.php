<?php 
require_once('connect1.php');
if(isset($_SESSION['Email'])){
?>
<?php 
//include_once('.\nav\header.php'); 
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
       <style>
    .alert{
        font-size:15px;
        margin-left:40px;
        margin-right:40px;
        margin-top:20px;
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
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="users.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                User Profile
                            </a>
                            <a class="nav-link" href="company.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Company Profile
                            </a>
                            <a class="nav-link" href="employee.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                                Employee Profile
                            </a>
                            <a class="nav-link" href="admin.php">
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
                                    <a class="nav-link" href="company.php"><i class="fas fa-adjust"> </i> &nbsp;Dark Mode</a>
                                    <a class="nav-link" href="company1.php"><i class="far fa-moon"> </i> &nbsp;Light Mode</a>
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
                        <h1 class="mt-4">Company Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
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
                                            <th> Company_Name </th> 
                                            <th> Official_Email </th> 
                                            <!--th> Official_Website </th>
                                            <th> Contact_Info </th> 
                                            <th> Address </th>
                                            <th> Pincode </th>
                                            <th> About_Company </th-->
                                            <th> Edit</th>
                                            <th> Delete </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th> Order_ID </th> 
                                            <th> Company_Name </th> 
                                            <th> Official_Email </th> 
                                            <!--th> Official_Website </th>
                                            <th> Contact_Info </th> 
                                            <th> Address </th>
                                            <th> Pincode </th>
                                            <th> About_Company </th-->
                                            <th> Edit</th>
                                            <th> Delete </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php while($rows=mysqli_fetch_assoc($result)) 
                                            { 
                                            ?> 
                                            <tr> <td><?php echo $rows['Order_id']; ?></td> 
                                            <td><?php echo $rows['Company_Name']; ?></td> 
                                            <td><?php echo $rows['Official_Email']; ?></td> 
                                            <!--td><?php echo $rows['Offical_Website']; ?></td>
                                            <td><?php echo $rows['Contact_Info']; ?></td> 
                                            <td><?php echo $rows['Address']; ?></td> 
                                            <td><?php echo $rows['Pincode']; ?></td> 
                                            <td><?php echo $rows['About_Company']; ?></td--> 
                                            <td>
                                                <form action="company_edit.php" method="post">
                                                    <input type="hidden" value="<?php echo($rows["Order_id"]);?>" name="edit_orderid"></input>
                                                    <button class="btn btn-secondary" name="edit_orderbtn" value="edit">Edit</button>
                                                </form>

                                            </td>                            <td>
                                                <form action="crud.php" method="post">
                                                    <input type="hidden" value="<?php echo($rows["Order_id"]);?>" name="del_orderid"></input>
                                                    <button class="btn btn-danger" name="del_orderbtn" value="delete">Delete</button>
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
                <h5 class="modal-title" id="exampleModalLabel">New Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="crud.php" method="POST">
                <div class="form-group"><label for="service">Service</label>
                  <input list="services" class="form-control" name="service" id="service" placeholder="Select Service" required>
                  <datalist id="services">
                  <option value="Exhibition">
                  <option value="Sports Events">
                  <option value="Product Launch">
                    <option value="Corporate Events">
                    <option value="Social Events">
                    <option value="Wedding Events">
                    <option value="Artist Management">
                    <option value="Seminor and Conference">
                    <option value="Brand Promotion">
                    <option value="Road Shows">
                  </datalist></div>
                <div class="form-group">
        <label for="exampleInputName1">Company_Name</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name" >
    </div><br>
    <div class="form-group">
        <label for="exampleInputEmail1">Official_Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
    </div><br>
    <div class="form-group">
        <label for="exampleInputWebsite1">Official_Website</label>
        <input type="text" class="form-control" id="exampleInputWebsite1" name="website">
    </div><br>
    <div class="form-group">
        <label for="exampleInputContact1">Contact_Info</label>
        <input type="tel" class="form-control" id="exampleInputContact1" name="contact" >
    </div><br>
    <div class="form-group">
        <label for="exampleInputAddress1">Address</label>
        <input type="text" class="form-control" id="exampleInputAddress1"  name="address" >
    </div><br>
    <div class="form-group">
        <label for="exampleInputPincode1">Pincode</label>
        <input type="text" class="form-control" id="exampleInputPincode1" name="pincode" >
    </div><br>
    <div class="form-group">
        <label for="exampleInputAbout1">About_Company</label>
        <input type="text" class="form-control" id="exampleInputAbout1" name="about">
    </div><br>

                    <button type="submit" class="btn btn-primary" name="submitorderbtn" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="crud.php" method="POST">
                <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submitadminbtn" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Button trigger modal -->
    <div class="row">
        <div class="col text-center">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
                Add Order
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
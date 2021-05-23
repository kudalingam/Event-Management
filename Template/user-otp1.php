<?php require_once "connection.php"; 
if(isset($_SESSION['Email']));
?>
<?php 
$id=$_SESSION['Email'];
$sql="SELECT * FROM forgot where Change_id='$id'";
$result=mysqli_query($conn,$sql); 
//if($email == false){
//  header('Location: login-user.php');
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="connection.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php while($rows=mysqli_fetch_assoc($result)) 
                                            { 
                                            ?> 
                    <input type="hidden" name="code" value="<?php $rows["Code"];?>">                  
                    <?php } ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
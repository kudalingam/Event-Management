<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'login');

if(isset($_POST['enquiry'])){
    $service=$_POST['service'];
    $cname=$_POST['cname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $website=$_POST['website'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $about=$_POST['about'];
        if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else{
                $sql="INSERT INTO enquiry (Service,Company_Name,Official_Email,Offical_Website,Contact_Info,Address,Pincode,About_Company) values ('$service','$cname','$email','$website','$contact','$address','$pincode','$about')";
                if($conn->query($sql)=== TRUE){
                        ob_clean();
                        echo "New record is inserted successfully";
                        header("Location:http://localhost:8080/login/home_.php ");
                        exit();
                }
                else{
                       echo "Error: ".$sql ."<br>".$conn->error;
                    }
                    $conn->close();
                }
    }
    if(isset($_POST['Send'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $query=$_POST['query'];
            if(mysqli_connect_error()){
                die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
            }
            else{
                    $sql="INSERT INTO query (Name,Phone_Number,Email_Address,Query) values ('$name','$phone','$email','$query')";
                    if($conn->query($sql)=== TRUE){
                            ob_clean();
                            echo "New record is inserted successfully";
                            header("Location:http://localhost:8080/login/contact.php ");
                            exit();
                    }
                    else{
                           echo "Error: ".$sql ."<br>".$conn->error;
                        }
                        $conn->close();
                    }
        }
        if(isset($_POST['Apply'])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $phno=$_POST['phno'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $qualification=$_POST['qualification'];
            $experience=$_POST['experience'];
            $language=$_POST['language'];
            $salary=$_POST['salary'];
            $about=$_POST['about'];
            $role=$_POST['role'];
            $address=$_POST['address'];
            $city=$_POST['city'];            
            $district=$_POST['district'];
            $state=$_POST['state'];
            $pincode=$_POST['pincode'];
            $image=$_POST['image'];
            $idproof=$_POST['idproof'];
                if(mysqli_connect_error()){
                    die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
                }
                else{   
                    $fileName = basename($_FILES["image"]["name"]); 
           $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
           $allowTypes = array('jpg','png','jpeg','gif'); 
           $image = $_FILES['image']['tmp_name']; 
               $photo = addslashes(file_get_contents($image)); 
                        $sql="INSERT INTO employee (First_Name,Last_Name,Email_Address,Phone_Number,DOB,Gender,Qualification,Experience,Language,Salary,About,Role,Address,City,District,State,Pincode,Photo,ID_Proof) values ('$fname','$lname','$email','$phno','$dob','$gender','$qualification','$experience','$language','$salary','$about','$role','$address','$city','$district','$state','$pincode','$photo','$idproof')";
                        if($conn->query($sql)=== TRUE){
                                ob_clean();
                                echo "New record is inserted successfully";
                                header("Location:http://localhost:8080/login/form.html");
                                exit();
                        }
                        else{
                               echo "Error: ".$sql ."<br>".$conn->error;
                            }
                            $conn->close();
                        }
            }
       

if(isset($_POST["edit_userbtn"])){
    $id=$_POST['edit_user_id'];
    $name=$_POST["edit_user_name"];
    $phone=$_POST["edit_user_phone"];
    $email=$_POST['edit_user_email'];
    $password=$_POST["edit_user_pass"];
//    $file_name = $_FILES['edit_user_image']['name']; 
//    $file_type = $_FILES['edit_user_image']['type']; 
//    $file_tmp_name = $_FILES['edit_user_image']['tmp_name']; 
//   $file_size = $_FILES['edit_user_image']['size']; 

// target directory 
//    $target_dir = "edit_user_image/"; 

    $sql="UPDATE sign SET Username='$name', Email='$email', Phone='$phone', Password='$password' WHERE Id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="Account Update Successfully!";
        header('location:\.\login\profile.php');
    }
    else{
        $_SESSION['message']="Account Not Updated ";
        header('location:\.\login\profile.php');
    }
}
$conn = mysqli_connect('localhost', 'root', '', 'login');
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['Fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['repass']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM sign WHERE Email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = md5($password);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO sign (Username,Email,Phone,Password, code, status)
                        values('$name', '$email','$phone', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message =" Dear $name, \n\n         Your verification OTP is ' $code '. This can be used only once and is valid for 300 secs.  Please enter the OTP to verify the email address. Do not share OTP for Security reason. \n\n\n\n\n\nRegards,\nEvent Management Team,\nEvent Management. \n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Note: Please do not reply to this mail, This email is automatically generated by the event management team.";
            $sender = "From: 'Event Management' kudalingam18@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['Email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
 
}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM sign WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['Email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE sign SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                header('Location:http://localhost/login/log1.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

   
    if(isset($_POST['login'])){
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $encpass = md5($_POST['password']);
        $query=mysqli_query($conn,"select * from sign where Email='$email' and Password='$encpass'");
        $rowcount=mysqli_num_rows($query);
    if ($rowcount == 1){
        $_SESSION['Email']=$email;
        header('Location:http://localhost:8080/login/Home.php');
        exit();
    }else{
                $errors['email'] = "Invalid Email or Password!";
            }
}

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM sign WHERE Email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE sign SET code = $code WHERE Email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Password Reset OTP";
                $message =" Dear Customer, \n\n         Your verification OTP is ' $code '. This can be used only once and is valid for 300 secs.  Please enter the OTP to change the Password. Do not share OTP for Security reason. \n\n\n\n\n\nRegards,\nEvent Management Team,\nEvent Management. \n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Note: Please do not reply to this mail, This email is automatically generated by the event management team.";
                $sender = "From:kudalingam18@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['Email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM sign WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['Email'];
            $_SESSION['Email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['Email']; //getting this email using session
            $encpass = md5($_POST['password']);
            $update_pass = "UPDATE sign SET code = $code, Password = '$encpass' WHERE Email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location:http://localhost/login/log1.php');
    }
/*if(isset($_POST['submit'])){
    $Fname=$_POST['Fname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $pass=$_POST['password'];
    $repass=$_POST['repass'];
    //$image=$_POST['image'];
        if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
        }if($pass !== $repass){
            $errors['password'] = "Confirm password not matched!";
            echo "<br><br><h3>Confirm password not matched!";
            echo '<br/>Try again<a href="http://localhost/login/sign.php"> Sign Up</a>';
        }
        else{
            $rs=mysqli_query($conn,"select * from sign where Email='$email'");
            if (mysqli_num_rows($rs)>0)
            {
                echo "<br><br><h3>Login Id Already Exists";
                echo '<br/>Click<a href="http://localhost/login/log1.php"> Login</a>';
	            exit;
            }
                else{
      //              $fileName = basename($_FILES["image"]["name"]); 
        //   $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
          // $allowTypes = array('jpg','png','jpeg','gif'); 
           //$image = $_FILES['image']['tmp_name']; 
             //  $photo = addslashes(file_get_contents($image)); 
                    $encpass = md5($_POST['repass']);
                    //$code=rand(000000,999999);
                    $sql="INSERT INTO sign (Username,Email,Phone,Password) values('$Fname','$email','$phonenumber','$encpass')";
                    if($conn->query($sql)=== TRUE){
                        ob_clean();
                        echo "New record is inserted successfully";
                        header("Location:http://localhost/login/log1.php ");
                        exit();
                    }
                    else{
                        echo "Error: ".$sql ."<br>".$conn->error;
                    }
                    $conn->close();
                }
        }
    }




if(isset($_POST['login'])){
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $encpass = md5($_POST['password']);
        $query=mysqli_query($conn,"select * from sign where Email='$email' and Password='$encpass'");
        $rowcount=mysqli_num_rows($query);
    if ($rowcount == 1){
        $_SESSION['Email']=$email;
        echo "<font color=blue>Welcome $email</font>";
        header("Location:http://localhost/login/Home.php ");
        exit();
    }else{
        echo "<font color=red size=6pts>Invalid email or password";
        echo "<br><br>Click <a href='log1.php'> Login</a>";
    }
}*/
/*if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
        if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
        }if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
            echo "<br><br><h3>Confirm password not matched!";
            echo '<br/>Try again<a href="C:\xampp\htdocs\login\admin-pages\Login\signlog.php"> Sign Up</a>';
        }
        else{
            $rs=mysqli_query($conn,"select * from admin where Email='$email'");
            if (mysqli_num_rows($rs)>0)
            {
                echo "<br><br><h3>Login Id Already Exists";
                echo '<br/>Click<a href="C:\xampp\htdocs\login\admin-pages\Login\signlog.php"> Login</a>';
	            exit;
            }
                else{
                    $encpass = md5($_POST['cpassword']);
                    $sql="INSERT INTO sign (Name,Email,Password) values('$name','$email','$encpass')";
                    if($conn->query($sql)=== TRUE){
                        ob_clean();
                        echo "New record is inserted successfully";
                        header("Location:C:\xampp\htdocs\login\admin-pages\Login\signlog.php ");
                        exit();
                    }
                    else{
                        echo "Error: ".$sql ."<br>".$conn->error;
                    }
                    $conn->close();
                }
        }
    }
if(isset($_POST['signin'])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $encpass = md5($_POST['password']);
        $query=mysqli_query($conn,"select * from admin where Email='$email' and Password='$encpass'");
        $rowcount=mysqli_num_rows($query);
    if ($rowcount == 1){
        $_SESSION['email']=$email;
        echo "<font color=blue>Welcome $email</font>";
        header("Location:http://localhost/login/admin-pages/dist/index.html");
        exit();
    }else{
        echo "<font color=red size=6pts>Invalid email or password";
        echo "<br><br>Click <a href='C:\xampp\htdocs\login\admin-pages\Login\signlog.php'> Login</a>";
    }
}*/
 //if user click login button
   /* if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: home.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
}*/
?>

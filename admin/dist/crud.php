<?php
session_start();
$conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
if(isset($_POST["submitadminbtn"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $encpass = md5($_POST['password']);
   // $image=$_POST['image'];
    //$fileName = basename($_FILES["image"]["name"]); 
      //     $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        //   $allowTypes = array('jpg','png','jpeg','gif'); 
        //   $image = $_FILES['image']['tmp_name']; 
        //       $photo = addslashes(file_get_contents($image)); 
    $sql="INSERT INTO admin (Name,Email, Password) VALUES('$name','$email','$encpass')";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Create Successfully!";
        header('location:admin.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Created ";
        header('location:admin.php');
    }
}
if(isset($_POST["del_btn"])){
    $id=$_POST["del_adminid"];
    $sql="DELETE FROM admin WHERE Admin_id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']=" &check; Account Delete Successfully!";
        header('location:login\admin\dist\admin.php');
    }
    else{
        $_SESSION['message']=" &#9888; &nbsp; Account Not Deleted ";
        header('location:login\admin\dist\admin.php');
    }
}
if(isset($_POST["edit_adminbtn"])){
    $id=$_POST['edit_admin_id'];
    $name=$_POST["edit_admin_name"];
    $email=$_POST['edit_admin_email'];
    $password=$_POST['edit_admin_pass'];
    $sql="UPDATE admin SET Name='$name', Email='$email', Password='$password' WHERE Admin_id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Update Successfully!";
        header('location:\.\login\admin\dist\admin.php');
    }
    else{
        $_SESSION['message']=" &#9888; &nbsp; Account Not Updated ";
        header('location:\.\login\admin\dist\admin.php');
    }
}
if(isset($_POST["submitemployeebtn"])){
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
    $photo=$_POST['photo'];
    $idproof=$_POST['idproof'];
    $fileName = basename($_FILES["image"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $image = $_FILES['image']['tmp_name']; 
        $photo = addslashes(file_get_contents($image)); 
    $sql="INSERT INTO employee (First_Name,Last_Name,Email_Address,Phone_Number,DOB,Gender,Qualification,Experience,Language,Salary,About,Role,Address,City,District,State,Pincode,Photo,ID_Proof) values ('$fname','$lname','$email','$phno','$dob','$gender','$qualification','$experience','$language','$salary','$about','$role','$address','$city','$district','$state','$pincode','$photo','$idproof')";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']=" &check; Account Create Successfully!";
        header('location:\.\login\admin\dist\employee.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Created ";
        header('location:\.\login\admin\dist\employee.php');
    }
}
if(isset($_POST["del_employeebtn"])){
    $id=$_POST["del_employeeid"];
    $sql="DELETE FROM employee WHERE Job_id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']=" &check; Account Delete Successfully!";
        header('location:\.\login\admin\dist\employee.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Deleted ";
        header('location:\.\login\admin\dist\employee.php');
    }
}
if(isset($_POST["edit_employeebtn"])){
    $id=$_POST['edit_employee_id'];
    $fname=$_POST["edit_employee_fname"];
    $lname=$_POST["edit_employee_lname"];
    $email=$_POST['edit_employee_email'];
    $phone=$_POST['edit_employee_phone'];
    $dob=$_POST['edit_employee_dob'];
    $gender=$_POST['edit_employee_gender'];
    $qualification=$_POST['edit_employee_qualification'];
    $experience=$_POST['edit_employee_experience'];
    $language=$_POST['edit_employee_language'];
    $salary=$_POST['edit_employee_salary'];
    $about=$_POST['edit_employee_about'];
    $role=$_POST['edit_employee_role'];
    $address=$_POST['edit_employee_address'];
    $city=$_POST['edit_employee_city'];
    $district=$_POST['edit_employee_district'];
    $state=$_POST['edit_employee_state'];
    $pincode=$_POST['edit_employee_pincode'];
    $photo=$_POST['edit_employee_photo'];
    $id_proof=$_POST['edit_employee_id_proof'];
    $fileName = basename($_FILES["edit_employee_photo"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $edit_employee_photo = $_FILES['edit_employee_photo']['tmp_name']; 
    $photo = addslashes(file_get_contents($edit_employee_photo)); 
    $sql="UPDATE employee SET First_Name='$fname', Last_Name='$lname', Email_Address='$email', Phone_Number='$phone', DOB='$dob', Gender='$gender', Qualification='$qualification', Experience='$experience', Language='$language', Salary='$salary', About='$about', Role='$role',Address='$address', City='$city', District='$district', State='$state', Pincode='$pincode', Photo='$photo', ID_Proof='$id_proof' WHERE Job_id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Update Successfully!";
        header('location:\.\login\admin\dist\employee.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Updated ";
        header('location:\.\login\admin\dist\employee.php');
    }
}
if(isset($_POST["submitquerybtn"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $query=$_POST["query"];
    $sql="INSERT INTO query (Name, Phone_Number, Email_Address, Query) VALUES('$name', '$phone', '$email','$query')";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Create Successfully!";
        header('location:\.\login\admin\dist\query.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Created ";
        header('location:\.\login\admin\dist\query.php');
    }
}
if(isset($_POST["del_querybtn"])){
    $id=$_POST["del_queryid"];
    $sql="DELETE FROM query WHERE Query_No='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Delete Successfully!";
        header('location:\.\login\admin\dist\query.php');
    }
    else{
        $_SESSION['message']=" &#9888; &nbsp; Account Not Deleted ";
        header('location:\.\login\admin\dist\query.php');
    }
}
if(isset($_POST["edit_querybtn"])){
    $id=$_POST['edit_query_id'];
    $name=$_POST["edit_query_name"];
    $phone=$_POST["edit_query_phone"];
    $email=$_POST['edit_query_email'];
    $query=$_POST["edit_query_query"];
    $sql="UPDATE query SET Name='$name', Phone_Number='$phone', Email_Address='$email', Query='$query' WHERE Query_No='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']=" &check; Account Update Successfully!";
        header('location:\.\login\admin\dist\query.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Updated ";
        header('location:\.\login\admin\dist\query.php');
    }
}
if(isset($_POST["submituserbtn"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $encpass = md5($_POST['password']);
    $image=$_POST['image'];
    $fileName = basename($_FILES["image"]["name"]); 
           $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
           $allowTypes = array('jpg','png','jpeg','gif'); 
           $image = $_FILES['image']['tmp_name']; 
               $photo = addslashes(file_get_contents($image)); 
    $sql="INSERT INTO sign (Username, Email, Phone, Password, Image) VALUES('$name','$email', '$phone', '$encpass','$photo')";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Create Successfully!";
        header('location:\.\login\admin\dist\users.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Created ";
        header('location:\.\login\admin\dist\users.php');
    }
}
if(isset($_POST["del_userbtn"])){
    $id=$_POST["del_userid"];
    $sql="DELETE FROM sign WHERE Id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Delete Successfully!";
        header('location:\.\login\admin\dist\users.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Deleted ";
        header('location:\.\login\admin\dist\users.php');
    }
}
if(isset($_POST["edit_userbtn"])){
    $id=$_POST['edit_user_id'];
    $name=$_POST["edit_user_name"];
    $phone=$_POST["edit_user_phone"];
    $email=$_POST['edit_user_email'];
    $password=$_POST["edit_user_pass"];
    //$photo=$_POST['image'];
    //$fileName = basename($_FILES["photo"]["name"]); 
    //$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    //$allowTypes = array('jpg','png','jpeg','gif'); 
    //$image = $_FILES['photo']['tmp_name']; 
    //$image = addslashes(file_get_contents($image)); 
    //$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
    $sql="UPDATE sign SET Username='$name', Email='$email', Phone='$phone', Password='$password' WHERE Id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Update Successfully!";
        header('location:\.\login\admin\dist\users.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Updated ";
        header('location:\.\login\admin\dist\users.php');
    }
}
if(isset($_POST["submitorderbtn"])){
    $service=$_POST['service'];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $website=$_POST["website"];
    $contact=$_POST["contact"];
    $address=$_POST["address"];
    $pincode=$_POST["pincode"];
    $about=$_POST["about"];
    $sql="INSERT INTO enquiry (Service,Company_Name,Official_Email,Offical_Website,Contact_Info,Address,Pincode,About_Company) values ('$service','$name','$email','$website','$contact','$address','$pincode','$about')";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Create Successfully!";
        header('location:\.\login\admin\dist\company.php');
    }
    else{
        $_SESSION['message']=" &#9888; &nbsp; Account Not Created ";
        header('location:\.\login\admin\dist\company.php');
    }
}
if(isset($_POST["del_orderbtn"])){
    $id=$_POST["del_orderid"];
    $sql="DELETE FROM enquiry WHERE Order_id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Delete Successfully!";
        header('location:\.\login\admin\dist\company.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Deleted ";
        header('location:\.\login\admin\dist\company.php');
    }
}
if(isset($_POST["edit_orderbtn"])){
    $id=$_POST['edit_order_id'];
    $service=$_POST["edit_company_service"];
    $name=$_POST["edit_company_name"];
    $email=$_POST["edit_company_email"];
    $website=$_POST["edit_company_website"];
    $contact=$_POST["edit_company_contact"];
    $address=$_POST["edit_company_address"];
    $pincode=$_POST["edit_company_pincode"];
    $about=$_POST["edit_company_about"];
    //$sql="INSERT INTO enquiry (Company_Name,Official_Email,Offical_Website,Contact_Info,Address,Pincode,About_Company) values ('$cname','$email','$website','$contact','$address','$pincode','$about')";
    $sql="UPDATE enquiry SET Service='$service', Company_Name='$name', Official_Email='$email', Offical_Website='$website', Contact_Info='$contact', Address='$address', Pincode='$pincode', About_Company='$about' WHERE Order_id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Update Successfully!";
        header('location:\.\login\admin\dist\company.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Updated ";
        header('location:\.\login\admin\dist\company.php');
    }
}

?>
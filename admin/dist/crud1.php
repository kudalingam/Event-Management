<?php
session_start();
$conn = mysqli_connect("localhost","root","","admin") or die("Connection failed: " . mysqli_connect_error());
if(isset($_POST["submitadminbtn"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $encpass = md5($_POST['password']);
    $image=$_POST['image'];
    $fileName = basename($_FILES["image"]["name"]); 
           $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
           $allowTypes = array('jpg','png','jpeg','gif'); 
           $image = $_FILES['image']['tmp_name']; 
               $photo = addslashes(file_get_contents($image)); 
    $sql="INSERT INTO admin (Name,Email, Password,Image) VALUES('$name','$email','$encpass','$photo')";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']="&check; Account Create Successfully!";
        header('location:\.\login\admin\dist\admin.php');
    }
    else{
        $_SESSION['message']="&#9888; &nbsp; Account Not Created ";
        header('location:\.\login\admin\dist\admin.php');
    }
}
if(isset($_POST["del_btn"])){
    $id=$_POST["del_adminid"];
    $sql="DELETE FROM admin WHERE Admin_id='$id'";
    $result=mysqli_query($conn,$sql); 
    if( $result===true){
        $_SESSION['sucess']=" &check; Account Delete Successfully!";
        header('location:\.\login\admin\dist\admin.php');
    }
    else{
        $_SESSION['message']=" &#9888; &nbsp; Account Not Deleted ";
        header('location:\.\login\admin\dist\admin.php');
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
?>
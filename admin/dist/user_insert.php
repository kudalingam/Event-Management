<?php 
require_once('connect1.php');
if(isset($_POST['edit_btn'])){
$id=$_POST['edit_userid'];
$sql="select * from sign where Email='$id'"; 
$result=mysqli_query($conn,$sql); 
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $sql="UPDATE sign SET Image='$file' WHERE Email='$id'";
      if(mysqli_query($conn, $sql))  
      {  
        header('Location:users.php');
        echo '<script>alert("Image Updated into Database")</script>';  
           
      }  
 }  
}
  ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Change Image</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:300px;">  
                <h3 align="center">Change Your Image</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Change" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php   
                if(isset($_POST['edit_btn'])){
                $id=$_POST['edit_userid'];
                $sql="select * from sign where Email='$id'"; 
                $result=mysqli_query($conn,$sql); 
                while($row = mysqli_fetch_assoc($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="300" width="300" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                <?php } ?>
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
<?php 
$conn = mysqli_connect("localhost","root","","admin") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_adminid'];
$sql="SELECT * FROM admin where Admin_id='$id'";
$result=mysqli_query($conn,$sql); 
foreach($result as $row){
?>
<div>
    <h5 class="display-2">Edit Admin</h5>
</div>
<form action="crud1.php" method="POST">
    <input type="hidden" value="<?php echo($row['Admin_id']);?>" name="edit_admin_id"></input>
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="text" class="form-control" id="exampleInputName1" 
            name="edit_admin_name" value="<?php echo($row['Name']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="edit_admin_email" value="<?php echo($row['Email']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="edit_admin_pass"
            value="<?php echo($row['Password']);?>">
    </div><br>
    <!--div class="form-group">
        <label for="exampleInputImage1">Image</label>
        <input type="file" class="form-control" id="exampleInputImage1" name="image">
    </div-->
    <button type="submit" class="btn btn-primary" name="edit_adminbtn" value="submit">Submit changes</button>
</form>
<?php
}
?>
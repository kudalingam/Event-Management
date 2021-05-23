<?php 
$conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_userid'];
$sql="SELECT * FROM sign where Id='$id'";
$result=mysqli_query($conn,$sql); 
foreach($result as $row){
?>
<div>
    <h5 class="display-2">Edit User</h5>
</div>
<!--form action="user_insert.php" method="post">
        <input type="hidden" value="<?php echo($rows["Id"]);?>" name="edit_userid"></input>
        <button class="btn btn-primary" name="edit_btn" value="edit">Change Image</button>
    </form-->
<form action="crud.php" method="POST">
    <input type="hidden" value="<?php echo($row['Id']);?>" name="edit_user_id"></input>
    <div class="form-group">
        <label for="exampleInputName1">User_Name</label>
        <input type="text" class="form-control" id="exampleInputName1" 
            name="edit_user_name" value="<?php echo($row['Username']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="edit_user_email" value="<?php echo($row['Email']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputPhone1">Phone</label>
        <input type="text" class="form-control" id="exampleInputName1" 
            name="edit_user_phone" value="<?php echo($row['Phone']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="edit_user_pass"
            value="<?php echo($row['Password']);?>">
    </div><br>
    <button type="submit" class="btn btn-primary" name="edit_userbtn" value="submit">Submit changes</button>
</form>
<?php
}
?>
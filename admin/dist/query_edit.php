<?php 
$conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_queryid'];
$sql="SELECT * FROM query where Query_No='$id'";
$result=mysqli_query($conn,$sql); 
foreach($result as $row){
?>
<div>
    <h5 class="display-2">Edit Query</h5>
</div>
<form action="crud.php" method="POST">
    <input type="hidden" value="<?php echo($row['Query_No']);?>" name="edit_query_id"></input>
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="text" class="form-control" id="exampleInputName1" 
            name="edit_query_name" value="<?php echo($row['Name']);?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPhone1">Phone_Number</label>
        <input type="text" class="form-control" id="exampleInputPhone1" 
            name="edit_query_phone" value="<?php echo($row['Phone_Number']);?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="edit_query_email" value="<?php echo($row['Email_Address']);?>">
    </div>
    <div class="form-group">
        <label for="exampleInputQuery1">Query</label>
        <input type="text" class="form-control" id="exampleInputQuery1" 
            name="edit_query_query" value="<?php echo($row['Query']);?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_querybtn" value="submit">Submit changes</button>
</form>
<?php
}
?>
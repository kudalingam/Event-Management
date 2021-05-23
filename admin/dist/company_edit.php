<?php 
$conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_orderid'];
$sql="SELECT * FROM enquiry where Order_id='$id'";
$result=mysqli_query($conn,$sql); 
foreach($result as $row){
?>
<div>
    <h5 class="display-2">Edit Company Profile</h5>
</div><br>
<form action="crud.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo($row['Order_id']);?>" name="edit_order_id"></input>
    <div class="form-group"><label >Service: <?php echo($row['Service']);?></label>
                  <input list="services" class="form-control" name="edit_company_service" placeholder="Select Service" required>
                  <datalist id="services">
                  <option value="Exhibition">Exhibition</option>
                  <option value="Sports Events">Sports Events</option>
                  <option value="Product Launch">Product Launch</option>
                    <option value="Corporate Events">Corporate Events</option>
                    <option value="Social Events">Social Events</option>
                    <option value="Wedding Events">Wedding Events</option>
                    <option value="Artist Management">Artist Management</option>
                    <option value="Seminor and Conference">Seminor and Conference</option>
                    <option value="Brand Promotion">Brand Promotion</option>
                    <option value="Road Shows">Road Shows</option>
                  </datalist></div><br>
    <div class="form-group">
        <label for="exampleInputName1">Company_Name</label>
        <input type="text" class="form-control" id="exampleInputName1"
            name="edit_company_name" value="<?php echo($row['Company_Name']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputEmail1">Official_Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="edit_company_email" value="<?php echo($row['Official_Email']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputWebsite1">Official_Website</label>
        <input type="text" class="form-control" id="exampleInputWebsite1"
            name="edit_company_website" value="<?php echo ($row['Offical_Website']); ?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputContact1">Contact_Info</label>
        <input type="tel" class="form-control" id="exampleInputContact1"
            name="edit_company_contact" value="<?php echo($row['Contact_Info']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputAddress1">Address</label>
        <input type="text" class="form-control" id="exampleInputAddress1"
            name="edit_company_address" value="<?php echo($row['Address']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputPincode1">Pincode</label>
        <input type="text" class="form-control" id="exampleInputPincode1"
            name="edit_company_pincode" value="<?php echo($row['Pincode']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputAbout1">About_Company</label>
        <input type="text" class="form-control" id="exampleInputAbout1"
            name="edit_company_about" value="<?php echo($row['About_Company']);?>">
    </div><br>

    <button type="submit" class="btn btn-primary" name="edit_orderbtn" value="submit">Submit changes</button>
</form>
<?php
}
?>
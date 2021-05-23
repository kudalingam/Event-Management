<?php 
$conn = mysqli_connect("localhost","root","","login") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_employeeid'];
$sql="SELECT * FROM employee where Job_id='$id'";
$result=mysqli_query($conn,$sql); 
foreach($result as $row){
?>
<div>
    <h5 class="display-2">Edit Employee</h5>
</div>
<form action="crud.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo($row['Job_id']);?>" name="edit_employee_id"></input>
    <div class="form-group">
        <label for="exampleInputFName1">First_Name</label>
        <input type="text" class="form-control" id="exampleInputFName1" 
            name="edit_employee_fname" value="<?php echo($row['First_Name']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputLName1">Last_Name</label>
        <input type="text" class="form-control" id="exampleInputLName1" 
            name="edit_employee_lname" value="<?php echo($row['Last_Name']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputEmail1">Email_Address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="edit_employee_email" value="<?php echo($row['Email_Address']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputPhone1">Phone_Number</label>
        <input type="number" class="form-control" id="exampleInputPhone1" 
            name="edit_employee_phone" value="<?php echo($row['Phone_Number']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputDOB1">DOB</label>
        <input type="date" class="form-control" id="exampleInputDOB1" 
            name="edit_employee_dob" value="<?php echo($row['DOB']);?>">
    </div><br>
    <div class="form-group">
    <label for="gender" class="fieldlabels">Gender: <?php echo($row['Gender']);?></label><br>
                    <input type="radio" name="edit_employee_gender" value="Male" required>Male
                    <input type="radio" name="edit_employee_gender" value="Female" required> Female
                    <input type="radio" name="edit_employee_gender" value="Transcender" required>Transcender
                    
    </div><br>
    <div class="form-group">
        <label for="exampleInputQualification1">Qualification</label>
        <input type="text" class="form-control" id="exampleInputQualification1" 
            name="edit_employee_qualification" value="<?php echo($row['Qualification']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputExperience1">Experience</label>
        <input type="text" class="form-control" id="exampleInputExperience1" 
            name="edit_employee_experience" value="<?php echo($row['Experience']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputLanguage1">Language</label>
        <input type="text" class="form-control" id="exampleInputLanguage1" 
            name="edit_employee_language" value="<?php echo($row['Language']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputSalary1">Salary</label>
        <input type="number" class="form-control" id="exampleInputSalary1" 
            name="edit_employee_salary" value="<?php echo($row['Salary']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputAbout1">About</label>
        <input type="text" class="form-control" id="exampleInputAbout1" 
            name="edit_employee_about" value="<?php echo($row['About']);?>">
    </div><br>
    <div class="form-group">
                    <label for="role" class="fieldlabels">Role: <?php echo($row['Role']);?></label>
                    <input list="roles" class="form-control" name="edit_employee_role" placeholder="Select Anyone" required>
                     <datalist id="roles">
                                   <option name="edit_employee_role" value="All">All</option>
                                    <option name="edit_employee_role" value="Technician">Technician</option>
                                    <option name="edit_employee_role" value="Designer">Designer</option>
                                    <option name="edit_employee_role" value="Corpender">Corpender</option>
                                    <option name="edit_employee_role" value="Helper">Helper</option>
                    </div><br>
    <div class="form-group">
        <label for="exampleInputAddress1">Address</label>
        <input type="text" class="form-control" id="exampleInputAddress1" 
            name="edit_employee_address" value="<?php echo($row['Address']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputCity1">City</label>
        <input type="text" class="form-control" id="exampleInputCity1" 
            name="edit_employee_city" value="<?php echo($row['City']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputDistrict1">District</label>
        <input type="text" class="form-control" id="exampleInputDistrict1" 
            name="edit_employee_district" value="<?php echo($row['District']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputState1">State</label>
        <input type="text" class="form-control" id="exampleInputState1" 
            name="edit_employee_state" value="<?php echo($row['State']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputPincode1">Pincode</label>
        <input type="number" class="form-control" id="exampleInputPincode1" 
            name="edit_employee_pincode" value="<?php echo($row['Pincode']);?>">
    </div><br>
    <div class="form-group">
        <label for="exampleInputPhoto1">Photo</label>
        <input type="file" class="form-control" id="exampleInputPhoto1" 
            name="edit_employee_photo">
    </div><br>
    <div class="form-group">
        <label for="exampleInputID_Proof1">ID_Proof</label>
        <input type="file" class="form-control" id="exampleInputID_Proof1" 
            name="edit_employee_id_proof">
    </div><br>
    
    <button type="submit" class="btn btn-primary" name="edit_employeebtn" value="submit">Submit changes</button>
</form>
<?php
}
?>
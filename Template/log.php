<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="pass">Password</label>
    <input type="password" name="pass">
    <button type="submit" name="submit" value="submit">Submit here</button>
</form>
<?php

    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $pass=$_POST["pass"];
        $conn=mysqli_connect("localhost","root","","login");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    $sql = "INSERT INTO new(Email,Pass)
VALUES ('$email','$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    }
    
?>
    
</body>
</html>
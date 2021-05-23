<?php require_once "connect.php"; ?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
body{
	margin: 0;
	padding: 0;
	background-size: cover;;
	font-family: serif;
}

.loginbox{
	width: 320px;
	height: 400px;
	background:gray;
	color:salmon;
	top: 13%;
	left: 70%;
	position: absolute;
	transform: translate(50px, 50px);
	box-sizing: border-box; 
	padding: 70px 30px;
}

.avatar{
	width: 100px;
	height: 100px;
    border-radius: 50%;
	top: -10%;
	position: absolute;
	left: calc(50% - 50px)
}		

h1{
    margin: 0;
    padding: 0;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="email"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid white;
    background: white;
    border-style:groove;
    outline: none;
    height: 40px;
    color: white;
    font-size: 16px;
}

.loginbox input[type="submit"]
{
    border: none;
    background: orange;
    outline: none;
    height: 40px;
    width: 200px;
    color: white;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: grey;
    color: lightgreen;
}
.loginbox input[value="SignIn"]{
    padding: 13px;
    background-color:blue;
    color:white;
    cursor: pointer;
    border-radius: 20px;
    border: rgb(171, 177, 171) 1px solid;
    font-size: 18px;
    
    
}

.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color:purple;
}

.loginbox a:hover
{
	cursor: pointer;
    color: yellowgreen;
}
.tab{ 
            margin-left: 15px; 
        } 
</style>
</head>
<body>

    <img src="istockphoto-1161428190-1024x1024.jpg" width=76% height=630px >
	<div class="loginbox">
    <img src="avatar.png" class="avatar"></img>
    <table>
        <tr><h1><th style="font-size:25px; color:orange"> Login </th></h1><br>
            <th><pre class="tab">Don have an Account?<a href="signup.html"> Sign Up </a></pre></th></tr>
    </table>
	<form action="#" method="POST"> 
      <div style="font-size:20px">Email</div>
      <input type="email" style="color:black" name="email" placeholder="Enter Email Address">
	  <div style="font-size:20px">Password</div>
      <input type="password" style="color:black" name="pass" placeholder="Enter Password"><br>
	  <input type="submit" name="login" value="Login"> <br>
	  </form> 
                  
	<div>
    <a href="phone.html">Forget Your Password?</a><br>
	</div>
    </div>
</body>

      <script src="https://www.gstatic.com/firebasejs/6.1.1/firebase.js"></script>

    
      
      <script>
        // Your web app's Firebase configuration
        const firebaseConfig = {
        apiKey: "AIzaSyBLCvO-sJm-mAJmIAGE4fLzX0seFkAZPnw",
        authDomain: "login-page-5bd13.firebaseapp.com",
        databaseURL: "https://login-page-5bd13.firebaseio.com",
        projectId: "login-page-5bd13",
        storageBucket: "login-page-5bd13.appspot.com",
        messagingSenderId: "1005889324846",
        appId: "1:1005889324846:web:31afc0e2478858cb9a1cbf",
        measurementId: "G-WMXDK9GNE7"
};
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
      </script>
<script>
    function googlesign(){
        // body...
        var provider = new firebase.auth.GoogleAuthProvider();

        firebase.auth().signInWithPopup(provider).then(function(result) {
      //code executes after successful login
      window.location = "Home.html";
        }).catch(function (error) {
            var errorMessage = error.message;
            alert("errorMessage");
        })

    }
	
</script>
     	
</div>


</html>
</div>
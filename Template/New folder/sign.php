<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #333;
	text-transform: uppercase;
	font-size: 2.9rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #38d39f;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #38d39f;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.4rem 0.6rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #38d39f;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right,#FF6390,#FF6394,#FF6396);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .7s;
}
.btn:hover{
	background-position: right;
}
.box{
	border-color:red;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
} 

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}
:root {
  --info-color: #0099CC;
}

.btn-toggle-pass {
  border: none;
  position: absolute;
  top: 11px;
  background: transparent;
  right: 0;
}

.btn-toggle-pass.active {
  color: var(--info-color);
}
#toggle1{
	position: relative;
    transform: translateY(-50%);
	left:90%;
	top:60%;
    width: 25px;
    height: 25px;
    background: url(show.png);
    background-size: cover;
    cursor: pointer;
}
#toggle1.hide{
	background: url(hide.png);
    background-size: cover;

}
#ctoggle{
	position: relative;
    transform: translateY(-50%);
	left:90%;
	top:60%;
    width: 25px;
    height: 25px;
    background: url(show.png);
    background-size: cover;
    cursor: pointer;
}
#ctoggle.hide{
	background: url(hide.png);
    background-size: cover;

}	</style>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/account.svg">
		</div>
		<div class="login-content">
			<form action="connect.php" method="POST">
				<img src="img/avatar.svg">
				<p style="text-align:center; font-size:25px; color:#FF6390;">SIGN UP</hp><br>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input id="Fname" name="Fname" type="text" class="input" autocomplete="off" required="">
           		   </div>
                   </div>
                   <div class="input-div two">
           		   <div class="i">
           		   		<i class="fas fa-mail-bulk"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input id="email" name="email" type="email" class="input" autocomplete="off" required="">
           		   </div>
                   </div>
                   <div class="input-div three">
           		   <div class="i">
           		   		<i class="fas fa-phone-square-alt"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Phone number</h5>
           		   		<input id="phonenumber" name="phonenumber" type="number" class="input" autocomplete="off" required="">
           		   </div>
                   </div>
                   <div class="input-div four">
           		   <div class="i">
           		   		<i class="fas fa-key"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Password</h5>
                              <input id="password" name="password" type="password" class="input" autocomplete="off" required="">
                              <div id="toggle1" onclick="showhide();"></div>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
						   <h5>Confirm Password</h5>
						   <input id="password1" name="repass" type="password" class="input" autocomplete="off" required="">
						   <div id="ctoggle" onclick="cshowhide();"></div>							
            	   </div>
				</div>         		    	
                <button type="submit" class="btn" name="submit" value="submit"><i class="fas fa-sign-in-alt"></i> Submit</button>
                <h5 style=" color:slategray; float:right;">Already have an Account?<a href="log1.php">Sign In</a></h5>
            </form>
        </div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>

<script>
	const password =document.getElementById('password');
	const toggle1 =document.getElementById('toggle1');
	function showhide(){
		if(password.type === 'password'){
			password.setAttribute('type', 'text');
			toggle1.classList.add('hide');			
		}
		else{
			password.setAttribute('type', 'password');
			toggle1.classList.remove('hide');			
			
		}
	}	
</script>
<script>
	const password1 =document.getElementById('password1');
	const ctoggle =document.getElementById('ctoggle');
	function cshowhide(){
		if(password1.type === 'password'){
			password1.setAttribute('type', 'text');
			ctoggle.classList.add('hide');			
		}
		else{
			password1.setAttribute('type', 'password');
			ctoggle.classList.remove('hide');			
			
		}
	}	
</script>
	<script>
		const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

	</script>
</body>
</html>

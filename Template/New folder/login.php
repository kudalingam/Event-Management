<?php 
require_once "connect.php";
 ?>
<?php
//Include GP config file && User class
  include_once 'gpConfig.php';
  include_once 'User.php';
  
  if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
  }
  
  if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
  }
  
  if ($gClient->getAccessToken()) {
    //Get user profile data from google
    $gpUserProfile = $google_oauthV2->userinfo->get();
    
    //Initialize User class
    $user = new User();
    
    //Insert or update user data to the database
      $gpUserData = array(
          'oauth_provider'=> 'google',
          'oauth_uid'     => $gpUserProfile['id'],
          'first_name'    => $gpUserProfile['given_name'],
          'last_name'     => $gpUserProfile['family_name'],
          'email'         => $gpUserProfile['email'],
          //'gender'        => $gpUserProfile['gender'],
          'locale'        => $gpUserProfile['locale'],
          'picture'       => $gpUserProfile['picture'],
          //'link'          => $gpUserProfile['link']
      );
      $userData = $user->checkUser($gpUserData);
    
    //Storing user data into session
    $_SESSION['userData'] = $userData;
    
    //Render facebook profile data
      if(!empty($userData)){
			//$output = 'Already Logined As Google ';
			unset($_SESSION['token']);
			unset($_SESSION['userData']);

			//Reset OAuth access token
			$gClient->revokeToken();

			//Destroy entire session
			session_destroy();
			$output = '<a href=""><!--i style="color:tomato; font-size: 1.5em;"class="fab fa-google-plus-square"></i--><img src="glogin2.png" alt="" border-radius="50%"/></a>';
          //$output = '<h4>' . $userData['first_name'].' '.$userData['last_name'];
          //$output .= '<img src="'.$userData['picture'].'" width="30" height="30" style="border-radius: 15px">';
          //$output .= '<br/>Google ID : ' . $userData['oauth_uid'];
          //$output .= '<br/> Name :' . $userData['first_name'].' '.$userData['last_name'];
          //$output .= '<br/>Email : ' . $userData['email'];
          //$output .= '<br/>Gender : ' . $userData['gender'];
          //$output .= '<br/>Locale : ' . $userData['locale'];
          //$output .= '<br/>Logged in with : Google';
          //$output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
          //$output .= '<br/>Logout from <a href="http://localhost/google_login/logout.php">Google</a>'; 
      }else{
          $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
      }
  } else {
    $authUrl = $gClient->createAuthUrl();
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><!--i style="color:tomato; font-size: 1.5em;"class="fab fa-google-plus-square"></i--><img src="glogin2.png" alt="" border-radius="50%"/></a>';
  }
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
    overflow: hidden;
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
    height: 100vh;
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
	padding: 0.5rem 0.7rem;
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
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
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
#toggle{
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
#toggle.hide{
	background: url(hide.png);
    background-size: cover;

}
footer.footer {
    height: 50px;
    width: 100%;
    background-color: #333333;
}

p.copyright {
    color: #fff;
    line-height: 40px;
    font-size: 0.7em;
}
</style>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="connect.php" method="POST">
				<img src="img/avatar.svg">
				<p style="text-align:center; font-size:35px; color:green;">LOGIN</hp><br>
				<p style="float:right; font-size:14px;"> Don't have an Account ? </p><br><a href="sign.php">Sign Up </a>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input id="email" name="email" type="email" class="input" autocomplete="off" required="">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
						   <h5>Password</h5>
						   <input id="password" name="password" type="password" class="input" autocomplete="off" required="">
						   <div id="toggle" onclick="showhide();"></div>							
            	   </div>
				</div>
				<a href="forgot-password.php">Forgot Password?</a>
           		    	
				<button type="submit" class="btn" name="login" value="login"><i class="fas fa-sign-in-alt"></i> login</button>
				<?php echo $output; ?>
			</form>
		
		</div>
	</div>
	
	<script type="text/javascript" src="js/main.js"></script>

<script>
	const pass =document.getElementById('password');
	const toggle =document.getElementById('toggle');
	function showhide(){
		if(password.type === 'password'){
			password.setAttribute('type', 'text');
			toggle.classList.add('hide');			
		}
		else{
			password.setAttribute('type', 'password');
			toggle.classList.remove('hide');			
			
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
</footer>
</body>
</html>

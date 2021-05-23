<?php require_once "connect.php"; ?>
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
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="350" height="350">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        //$output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        //$output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/><a href="Home.php">Home</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><i style="color:tomato; font-size: 1.5em;"class="fab fa-google-plus-square"></i><img src="images/glogin.png" alt=""/></a>';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
<style type="text/css">
h1{font-family:Georgia, 'Times New Roman', Times, serif;color:blue;}
</style>
</head>
<body>
<div align="center" ><?php echo $output; ?></div>
</body>
</html>
<!DOCTYPE html>
<html>
<title>Modal Popup Box</title>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=email], input[type=password]{
    border: none;
    border-bottom: 1px solid white;
    background: white;
    border-color:blue;
    outline: none;
    height: 40px;
    color:black;
    font-size: 16px;
}
.modal input{
    width: 98%;
    margin-bottom: 20px;
}

.modal input[type="submit"]
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

.modal input[type="submit"]:hover
{
    cursor: pointer;
    background: grey;
    color: lightgreen;
}
.modal a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color:purple;
}

.modal a:hover
{
	cursor: pointer;
    color: yellowgreen;
}
.modal tab{ 
            margin-left: 11px; 
        }


/* Set a style for all buttons */
button {
    border: none;
    background: orange;
    outline: none;
    height: 40px;
    width: 98%;
    color: white;
    font-size: 18px;
    border-radius: 20px;
}
button:hover {
    opacity: 0.8;
    cursor: pointer;
    background: grey;
    color: lightgreen;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 100px;
	height:100px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
	background:white;
    left: 0;
    top: 10%;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: transparent;
	color:skyblue;
	position: absolute;
	transform: translate(50px, 50px);
	box-sizing: border-box; 
}

/* Modal Content Box */
.modal-content {
box-sizing: border-box; 
    background-color: grey;
    margin: 0% auto 20% auto;
    border: 5px solid pink;
    width: 25%;	
	padding:10px 10px;
	padding-bottom:35px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: -1%;
    top: -20%;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
form {margin-top:20px;padding:30px;border:solid 1px #dedede;border-radius:15px;width:60px;margin:25px auto;}
form fieldset {border:none;position:relative;}

input.btn-primary {background-color:#51A2DA;border-color:#51A2DA;}

form fieldset input {
    padding:34px 8px 8px 7px !important;
    height:30px !important;
  border:none !important;
  box-shadow:none !important;
  border-bottom:solid 1px #dedede !important;
  color: black;
}

form fieldset label {
  position: absolute;
  top: 13px;
  left: 13px;
  color: #909090;
    font-weight:300;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  -webkit-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
}

form fieldset input:valid + label, form fieldset input:focus + label {
  color: #51A2DA;
  font-weight: 700;
  font-size: 12px;
  -webkit-transform: translate3d(0, -10px, 0);
          transform: translate3d(0, -10px, 0);
}
</style>
<body background="../background1.png">

<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:360px; margin-top:40px; margin-left:500px;">
Login</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="POST">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center" >Login</h1>
	  <pre class="tab">Don have an Account?<a href="signup.html"> Sign Up</a></pre>
    </div>

    <div class="container">
<form action=""><br>
    <fieldset>
        <input id="email" name="email" type="text" autocomplete="off" required="" class="form-control">
        <label for="email">Email Address</label>
      </fieldset>
      <fieldset>
        <input id="pass" name="pass" type="password" autocomplete="off" required="" class="form-control">
        <label for="pass">Password</label>
      </fieldset>
</form>       
      <button type="submit" name="login" value="login">Login</button>    
      <a href="#" style="text-decoration:none; float:left; margin-right:34px; margin-top:10px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5.5; url=login.php " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap');
    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #000;
    }
    h2{
        position: relative;
        margin: 20px 0 0;
        font-size: 4em;
        font-weight: 900;
        color: #fff;
        z-index: 1;
        overflow: hidden;
    }
    h2:before{
        content: '';
        position: absolute;
        left: 110%;
        width: 120%;
        height: 100%;
        background:linear-gradient(90deg, transparent 0%, #000 5%, #000 100%);
        animation: animate 5.5s linear forwards;
    }
    @keyframes animate{
        0%{
            left: 110%;
        }
        100%{
            left:-20%;
        }
    }
    h2 span{
        color: #ff022c;
    }
    video{
        position: absolute;
        top: 12%;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 2;
        pointer-events: none;
        mix-blend-mode: screen;
    }
</style>
<body>
    <video src="video/particles1.mp4" autoplay muted></video>
    <!--h2><span> Wel &nbsp;</span>come <span>to</span> Our <span>Web</span>site to Login</h2>
    <h2><span> Log</span>In With<span>Our</span> Website</h2-->
        <h2><span>Wel</span>come to <span>Our</span> Website Login</h2>
    
</body>
</html>
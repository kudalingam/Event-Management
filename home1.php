<?php
require_once('index.php');
if(isset($_SESSION['userData'])){
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="6; url=Home_.php " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo ' ' . $userData['first_name'].' ';?><?php echo ' ' . $userData['last_name'].' ';?></title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    section{
        height: 100vh;
        background-color: #000;

    }
    section:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: linear-gradient(to right,#f00,#f00,#0f0,#0ff,#ff0,#0ff);
        mix-blend-mode: color;
        pointer-events: none;
    }
    video{
        object-fit: cover;
    }
    h1{
        margin: 0;
        padding: 0;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width:100%;
        text-align: center;
        color: #fff;
        font-size: 4.5em;
        font-family: sans-serif;
    }
    h1 span{
        opacity: 0;
        display: inline-block;
        animation: animate 1s linear forwards;
        text-transform:uppercase;
    }
    @keyframes animate{
        0%{
            opacity: 0;
            transform: rotateY(90deg);
            filter: blur(10px);

        }
        100%{
            opacity: 1;
            transform: rotateY(0deg);
            filter: blur(0);

        }

    }
    h1 span:nth-child(1)
    {
        animation-delay: 1s;
    }
    h1 span:nth-child(2)
    {
        animation-delay: 1.5s;
    }
    h1 span:nth-child(3)
    {
        animation-delay: 2s;
    }
    h1 span:nth-child(4)
    {
        animation-delay: 2.5s;
    }
    h1 span:nth-child(5)
    {
        animation-delay: 2.75s;
    }
    h1 span:nth-child(6)
    {
        animation-delay: 3s;
    }
    h1 span:nth-child(7)
    {
        animation-delay: 3.25s;
    }
    h1 span:nth-child(8)
    {
        animation-delay: 4s;
    }
</style>
<body>
    <section>
        <video src="video/smoke.mp4" autoplay muted playbackrate=3.0></video>
        <h1>
        <span>W</span>
        <span>E</span>
        <span>L</span>
        <span>C</span>
        <span>O</span>
        <span>M</span>
        <span>E &nbsp;</span>
        <span><?php echo ' ' . $userData['first_name'].' ';?><?php echo ' ' . $userData['last_name'].' ';?></span>
            <!--span>E</span>
            <span>L</span>
            <span>C</span>
            <span>O</span>
            <span>M</span>
            <span>E</span-->
        </h1>
    </section>
</body>
</html>
<?php
}
else{
  require_once('log1.php');
}

?>
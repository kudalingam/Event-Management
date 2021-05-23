<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="6; url=home.php " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
    $(window).on('load',function(){
        $('.preloader')
    })
    </script>
    <!--script>
$(document).ready(function() {
//Preloader
preloaderFadeOutTime = 500;
function hidePreloader() {
var preloader = $('.preloader');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
</script-->
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-color: blanchedalmond;
    }
    .preloader {
        position: fixed;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: 1s;
    }
    .preloader:before{
        content: '';
        position: absolute;
        left: 0;
        width: 50%;
        height: 100%;
        background-color:#000;
        transition: 1s;
    }
    .preloader.complete:before{
        left: -50%;
    }
    .preloader:after{
        content: '';
        position: absolute;
        right: 0;
        width: 50%;
        height: 100%;
        background-color:#000;
        transition: 1s;
    }
    .preloader.complete:after{
        right: -50%;
    }
    .loader {
    position: relative;
    width: 2.5em;
    height: 2.5em;
    transform: rotate(165deg);
    z-index: 10000;
}

.loader:before, .loader:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: 0.5em;
    height: 0.5em;
    border-radius: 0.25em;
    transform: translate(-50%, -50%);
}

.loader:before {
    animation: before 2s infinite;
}

.loader:after {
    animation: after 2s infinite;
}
.preloader.complete{
    opacity: 0;
    visibility: hidden;
}
@keyframes before {
    0% {
        width: 0.5em;
        box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
    }
    35% {
        width: 3.5em;
        box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);
    }
    70% {
        width: 0.5em;
        box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);
    }
    100% {
        box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
    }
}

@keyframes after {
    0% {
        height: 0.5em;
        box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
    }
    35% {
        height: 3.5em;
        box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);
    }
    70% {
        height: 0.5em;
        box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);
    }
    100% {
        box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
    }
}

/**
 * Attempt to center the whole thing!
 */
html,
body {
    height: 100%;
}

.loader {
    position: absolute;
    top: calc(50% - 1.25em);
    left: calc(50% - 1.25em);
}

</style>
<body>
    <div class="preloader">
        <div class="loader"> </div>
    </div>
    <!--script>
         setTimeout(function(){
            window.location.href = 'Home.php';
         }, 10000);
      </script-->
    <!--iframe width="560" height="315" src="https://www.youtube.com/embed/UTiXQcrLlv4?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe-->
    <?php 
    //header('Location: Home.php');
    ?>
    
</body>
</html>
<?php

include("conn.php");




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="css/ui2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $("#header").css({
                        "opacity": "0"
                    })
                } else {
                    $("#header").css({
                        "opacity": "1"
                    })
                }
            })
        })
    </script>
</head>
<style>
    .carousel-inner>.item>img {
        width: 100%;
        height: 208px;
    }
</style>

<body>
    <section id="header">
        <nav data-aos="fade-down" data-aos-duration="800" data-aos-delay='600' class="navbar navbar-expand-lg fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-gamepad"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME PAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="games2.php">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userreview.php">USER REVIEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registerapik.php">USE OUR OPEN API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="d-block w-100" src="img/luciepexel.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h1 data-aos="fade" data-aos-duration="2000">WELCOME TO DOUBLE TAP</h1>
                    <button data-aos="fade" data-aos-duration="2000" data-aos-delay='600' type="button" class="btn btn-outline-light">For the Gamers</button>
                    <div>
                        <p data-aos="fade" data-aos-duration="2000" data-aos-delay='700'>
                            <br> The #1 website for game reviews <i class="fa fa-gamepad"></i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/gamerBackground.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h1>BROWSE FOR REVIEWS ON YOUR FAVOURITE GAMES</h1>
                    <div>
                        <p>
                            <br> And make sure to leave your own reviews :)
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/arcage.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h1>POPULAR GAMES FROM MULTIPLE DIFFERENT GENRES</h1>
                    <div>
                        <p>
                            <br> And from multiple different platforms
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>


    <footer  id="mainfooter">
        <h3  id="getintouch">Get in touch with us
            <p>Subscribe to our monthly news letter to be updated on new game news and reviews</p>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="mail">EMAIL: <input type='text' name='useremail' required /></label>
                <input type="submit" value="SUBSCRIBE"></button>




            </form>
            <p id="copyright">Copyright © 2021 DoubleTap</p>
        </h3>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

?>
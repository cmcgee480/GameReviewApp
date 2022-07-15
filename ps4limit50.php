<?php

include("conn.php");

$sql = "SELECT * FROM `practice_gametable` WHERE `platformID`=1632 LIMIT 50";
$result = $conn->query($sql);





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="css/gamesUI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
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

<body>
    <section data-aos="fade-down" data-aos-duration="800" data-aos-delay='600' id="header">
        <nav class="navbar navbar-expand-lg fixed-top">
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
    <div class="jumbotron text-center" style="height:60vh;">
        <div class="intro ">
            <div class='gameHeader'>
                <h2 data-aos="fade" data-aos-duration="2000">Games <i class="fa fa-gamepad"></i></h2>
                <div data-aos="fade" data-aos-duration="2000" data-aos-delay='400' class='filterbar'>
                    <a href='ps4filter.php?limit=5'>5</a>
                    <a href='ps4filter.php?limit=10'>10</a>
                    <a href='ps4limit20.php'>20</a>
                    <a href='ps4limit50.php'>50</a>
                </div>

            </div>




        </div>

    </div>

    <div class='content'>
        <ul class="grid columns-3">

        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<li data-aos ='fade-up' 
                    data-aos-duration ='800' 
                    data-aos-delay ='200'>
                    <a href='inspect.php?info={$row["gameID"]}'><img src='{$row['URL']}' alt='image' width ='250' height='250'></a>
                            <h2>{$row["gameTitle"]}</h2>
                            <p>Score: {$row["score"]}<br>Date: {$row["date"]}
                            <p>
                            
                            </li>";
                }
            }
            ?>
        </ul>
    </div>
    <footer id="footer">
        <h3 id="getintouch">Get in touch with us
            <p>Subscribe to our monthly news letter to be updated on new game news and reviews</p>
            <form action="contact.php" method="POST">
                <label for="mail">EMAIL: </label>
                <input type="email" id="mail" name="u_mail"><button><input type="submit" value="SUBSCRIBE"></button>




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
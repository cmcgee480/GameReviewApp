<?php

$endp = "http://cmcgee17.lampt.eeecs.qub.ac.uk/gameAPI/index.php?about&api_k=RpUSEnXg4BOI1I9f7hDV";

$user = "cmcgee480";

$pw = "Mus1c5020";

$opts = array(

    'http' => array(
        'method' => "GET",
        'header' => "Authorization: Basic " . base64_encode("$user:$pw")
    )
);

$context = stream_context_create($opts);

$res = file_get_contents($endp, false, $context);

$gamedata = json_decode($res, true);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="css/aboutUI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
    <div class="jumbotron text-center">
        <div class="intro">
            <h2 data-aos="fade" data-aos-duration="2000">About Us <i class="fa fa-gamepad"></i></h2>
        </div>
    </div>
    <section id="main2">
        <?php
        foreach ($gamedata as $value) {
            echo "
            <section>
            <div class='section-heading'>
            <h2 data-aos='fade-up' data-aos-duration='1000'><u>{$value["header"]}</u></h2>
            </div>
            <p data-aos='fade' 
            data-aos-duration='800' 
            data-aos-delay='400'>
            {$value["description"]}</p>
            <img data-aos='fade' 
            data-aos-duration='800' 
            data-aos-delay='400' src='img/videogame3.jpg' alt='Random Picture'>
            
           </section>
           <section>
           <div class='section-heading'>
           <h2 data-aos='fade-up' data-aos-duration='1000'><u>We Love Games</u></h2>
           </div>
           <p data-aos='fade' 
           data-aos-duration='800' 
           data-aos-delay='400'>We have an extensive library of video games from PC, PS4, Xbox and many more. Spend time checking out all of the different games from different platforms and click into their image to inspect the game. You can also search for a specific game if you get overwhelmed. We think you'll find our collection wide-ranging and detailed. Unsure about which game to buy next? Take a look at the score each game has been assigned by developers who have already played the game early and if that isn't enough to convince you, check out the Metacritic Rating that each game comes with. Don't let a bad rating on a game scare you off though!</p>
           <img data-aos='fade' 
           data-aos-duration='800' 
           data-aos-delay='400' src='img/videogame2.jpg' alt='Random Picture'>
           
          </section>
          <section>
          <div class='section-heading'>
          <h2 data-aos='fade-up' data-aos-duration='1000'><u>We want to hear from you</u></h2>
          </div>
          <p data-aos='fade' 
          data-aos-duration='800' 
          data-aos-delay='400'>After you're done browsing our game library, feel free to leave us your own patented review of your favourite games. You can review as many games as you'd like and add the games you love to our public favourites page which is based on visitor's reviews. Along with this you can also sign up for our newsletter and get even more of the latest news on upcoming video games and new reviews. We also have a contact page if you want to get in touch with us about anything. Just leave your email and send us a message and one of our team members will get straight back to you to help with any problems or queries you might have. Enjoy and happy gaming!</p>
          <img data-aos='fade' 
           data-aos-duration='800' 
           data-aos-delay='400'src='img/videogame3 2.jpg' alt='Random Picture'>
         
         </section>
                
            ";
        }
        ?>
    </section>
    <footer  id="mainfooter">
        <h3 id="getintouch">Get in touch with us
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
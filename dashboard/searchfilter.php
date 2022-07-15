<?php

if(isset($_POST['submitform']))
{
 

 $user = "cmcgee480";

 $pw = "Mus1c5020";

 $opts = array(

     'http' => array(
         'method' => "GET",
         'header' => "Authorization: Basic " . base64_encode("$user:$pw")
     )
 );

 $filter = $_POST['searchinfo'];
 $endp = "http://cmcgee17.lampt.eeecs.qub.ac.uk/gameAPI/?search=$filter&api_k=sdahsdjh3747384dhhs";

 $context = stream_context_create($opts);

 $res = file_get_contents($endp, false, $context);

$gamedata = json_decode($res, true);


 

}

   


   









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="../css/gamesUI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

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
                        <a class="nav-link" href="updategame.php">BACK TO SEARCH</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="jumbotron text-center" style="height:50vh;">
        <div class="intro ">
            <div class='gameHeader'>
            <h2 data-aos="fade" data-aos-duration="2000" data-aos-delay='400'>Games <i class="fa fa-gamepad"></i></h2>
            </div>


           

        </div>

    </div>
    <div data-aos="fade" data-aos-duration="2000" data-aos-delay='400' class='content'>
                <ul class="grid columns-3">

                    <?php
                    foreach ($gamedata as $value) {
                        echo "<li>
                        <img src='{$value['URL']}' alt='image' width ='250' height='250'>
                        <h2>{$value["gameTitle"]}</h2>
                        <p>Score: {$value["score"]}<br>Date: {$value["date"]}<br>
                        <a href='edit.php?info={$value["gameID"]}' class='btn btn-primary'>EDIT</a>
                        <a href='delete.php?info={$value["gameID"]}' class='btn btn-primary'>DELETE</a>

                        <p>
                        
                        </li>";
                    }
                    ?>
                </ul>
            </div>
    <footer id="footer">
        <h3 id="getintouch">
            <p id="copyright">Copyright © 2021 DoubleTap</p>
        </h3>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
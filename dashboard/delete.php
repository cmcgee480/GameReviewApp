<?php
include("conn.php");

if (isset($_GET['info'])) {

    $gameID = $_GET['info'];



    $end = "http://cmcgee17.lampt.eeecs.qub.ac.uk/gameAPI/?delete&api_k=HZ5kC1FWcajAuNNBvRPy";

    $postd = http_build_query(
        array(
            'var1' => $gameID
        )
    );

    $opts = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $postd
        )
    );


    $context = stream_context_create($opts);
    $result = file_get_contents($end, false, $context);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="../css/reviewUI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <section id="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-gamepad"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link">Admin</a>
                </ul>
            </div>
        </nav>
    </section>
    <div class="jumbotron text-center" style="height:100vh;">
        <div class="intro">
            <h2>Go back to Admin Homepage
                <i class="fa fa-gamepad"></i>
            </h2>
        </div>
        <div class='content'>
            <div class='reviewbox'>
                <a href='index.php' class='btn btn-primary'>BACK</a>






            </div>




        </div>
    </div>
    <script>
        swal("Game deleted!");
    </script>

    <footer id="mainfooter">
        <h3 id="getintouch">

            <p id="copyright">Copyright © 2021 DoubleTap</p>
        </h3>
    </footer>

</body>


</html>
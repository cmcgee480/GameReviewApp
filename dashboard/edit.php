<?php


if (isset($_GET['info'])) {

    $gameID = $_GET['info'];
    $endp = "http://cmcgee17.lampt.eeecs.qub.ac.uk/gameAPI/index.php?gameID=$gameID&api_k=RpUSEnXg4BOI1I9f7hDV";

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
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="../css/editUI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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


    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        .row::after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <section data-aos='fade-down' data-aos-duration='2000' id="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-gamepad"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="updategame.php">BACK TO SEARCH</a>
                    </li>
            </div>
        </nav>
    </section>
    <div  class="jumbotron text-center">

        <?php echo "<p data-aos='fade-down' data-aos-duration='2000' id='gameID'>Game ID: $gameID <p>" ?>
    </div>
    <div data-aos="fade" data-aos-duration="2000" class="container">
        <?php
        foreach ($gamedata as $value) {
            echo "      <form action='editupload.php' method='POST' enctype='multipart/form-data'>
                        <input type='text' id='title' name='usertitle' required placeholder='Title: {$value["gameTitle"]}'>
                        <input type='number' id='score' name='userscore' required placeholder='Score: {$value["score"]}' >
                         <label for='exampleFormControlTextarea1' class='form-label' ></label>
                        <textarea class='form-control' id='exampleFormControlTextarea1' name='userreview' rows='3'>{$value['review']}</textarea>
                        <p id='enter'>Please re-enter GameID: <input type='text' id='userid' name='userid' required /></p>
                       <a href='editupload.php'<button><input type='submit'class='btn btn-primary' value='SUBMIT'></button></a>

                        </form>";
        }
        ?>
    </div>



    <footer id="mainfooter">
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
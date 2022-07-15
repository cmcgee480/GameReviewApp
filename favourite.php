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



    foreach ($gamedata as $value) {

        include("conn.php");
        $gameID = $conn->real_escape_string($value['gameID']);
        $gameTitle = $conn->real_escape_string($value['gameTitle']);
        $score = $conn->real_escape_string($value['score']);

        $sqlcheck = "SELECT * FROM practice_favouritestable WHERE gameID = '$gameID'";
        $resultcheck = mysqli_query($conn, $sqlcheck);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="css/reviewUI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <div class="jumbotron text-center" style="height:50vh;">
        <div class="intro">
            <h2 data-aos="fade" data-aos-duration="2000">Thank you!
                <i class="fa fa-gamepad"></i>
            </h2>
        </div>
    </div>
    <script>
        swal("Add to favourites successful!");
    </script>
    <div class='content'>
        <div data-aos="fade" data-aos-duration="2000" class='reviewbox'>

            <?php
            foreach ($gamedata as $value) {

                if (mysqli_num_rows($resultcheck) == 1) {
                    $rowcheck = mysqli_fetch_assoc($resultcheck);
                    header("Location: http://cmcgee17.lampt.eeecs.qub.ac.uk/doubletap/errorfave.php?info=$gameID");
                } else {

                    $sql = "INSERT INTO practice_favouritestable (favouriteID,gameID,gameTitle,score)
                    VALUES(null,'$gameID','$gameTitle','$score')";

                    $result = $conn->query($sql);


                    if (!$result) {
                        echo $conn->error;
                    }

                    echo "<h2>$gameTitle added to Favourites</h2>";
                }
            }
            ?>
            <a href='viewfavourites.php' class='btn btn-primary'>VIEW FAVOURITES</a>
            <a href='games2.php' class='btn btn-primary'>BACK TO GAMES</a>

        </div>


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



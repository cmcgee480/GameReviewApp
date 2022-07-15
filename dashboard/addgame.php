<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="../css/editaddUI.css">
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
            </div>
        </nav>
    </section>
    <div class="jumbotron text-center">

        <h2 data-aos="fade" data-aos-duration="2000" data-aos-delay='400' id='addgame'>Add Game </h2>
    </div>
    <div data-aos='fade-up' data-aos-duration='800' data-aos-delay='200' class="container">

        <form data-aos="fade-up" data-aos-duration="1000" data-aos-delay='600' action="addupload.php" method="POST">
            <div class="form-group">

                <input type="text" class="form-control" name="usertitle" id="name" aria-describedby="emailHelp" placeholder="Enter gametitle..">

            </div>
            <div class="form-group">

                <input type="number" class="form-control" name="usercritic" id="number" placeholder="CriticID..">

            </div>
            <div class="form-group">

                <input type="number" class="form-control" name="userplatform" id="platform" placeholder="PlatformID..">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="userdate" id="date" placeholder="Date..">
            </div>
            <div class="form-group">

                <input type="number" class="form-control" name="userscore" id="Score" placeholder="Score..">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="userurl" id="url" placeholder="Image URL.">
            </div>
            <div class="form-group">

                <textarea class="form-control" name="userreview" id="message" placeholder="User Review.."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
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
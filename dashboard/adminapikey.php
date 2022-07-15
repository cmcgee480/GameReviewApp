<?php
session_start();

function generateRandomString($length = 20)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}




include('conn.php');

$username = $conn->real_escape_string($_POST["u_name"]);
$email = $conn->real_escape_string($_POST["u_mail"]);
$apikey = generateRandomString();


if (isset($_SESSION['gameadmin'])) {

    $username = $_SESSION['gameadmin'];

    include("conn.php");
    
    $sql = "INSERT INTO practice_adminapikeys (id,uname,email,api_key)
                 VALUES(NULL,'{$username}','{$email}','{$apikey}')";

    $result = $conn->query($sql);

    if (!$result) {
        echo $conn->error;
    }
}else{
    header("Location: http://cmcgee17.lampt.eeecs.qub.ac.uk/doubletap/errorfave.php?info=$gameID");
}

    
    








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleTap</title>
    <link rel="stylesheet" href="../css/contactUI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
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
    <section data-aos="fade-down" data-aos-duration="800" data-aos-delay='400' id="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-gamepad"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">BACK TO ADMIN HOMEPAGE</a>
                    </li>

                </ul>
            </div>
        </nav>
    </section>



    <div class="jumbotron text-center" style="height:50vh;">
        <div class="intro">
            <h5 data-aos="fade" data-aos-duration="800" data-aos-delay='500'>Registration Successful<i class="fa fa-gamepad"></i>


            </h5>


        </div>
    </div>
    <div class="container">
        <h2> <p data-aos='fade-up' data-aos-duration='1000'><?php echo"Thanks Admin!</p>
     <p data-aos='fade-up' data-aos-duration='2000'data-aos-delay='400'>Here is your unique API key that you need in order to use our API CRUD endpoints. Keep it safe: $apikey"?> <br> This key has also been sent to your email.</p></h2>

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
<?php

if (isset($_GET['info'])) {


$endp = "http://cmcgee17.lampt.eeecs.qub.ac.uk/gameAPI/index.php?favourites&api_k=RpUSEnXg4BOI1I9f7hDV";

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
    $gameID = $_GET['info'];

    $sql = "DELETE FROM practice_favouritestable WHERE gameID = '$gameID'";
    $result = $conn->query($sql);

if (!$result) {
   echo $conn->error;
}else{
    header("Location: http://cmcgee17.lampt.eeecs.qub.ac.uk/doubletap/deleteupload.php");
}
    
}

}

?>

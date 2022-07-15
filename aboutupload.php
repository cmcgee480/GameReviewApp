
<?php
   
     include('conn.php');
 
     $userheader = $conn->real_escape_string($_POST["userheader"]);
     $descript = $conn->real_escape_string($_POST["userdescript"]);
     $url = $conn->real_escape_string($_POST["userurl"]);

     $sql = "UPDATE practice_abouttable SET header = '$userheader', description ='$descript',imgURL = '$url' WHERE practice_abouttable.aboutID = 1";

     $result = $conn->query($sql);

     if(!$result){
        echo $conn->error;
     }else{
      echo"Success";
     }


     


     

     
 
 
?>
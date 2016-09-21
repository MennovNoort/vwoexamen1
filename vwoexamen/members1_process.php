<?php 
    include 'members_process.php';
    
    $add = "INSERT INTO members (name, username, password) VALUES ('$myfullname','$myusername','$mypassword')";

    $doeadd = $connect->query($add);
?>
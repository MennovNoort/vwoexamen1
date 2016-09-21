<?php 
    include 'members_process.php';
    
    $add = "INSERT INTO members (name, username, password) VALUES ('$myfullname','$myusername','$mypassword')";
    
    $doeadd = $connect->query($add);
if ($add){
    echo "The following information is succesfully added to the table 'members':". "<br>";
    echo "Full name: " . $myfullname. "<br>";
    echo "Username: " . $myusername. "<br>";
    echo "Password: " . $mypassword. "<br>";
}
?>
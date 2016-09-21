
<?php
    $connect = new mysqli("localhost", "root", "","sunshine") 
        or die ("Kan niet met de database verbinden, of kan niet gevonden worden.");

    $myfullname = $_POST['name'];
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    

?>
